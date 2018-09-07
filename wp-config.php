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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'undefeatedcourage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'thegoat92');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sD$<P^`snizdY#]z)oCgwq/q]E/?&u3S48#<ZIYFLX1<7.qM%SSZ|Juj_x4~#EYb');
define('SECURE_AUTH_KEY',  'W(q.O#81dR[S71qE9DXD&JD@QR9pmPD.C}[zxngHD0Mp]ihoAXg(|[1x[jE.GI~7');
define('LOGGED_IN_KEY',    'sVqMbW+-b~qVJ$AZ<[$4,p8@[tkv9A7R=3]3aXGNEqi/1@RKwx+E<9x Z+C|kGe|');
define('NONCE_KEY',        'fX%,W8D814]`sMYL-JG{gl<N) H:Cg<^JG@K8-v2>Q}-.%2S)Gix$rHCXBL&`>7w');
define('AUTH_SALT',        'deL <$OJGAz6}m/4o~`b.1 E(#StGQsWl!~|B(TiZtoHpu{zg_^O}PTbop:l,H@z');
define('SECURE_AUTH_SALT', '1Sl$42r@cW>Z@IN3tza|_%ijB&z{yKVOAIJ`Pju-7X)`K38<ZJa1n.z1MB80{bz4');
define('LOGGED_IN_SALT',   '3GOT_0SR;@`?ILtm>O<$ma@P@CxLE?;-uE*t|Lu>V2pc0Kf2^?M9##Ry8, U@]|}');
define('NONCE_SALT',       'V$?UNkJ[<C@qLcWP}XE4$kz(o/vLvOz!m~Qoy&%2fEthF/&u0Cs:Wiq].{X2W)M?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
