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
define( 'AUTH_KEY',          'gm4pAn.Tc!s*5Ry3mzG+z/J^G];}d<flh6i8}s7QbK~BNxefBN4q.wI`.?y78ZGd' );
define( 'SECURE_AUTH_KEY',   '88tW{PCrum&dHL!sc=rSnPy4[DoK8t2O|X]aejnXqL_FFG<Cb4btB8TXgG~Uxlhn' );
define( 'LOGGED_IN_KEY',     '9dk[Qp+s0x>jBfhfr?$WeM/5&Rx,1z&vLZI,Vp*c^UG+%qA22PguOWP8 LnDm&c4' );
define( 'NONCE_KEY',         'WZMXF[lZ{{[Xm1giW(-~dS%*_;/h|mfnu#9d0^BC2aB/dGpy-cG0T`X18+d$,iBp' );
define( 'AUTH_SALT',         '##BtO]y@XRC+r*;Ik2B#Amc;1q4Uu)dd-x>zj6Rmai}f$YIEybUWD)Y=xX(G_f!P' );
define( 'SECURE_AUTH_SALT',  'OW,P(EyJdNTdEN*>WVXk.jLerm|L,H+tmz*=ww|h:mAm@|`V><[MES#Uxr#)+I%F' );
define( 'LOGGED_IN_SALT',    '#s84eUZ R6cOQzzc(}hg<sd%e)~;I1C4NWp*]B3t}?u@nO7y}9X0~2hKuL{@MAHF' );
define( 'NONCE_SALT',        'qaIG1VB4*baN 3uHZ*X<@dGM)?9olXY%G%4 ]2#vx Tb^K|uPqoYIWA]XQSAGc(r' );
define( 'WP_CACHE_KEY_SALT', '*BSc4@Q[;U0=^Zw 61t31ilfU_GxVJwG,)sD=u6x|Oe.O4adN.^ZxlUSv_Xesg*5' );


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
