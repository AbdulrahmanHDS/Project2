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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '_y_)zuNZ@0)uofb1=p(Mu)tn_ELA;EqH,r4-KH.kFZYtsQKZH&,JV2+Yj5!9ef#8' );
define( 'SECURE_AUTH_KEY',  'TY.s,b55B:^o/pRCC5BJ(L]#r{f)niNi3H5^r|~99xqIV ty|oC.FuW+A^gX?ve(' );
define( 'LOGGED_IN_KEY',    'gPxaO4bvvA9!tEi|o 5aoNZ nR5J2o (_K4hJ}cbq^V H0OcAlaq#0#Q`pWx8e6v' );
define( 'NONCE_KEY',        'R[3eI:gw}KbNU;h:&3ZW~=3:y_TlFOw0=~3)7xvfeLz4i`YuDesYXrt L(&-I?|=' );
define( 'AUTH_SALT',        '5^rb<Lmxd{^Jjr#6>bzq0Zdu]Lsy*/a|i2}EFC8>F:},6*/30%|OYf3]_gkzc:`,' );
define( 'SECURE_AUTH_SALT', '$;!resui_sC>/PIZf4(10TKysS?rOHoVNg8xmB*`i^8Sb(yDSxy[jaI{!g<f{.&1' );
define( 'LOGGED_IN_SALT',   '7:J.c~DTfG%/OnpI`dy9L1Y<A,XCN6SjL;~y|#&U9CO<7)mr0zAzWn8aP[b(3@yv' );
define( 'NONCE_SALT',       ';AfGAk+$?;c*59K.waf7Zr(6~c 1Md<MNh?s>t[$89MG3-}5$7Co*-zN=pq)^N]i' );

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
