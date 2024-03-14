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
define( 'AUTH_KEY',         'ZusZyN;(C/>k^j~:*5Z0:J[,I$5h9]J#5ed3btnra4Tp;Q(DL/V-McHogm@@ .@P' );
define( 'SECURE_AUTH_KEY',  ']lcCsG#89PY?:0CgjzO4F7nM`|a4+cm7h9J)rU D&a&N.Bhgg|[9_h3h]ta?b8u`' );
define( 'LOGGED_IN_KEY',    'b4jb6<{BeeF5||8F`l;k$m`T4n|17L%zm|M?^ms~QF==#CyG+~>Ai[^8(8mF3:A@' );
define( 'NONCE_KEY',        '}/GKDFOwX_)htSp*@vN]*oBO)o1t2&D?nUNqt(w6iRg=5Q5#w7,O];5X$xMCd.l{' );
define( 'AUTH_SALT',        '1#NRS}se&B sz53L)b+aS)krl5V#>jRj5VD NM+B^^^.TEJsMC_mU)Mpgq$$Q):<' );
define( 'SECURE_AUTH_SALT', 'sG)x#eaoKa;BKQ^-9tvkR&E)XN_yd8tEKz}lC3]$uJ1iZ;zeK?lMg#zizLFOhWYP' );
define( 'LOGGED_IN_SALT',   'Qaryi+O#bE$Gv3%+U31y{jHuEYGwLTE8vGV+R+&Z0N1y!BiOs_o$W!<*|P5^m?QU' );
define( 'NONCE_SALT',       'l>3x&Y_xF]M_3hel@AH-Dhy7M`EzB83f[l49os )FW~{S5Fc< l_V7dM.?=jZC[,' );

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
