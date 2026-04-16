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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soyanshop' );

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
define( 'AUTH_KEY',         '@@uQU?B3?Yh3reMNM@j=L2S+luR{|c,EjQ|($L>nx:]6H_Yc*RVc4CIvOkQIX!1T' );
define( 'SECURE_AUTH_KEY',  'tD5l$^jhWQ6w.im!KCVapBN`:$rZw)/=jQ?2]Go]P2^!S{qfP~ZEY[_=Pd-O-0,q' );
define( 'LOGGED_IN_KEY',    'HqW.v2|lZ#D_eq}hhscKd%&Hrpc$e9YQ$]r!V<thE*K5+6)niy[f[Nv%Ov?.0l*X' );
define( 'NONCE_KEY',        'RkGz2GUQF+:E3IN_#cG@U3P^(|SZXBHqWZnVW&jRgPvCiz7$`GcTB>.vw6vgb_5N' );
define( 'AUTH_SALT',        'SQd-3Gk4[9+]_S)|rNPhfo.`&`psqa@iK-fiX5R_u-OO$cE4`#O+y#7uwQss9B{J' );
define( 'SECURE_AUTH_SALT', '8J<5DR{d%<Bm_}9Xo}E|2Wv]X|^{pKjKgpj8G8dfSJaja]a6tO!>4UV[f?ihm>O7' );
define( 'LOGGED_IN_SALT',   ':m<gTlvz%UeD<Sd=x)M I):kXr6hmYWEIcF7%HhR!@)}sj{)Upj2u$zP>4J]b!Xy' );
define( 'NONCE_SALT',       'SxC?$d,oo-}C@6l&|6=8s=)jM.wtT S~<s#{~*7.4aF*6x^29C.QlHK8IaJ3!fv.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
