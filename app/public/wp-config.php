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
define('AUTH_KEY',         'NdwYhhSk/YI5yWmpOuNxuVU0mVtW9XJrgKkci1LmI5VfHLkUWi0cU7xxWjWqn+1rExCJ/2mb5UPOSYmGKtEr8Q==');
define('SECURE_AUTH_KEY',  'v1Kzu71BIjoxYLZZLSfF4NvAv4YT5u5ihEZgKvmulzT9eI6JSzaBCva8DaVi0SKXIpwe7bUfL6/m8b4pUKAOOw==');
define('LOGGED_IN_KEY',    'L2sUD6ax2fL2j93WpnPpb3/baqdMRsVtny682VLs5/rDcbuHR5xuk+dKpSsvfF8fkQpD6s1ps7SoGjmcawHnqg==');
define('NONCE_KEY',        'X1PuiDyjjT2JU9PL/x44CLcKicYfDyTSZLwTddDyWYLeFF3irHQuEi/SP0x9lwVxFZLej7P4VM2nyCufpB3VZw==');
define('AUTH_SALT',        'LmNEldF2rj0G/eGEh5aGZVXWhbVUbwYcCMfYNyq9F7Y5Ou+WcBA5URkhgeWVE2yqBTCCiSQVkag8FAm5W2ozKQ==');
define('SECURE_AUTH_SALT', 'k70AOQtcvKJx5pCizyASPsLmNgIvPE1OSi5A4inTKv8Okvi+1xYnpAz+zHXXwV2ZvlKwIPC7nqZ8wnP+P0r/8w==');
define('LOGGED_IN_SALT',   'JFBwAvSsHuc37aja4yiiM5KCx1/Af+a8EcPscRFDe5wmVgtk+oMKqVZPLmKVSUYTWAtbs7q/YqezbRyly+FUAA==');
define('NONCE_SALT',       'Gq+fJolH6q+TMsmmregcPmATSsgIYQIrHardl3XahwdtkRndskBkIdvt4ZkQqr3ovtvVYIcqAkTsezm1EtuIZg==');

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
