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
define('DB_NAME', 'thetatau_db');

/** MySQL database username */
define('DB_USER', 'thetatau_user');

/** MySQL database password */
define('DB_PASSWORD', 'thtwebF17');

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
define('AUTH_KEY',         't>LIH V}EI|&fF]*PDK7I{c=hQO]W/r^xJuS{!5< +-+Q<i@:G;bKn{[2gPc7jO!');
define('SECURE_AUTH_KEY',  '[iOv]GO&9]15x@!?cdRs*.>Yu0^99u4FxQ0m8v5 ?AQHpe8.T]+dX7v9Y`=_p/II');
define('LOGGED_IN_KEY',    '`$*Wgo6dwA}TR!I5u{i>?7)CFh<Qi=FNzhyl-QciC<%~vIR;e4FS :3+ZA:J;+b%');
define('NONCE_KEY',        '~He^mn@e+C4hR4lPw=v2n.&)Q(V@:]_^r0LP!:d]!pDYe-NgqIcM*[5e9_b)z#U=');
define('AUTH_SALT',        '2ae<WnYK#FW@Yt>^Se|*yB3&%er%gQV6OB 3nvbuqs(@,xTY:}-DY:6I9:2iViY!');
define('SECURE_AUTH_SALT', '_@d)(oE-H9oy$K &Kg2v?6c-MRaFneh`YSd~_{FaC%6k?s&I4H&Uzl*J8wAw?*qe');
define('LOGGED_IN_SALT',   'n#KOpe7Ogx.m(t/=/^CBR=,>z+B~$!0(>l{Qmwq0X&ZB@y6ZeRt.yNf[;ZoF >;[');
define('NONCE_SALT',       'H<H2t#5Y28=R,|ly.{_npz5Q&.^t?c##~rvr8)t1T{vpwlb*6d#U?T_bes{YC*ME');

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
