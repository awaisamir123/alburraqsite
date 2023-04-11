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
define('DB_NAME', 'burraq_db');

/** MySQL database username */
define('DB_USER', '84a138249482');

/** MySQL database password */
define('DB_PASSWORD', '2becaee292d74da6');

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
define('AUTH_KEY',         'si}|Xoh&yZ4x24KEl-`)k ~GbgL~wx,9}K|r92.[IIw3F;G98&r}A{_YUj%{,0%S');
define('SECURE_AUTH_KEY',  'Fk=&mj_G.j)~=$?)1*$0HEs6TH}e<_?tY7]|#|FuEqiaWMRO5oSbFVF|f6>69}#W');
define('LOGGED_IN_KEY',    ' +tqw#!.[hg[LA ,|}d!zY:4uN?zsgdr*lA}qzQpy/xdp3jiAjc Fom+$6#}0z+M');
define('NONCE_KEY',        'G2a0-GKdc=  )U6ReQwwT1mT!ZAZEQM:0sPi1g|L/xM^b#5}{r@wn%!_[!}(V94Q');
define('AUTH_SALT',        'BTv(D4 5G+!Mv~Lw#`yQfN4,(EM)#xTS0Y$R}rGu>i$/la[U*^FQi]1k`1h8:bvd');
define('SECURE_AUTH_SALT', '?v8_/W;oVc?K44=rJUxT+cjKXqCi53[`jerE/9b2zY/3@RJaH+C7&|x|OQWqv]A[');
define('LOGGED_IN_SALT',   '1en=~|#nc(iVtwgZbBx4N,sXeS*hH;3yExQ?;r72F57](JA[%w]@Zoll;=q,lXzO');
define('NONCE_SALT',       ';FZp)i)`sHKD%37?X9@^U0gn<4I7N);u.sDFnhRwC/q@%PDQUB[iVw;756jnek+g');

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
