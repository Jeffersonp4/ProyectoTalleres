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
define( 'DB_NAME', 'taller' );

/** MySQL database username */
define( 'DB_USER', 'jeffersonp4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Jey123456' );

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
define( 'AUTH_KEY',         '8o&l|?O,g3;>[&bUe3+Wg;a3,y>47V:2G74u&l-YLMxh>6!#_xlUY(-?j4/fuDa@' );
define( 'SECURE_AUTH_KEY',  '^AHaLX$WZ1*rK_*ior{8+mS_]/1I5-w}mxEDQCZwfq$ENmh[G3&)7|La:J1bzPg8' );
define( 'LOGGED_IN_KEY',    '4#_uLNU<JHi_?E2VvFI>*H/iQXOPP7J}BT2*2^C1PS4tUC(x)3GC=g5[3Q*g`WPd' );
define( 'NONCE_KEY',        'E!cAexs,iy)$PfDOvoQ`[T~~|&`$++lg7zF9<.pS5-#P0^.0l=hK3at`v8aX`$XC' );
define( 'AUTH_SALT',        '_(|O_>=c95&THDwGI4&B;@Xc{YW},mF2bAeWx gCaLBtBiFKHF<qGV}cKU_,Yviu' );
define( 'SECURE_AUTH_SALT', 'Oo=;4U;A*|@)fEJD_Gl$Z@+C=,jq(l)OX)5>p7wB<ES[dYG3~!QS!# I[%Sy+S}N' );
define( 'LOGGED_IN_SALT',   '_+]y=i&V*jeIsNkgt[, #iz!I>:%%rz#1C2n_mX;3`jQr#=x(z}WI:/~;Q!~nK >' );
define( 'NONCE_SALT',       '0N-3!nntl/Li)S|2v+ksKTq-Y/3x@QC^egCCJKL &Ri*Qvz5MG,pdw8qwq>=28}G' );

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
