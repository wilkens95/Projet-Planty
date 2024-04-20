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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'bS.D:8Vu=5meQ:,Q>nCvhOAF9JbO1GvT41R1A3srI-0:J^`8im9)^HxFH217EYEL' );
define( 'SECURE_AUTH_KEY',  ' 4$2{>@uqJIr^h+_Z7,50`~cd!WF+%CNwze=(1C=ZijhwTedgq@7kq`|_t?R)qhj' );
define( 'LOGGED_IN_KEY',    '/RJ),ulA86gRFJ8>FgukS$:ZT;`h@3sa%<qykVbLMu+!#7BS/T~ZD(,`I~x0-;](' );
define( 'NONCE_KEY',        '/)c}l,xn[Suctr*@]nhz_N-p6Ld.&Uj$+L|S{(!_w:KN_y,*-f5oHWA5P(l;BWL+' );
define( 'AUTH_SALT',        '%e}-M2uN]cB{9YN[g}u=P%8GHuy}QN^%!)P,T`~7?ocOGr@A=Pgf,rEpPA.v$zfL' );
define( 'SECURE_AUTH_SALT', '^$,Su!d`*[6tHN641x/?id?[!ql=SF:,QcjV@S]x0`Y+9)<1p^7~ZE&b0>mJ@(~P' );
define( 'LOGGED_IN_SALT',   'Q JYn%!45_$JegxYGP<RL9Oc3,!Vpo6g6$@G{qA+5h_xBxG59-^M]@7LpLjP:N40' );
define( 'NONCE_SALT',       '<;[/]ZW;m<^f2eg#^?^N}5H1VpMkpL4HPC7}B/6*?qx;|D0lt<Xg=o%+)8bYEA&i' );

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
