<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wdpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E&KDB(9dUw#asSXbh1VE~r+-uDdQ<+n>br> *U{@}`@t9ma24>lX0B#OX#J]1;/{' );
define( 'SECURE_AUTH_KEY',  'FFIqRUhu?f@pmU)B-#pi|?1Z`q2[tf}ZV?c{D@5KZ8xq1u0[J=X?a7TerB|W_Fz8' );
define( 'LOGGED_IN_KEY',    '{275Q7W}]8jx^:_X7{8-7Ik3.|DXx WSHS{uMPXTUvlU7TdjJSjf=>Y87-7d,^{~' );
define( 'NONCE_KEY',        'e%+c1xa$z]p5x(/PM=41_Yp,[.:vMBU&q}~Mo?IR77<*M_T4H^/F.dX/$/u3*ed:' );
define( 'AUTH_SALT',        '@9cIkj8+TV;.F^hQE@( /BwJXyvC94/VsVA)iFR0:RGa?tY]=;b#wY.z!R?.<[z3' );
define( 'SECURE_AUTH_SALT', 'JnluEgl#%b(WlK=[>P9Xjl<DN-sp6[msvGQ1Kb|}M^CPmRY{NAX!P67Ux9*Vhx>_' );
define( 'LOGGED_IN_SALT',   'n!f)R%c;sKyXII9k3+V/Ex1_2Bxh*/PHaSS4+vwmhnL~`*M~2sA,Vvvcj^tG#YN3' );
define( 'NONCE_SALT',       'atQ9<.1t(t9tMi(<sUg@`#na`lur]?AChS[knvU+~b-_LUghU<Y=|c87uqrE 66&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
