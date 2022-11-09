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
define( 'DB_NAME', 'database_zoomhit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'c^;9C*%inDcK98LJyCU^+m}vj4Ch-2* ]`.qOr2 O~}~jwqdEsw48Cow|soH p3L' );
define( 'SECURE_AUTH_KEY',  '0?XO,XA6l#Ex7B4o4`]w1Iv[) 4MJHe7B<&BJVp[G)d4_KGO:u! )x!)KJ_W69j%' );
define( 'LOGGED_IN_KEY',    'r*Se]b87arZf#Wp!SS@5}Mo-BOTE$~`7f2 d9P{8.rV /^xiX}C:oR*8aOieYLbg' );
define( 'NONCE_KEY',        ',w!ZkNJuS~[F@|r^9nCQV<2[}&e>h=}6$/!>t~+kh;CCA+/7}O0D>j3q]T/.ey-D' );
define( 'AUTH_SALT',        'Y *x177;u&90%mASRz!8PALAq5g10,c@EEGz{;x8@hIS0&:nS#j&SyPlw4D gFg@' );
define( 'SECURE_AUTH_SALT', '#z^=V]I`>V-8{0, -rcU=t_pQa:rrRt2nRo3e~*RJWcHlm.1UJoU^dlm8v&IB PA' );
define( 'LOGGED_IN_SALT',   'Jo)9XL/ `};QcYw:`kH!?^?1!v`L=:0^??cej}C&ZEPgJ07xBKmS87ds|=Px3 @Y' );
define( 'NONCE_SALT',       '36 C-gr!5)#fX,E;tnCV#j}K%IzMMn#<@R^@{.5t^*az&BZ500f?K(j >GcXg6}-' );

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
