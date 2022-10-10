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
define( 'DB_NAME', 'Restaurant' );

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
define( 'AUTH_KEY',         'HL 5W54b0s;0zgQP)Yvsh._yuvc)r)s5~hOl4cYwceP%+=aV:$p|~R7j~bf{wa(X' );
define( 'SECURE_AUTH_KEY',  'h@+/>I=OK3FoV>#cbzU%r .5aH?~3w)_5_q_W.t!IaUF Jo3Ooa2hS-hbJvXv?in' );
define( 'LOGGED_IN_KEY',    'NLhmC,nI 4Vn{^;[%VtV<>+|tdd%d+YMFL$=`d1M}tX#yme m0D4h_OM@o9Tm~HU' );
define( 'NONCE_KEY',        '=)F}mxSp,ye5|i?LLA:Ibc7=q=B~5ZlkcgcXnE%8o7[8,Sao0~H`nCyGC{DtU.~l' );
define( 'AUTH_SALT',        'd]Q0/}Rd6lHtJ@1i&I$Wm!:_+0GjSe7y]3zJM9!]4Pbti1IPZCJ],Q$p:7uMQ:eS' );
define( 'SECURE_AUTH_SALT', '5:gmo9Wl@hI5PTQW:aJNGrs},.NhJa)hc5_GzN;-y80|H<,ZY!uBRnVmH,_-@3@?' );
define( 'LOGGED_IN_SALT',   '?s?.Xz7[2((4PMVn6#MRD.w2iFKxMBOAu_TxU1>Zh7!F|XL#Hg4/U74kJ8-AImgx' );
define( 'NONCE_SALT',       'X`vaPtCA`RlIcg2_z$^T0$OwCWR_vrU{!_*]?w1>q+.>)w&h83</l,/hHgfou3H,' );

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
