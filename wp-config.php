<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', '30043240_34392c70');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'x(2S6soqQf&w7dAec!0msRSGqSwbM9CZiqrzlU&SoxIyYi3x2l6YQZ^Z75WUJZyI');
define('SECURE_AUTH_KEY',  'srBm6HasQhaBbYXZ28IDPe3OhhY5Aj2Mpt2yEydLrDda&m#*4ri08&DM#gd&k*tt');
define('LOGGED_IN_KEY',    'zX*8@xi^KgbrSM(TBIcJgL@(PLt5Cz)nWSX#KHPZ2RJ7%uc4305rw20*L%W(q6Jg');
define('NONCE_KEY',        '*Xp&4&&lvUHHl1W0f@#Nla1%IXP8ko9XFCMVmckmxIvmK%kfi8^(1L&Da2NJlTv3');
define('AUTH_SALT',        'JZ4ZjKw1b(%6lZkOP)BQF0*k1PAw5KP6fV)eNn%%%W&4jMV2MKqGFE^so306kBNh');
define('SECURE_AUTH_SALT', 'sqn5Vq6JTSi)zp&)TX8@tqL%AnhBl3xg*0GU(O5xH5M7gzn#BsW7RaeC4ZbO@mGM');
define('LOGGED_IN_SALT',   'Cx6DG*rI62ZiN!EponPFvPlK3xMpvPkwc#U!0q4**!QUymT8lR15LBc8mEtWn1T)');
define('NONCE_SALT',       '0T3Oxm52W1V&12mWnFZ%!LNBrES(mBMi8GEG1j8kj1*3e9lF!zgKnweV6#yol8LL');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
