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
define('DB_NAME', 'robert_news');

/** MySQL database username */
define('DB_USER', 'robert_news');

/** MySQL database password */
define('DB_PASSWORD', '38e4S@1-eP');

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
define('AUTH_KEY',         'ukip67gz4t5vogj7fhqne0j4s8cmn034rgcb8wctwrlmcxdgfvm6nthyznbmo7gw');
define('SECURE_AUTH_KEY',  'vfnpcopwxbodimpkvhx9sycwpivp774flogdlxxgqyqjlxu25w0buzdrafajlvsf');
define('LOGGED_IN_KEY',    '8n5edzvfur7gajxe7wvjc1fblilb7twanna1gyruk70toxmo8fbi5gltprlny1td');
define('NONCE_KEY',        'ckmwsm58ssbntvsji2qoa221b2klbb112pef3pbhdnhwe6lz4h1s0xonbamboooc');
define('AUTH_SALT',        '6r87pom3qmjzfc6spgjx2x7wue0j35fiaeihwhmimgq1ghevfpp7w2bmpbdbnhho');
define('SECURE_AUTH_SALT', 'jecbqzjtcabrrz6sh8wwc0ppfealsqnij6esgfidfoa9l4slyqwvjq0jlxbqvzke');
define('LOGGED_IN_SALT',   'hwav5lbq6ujfvi4feu6saenbemii9wjfiz8mbhaxjgclot2b1gnwkwzx6medkfsl');
define('NONCE_SALT',       'rxi47z5kqju5haih2rofosxw4nuxqx6kwycwwglvuow5eqtiiddklav8zefsxigt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
