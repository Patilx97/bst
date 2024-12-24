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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Password@1122' );

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
define( 'AUTH_KEY',         'R=]aM=Y^qs8#l(uV(T-ZTgrg~0es!<WnelluaPD^riY3oTY5L,r+By/gBExGO=~)' );
define( 'SECURE_AUTH_KEY',  'a H~lV8zGuv|<x6[C [`p%y9:%wG@0_Q*YAD /acKxzF/ZS54eyDeuo#e2Bgwmb9' );
define( 'LOGGED_IN_KEY',    'k9ZOF$VcMmg[xM~m$n=^qV_5uR%c|@j$vH(GQQ2?N0:gKr:5k-A!2J:wWEtHrQwZ' );
define( 'NONCE_KEY',        'MeV&&E*u%t|@Pv1eyu`/4sJ!2%sIzIy@l`y@&m<6@/MKz(Rp{3|C@s9f@]|j49j,' );
define( 'AUTH_SALT',        'wu5m|TQ.,|#/S)5d8E|!r:[?eQ|8NOF([(ybv~C+24/0#3>r{ewjnP/7!&[{-Sn~' );
define( 'SECURE_AUTH_SALT', 'N+?|K5Oa9^!rO+0tOyUU%|_)LB!qfeTTVa0DNvRT8^lpag>NuFbu!N61|-Q/o~Ns' );
define( 'LOGGED_IN_SALT',   'Qa}*:<0WJAM76+&1?Mvx234U9[3qnEo:]$]hM.gAnT4zn6Fs]Vn i30H4aN`6)rK' );
define( 'NONCE_SALT',       'SO!M2^qY[_wAm3*NdG?>4M3i[<U1BI]Ax+-$Xj=o^bJ(N.8mH(nf$<];rH=1!s1u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
