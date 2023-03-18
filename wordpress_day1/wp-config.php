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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';J0S=u:ao&dwF?Zk]^ZQ-Fbn5P+QhNaaYboZ!GJor81[^z+H?kHL9@}`/Y=aNYON' );
define( 'SECURE_AUTH_KEY',  '?h-6~CytU~8Gzrt<!W?=`kp8s%We&Z0<wZq9[:!3/&[SWZz*f1&3n(xm1`DES@ d' );
define( 'LOGGED_IN_KEY',    'OQD,m!xP5DUE:*NIb2=ip%a gzv%n W.]UNN4k#O3w!C_KE jsP<DA`3]~f,.M&T' );
define( 'NONCE_KEY',        'e$(0*4}?M1} CnXc,kk7F*OA!:sz,*JD!@`K<W*A%eI+t @L^h(e9o71g7bAn?zV' );
define( 'AUTH_SALT',        '?*q6Q 84AM%-KzHI~#|F3[x`ql FNE`1:DKR3uWWr*qu(!5<=o<55f=ms{gPkoHE' );
define( 'SECURE_AUTH_SALT', 'ae2{`Ko=&NnpzxZo8uD@xsd(GF>m%{A.jZ^kRJ4lA V|PzE6DE/W=$~|f^7OTCC;' );
define( 'LOGGED_IN_SALT',   'aa$.#Jq/lrcX k*2qvGAeC;d+SfnSfsNqO:P%L<h!BGC{bhy!TTa4O,fkS?;No.H' );
define( 'NONCE_SALT',       '[;)kbWEu|BFjVZ)Z-7l+qy/:tPRJ.i@8l;v}2OyP&X$>;P3&fOAY$n~y&FB}it=j' );

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
