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
define( 'AUTH_KEY',          ';!a3~=#QKX7dpiZxB[wcj)X&t:&%cuN@hX/&gXK?Of^:FGi+p;P;{-}6n7L /2;{' );
define( 'SECURE_AUTH_KEY',   'SYB5{c}u1D&NH[z48ej(lj U|dvGKE@sv@-vYJ0?_A&f+N,giKq:%bh;Xc.K8$qc' );
define( 'LOGGED_IN_KEY',     '/?3]N^|e-XWhXv<~G`Jy^k3K66rh2choi/z!KxUQI}o6EjYWy{;Wc%LjS})6,YOH' );
define( 'NONCE_KEY',         '*C*%9:=QX+x3i:ztedT|Xkp:9e4ezSzq5E|A3.vt9PFI>t0!3{9U#N}eg9VKqdTb' );
define( 'AUTH_SALT',         '!L!_Z.;j.=jg*!B$:Oa3sQI5VSt{f:S_`_&BCw%;g<{%}ExcX6(HXUnVEDR5z6#v' );
define( 'SECURE_AUTH_SALT',  '/K&bag+-=U;#G=HskV8hsx|L}m5BctA$Y!_7Uwb+D(dteo`>;kb4bU8P(]^/=)?6' );
define( 'LOGGED_IN_SALT',    'JR19l&zCB&?5M)*B2pxo2 mJzy9dO5mMju~W:~R@R%Aa9Z-UM~~e-oxg~jj7aAP!' );
define( 'NONCE_SALT',        '@D9e#0()UsrTB<!n38=^b<f1LhLscqR q*-g+4urPExt<P.]jr7Ku~[BY&g%x[bu' );
define( 'WP_CACHE_KEY_SALT', '3IA!l~8#eH|(!jHU7H(6W/e}Eax/SHm9ZpPnP+_tOw z|}w.KWGCqM|Z>N<6~gH}' );


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
