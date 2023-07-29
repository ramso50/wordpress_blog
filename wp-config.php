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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressinstance.cprtcwimzq0v.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '~MR7zBa5b~(=->|I_$],AJM%@{Z#o 6ZXVyJVE<Em-T;uo}_uEqhDT0Z}lJ|RJI-');
define('SECURE_AUTH_KEY',  '+!a:a[[=f3,E`c0b-U~>_Hwc_WU7Fl4/p*5B=:6F[USwK?7M=v.n)nD3;GTC8kp-');
define('LOGGED_IN_KEY',    'rz~+yk~7R--!}-tSEN-#k7qo>N}1I}&k_xs-.9<R>|ayGOKFp{.#F_j|RWde^]j1');
define('NONCE_KEY',        'Hrksc2vZV?w,#kA5&%tF/%RhKQL ;jlTb)-I:^t&twa1Whx:x~Oq6iM<]ac?XgEq');
define('AUTH_SALT',        '},wX%3(/qq1hvGM44[#ha|=&+i?QMUGHzt6LzimyY _1w33$$K@gcO-DfzPtgKN+');
define('SECURE_AUTH_SALT', '-qkchWvI-^S} Pg]R>(j*x-a_N WZh+;qw9=(i{+MO[XuPh+iE:[.6R!3|S)7A2,');
define('LOGGED_IN_SALT',   'cO-Y7Q/,/jlwbt(tv4$oGYtZGG%b?tZ[#{/t%q%69--`I{}/q!}=|^j^ezZ_XSn#');
define('NONCE_SALT',       '-2xy`NL[ 4vWLRr5kL%`gY/G*ZM(njvIQAFI{a@.X8:dT0-1DB:|j9fdan5PAI-{');

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
