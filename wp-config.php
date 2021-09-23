<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'eval_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'fav9pbo6jjiea98n' );

/** MySQL database password */
define( 'DB_PASSWORD', 't5ns967mg3n4jyzk' );

/** MySQL hostname */
define( 'DB_HOST', 'eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com	' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f31e456f887edf9bb42485c402f2d93545d8377cf7bcaa8c2d3babc18eb39db8' );
define( 'SECURE_AUTH_KEY',  '61c1f1acac5d73cbabeb3415be7950e3f2989f8b242e71f619b7aa22cec9b8e4' );
define( 'LOGGED_IN_KEY',    'a02e40951a15c623993c5b59d860616c6270377ed9629c23816bfd416c37015f' );
define( 'NONCE_KEY',        'd81ce8e44aa72997ec4d73a0ed9520b42bb64ac33673411691415c08720880a4' );
define( 'AUTH_SALT',        '18e2c49b5fdd1073f143b6923101507345ffb471034af77da8e77342aacec145' );
define( 'SECURE_AUTH_SALT', '7f9cc57ae5d8b710c612f58d3c8aec3ed19ec64baab7875f0825c4d489b83eab' );
define( 'LOGGED_IN_SALT',   '42b67f540193243814480ef78e4c12f7526d6e19cba49a1ef44d45fa5520d44f' );
define( 'NONCE_SALT',       'd7e129b08f305f7c4fc19508ce3077710a79def66bb9d6d08bf2c52e3de060c3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
