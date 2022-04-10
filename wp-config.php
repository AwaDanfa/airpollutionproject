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
define( 'DB_NAME', 'air_pollution' );

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
define( 'AUTH_KEY',         'aE~Nf;j&$nX^4`[72UW<qgZMjM3}Nf(}mjsoP*Q@MT^Gd2F#U:3]rW.M.7)CCh4n' );
define( 'SECURE_AUTH_KEY',  'q;<*Q>&sG/}O!$||U-5;AAO{_^9-^u6~3?sf$xQbrR1{niMv#s=)+)z`9+I$b~7a' );
define( 'LOGGED_IN_KEY',    '9;9vL#..}Xc,+!!y_=VSC9t%_oV@A<mOfgatUbEK>7},:Qp^#su#&Y1I|!6]TY@d' );
define( 'NONCE_KEY',        '<G{PTxd12cHe$6fQ$N2O4`lALT,`aA;S#Z>P.xnFnN}xJ&4L^s@^+h[SL;G~ia83' );
define( 'AUTH_SALT',        'w^84V/pT^`sG3@SkxP#.`jvR/]=s/ofNFl2z,1Zh`Ghp?BNhxXI+U$x9.;-`Sd(=' );
define( 'SECURE_AUTH_SALT', 'Z{K)Od*U(W7fV BrQrY5>^hPvT336zOr`UZI+Efjrp,X:On_z5Uu7~7].BAcBgl[' );
define( 'LOGGED_IN_SALT',   '-SZM{B*L^_l*b,3pY#{PZ0^l:!W?<Uw14R@_qa8vtUkq`_B|Xnw:9qiJz}c<.l)I' );
define( 'NONCE_SALT',       'F|a2Xgh|.X_Ac^}%tl_w8YRn%6SHsiau9%~Y=f#asb-q5hOay 9lvfYWgH]f2TRM' );

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
