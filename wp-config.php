<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         'zh]VKd[;(tXBs-&2Tr$+|sK`:|:=lLM%k%ui o0?G`o-O?LCkCJWHp%hHZ8NM]6O');
define('SECURE_AUTH_KEY',  'Ah9([SeRVx4}.R/Yr@H(+>$c5#v|2;Y.H1-Y)5&GmjO E}n:id|}ef*k2t8^?aY=');
define('LOGGED_IN_KEY',    'Pyk[rzK3Z/7r+1A<6u45v0T/1(@LE]GkhAjr@#9KV|va~$nV}Z)@84)xPho_UF<9');
define('NONCE_KEY',        '-NUUr<X(|rcZfTkHj>9*Z~{<9~dL}heymF6SBiBeocj95}~N*&pHF|ZVP^F-uYZ]');
define('AUTH_SALT',        '%]fet`abFd=z|O(=@TH|LjzIiF?31QrD-64|5`CFm{/++9N/ pagaT|u+LPC=Ifo');
define('SECURE_AUTH_SALT', 'E~w9$hM>*&J b@+BT{#!ZG,L0(ej|W+6F?QnPa/=4h{RnN+-6*%tbfG.BCYuGLYY');
define('LOGGED_IN_SALT',   '3}z:A7Z,W=~A4~LK=ZRqLR35_G$FSX4nJ+uOS3I#m>qkbq)UFqQEUyDXuLrS&KB&');
define('NONCE_SALT',       '{VBn 5=v^vQ!1=n0#+~fgZh#IBetl![K,n-xbJPOc{w=pXgq~;k^?bLy,2g:HI[U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
