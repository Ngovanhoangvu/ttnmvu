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
define( 'DB_NAME', '123456' );

/** Database username */
define( 'DB_USER', '123456' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '{d6@L|jIjGMH{~#W8RaQK*W F0<z5Fum9/iF>S<Cxs|gm5<}c/x. :j&mr60|Sq?' );
define( 'SECURE_AUTH_KEY',  'Q`gz(/K3AqIL }!kcV{bGJ!()zw/3HIEXnX]v,|lz{76r!~nIxcAJf#h9hN<&Gx[' );
define( 'LOGGED_IN_KEY',    'OS*?+bB;8Rcy7_ZSz9zdE5GJ0xaGg<B9EJe#LH_]q8e.c(YUTb%z0*1MdKOtPbZ}' );
define( 'NONCE_KEY',        'iQJ{=hzA; _5koQ#+?4u;9Up1KvMlPaF(PE4.9B{RDBv?Qzvk>}u-2x}V^9ZXIYX' );
define( 'AUTH_SALT',        'Q1eCqtxJQxORu<9_CyKnJK}5-oFLd70irta!ixWo%ld^c+XDeJ&p/C=ttf;M:JIp' );
define( 'SECURE_AUTH_SALT', '4n?4m+o$sQlI;VhTc6LV:0Ikg++W,*Giz0bN5@^@QsQR1ls,;G/) k=sbZKpFP *' );
define( 'LOGGED_IN_SALT',   'Oc FbH0.1Yy4f!hTmd3mZ6XVYO0bPbv%HMFz)v)ab9U4It/W2}p(+FWMhj;mpma7' );
define( 'NONCE_SALT',       ';hsi:EmDSjFz8Mtw_0V){HxniG3lf898,Tqp(W[|9^E!gvnP@Zn!oJ0e {UuO1:m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
