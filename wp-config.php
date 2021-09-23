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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ']t6_cc~ce_AjeV$6Gop:,i6o@%f$O4_NxJ5>D[,nC(6^}?U`;AU|/}{u>_(yFaAv' );
define( 'SECURE_AUTH_KEY',  'kHUwz1Zcb|(i Y#oe;rzc:=fWm$l+@4%DZiI]~|ugL]wqXt9-X,&oE/,R4HKbVcb' );
define( 'LOGGED_IN_KEY',    'g,ma}uJYy6`QC&f~d`vy7pTy[S{/$Y,5~>L&H]eV%Lxc~|JSO2VBVOkgX#ocyq=7' );
define( 'NONCE_KEY',        'VMEn9,9P} e6>Qzs~C?],l~Uv61OYl?S,idK:IU)^t=:!>/[}!|H=N<b-b#v3e!)' );
define( 'AUTH_SALT',        'RH0%{ccTZExn50Qdc&P!&%L*taYG[M`AV4Tcg@e~eDX[]bhy_5!x[ST))*Rv,jCg' );
define( 'SECURE_AUTH_SALT', 'T:y/L_E/V:=rLrJfETOjL^wi+Q_,O~8DU*a|hhlr7/kkQS,(n.jQv9$LElRW/5qI' );
define( 'LOGGED_IN_SALT',   'Sui:hKhW:tkg`s,m[M8WX/GKq4p-M~&!_(^5G&z/7kadM:f=y14b$(VhW#kyZ@+R' );
define( 'NONCE_SALT',       'EJJN~)hWjKcK7zy)%A[x?h{^2,oP]:$>;9m3=@m7|;{RyWE8OS;3VE1gp^<_(sr]' );

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
