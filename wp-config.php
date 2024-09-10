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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'Gzu`BOD;HB#v-y*w@A>N3:Jz^]_&TxIIxmU2U!XSrb.R/|eODB|-qn>h&z6E2V4F' );
define( 'SECURE_AUTH_KEY',  '+OttwJ=aaFM4gPKz0+:ynC2zTu5c2!@k4]fDjMll$oLZ/UN`ABi)Dmoh4@=%AunI' );
define( 'LOGGED_IN_KEY',    '?lAlX#6IV]nmgUG,iG]JHR}T689yFoJ!DA`Nx$!u[6?<fN#4k|.O{T2ZY` aVblR' );
define( 'NONCE_KEY',        '6)urT>tP1`P]B%!~CU8WaE^Tmk5u8)?K=WqL3n1`t[]36b7s71O{t^I=#1YwFay5' );
define( 'AUTH_SALT',        'sO8:`^zSTCOH=#HD1<I&m}l]< 0@gLV ~XRTV[ki_2cVolri/@gTVMo!9_a/NH]w' );
define( 'SECURE_AUTH_SALT', '$|X-C[8Nsfr!B.TiQH=yhT4=J=CX|^N!xvcvz>%?b,O_*c*?sbf] CeV/v@=&bNO' );
define( 'LOGGED_IN_SALT',   '!:wUX4;Mf5AIN>+4p5`LNTe%s?:[zJaoX:G%(|aK3o.1l)lFib57)j2L/JWC(+`E' );
define( 'NONCE_SALT',       '*:[335yvqzd7v`5}84y$d|6}{Fd8ZNU5:S0i] Yd$4d.*[r1<TNY_5`MalK1Yi,h' );

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
