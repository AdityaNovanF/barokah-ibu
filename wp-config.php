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
define( 'DB_NAME', 'barokah-ibu' );

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
define( 'AUTH_KEY',         '?0_,Ls*A*ygKjc[?L|>wE9jz?Xn<5yVYL}UNDV|t^#&b;m8<9E@K*Cm7zV1x-7& ' );
define( 'SECURE_AUTH_KEY',  'Asal0_vdij^wcJdL{%$_ ^v$PyeW^ehY+G4f!qGoH7pTRQ!p5/iGt2M~62$tc!P8' );
define( 'LOGGED_IN_KEY',    ',Z89`Hx~h/>FYILb7u2m+v9e?Zj@|j eVXMkTWT#6Vb@.fRFsgWOX{0?T.cXWGq&' );
define( 'NONCE_KEY',        '~Y4ETvv#Ht<pNE^9i1vY[>-!S!c&GnJ>B5*(,{Pe>hpa$94.vbd@Z5V`AfAOKL;L' );
define( 'AUTH_SALT',        ' Ai9zPEn,=q[(Uk.qq0.}3Ct_;3x]O,0zCC~!`9LPMDiHl(e +3w&vaUn_@]~p~f' );
define( 'SECURE_AUTH_SALT', 't1bJJ#uofHcYS>a+`8/4OasL&~fT=7-iIPB@Q.*=tR*Av1J=.o4(/+MK|@GeGx&:' );
define( 'LOGGED_IN_SALT',   'qsRj*. 9qF`t.8$|tPBQ]=qZ,jmAn2Q]u70.e3OXFIJ1rkrZT)$]f~+ KLzTrnnk' );
define( 'NONCE_SALT',       'kiNGA+#1.fWwgvB -12@Tv.3sDDdbR-S>}2S.a>aS!{0yvs:h?L7bzp*=+`i#JZ,' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
