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
define('DB_NAME', 'sashka_art');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'LZv){TR L9eQr9-%csDACd|42pZZDE;~[B.i[&giTl);{$,RbxGluRsZ5_Hcp)Q.');
define('SECURE_AUTH_KEY',  'i/OjA!lVWF!Ow1vI;>=&q:WBRrY}M1t8kuKr4ixd,8.I_5,idHNqI6vYBqnm*9$N');
define('LOGGED_IN_KEY',    '_.X#uS,{/DC EF9Q>)/zd+LF=Y?fDFw;#<6e@cM6w4|UW}0ZQoM]}s@:^gMhEI:R');
define('NONCE_KEY',        'P$Zo.q*R={YO;43E pS%CX/MPmeo-%[-N.&N/* ;po3J1(RU{XXLls/-3B[D&xj&');
define('AUTH_SALT',        '1-dvi5yt{Z}:Wp0];}%jf#]jN21pO[ef^,DevMJMWuN$<%T(*$7ft)J}EJCPE(i5');
define('SECURE_AUTH_SALT', '-6p,aS<U8BCRWom_5w>#(0RQQKiF`&)h?H[J`-+bcMuKWlo[Kb#I%FF^70uI~i+G');
define('LOGGED_IN_SALT',   'H>lp(i-IC4ppB&u%|swU4,0z*u$7}!2Yv?&~`(QO0)X+NX]Xw!JCIc=6zX<x)lIX');
define('NONCE_SALT',       'Jk.%E,(geGUMtbGG)q*=?-RPng&L#@U-imLJ8#aClCwum)2xJ)%(AP!eb[gug_~0');

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
