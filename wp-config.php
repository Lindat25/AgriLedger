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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yOEX?jCcotXT35FK2=sqQy#ev~^WLhhXXTw4mHHi#)dv6jt_z&C=&U>ULCZ*uYj[' );
define( 'SECURE_AUTH_KEY',  'Z6=BQ+$[QVSzCX},-sZN5q8*W]&hc/0`nKc:yA TS9c,9Rx-D<)_d@Psy}w}f)D#' );
define( 'LOGGED_IN_KEY',    '?c~7<B:^4c#N,Hx;y-?0L/9(zpta~daJ3$g}zuO {#HL[M_<o ylM&4u`CzQ3Tq9' );
define( 'NONCE_KEY',        '!h<.1MajVJ@g(}8>7s~m[7>%8mG!N#76.97_GyacD08T/V1i,_0pU5mawBmvT}S[' );
define( 'AUTH_SALT',        'oG)6%U (wg7|hHH6OF2HNncU)V%Uri(!@F`k5LSOjbgjGy$zbCycz8[Ksj*qONA|' );
define( 'SECURE_AUTH_SALT', '`1.^v7WgB_&(E:g+2AbVR^pO&V7;9&a pN1Eb=()C.%D1V`fhWnE9TaPxGOxtYL)' );
define( 'LOGGED_IN_SALT',   'F>-IN|R?H](n0^$=EPxM(pr=<PEzf7qe|9!=_^ s0KH|eU.uu5Nt[X[1VssohjH*' );
define( 'NONCE_SALT',       '+e>p|[e76kl]jtqU=Q8.WfTs~5VaXRs; :8J.!Ie#5Kw=zCV9=P#)D-zrTu>fG&#' );

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
