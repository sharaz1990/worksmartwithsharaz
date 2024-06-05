<?php
/**
 * Email Summaries.
 *
 * @package sureforms.
 * @since 0.0.2
 */

namespace SRFM\Inc\Global_Settings;

use WP_REST_Response;
use WP_REST_Request;
use WP_Query;
use SRFM\Inc\Traits\Get_Instance;
use SRFM\Inc\Helper;

/**
 * Email Summary Class.
 *
 * @since 0.0.2
 */
class Email_Summary {
	use Get_Instance;

	/**
	 * Constructor
	 *
	 * @since  0.0.1
	 */
	public function __construct() {
		add_action( 'srfm_weekly_scheduled_events', [ $this, 'send_entries_to_admin' ] );
		add_action( 'rest_api_init', [ $this, 'register_custom_endpoint' ] );
	}

	/**
	 * API endpoint to send test email.
	 *
	 * @return void
	 * @since 0.0.2
	 */
	public function register_custom_endpoint() {
		$sureforms_helper = new Helper();
		register_rest_route(
			'sureforms/v1',
			'/send-test-email-summary',
			[
				'methods'             => 'POST',
				'callback'            => [ $this, 'send_test_email' ],
				'permission_callback' => [ $sureforms_helper, 'get_items_permissions_check' ],
			]
		);
	}

	/**
	 * Send test email.
	 *
	 * @param WP_REST_Request $request Request object.
	 * @return WP_REST_Response
	 * @since 0.0.2
	 */
	public function send_test_email( $request ) {
		$data = $request->get_body();
		$data = json_decode( $data, true );

		$email_send_to = '';

		if ( is_array( $data ) && isset( $data['srfm_email_sent_to'] ) && is_string( $data['srfm_email_sent_to'] ) ) {
			$email_send_to = $data['srfm_email_sent_to'];
		}

		$get_email_summary_options = [
			'srfm_email_sent_to' => $email_send_to,
		];

		self::send_entries_to_admin( $get_email_summary_options );

		return new WP_REST_Response(
			[
				'data' => __( 'Test Email Sent Successfully.', 'sureforms' ),
			]
		);
	}

	/**
	 * Function to get the total number of entries for the last week.
	 *
	 * @since 0.0.2
	 * @return string HTML table with entries count.
	 */
	public static function get_total_entries_for_week() {
		$args = [
			'post_type'      => SRFM_FORMS_POST_TYPE,
			'posts_per_page' => -1,
		];

		$query = new WP_Query( $args );

		$admin_user_name = get_user_by( 'id', 1 ) ? get_user_by( 'id', 1 )->display_name : 'Admin';

		$table_html  = '<b>' . __( 'Hello', 'sureforms' ) . ' ' . $admin_user_name . ',</b><br><br>';
		$table_html .= '<span>' . __( 'Let\'s see how your forms performed in the last week', 'sureforms' ) . '</span><br><br>';
		$table_html .= '<table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">';
		$table_html .= '<thead>';
		$table_html .= '<tr style="background-color: #333; color: #fff; text-align: left;">';
		$table_html .= '<th style="padding: 10px;">' . __( 'Form Name', 'sureforms' ) . '</th>';
		$table_html .= '<th style="padding: 10px;">' . __( 'Entries', 'sureforms' ) . '</th>';
		$table_html .= '</tr>';
		$table_html .= '</thead>';
		$table_html .= '<tbody>';

		if ( $query->have_posts() ) {
			$row_index = 0;
			while ( $query->have_posts() ) {
				$query->the_post();
				global $post;

				$post_id_formatted = strval( $post->ID );

				$previous_week_start = gmdate( 'Y-m-d', strtotime( '-1 week last monday' ) );
				$previous_week_end   = gmdate( 'Y-m-d', strtotime( '-1 week next sunday' ) );

				$taxonomy      = 'sureforms_tax';
				$entries_args  = [
					'post_type'  => SRFM_ENTRIES_POST_TYPE,
					'tax_query'  => [ // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query. --We require tax_query for this function to work.
						[
							'taxonomy' => $taxonomy,
							'field'    => 'slug',
							'terms'    => $post_id_formatted,
						],
					],
					'date_query' => [
						[
							'after'     => $previous_week_start,
							'before'    => $previous_week_end,
							'inclusive' => true,
						],
					],
				];
				$entries_query = new WP_Query( $entries_args );
				$entry_count   = $entries_query->post_count;

				$bg_color = 0 === $row_index % 2 ? '#ffffff' : '#f2f2f2;';

				$table_html .= '<tr style="background-color: ' . $bg_color . ';">';
				$table_html .= '<td style="padding: 10px;">' . esc_html( get_the_title() ) . '</td>';
				$table_html .= '<td style="padding: 10px;">' . esc_html( Helper::get_string_value( $entry_count ) ) . '</td>';
				$table_html .= '</tr>';

				$row_index++;
			}
		} else {
			$table_html .= '<tr>';
			$table_html .= '<td colspan="2" style="padding: 10px;">' . __( 'No forms found.', 'sureforms' ) . '</td>';
			$table_html .= '</tr>';
		}

		$table_html .= '</tbody>';
		$table_html .= '</table>';

		wp_reset_postdata();

		return $table_html;
	}

