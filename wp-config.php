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
define( 'AUTH_KEY',         '|]}iY$~QglVv2_n/.5:6Rd@XW9Sda#l40zN@=baEdp4]fx(aX=x{)W-*5rMTFffj' );
define( 'SECURE_AUTH_KEY',  'P]ksF.V8%k?(JWbf&WHO}hmML$WlZ>Y9IkF|J.M,&Cqa0%fN>okmhIMd,l=mf_hP' );
define( 'LOGGED_IN_KEY',    'j^S}]}#^@evhAiw! E0/E=c&@0IqT>|T8u}{OH`r2+ (U@H@@x{y1zeBd?Y_+[IS' );
define( 'NONCE_KEY',        'Z2zLJf_KP0_YL/U)aJ![*OP!ED|cC.hz7sQxk/kJ*k@4j{aRb,,FR=_1D>g*~Jxo' );
define( 'AUTH_SALT',        'vHic.xs->vD=C7RRpc~V4fKbS8c7m@n~7YSA.D|fYO39^oP3iG0#xT^6O3wFK8b6' );
define( 'SECURE_AUTH_SALT', '3L{;pDGC,7>%2F[Od[{wlo+NX?^P:viL_>_#z,^X.hOVU&mx[/8p-HAnIG&[x93]' );
define( 'LOGGED_IN_SALT',   'B3abD|g)`db[q?El,89cTnzz%d(n>2I!`:a%nfICHEjA9^k19G%)apG9Ds l4t(Z' );
define( 'NONCE_SALT',       ';$ Ew|e7{6mQdhHGl&9|dKJ&&dTdx]Z2x=%*SVAv5DNl2IOMGjdhBR{_ +=C@Gp{' );

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
