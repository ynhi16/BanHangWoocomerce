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
define( 'DB_NAME', 'bandt' );

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
define( 'AUTH_KEY',         'mg,Gr9lvh`4X1`<H8%rxnO`2,aifqXdBu34Xn7[hI)HwVafDriKECf7! PA)HT6E' );
define( 'SECURE_AUTH_KEY',  'x}hS_Vmh)8A;{JAH$!w=5ZkDx-H<>I.QYs/~S/~<|7c%:]&N|1l<@XyOpeFn2zOk' );
define( 'LOGGED_IN_KEY',    'ovvN{^@-AbH)y}sBfz;Zygiw/oOjgBP{ycR=,</R5Q6h)?5#i_{ag)O>SzMz7*^Z' );
define( 'NONCE_KEY',        '&s2MZp]A|jZ}h{<;^6vC!DdoyIt7+Xs<ZdrwX~](M+i!>3>{c(@Xv 6`u&v[;C}2' );
define( 'AUTH_SALT',        'LPvahrtJ$=k!.QeK]IoI{81yszc0G{qIn8h|{rP7e|qHr7M6FswEmwP;^/;ZVO~j' );
define( 'SECURE_AUTH_SALT', 'YI2Ol#!.uVS8U5GT_) m%ORG~R6(3<nVucJ?IIW^sbDxRpm)`$tDXnEF#&UViye2' );
define( 'LOGGED_IN_SALT',   'A}QvG]b#})8RYFy[2&#x^d!e.VX7rk,.K&P6AuAJ{qBB4[au]ikel^AW=-? Rf:b' );
define( 'NONCE_SALT',       '2F*%stO^cZZq?u|^hDX9;EKElN[FB#.6guk:Cn}(2H&~}$NbEsnd~h!QP`5ItFG$' );

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
