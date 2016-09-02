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
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
// define('AUTH_KEY',         'put your unique phrase here');
// define('SECURE_AUTH_KEY',  'put your unique phrase here');
// define('LOGGED_IN_KEY',    'put your unique phrase here');
// define('NONCE_KEY',        'put your unique phrase here');
// define('AUTH_SALT',        'put your unique phrase here');
// define('SECURE_AUTH_SALT', 'put your unique phrase here');
// define('LOGGED_IN_SALT',   'put your unique phrase here');
// define('NONCE_SALT',       'put your unique phrase here');

define('AUTH_KEY',         'qx:(h+|aVR(L5/AAkxVP~bH!3w-C:&9{D#aKR,1C0&~D!`cc&W)<ri|-;iPY[1-W');
define('SECURE_AUTH_KEY',  '_WR;7k]|Y*Ww{Ft+.}w]:r%2b=2>#0bEj6bzC2~AW-<.:XOBQ0C3}2,[am*.L)K~');
define('LOGGED_IN_KEY',    ';?N|h*yM`Bm-X_e*B27_&AP-VyN+Iqblq6o;t2^ *q?!{c&SfG42^oZ|r&9i.pG,');
define('NONCE_KEY',        'OvXs.t+HJwU^8]9?V~<]sG^4JOl*P m_yjm?eL`=`S3Y,MNW+JG>cdA-4?rl+-cf');
define('AUTH_SALT',        'scr!NLlXdQ]#c_c+z&mPlPU[3G(F=cY[+# z-Tt>G{XPIAinmN1$)Y+j!Lj^;x<<');
define('SECURE_AUTH_SALT', 's-JY-cet|;V8`ke$p8bw{62w|I]3Wi>GAn+SnY},xe?!(]yr~t-t|?,mnPwiM)e{');
define('LOGGED_IN_SALT',   ' >qE~c6J(E#_!I-WKKBxS.?+htpii*rKOLoO&!wwx|ldO{La5G(X,7HFT-`RUShf');
define('NONCE_SALT',       ',JrN-+|l]0eo|O[?j7lps<|jCTO{%lnU6lMe!P!p h[@f>m+w-$B)&(=]N3T}G$o');

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
define('WP_DEBUG', true);

// define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
