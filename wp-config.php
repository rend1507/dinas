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
define( 'DB_NAME', 'sql6581588' );

/** Database username */
define( 'DB_USER', 'sql6581588' );

/** Database password */
define( 'DB_PASSWORD', 'SFtnksSHjk' );

/** Database hostname */
define( 'DB_HOST', 'sql6.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'EF27z&t~1j8LBy*2Cs* x<.ckl7v(2#;G!CIFI;.6`x{]aGL!5!K{z~E]4BASU,v' );
define( 'SECURE_AUTH_KEY',  '#YR+9CWH+:zJ; XZSVo0X;og}GkppJAcd{XfYy(&(oRyncKPZlcrukCTc[pMY2.v' );
define( 'LOGGED_IN_KEY',    'h9Z SCu!S`EJX$xl@rCZVsXuXxv%2JMS_5e$X2)G?b$mXp}^$}CEQ>k?D#7x76aV' );
define( 'NONCE_KEY',        '(u/#4TV0DZ3u CD}:(>^CuAU)`>m70wSE/:q&a5GfQ];>>^UWa`!G3c$udv~IRn=' );
define( 'AUTH_SALT',        'Z%@{7,TPSd%, }]RY#NZRbac>DtNWu&4e>WR(`#}2P240v2XWiL2KG4vb<_JhFg5' );
define( 'SECURE_AUTH_SALT', 'v@RPG ;~<Nq[sc0T*}(q+[!^/!d4TNG0rh7Y;k%tlX:Sc&shXAd(RPir c0v=MDy' );
define( 'LOGGED_IN_SALT',   '8^Lf|oK<$R2mI@mP86 2+#UbvsA@0WOi!@0H6;ZiHk@SxpjnAiztA^&KjxmPzbS8' );
define( 'NONCE_SALT',       '&9WoF<htKvc/slj]1(Il++}_^iO[a^xi?_G$dM]nWE0Y)y9Ht|=[Dt5EGP8SK+$I' );

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

define( 'FS_METHOD', 'direct' );
