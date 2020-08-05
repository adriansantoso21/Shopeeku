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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'OzV ,KFbpn1=,aJJ&I`fkFBUe8pwM;f~8Mah4T{$6rtmX:2</w#iYjztsG2&HDuL' );
define( 'SECURE_AUTH_KEY',  'VbM[3V)dQ:P7wh*FQibNX+1g{&:ugw (6{t@?Gwhvwi%g#tWndYl}|vY.qYs$r;d' );
define( 'LOGGED_IN_KEY',    '/4BUrw]Jd5d`8KO!?UI3_6~7Kd`px Urk>X!BO3tu*QzNb)YD2dXb<R>JL*D1s*u' );
define( 'NONCE_KEY',        'Fu&tEf>vH,t>ZCCMbzf$A:!6[1P%8sbta3O+]KaQhl&9=DoFl/FOs=i3k9*NKs3)' );
define( 'AUTH_SALT',        '=`}>Tzxln@e33|qJ=5/@Va(/8a.T(rq7`f/PojTL[B~Zk4&<8f)Tz[hag25,p|Kx' );
define( 'SECURE_AUTH_SALT', 'Xf[D7J(JgeiT*,Lul?(xuY8&w8ps7Mp7[}L7PX,-*8f_~v8sMG~B9eti-Iu](SO)' );
define( 'LOGGED_IN_SALT',   'W$siCQ5&1q+[d(M,T.N|vNUvPi*Nj{[Z`V]Vq)B!Bg@aewdS@Xw<dq7?t^vLEP x' );
define( 'NONCE_SALT',       '*7&-~`?c:BQ)7bEI&tuX*f(cf~ 9dv#]vdbyNI5/rRA1tl*CRfk1sLj_:jfh;&[:' );

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
