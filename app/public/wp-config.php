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
define( 'AUTH_KEY',          'R+jj{M_[M~NpJ{JX;la+3 FeRQ40fs0v}<0h^]mv]sF+8anCpo-A>09ajT+cu@I.' );
define( 'SECURE_AUTH_KEY',   'm.]f)$SJ?{ZP`(qjPFTjHw+<<4+}Rh3KMdkDL!;<<3&g8P07;E2b:30/snHJ|c]{' );
define( 'LOGGED_IN_KEY',     ':/#`t1v&m{QLUoI|BQ+OV/(6)B7<22rY;Kxk%RCD.?^d, U:XCQjfQ20k]pJmndH' );
define( 'NONCE_KEY',         '{=xg(KHTwzKy 6GzRHm^mi7k~iHa>)wk[klFAgqh/e_oa1Go[u>o0[+Rbe#)B7k>' );
define( 'AUTH_SALT',         'JSY3X_i5{(eY9vPWd7O:vNQRY^jn:DBaO{/c3Zn$hZVK-pwN8(idg&-E5gT:i!3M' );
define( 'SECURE_AUTH_SALT',  '?QSSnD38LrFOj4E<uQM/NC#6fL02~sw+c{5%?6></j(^^{Qy,j:N!{@x.2z{./UL' );
define( 'LOGGED_IN_SALT',    '2~?L<?Vh; i8s&HH}52[I3TYgJy6sS0FI@~w~d:{MPxBn<BI-><KR{GxUo7.6gLW' );
define( 'NONCE_SALT',        'qL4BRI8%rHl2bjC^~zuZ0I]H)*9=c3da0V:hXW{be6+$(eSkELGy%Hlq_1p`grO;' );
define( 'WP_CACHE_KEY_SALT', 'mFl`%7m3%~a0-uWW>cDJCoZF_]wZ5I{`@6koe_12iRs<4x2E9q+:J^hzU}#K<<>:' );


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
