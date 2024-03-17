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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'djponce_db' );

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
define( 'AUTH_KEY',         ':H6nnAxUx[F[[3>uaxoEtefMZ=3O]|L855:km&M5N9>%K{wNqv.[p,U13nD;ZK?x' );
define( 'SECURE_AUTH_KEY',  'zaQm;ZD~)m1 l$4@c_i4nf<^pYk:J65c/uEvQ6ux_49b;+s&]Ze`aXV<*%n(cC! ' );
define( 'LOGGED_IN_KEY',    'b?NZ0c{-)Nn0n :<NhILRqD?pPSybM{%utGX5wd8ezAu#L&6$tIwT?Zf(O3LYE;/' );
define( 'NONCE_KEY',        '?%A0qWmTny-)R4LnCf+DfA0^@E/|$ 9%zm$D?*RqJWSr4qRVe`4EDMn!I~V>NX2S' );
define( 'AUTH_SALT',        '5>kfsX#R(WlvY#~[6JT3;d8`sNb}[Du[`>loGIzFJFy8yug6.nrs]R;*4uwA1%|i' );
define( 'SECURE_AUTH_SALT', 'StQcId+/!#u{)~iW&88whJ^mO:V&^9BC$i8TThOaV2=fO{)Iy+aFxr+z/qY{Y J2' );
define( 'LOGGED_IN_SALT',   'LWRO#oRf06w5R>,6V0`Obv$}lg;d,G5oWBdhzE%ueB{Ms]r[X{5yPn^HobLbuptW' );
define( 'NONCE_SALT',       '_/kC=$p^,sysG5WIKn##{0;ij[?$lT#uvxJ^fv3*3A6=DY!D!0ieTqe^@yC!Jo2H' );

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
