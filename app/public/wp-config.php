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
define( 'AUTH_KEY',          'mQ2a~j+K:)>wL>)*-_d$K{iOgfMYat[+:zZ_;Vc~<XIB/e!Y]%8:95]K:a0-J%/q' );
define( 'SECURE_AUTH_KEY',   '[9~GO63q>xW)*IE$.KVK2hivL<AXPwu}0sI.fm8U&f4heZRo8 abkJ!gk-vU$4_2' );
define( 'LOGGED_IN_KEY',     's$`Oxis./7PYj0L>:uaHWJJRhoCCfgWyZza-H9>H|FFJjb!slv7MKXB?tTbY7d?5' );
define( 'NONCE_KEY',         '&!EU:RMspUaw,vx]Cj9P2=QBG1.dag{VL3q$4g#m*I+rjV,,YOpb<>*^g!C^]d^b' );
define( 'AUTH_SALT',         '?BT}-Bg0$A6.GV.C7@`Wt_g&KdIT8UVUT[P^yI/-CVjju;t@UH,pS/@iS<&#6{B7' );
define( 'SECURE_AUTH_SALT',  'QpXqj2ZB!{XVW0@]M4g.qPtL+&9Bdk7CAe~wYNrT6Ml-*rGQ;3m2|1}tSB31{pwx' );
define( 'LOGGED_IN_SALT',    '|~vEyNDy*6edHQ;J1]vy_Jss&4$@Or$fM748%u#Ydt{Qbh=s=jtW IP,DWl4SeGA' );
define( 'NONCE_SALT',        '#`P}0aGNHoxbKpqsnQz$B`CeZK5Bn:<m.T`CN;m.u,fo[A&#}LCIC<]=0TZvg=<1' );
define( 'WP_CACHE_KEY_SALT', 'STl5e<dS/H5t,/u{3Ys`@TcY=J|:LkDp*8Ue&q]BDeDG1tb(Fh1,R2(&tVd^Z[PO' );


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
