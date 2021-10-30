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
define('DB_NAME', 'stupidw822');

/** MySQL database username */
define('DB_USER', 'stupidw822');

/** MySQL database password */
define('DB_PASSWORD', 'sjYPCDsq2Mtn');

/** MySQL hostname */
define('DB_HOST', 'stupidw822.mysql.db:3306');

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
define('AUTH_KEY',         'yACOvi6GEzPzZbTWRqD/X3X1Fd4qLpJPcyGdcPzRfMHRb2LAP+nPdq0mSHRX');
define('SECURE_AUTH_KEY',  'uhccY9iIotBuqn7YeWmYNegvj1VLd/azt//1/IydF90SEhyNGZaGhymXe0O7');
define('LOGGED_IN_KEY',    'OZ0BB6yGs+QIxyvy2EQLBxJn7y//fD8DolmGh2ZVtpXa2HVcZudoxeyWQig6');
define('NONCE_KEY',        'b9Id6ohhV0VFyeM6So5ruVP2lZyr5po/YKmsKGo98qu7Ex4089O9GdH2GP9w');
define('AUTH_SALT',        'p5IdihmMJnmJzLmsLBTbrbbghgiBCsMbOciZ4bnRnXzy5kWqNSQ0jIbqD+jo');
define('SECURE_AUTH_SALT', 'iVLkhaWMdcIpRxEwGQuDSEIq1g5p79F1/7R2WGMrvXnfSgqCtAQQgVKc4v+L');
define('LOGGED_IN_SALT',   'BZZnAJswpCfrfU3WcIkzT4hedaXRtfU+9Dk9flQgjjQw9gQxUHS0t8mEB0JZ');
define('NONCE_SALT',       'I+M3KJRW08OG1vZAMYDRq/OODir2oqqrkSSYWrTY8tPs8rgw1J6qMjPf3tle');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod6_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');