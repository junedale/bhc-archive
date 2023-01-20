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
define( 'DB_NAME', 'digital_archive' );

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
define( 'AUTH_KEY',         'R?;I k!v%aU/X=fOm4JjL!l(v.o^3as(PoLzI^2e;u:kc=a4qmla,Oy4h[H2-4t%' );
define( 'SECURE_AUTH_KEY',  ',V>)vu|<GBo9[ADdN-0,W?:&_kS(<W38w[s[4-VjdqT]K?DLABllr42i!:JeL:gg' );
define( 'LOGGED_IN_KEY',    '.AgfY7W63CDeTy`4RrrYO[~-,h3W6<Pu4B._LUA@jX!)v=gw}hwPS* Kp;hOY#Q`' );
define( 'NONCE_KEY',        '<JlrF.Ld}Gh&D7:jnFN!U+;L>7<~fBttMTRQ-f{-)eLqz*0$6:]7B-*3 %Tq3sMM' );
define( 'AUTH_SALT',        'NTdYJhC_-e5YEWiU#x%Drii50YS| oS=8s(?oZB:iu~%>E0vx;j[ajdpQTCuKMq6' );
define( 'SECURE_AUTH_SALT', 'NRz(OG:j;Us$F|S[!?ghxt-1z0T,l)b)vM#9d!V3^.cPJ&+=3 <&_{k)J=o|+u n' );
define( 'LOGGED_IN_SALT',   'bhvwIMTu<F5wjbY+)dBflP:J*0vA1$3UZt#:JMBCw;|HX2^qq(]i ?v#qebP*RQ_' );
define( 'NONCE_SALT',       'E{v>:Db@y-)empGQpGTaGG_gYQ)v6Hx*8%p: _cW1 |ZFSjWSE%wZk(n7xGQlRQ#' );

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
