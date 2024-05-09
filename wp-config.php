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
define( 'DB_NAME', 'prime_db' );

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
define( 'AUTH_KEY',         '/u<Kxq6<CGQ<k2b)/o`~LJNGZK-g-wT5-Z<[}R F8cB{F/xd<?pSB-}2W~Ry}?Om' );
define( 'SECURE_AUTH_KEY',  'vJd *ft({.(v;QdZ4G(}1:_GN2;-+$mVflOm9n-gjF4x4c(#-Edq/REasFbz.bIw' );
define( 'LOGGED_IN_KEY',    'f5RH4E,|OnD~w9)B|{G=4q*i%F--jaGBwYmVaI*{S w`mkIec0c;KmGAXGnge,KX' );
define( 'NONCE_KEY',        'MB];QsO=^Z N(>x]BL^3]tcRm3euN%r 7oDB)-rNN|;/~/e5Q?PoNQa/e@a7%os4' );
define( 'AUTH_SALT',        'rs8!9,S+gG_UEq,,F(_>V6;M!Vw94(s?o!iL9HxVX<rA,J^n=KqGi!kSJ``?c%q>' );
define( 'SECURE_AUTH_SALT', '5WJEf8N9]PweK.3y-FLqk&(z<;H#>/-Zp,~OJGW&R!`L=1=%0zp(ig+WeiN(}?{q' );
define( 'LOGGED_IN_SALT',   '*gu79Oy#]k(KB+E(q8Udci ?h<f<2+!K2_m/4^$qbS/f8?-`@tQEQLr{!Ng_TGyq' );
define( 'NONCE_SALT',       'T19a+;7gs&NOc5qJn9FR8GwH`g[oE8in:5r41bCGAY!r8|_NiV7zh;Yn[D^005@B' );

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
