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
define('DB_NAME', 'wpsancu1');

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
define('AUTH_KEY',         'Mp0Bl[`qggv}cv8%22Uu-a:D!1w8USuq}-0eYfka`DW&H)Rp6Mx$H:P,^O%}6r-l');
define('SECURE_AUTH_KEY',  '7C(YdFQRQw<(5<#aXmvFO](p@4Q6C_&3`rXWEupn y 2l0Z.-E$n1_eH v84T)[b');
define('LOGGED_IN_KEY',    'a2;`[_V1-zW#[W/x|xO=vY1zpnH_wzCY?O@U*O&>`Y++bPlIZ|k[-wYY>!d2;/B$');
define('NONCE_KEY',        'g $<ij-H1lNe-m@e&R2P<=)X#}9CCkb|xbfZ&GBDpHC>]/-i(+V{.*:Jht{l@DsA');
define('AUTH_SALT',        'Tj%YMHpKOJLnQ%4C@ny+UNwEijKNWs)]AC~ %`/)id1N8QnNq~Z#wOyJVrM_Pp7J');
define('SECURE_AUTH_SALT', '<eC~e3-KtPtW/hdOlS%LKvF4NhFJtKi&F?g&I+pZ;#3{}op{l|I74s 9I|%CgPu{');
define('LOGGED_IN_SALT',   '?*{NUs-ob)i#fV|rRlqcjZ-L%{+Q=#7kZ^KVjpdeb09tQR~WBTOBy$*hG.Hz_t7f');
define('NONCE_SALT',       'yu/{8-ef_#pySm]:05.e9Eoo.,i)rQW:]MNc-WUr$H3Mm91sEtb+[-#?m3igf!o2');

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
