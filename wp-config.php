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
define( 'DB_NAME', 'db_goldenlinefood' );

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
define( 'AUTH_KEY',         '~?*+M.0BL]{IW#S0PzafoW>%U*ON7k*y:g3FQ[XO0(hcqJ`mG`IO0-P*{QhE1v.!' );
define( 'SECURE_AUTH_KEY',  'i}T9bI}X^Lx[JQ)uBbu%&x8[BjNx5?$u-K5j%$mSa&r5n!>sJS~v! 5.V~Rzf[!)' );
define( 'LOGGED_IN_KEY',    'df,2Oea91v{CXwZ$WhbuBP-2t^ent}yp+dh#4-4Rim+Lx>j;3o6E!H~Ox|~X5UeW' );
define( 'NONCE_KEY',        'M|UP-*>wd>]b?_zG;1uYn{=7L(/%D90]r%p*zt%NdDw]E641L+,U()9<_-<I{s?F' );
define( 'AUTH_SALT',        '[sqh1HC252.ddAJ9V_IWN1oxY]?gVaJOv_,SJ`a{KoI%)GIkg=f1(L.6~rC]4X,;' );
define( 'SECURE_AUTH_SALT', '1!RgeB`<_=]bRJS{zxkZ`eL~Bx5/y;NZ.v;sW~:=X[R/KYtEY*XzgCMR%f2cc^c(' );
define( 'LOGGED_IN_SALT',   'i+9KOCb[pd&:yyWJ.,[_p][<Jjd4[`7Stg+N-[_#UG_)D|<6(KMqRQCZCsWBs+l7' );
define( 'NONCE_SALT',       '7GLl~w1*Mg^cF?Ybj_/0rZ%I(=# h11:O<~NF;EC164+VnF5w|i4-OjDs[A4jAT3' );

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
