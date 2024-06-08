<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!skpUvh4PpI&_g:R4muyO*gAeTzW#EY*=!4gD5~r$P<.oK3A=0x}+fxElC?9CN!`' );
define( 'SECURE_AUTH_KEY',   'YhCR{o2vikF4Wy]`HeuxDL5^7yQ+2A:&3ymcZufn1!ziI#(O|K>M1#6b{PeBs#iR' );
define( 'LOGGED_IN_KEY',     '|5pO jee-DPAnLvW(*Atw{db&=n>!6?`V-Wq8[@`^NfMplA)W$`)n]4}Sq!~X^(c' );
define( 'NONCE_KEY',         '>147 W!)@qc+SS3uU@+7lW^DSPJ$DHI5BUfgAM>ph55L[xXq&y>}SH#2=ils6K|v' );
define( 'AUTH_SALT',         'WTKCX/WiLP-G 2(/f670ektg0UBy,v0a0z.vr-s,=!u$v)-chbO<>jhA9Ey<6$o>' );
define( 'SECURE_AUTH_SALT',  '37|!7ZloH -Un]PP^&Ymi=Vd,>z[3W`s:aC.7)zUi~7Un~R`Ta=33C<i?3M[Tl!1' );
define( 'LOGGED_IN_SALT',    'wUHKt[iCzrx}u)4v^ci6ur1G8&@YC%I!vY;qd%M*i%.{$AH^TccwG,>hwih%`,Gs' );
define( 'NONCE_SALT',        'v121@?Vzj@hsb>US1I~HC,*NEzZYgjlu]RHXbJD7Bi(ZrHS=ZHJQpjj_L4M-[$a(' );
define( 'WP_CACHE_KEY_SALT', 'q$+}f0t~xE~ZQvHf,%HWG^_4BF`Nmr>BHK@BhIA@5vaIX=Jm#8<K6Rxb^BP-:wv]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
