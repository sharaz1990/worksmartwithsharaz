<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worksmartwithsharaz_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'EWfLHdYA~-*K#KLR8o|voqVIo:sFZn%)moZB?GAV)lYn7Q]`lLRawAz>:>dZO.vv' );
define( 'SECURE_AUTH_KEY',  '7)Py}|j33piop]h+~q2r1zp^l=( :2Zo2,mlmBW)68rh[?__WN n[P>X3y}IAt*`' );
define( 'LOGGED_IN_KEY',    '$GNfBbHX{-[4&y0@=4bHN7)Bp/=GfpVnCi!#fHpUqIkiQ.Jf`R-n64F+$*ckY[A!' );
define( 'NONCE_KEY',        'GMH4;%U7D@eO|OKK6Vn8c41} $Ou3/e;p c#edI7-&Elu_!F_fm+ESf|9a#ydwga' );
define( 'AUTH_SALT',        'y}u+sXY=3GT$f]M~ljcs2b2=P&lUUOj7m<T#rhDL:LnC6$ Rm 2$|g8$N%58+` |' );
define( 'SECURE_AUTH_SALT', 'x69GM)Lo&]!/n?pvAtv,(Pj )=^O1rp5V?7Oh!9JX8Z-ENa]?vR]Kxf;[]z>Nz]p' );
define( 'LOGGED_IN_SALT',   'VQ@Y@8w55G}K)zIM$y-RDO@1])C>7U`iG+.r[k5(r$S=+SqBUY$xkY-4x2)t- f_' );
define( 'NONCE_SALT',       '{E}7gb#~XSVoBJt lQ[U-~q5WUOl`)KuZT Jzq|T=WCECUR!O|ba0x}j1tmfMYXW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
