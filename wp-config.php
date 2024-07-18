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
define( 'DB_NAME', 'agenciasombra' );

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
define( 'AUTH_KEY',         '<8J ]XmDuIGZ1`-GI0Xqf9QNNG>S`S;xRj kkbw+u`v=M:&K-^9:*7{AO;G=E]_o' );
define( 'SECURE_AUTH_KEY',  '7N/.{Pr-+YQ:YnX=)`V5Bvjq^!N@]}!lTTZ[XVl?_p#+H1C biX( HMy2F:>PLmJ' );
define( 'LOGGED_IN_KEY',    'R?ki*3MP3!L,5*/k)hA@=GJD5MfJW@T&Fac{7hsc&%=e_?{C&pl2IoCshja1zW/]' );
define( 'NONCE_KEY',        'H:5t_yGU*tDY}4|?3bu 3enjM66pQsCBqP%)nc(hS/@*Dr3-~+FFu>(CbX!Z8FQa' );
define( 'AUTH_SALT',        ';t2ckyOU~ Ya-Q>pyZKW$MfP@MY[X$.RYhPQPN^Nk(F8)Ap%ccw^Z]!Q9|6^0V70' );
define( 'SECURE_AUTH_SALT', 'CkA{b<xvejQk@bmVXB,Cp(ffK},MqdzL:`;f^^;#wI;~ l!7FPi`X[#~zyk#Zv!e' );
define( 'LOGGED_IN_SALT',   '|*&%NRqk<Dl1~)^3Vic2BaV{k&&>e-nhW+`u.aiJm7f%A8PZ<K+-0dL%h,9d)y23' );
define( 'NONCE_SALT',       ']OauG^96foKp7;[YQFqRQw5W{yC%2|_aD,#WYeiv(k?377%Nj3FhdO1]FO4.ooSM' );

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

define( 'FS_METHOD', 'direct' );
