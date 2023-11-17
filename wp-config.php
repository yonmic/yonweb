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
define( 'DB_NAME', 'yonweb' );

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
define( 'AUTH_KEY',         's|I=<N:>E3po+QtCV^poY&.?2fog+i~uGGt:4>PJE-`f_g~2}c{![3YA&GYJ<YJ7' );
define( 'SECURE_AUTH_KEY',  'prm?h{&Mxtrz2!Q%bL`!QR|k^y&|-)Nb_l*r$tDAxz]8Wte+3f@hG5^{ADE>7V:k' );
define( 'LOGGED_IN_KEY',    'R3@a8,I$dKsM=nNnVM}&$;hXQadl)yNosbuPW#_3Sv.lFLR{l)ol]$d3e8s?46,g' );
define( 'NONCE_KEY',        'Bg`&?;!j3w,Nr%4l<|FtP<^.! )`~+x*ZeRSb2RsvwwX:|[yAL4=HJNkz:GH5q2w' );
define( 'AUTH_SALT',        'sCSEB{cnq26Ph :X<OrW3vK1HoI5us,5@@7,0I.Rssg]%T4C9(C$A2v.RGOZUY5@' );
define( 'SECURE_AUTH_SALT', '(=rC?FwlKXA3jTi#WdpOgzVuYfNNeJ@*5a;u%`_/rlP;@i_/_{]%pF$8d]H& })~' );
define( 'LOGGED_IN_SALT',   '? XC*34*O$fZXl=^Nxip@5p?G#vV(v6!u(iVw5O_Y.+VuK8,H?X$/4?vA/`7>62T' );
define( 'NONCE_SALT',       'D*Zf{b#@h2}ne9@*qjA|27[mSxa*vL s_2SMgsv}a5+&tmp@Hxau~m41_iRXY.NB' );

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
