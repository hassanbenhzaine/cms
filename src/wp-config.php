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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uumtuaqrv9nao8fbmx3mfx0bqenje2ogrsroowkngwj9hbzxngvc79tr8hggcien' );
define( 'SECURE_AUTH_KEY',  'v717euhe5ovt7158ptokneggon3osumvbmwujxc5eso3cxp4fn3nu1ftwldgdenz' );
define( 'LOGGED_IN_KEY',    '0ntozoeu3nqwjgcghshba7evfajmushgkahrfvjy4ddjcshcpbmuzzktaujsuxb2' );
define( 'NONCE_KEY',        'eiasibgdlm9be1uskvdnt9t5zoagwjgyl24x2lofmrzfa5kl8g2jyj0engunkff4' );
define( 'AUTH_SALT',        'u7zb0gpj7nq76osj8hlgyoehgmexpx8bgcpb3ixku7cd6gue2ssdrovdlkuj7lwe' );
define( 'SECURE_AUTH_SALT', '4cza00vken6g7dhoreuoieimrza3sqjh5cugbcvjfyf13do9xjhc1dgckrc6zdmf' );
define( 'LOGGED_IN_SALT',   '0wykmrpofh95i4ethoqyquwgzax9jojq5p4ksehcjudii0l7yrsryyrcgt1xbow1' );
define( 'NONCE_SALT',       'hkcfhyndt6hzrgvwv8xdvmjvnupzwupkkhe4oziuu4ukqz8fawr2cgryrdoexly6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppu_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
