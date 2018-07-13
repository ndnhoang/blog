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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://192.168.0.117/blog');
define('WP_SITEURL','http://192.168.0.117/blog');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[61.]K4E(y ggn2{EozRR.[$UljhL|ix9.pA!S3B7))-7>}xj](W[g,z%p@i-&SH');
define('SECURE_AUTH_KEY',  'Pc(NBD}NT1js.%T}95yq?~u=j7RJj<Uta9wh6JzxQbZeXEj]KcW;{QR,1ry/k!aR');
define('LOGGED_IN_KEY',    'fw$iFJQBR]44DCyrmbTzCjf.n7J6,|X-RuCWAylek^[#B*0F _9)q~Fsnk6hH{$q');
define('NONCE_KEY',        'E.S [l65wk}wa<X<$uT0s#mQ$YHdGLFnj+^V&vR}r(aL3H!Ds}y@N4r`=g9DuJxY');
define('AUTH_SALT',        'HzHa}u*+40K$!rot+3fc .+]DjPDw;Ph_N!SOGG~)Eins$-+M)3Fur:A7:^e ##b');
define('SECURE_AUTH_SALT', 'dOqFiJv+?A*J>!(_?U3CT#,jQi:lh_A>x`;Q*/I{W$h$PWE_.72 b$tWM &^R*kj');
define('LOGGED_IN_SALT',   '8_zPYYO.eyvmHJk^-Jk`HIRRi9:[)*<t=6g8lg #JToh>t7P|hu(c^FI8n=gsU>%');
define('NONCE_SALT',       '$TzaIc/d1Fvh7VL5>}MdR]-6 XwuM[i]ClL.MHtNHfGO!jaVR5)Zn]S0.gm.x&A%');

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
