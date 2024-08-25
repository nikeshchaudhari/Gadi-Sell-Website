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
define( 'DB_NAME', 'gadi' );

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
define( 'AUTH_KEY',         '0<g13;C!!OB@>NnWz[[)xQ8v1z8(eJ!9jlj;b+[T]l}2Z*+DE}[<]pg2G/-eN$iK' );
define( 'SECURE_AUTH_KEY',  'u;%+or%j3>qkTkIUVNd:~,@veYZY/7$lz5!#iy%L;j,=fMZAb=%A>bxA,g`t}]o:' );
define( 'LOGGED_IN_KEY',    'LXRi1Aa3/}*o>m<17,{%=+b{[;i>|~OiLIP)VepKvw*_r,cN?vm}5U%t$Fj)Pr==' );
define( 'NONCE_KEY',        'RH2IRr&)NLQ}w]$BYf8ExV[>-wGg-I6;A88` UO[FSMtb)1^u.v |v/xJi}wobU?' );
define( 'AUTH_SALT',        '_cjP^o;o@0_w5wcI5[T0+~)pD(U>hs%:$aJ1[e.$W}B#?@IA}H >dv/`||0=6Qw:' );
define( 'SECURE_AUTH_SALT', '&?5&}.af~$+%3Y415bezBvfEHR[{o/[_Y(Ww}-?TY7]`!,+40W0=h$XwSaZ:+*GW' );
define( 'LOGGED_IN_SALT',   'uRbV{Aa*e8.o2=KW.;sA8^&iO:W;M&_*V(MoR{+W2uIFF`;X>+t@nA|_$_DkeFUt' );
define( 'NONCE_SALT',       ' ^x`k:>}6ma2D[^MkmKq/lD`[hi[pj94Do_`-H)}-9vK8Kj]e:}KzDA]1[N[C]PI' );

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
