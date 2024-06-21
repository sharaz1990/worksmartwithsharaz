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
define( 'AUTH_KEY',          ']F1#^QRZM:Q2>.B fEa>s`qF{i,Ar yz+)VQJuLc}0~YYki|<r=n4`GZqq}C8md/' );
define( 'SECURE_AUTH_KEY',   '^`^-eb=S8=#: OoO}g(>I]?BL]p@1!X P[/vzx8.9 %:GD5*6.4daOzi$C4}<aMQ' );
define( 'LOGGED_IN_KEY',     '?Zl_fI?hR_q:$J]3Wz49s:zolyZ=rHm m#nj8,XJ*CVB[UAl0Z^wMrfi- c3S6Os' );
define( 'NONCE_KEY',         'wQ}.;4~90El =MP3fnfGd *~4K(6[T#N:-32:@[+|-p?I[Bryu9*dfJj-kM-X3Rf' );
define( 'AUTH_SALT',         'NSrpsN3T$V<7t.fpu{0gaa@ d`YSdP&?&L&zRCn2hs`nW,nTFYb``EK8WnK2E[9)' );
define( 'SECURE_AUTH_SALT',  ']=;Ldc)EEUUF(g*]Pv|o&X1JBtMCoeJz8+|7s^4[,7$`Gylk|? ;].:R_([-l[YA' );
define( 'LOGGED_IN_SALT',    'I2W^K%_p y`->d8[8teg7k77&$A}itmagBIbgjgEqw:p]{;/wcW6M5dWi4I23hxv' );
define( 'NONCE_SALT',        '^]B]#Bs1mwd]6_}lYAO]3 xPfGBKTGA(SgwRq_a^_E?iotnTJvfkUPG_8ETknQ[]' );
define( 'WP_CACHE_KEY_SALT', 'h{ULBt1;4A&qO{l6Eq%}!$r)S1VDg5=_uyf@Ph;P`]0VkNAr,QKT8Hz%Z@ZZ!H^>' );


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
