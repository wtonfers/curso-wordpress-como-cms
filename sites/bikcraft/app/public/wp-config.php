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
define('AUTH_KEY',         'QyS4EK8A2/dPgDmu/zhoige5g0oa2rx3Pt3ZuAncuVewejcsTB2t/ZkUB7d7tMCSvut6CReZ3Si97MoC9Wt87A==');
define('SECURE_AUTH_KEY',  'fHA9mi/0pgh6McPdCWR91xMbuei9BJVSQHjNwgFX9X/FT38imepsEFrcq83uaymsjBrgcdgX460mUbfWgyLN8Q==');
define('LOGGED_IN_KEY',    'tbDB8EcbAGK22U7pxhx7M1iEO+Ol/YmntzoqmGBQkFK42tR3nGTt6xl7o/n3qmov1xszuYOgwXKaSh3TtMNt4w==');
define('NONCE_KEY',        'OaMFH7pdvPU7W+mwek+C40PBlKvP5SbWvezpALNMLuivnLpGcGBp+NVClGvTDKJ2xbI8zPlOyTaPtshYdzlAMg==');
define('AUTH_SALT',        'nFjY8yiRpTGhSYUJ0inQthRojRz/foQFflNe9BGAbD31i7+oJftwVq1PsefbTpQl0ZPBlRiatVJGfps9rUR78A==');
define('SECURE_AUTH_SALT', 'RP/8yEWJPLqCI0kGOjtf8hPEMQbPmE/UT8zveZyWDQnxUOHFcIDmlwYmuoKQWn+zYpP36L8oLlcpbJfexRWrlQ==');
define('LOGGED_IN_SALT',   '6l4kAJ4T17K2ZizQdZj5RelGozJ74k2yFQ8g4Z1KQT5MaFpq3zkfAcn558Djo8pPzudvHKLnbVKfne0yp0Otjg==');
define('NONCE_SALT',       'H+e6ZMgCYXYORMpM18TF22hkzEhKPRFdcBQK2evBAVoXqdQwKibJzvoQJPOZMzAtmKpKjth7SjQ1hcPbBv4kBg==');

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
