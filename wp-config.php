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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'owerDDD~_0A8`rS&<mBu5C6>9CV6N{n6G[!?:weURp$}cWrgOwN39ap}Z9atn1_m');
define('SECURE_AUTH_KEY',  '$Kh@%pL4ig(b>=Wt:]$p^ItSYKy%:dzyPW:nDLAP,h>?<A:CC@!=4C|%hQr;*D!@');
define('LOGGED_IN_KEY',    'D9p}FurQFi8CU6WY5;|om.Nj[._=&VBwhB^P1)4r_]IS<:9#YA++Hv(t,c66zMq.');
define('NONCE_KEY',        'rc{:2+d}3rJmm2C|SOanw%&hh$XN#_3/tx;.#vlO(OOFysc  |DeDs~JaE%?}Pj5');
define('AUTH_SALT',        '}l/u{^MBV@4k(0Sm/avPg<*^iroeiqZ{$JQ7`*z+{S/b{|t|]uf#J+HE(QT0hgg|');
define('SECURE_AUTH_SALT', 'e|AXk{t13VABgs~d^jmK44[Tdqdm823/^TydB]Oc>FsdJxWU04}p[,I$8AK&h:Qb');
define('LOGGED_IN_SALT',   '|*b]{/=@$iap[quo%(MUv2wl0m8c!et1D2ofp*?XodO<?V`C44x1@@$nu$M4Y[m&');
define('NONCE_SALT',       'h+&7v*.C#%Db-eE-;IxKO-y^1jKposS1!KiJV2%Q~tU0-Lg0uRE(^= +2__;R`WG');

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
