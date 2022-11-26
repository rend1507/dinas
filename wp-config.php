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
define( 'DB_NAME', 'dinas' );

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
define( 'AUTH_KEY',         'Eqp5K4+J40#_P$ur7-098<)}n{Z|-=+$}d_S7P{aIAFxC(Jv]^9)H=n>@Hognxd>' );
define( 'SECURE_AUTH_KEY',  'Bd/_qKdHu>W%*&+*+$6c35sBIRno.(xX+2p@7!)k+S!)P/5u=aBS:Z{{`3j-q3TP' );
define( 'LOGGED_IN_KEY',    'P;7i NwJ?^F#2L?=nwBZe!FOx{LN bn9 AuT8#}y;0B>bQS`f!-}~=AynBtLu66p' );
define( 'NONCE_KEY',        'SKAs:H)xr(<%EI(z@Va:=/cU.V]c::B@>NBF0/?=:ci4|tuTH^.p.`:i-[3`9ksk' );
define( 'AUTH_SALT',        ']LEQNI6)rxCD(I23]82C%xdVLrsfH@[W<VF5+?DRxzN1de~d3,hJv3P#YDSc]6L3' );
define( 'SECURE_AUTH_SALT', '5( >q kV4$>qMU{4u/=B>:a1Cf83]yn7S)Fq[ikMGjhJe?L`x>$rkAi;S|tE$Vjr' );
define( 'LOGGED_IN_SALT',   '.nV#iWng*2$8LaFplf<{TW@`j+yx_7neY_Q+HHZZSJCGDhQF3d6w75IYcbU4980S' );
define( 'NONCE_SALT',       'rL3+89nx|aeVK/V<IkkD_qwUedl?G@V:`t$s%ISTgfF=}V]ZMij-bT;ke^HYtXJ%' );

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