	/**
	 * Function to send the entries to admin mail.
	 *
	 * @param array<mixed>|bool $email_summary_options Email Summary Options.
	 * @since 0.0.2
	 * @return void
	 */
	public static function send_entries_to_admin( $email_summary_options ) {
		$entries_count_table = self::get_total_entries_for_week();

		$recipients_string = '';

		if ( is_array( $email_summary_options ) && isset( $email_summary_options['srfm_email_sent_to'] ) && is_string( $email_summary_options['srfm_email_sent_to'] ) ) {
			$recipients_string = $email_summary_options['srfm_email_sent_to'];
		}

		$recipients = $recipients_string ? explode( ',', $recipients_string ) : [];

		$site_title = get_bloginfo( 'name' );

		$subject = __( 'SureForms Email Summary - ', 'sureforms' ) . $site_title;
		$message = $entries_count_table;
		$headers = [
			'Content-Type: text/html; charset=UTF-8',
			'From: ' . get_option( 'admin_email' ),
		];

		wp_mail( $recipients, $subject, $message, $headers );
	}

	/**
	 * Schedule the event action to run weekly.
	 *
	 * @return void
	 * @since 0.0.2
	 */
	public static function schedule_weekly_entries_email() {
		$email_summary_options = get_option( 'srfm_email_summary_settings_options' );

		$time = apply_filters( 'srfm_weekly_email_summary_time', '09:00:00' );

		if ( wp_next_scheduled( 'srfm_weekly_scheduled_events' ) ) {
			wp_clear_scheduled_hook( 'srfm_weekly_scheduled_events' );
		}

		$day = __( 'Monday', 'sureforms' );

		if ( is_array( $email_summary_options ) && isset( $email_summary_options['srfm_schedule_report'] ) && is_string( $email_summary_options['srfm_schedule_report'] ) ) {
			$day = Helper::get_string_value( $email_summary_options['srfm_schedule_report'] );
		}

		$current_time               = time();
		$current_time_user_timezone = Helper::get_integer_value( strtotime( gmdate( 'Y-m-d H:i:s', $current_time ) ) );

		if ( ! preg_match( '/^([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/', $time ) ) {
			$time = '09:00:00';
		}

		$next_day_user_timezone = Helper::get_integer_value( strtotime( "next $day $time", $current_time_user_timezone ) );

		$scheduled_time = Helper::get_integer_value( strtotime( gmdate( 'Y-m-d H:i:s', $next_day_user_timezone ) ) );

		if ( false === as_has_scheduled_action( 'srfm_weekly_scheduled_events' ) ) {
			as_schedule_recurring_action(
				$scheduled_time,
				WEEK_IN_SECONDS,
				'srfm_weekly_scheduled_events',
				[
					'email_summary_options' => $email_summary_options,
				],
				'sureforms',
				true
			);
		}
	}

}
