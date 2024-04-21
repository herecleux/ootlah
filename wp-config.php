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
define( 'AUTH_KEY',          '+FQm3DR#eO~v[)TH&y-$<gHd<Gs]q2T+|xQ5W0afwR;foACv RNl:(3ET%d/*H6N' );
define( 'SECURE_AUTH_KEY',   'RbsftH_>WgGF_aN *-LAHShlce$,N@%4/D_ik#{ppoOVYSQHw+(,Zhp~]eW-JX~S' );
define( 'LOGGED_IN_KEY',     'A(#?4~ZKK><%|^FBdcRwv](J-dEBnq]Iz@k_%mmO^+k#w]x^lI/v<Y_tivE +X,7' );
define( 'NONCE_KEY',         'pETP=f~*%|s0_7A:)ezXy`K?DY_ZYjHd xiMFzNv?U!OarV.1@LGEcJm`/74bHVc' );
define( 'AUTH_SALT',         'k#v.B3Re7V&}eO /Xx+(7iD@]_N^Yyt&,G/f/nbfnH>uKqWHq89nZD_OtZ9T~?{E' );
define( 'SECURE_AUTH_SALT',  ':ET~|E[rak#dAX--?,53>-5HCKhC{lG|hVidsu|B#Q+,t-eX4z}<a8WN#Mdgl@D%' );
define( 'LOGGED_IN_SALT',    '7G1{r|6))~M$0#zCM9|xHu[PF@qx1u49.-,fTj )ZI:1o0+XJZ%!8u;+qd-{{sVv' );
define( 'NONCE_SALT',        'T~r!c(P&!d3]4df:[r2kx<N9)g|pvjZF_f,Jr2DT{aquQ?hZ(F(bKgeBcY.4fv&_' );
define( 'WP_CACHE_KEY_SALT', '#9E`/kQnu#i!=L`#fBDw3(6|qpu70)8HeqDA%=V6)Tqc]^+,D/Sr!gIJ!Ur)tnl6' );


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
