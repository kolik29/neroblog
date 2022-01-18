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
define('DB_NAME', 'neroblog');

/** MySQL database username */
define('DB_USER', 'neroblog');

/** MySQL database password */
define('DB_PASSWORD', 'P5?A#Rm9z~tV');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '8M864nYvArmd$1  +j+5rP:/H`K<Y|!#C~A3;z!T+(uuZix6T]j brmF# IL(30s');
define('SECURE_AUTH_KEY',  'kX-/sz<(`VhHJDWGWR?YM]<=c=].9q!L|eTW(xrm%NLzwi/0h_/0rhY;N7|[0 Jg');
define('LOGGED_IN_KEY',    '|rm[281E,K>7#PUs#s>.e=oQmQ%N4kEu3+v>m%R+R81xE@k$Gn5^0ihX}5T8kva|');
define('NONCE_KEY',        'x=Ev-<dvp8|SI_&-K?nX+<<6XTz=4o+eh%&`K>wx@1>7=on_tp>`xH+q{2|0rTu&');
define('AUTH_SALT',        'F4Q9FG_oEWZ*g+77dg?Wlw&29nL~ v!CFf7W@WO1Y>Z&}*m_}.NPAYxF=:kaAdal');
define('SECURE_AUTH_SALT', 'nUPB;Wfc+q5)YiPh[hGw.t)y`R!avNiFn.1X:mb][n|+X6G3O4yLO{9y;J2f|4$=');
define('LOGGED_IN_SALT',   '`)p U4e+$psU]5WCrELD,4E;4U|KzZm3f;xvo]c-Z*oL|ZYHUuG;|:JGY+>#!+E>');
define('NONCE_SALT',       '[5DE7c%_h`W--!+*I!Ae|9?T;G=A:Q`#9pEm >-d?MsId@dA(tmt}%nwT#%%PoW*');

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH' ) ) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_CHMOD_FILE',0777);
define('FS_CHMOD_DIR',0777);
define('FS_METHOD', 'direct');