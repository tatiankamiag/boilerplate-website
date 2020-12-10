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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+f/sxrUSAX6oGwles7mOKHo8ckgKyAhqjFmsF8j+MisoMWiPik409X59Lah82XcGnFp0078Hmq4bUlc9Y32BbA==');
define('SECURE_AUTH_KEY',  'vraR7X5T+oN4fdGkMJuOUtZXNIH26eLgM0jbRQ7sGRhEboeSQsuFQVaof98YQotq5UsIfQr62uUh+ZIHwfVRVA==');
define('LOGGED_IN_KEY',    'QMUKbMxFMbJkRpElkmNnXj7hOxXcWQMziHCejoG8wrYMbs6JZbeLts6tc1WFWIihuCGU2V7zPwL0H33YO6XZKw==');
define('NONCE_KEY',        '5PTmBWl9A23yd0+jlAvwmVCMCaoQCWrA25R1L2WhS7t6fcR7dUOXskVpkDcGWQD55v99mEuTCJh4tNbvL+YDlQ==');
define('AUTH_SALT',        'aYgbO8Hb2i9Zws49GJwWJBzj5Bvp+Og4B2ymAylh/ZguUoSEEFRF5mpcbOhS1CfbudHYBLZ4V7bwtF8CYgy+Zw==');
define('SECURE_AUTH_SALT', 'z8zK0cYB5hacwEpe1SGrdiyiwkPNGrhWequLx+wVjcEDMIyR2K7StgcIv2HqJMa2/760KwB9LB5+zLt44pbyfg==');
define('LOGGED_IN_SALT',   'NnDETz6wITFSkeu0Cr6DVPTCJIUHG5An6pAn4iEWSNlY+mu3Ayg4hDLK4S51lOVc1O8xqoHmTOtpbEYS1XDUew==');
define('NONCE_SALT',       'bQdnO1vrq+TCBITZ0q1BFBAXuZWYxk1+WX+dKqPhpciZcICLA86EncacQeGzIGUCubjoeNy647e5KEkKKiK5eQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
