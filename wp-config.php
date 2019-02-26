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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost:3308');

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
define('AUTH_KEY',         '/)/xnpz3iVdD<y nk+x{-|o =I)Mg^+m6[SL*-hHMAyL//i+h&3i5%N<Wr`v3y^}');
define('SECURE_AUTH_KEY',  '^uswl~O[5I*y|i^1q~df]LrXciO`hDaWIbliu#N@tD3`x?%$,!u6]&A(el)%3tQZ');
define('LOGGED_IN_KEY',    '7ozAQ**b~6,NFd86~KHKjVnXG+X|N%2|(jH6TeKCj|zm&?snioB&XPq84AJ8OW$N');
define('NONCE_KEY',        ',9oUh#W3U:K+9252%%re$G+}`LUk4/ gb`,}#xjAk64BBtKi`0hBp e/>sc#vVNk');
define('AUTH_SALT',        'T^=5DB_kcxj#+eWES(-zR`PlmJS9Jdp47P8$&qP4U/{DYjrE{^v#^`T|*KkZf!e)');
define('SECURE_AUTH_SALT', 'x,,p+/$w[w1q5RE djR6ePj.^sHw2R@VkF8mj6g(4f|c{;(z_bS:Rn6(lkXM&ewW');
define('LOGGED_IN_SALT',   ']O{5U~Vm)@7aaGmk=0qS^`}u1n?grpIEo!zu)rd-kNIf;wrk>v;K#dc:qkv.beNH');
define('NONCE_SALT',       'w1*kYU2D[j-7if1*Hgr$fhzC$d@HI?,,/YbkZT.-,%TMJi+xKZ!,LIE~#jzfd(m{');

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
