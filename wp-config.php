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
define('DB_NAME', 'imartinez_db');

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
define('AUTH_KEY',         'c799Z5$T3XUy S5v<+Gs~H4AD,jO}L^<&(Fx6f)ee/}*j9:bWdRkJDpvh8G R8*0');
define('SECURE_AUTH_KEY',  '-mn`%3YW~6)}Ml>tcM.>k<u|Ea|=`Qnu]g_G3..9dH?3TJVJbxWg2fY,CHH/ga $');
define('LOGGED_IN_KEY',    'E>}ncv52r*M.>#z&~~wLKDtO]pRDoQn@G5~fWmtOiv?qQ]c.oA4~nOT.10=Kc&nZ');
define('NONCE_KEY',        'ho1$aOX$ ZS=JiNBO<|]*$4h(|b;RAmF[?^ZI8Mh3e=ZD%{:aTl:T4gw<k0;ie,i');
define('AUTH_SALT',        'U+-zzpyHw@n]KrkdVR7tqDM3<[/9[ZRv`+58Rb+eLsJUkxZa~4yK5~7FbHyZ5}O ');
define('SECURE_AUTH_SALT', 'Y?]WHnm)]]E|`xowS7im3+})%~N<#tW`v#EJ>=>bVa:+ff2!PQbg#z}5j$J9 WYY');
define('LOGGED_IN_SALT',   '}GZYUr_L;+iM,dhW}D}`u*dEv0&y8Q9aP4n`?B_[-k76MO1pz=A<H_-3X2ra<gSK');
define('NONCE_SALT',       '?[NkoPB@QPhR/6A}N5Z(eGc|!cZPI$uaCtni)tlc[`J-%@f1VqS1-&=1y(ojj8aA');

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
