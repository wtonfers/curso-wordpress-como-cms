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
define('AUTH_KEY',         '2sk8aqQNU29UHwn0m34LquB1SdQWd420b8Tiiug68ZTkthB4O/1w+KteICEIakfdHJFj34YX0HN2gbNKLQP20Q==');
define('SECURE_AUTH_KEY',  'sBIJq7fa6AIHY0SaLeKMoUMpYkdjyqROIe6sNwhQzjRKc6Ae+tbl1OdXuilkZmLXwyPXHxLggc3EWrhVtikAIg==');
define('LOGGED_IN_KEY',    '94HFFd0nRX5yH24/7l4MqvwIKSElRtJWXxRYrVg4SsuWOazYSCYrKKftAb5PFuc1MqiWrpUQuHlDFrT8hH+WVA==');
define('NONCE_KEY',        'zJK2LDQqERyIa14Ut7BGwNQfxZVP0DYmSjyiDIArPOtsbWrMIqklgKqeziqr1KLGQvdfBXCTlWh8hfYbzARsbQ==');
define('AUTH_SALT',        '1s5iRuWlCLGYSQedofbari4VNuiQ6kZOaTXTT3No5vGbjuYdvZbrZMx6U0CCkB/l/oHHJJatDeznZrSwGohQGg==');
define('SECURE_AUTH_SALT', 'ARkmceo9CzofYYJJVnruCC/QG+r8sfAD/gDAnKfEccCsu6tEO8O5u7fumQLJc4Px9sEoFMWWUPDI/jVyki7vAg==');
define('LOGGED_IN_SALT',   '2SwTl58Ylmri09jUf7PmHr/YAaizlw3znisO0jf9bwD5kq9TLd9HmepGqujNAm36eL7ixasYZ6EWph1+6Voj1w==');
define('NONCE_SALT',       'GBgf4EfqtHqzBV4pGSFAuz94cSpgdG46JSyFgnsPPml0Dqs/0+spV70d5ijj6GWeGh94qL+xdWjNfDkSIqW5qA==');

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
