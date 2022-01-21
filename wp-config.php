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
define('AUTH_KEY',         'aGgtONekQp4jyklAkRzhxqnFAymt8F+dzM67wN1RRY41Ibv3TmnmdR2pVOfv2DO1JsWX1tyG+5vmrtoCcnm3rA==');
define('SECURE_AUTH_KEY',  'h1PlCnKNr7VVDZDLtQFV09VahcMr0TKd1AdLe80XdjC3tYGu1Bfk6qApObiUa1sRs2rhSVK9LDqLAIZ+SMlTGg==');
define('LOGGED_IN_KEY',    'OAf1KsKwQCwGfG0p4GawI3WXi4vWKiPW8KWPsRxSt+3ZPVQB59Xwc1S06VkG/SEmhhY+oRcf9l3f8amBuqTeqQ==');
define('NONCE_KEY',        'misNPlVy66eh8f5c8u40SYi0DeMeA1+3UQwpPrHRG5PK66qTi6Xdvwc9rAeIGGfwePH+/Uyq6yopzRPhlHIRvw==');
define('AUTH_SALT',        'gNAG/X3TLPx9E/fJd/0ajBRSzU/b4cKwvpgmiqzMu/8IM3dhxxVtG47hfnMdwtPWHwlyaS3NtED5acdlWXblxw==');
define('SECURE_AUTH_SALT', 'opw+qiNyvpWkaoG06li9FEwzqILG+Jb8g3CMhDtkRd+cHBggc28ibW3WlUhTpTX3bfYvgpsGpikOgjngpj9qgg==');
define('LOGGED_IN_SALT',   'c3dyqTTyGNaBQJmaRV4kOql62VSZJVQO9Mdtbr1GGMTIL4jPMxk4zLtmapGsDUTpBh58sm5nuFg1S7LeHhcpTw==');
define('NONCE_SALT',       'ZswqWH6z5AneQLJ30X/PcHXl8C6v1eXY6clAAhEiihdR92C1IPun/c/KM5IsbKZjKlO3DDJLFNrbuKi9YunVVw==');

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
