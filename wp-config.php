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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'escae_bd' );

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
define( 'AUTH_KEY',         '~0IDLQibPLz/y,_sDf]4a)3Mgnz9*7r2#(fA5N8V<rk;T|?zW,R2>3 uAKd(h==`' );
define( 'SECURE_AUTH_KEY',  ')Vn{;&SSh.U6$?>&/QiwAd#+g(^$lI/`0=,%iZ3FY94U~PgdoitJ=7Zv;.{7bL>*' );
define( 'LOGGED_IN_KEY',    've_zG;n9*zFo~wQM&B6.5ox.nM9i}(}H,G4./X4>p1Jq10eVpNov/o{q2yak)mL=' );
define( 'NONCE_KEY',        'N74&Xt6eY6nQ7m0(V|5zJ&V+.~]]HPx4u,d,8XpUtF ;+t7!<Gxdon+bQU,+E~Ht' );
define( 'AUTH_SALT',        '0Uj[x&5Bb/S:gA,j8a-YHJJ#:@~Xx?U:oi99&1k=<Y8Qk3<|EZvZrt4+zHrI#:g>' );
define( 'SECURE_AUTH_SALT', 'jwZL2`pS`qWs9UwqX{gC3uNP7OXym:%^GPtWbBO3S`-+KS}KK;~TYJ>Y6+* 1`a#' );
define( 'LOGGED_IN_SALT',   '+g?bIbNyW6Q1A0Izc)wY6b3G@iN_wfaCRNe8Pq9|Mubh%wzA_hw.C(i8zZ.O;Dn]' );
define( 'NONCE_SALT',       'c&Bbh_S(vD![M@WX/HEjdU[6h.q$_e:_)`h>jo@a5fKXx>K])LN kA`7<GJv6q5]' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
