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
define('AUTH_KEY',         'oKP9mlQC9HqGmZ8o7OVwTK6j1U48Gydh5HaUx1NS3E3Pje3q4FpQxFLZIX7cKRXi8EXr3udBpEQenfJfBJ68Bw==');
define('SECURE_AUTH_KEY',  'fGtvF/6chfK6OTe5QbdQg8fc+wRKcxZqnVeG5U3kRx3T9J5chdeDz4bN3p39OPajXAlKBxHi3fegpGZhUvuLHA==');
define('LOGGED_IN_KEY',    '1fikgPRKY1kuuW2UI+Y7EO7ZL4JQEAgt0rRnCTSv0xcVAgCyH07WgRYN9MGxJ3Ia3FgQO48qbZmmz/PMaZkiGg==');
define('NONCE_KEY',        'yX7PXpD6RhM5d22PPwz7Irzf25UYKsw6TBhhEjT8UzSlxFug+p1haU+7sTcc9Ii0MXdiBpVjg0oadbqKL5Xn5A==');
define('AUTH_SALT',        'Z3473ZFOTffokOLM0qWZLAPrcu+KBEjxcfQwEiRokX+dgHXZDdP8SKWxRScnjjtAZa88h3iPXJxJezpq8uxsRQ==');
define('SECURE_AUTH_SALT', 'RaQTijJ5J7i98cCzYsS8D/4BHmG+4+1uHP9wLsmM9rQ+ZE8ZMNG34V0bD7FKxwOd7+G7VmxVyiKZ4oXuybEjUA==');
define('LOGGED_IN_SALT',   'lHgh77r9Tqb0ZzHwvY43LLBMvC1AWHn8GiqfT4iYfMWkOm3bgqTNLzStozQb63gpN41tMOH+B0xcdTtpnKnYVQ==');
define('NONCE_SALT',       'zL7Xzvf+PbbT0c8lxzcUEiqg38bfgtweiPSKuINlTd6AxnmXMB5+uYyD5Ci+CbA7kifwcrVHPEgQyUDbYa+MoQ==');

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
