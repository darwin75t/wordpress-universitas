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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'colegioWpress' );

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
define( 'AUTH_KEY',         '/Fg(H{~nN.X=ev6vTXKOBs#q/X>y`g #xr/]p=W[lu5WgJlu]-bC~;wP`6Dsf,L*' );
define( 'SECURE_AUTH_KEY',  'a}BW#G;fLj(35*~|I!R(GH.bDGice@FDS+(}Iy#E*.(GtB5wB}N7zSi#-.w_^y_/' );
define( 'LOGGED_IN_KEY',    '=^<WVnx9Y=]<;{7!*B-9It%NY}!r6L5g6xw<W#_|C:GZK&OHQ|)&c?kMlmX-Gy,r' );
define( 'NONCE_KEY',        'abs&D7efK7NR);>Jmu+nF>?e${>.wm@OZj9V<cQ(dx2kd!w*r,]E+mh3N*!j|^?c' );
define( 'AUTH_SALT',        'n!1Yp7;}@&WkRutG<R`|}F{bed =,5T6Lt!5{iD245}a+#K66>+X%rEZaLoLU)Ai' );
define( 'SECURE_AUTH_SALT', 'Lmp:9<_9*_J32P(bHmz^(f$SLKhYf_xD&NM(cZ6op-RM=MQl4t<;5D{vj=]xr@I+' );
define( 'LOGGED_IN_SALT',   '%>L)xu_8z9~D=IwOO|0nak1o1Bf)7G~L0@s1%1Cpz&bs:cB{~][+&ItngW3eW~<,' );
define( 'NONCE_SALT',       'xP(Cl_fwosY1I1w@Q_J}vKHX`/1|$)e,s70vW:}X?r5g)sQCtl55H{}upv-v*amf' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
