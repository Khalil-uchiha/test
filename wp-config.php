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
define( 'DB_NAME', 'db_web' );

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
define( 'AUTH_KEY',         'e1V3z 9oB:`Tu5SU$uPYE/2Q(bFZ{}|+35$/>|[%t@q8{6o`im/MgO,>(]|K/-t=' );
define( 'SECURE_AUTH_KEY',  's4}6qSs4,PR5I|*aNc.?|E,SF_rjX,2cGC05I5Ou.W^@@OJla9R5^k3KgY@,|#q6' );
define( 'LOGGED_IN_KEY',    'Oh|[auH 1L.;5qtBv6+GsKKNIvff]2Y,gv*=cypyh3n?{WppZ59Xc?H#qiB*W~w1' );
define( 'NONCE_KEY',        'NK9G~&azFJSL+Ze>$C7~m1p,:Y[t6h`DOR@OcPJ@0E8mAO6C+ype 48mZsza^q>X' );
define( 'AUTH_SALT',        'v.Kz]BO?DfGz~zZy~DI;x#>#N]ct,0X_G!>`[G.Ach@C]~@QC|]Ji?lP8#aH/ av' );
define( 'SECURE_AUTH_SALT', 'r^kkBtBb&C0_k4h*|Tt4dBmZzZcj`DoX!m9c0]e[Bk5ewH&c)O(6$`|E2qx?-ZJT' );
define( 'LOGGED_IN_SALT',   'Ry)Xo`d$e~(o NpN1Z[el)wHR5#@N/KANbUbNz*tz)Bn(sb!r5=K~;>fCdo^D&g>' );
define( 'NONCE_SALT',       '=r`&88a:n5TfE.+3S awQ/xm;1p]njkM|? Q1 Xq?js?I!,ZoM1~RMh$8tc;= {`' );

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
