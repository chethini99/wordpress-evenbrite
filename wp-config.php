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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_37055586_394' );

/** Database username */
define( 'DB_USER', '37055586_1' );

/** Database password */
define( 'DB_PASSWORD', 'Up01S)f.4S' );

/** Database hostname */
define( 'DB_HOST', 'sql308.byetcluster.com' );

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
define( 'AUTH_KEY',         'rhqbj4qg4uykdh8zcxoevz2ssqrifigviamcm0dqvekelaxjyestytfeocpb0ae4' );
define( 'SECURE_AUTH_KEY',  'krqqvkjqgpq4jozrrfbd2k0oaprtgr681ssct6u2mjyz7ctvtdxontd1upthqwra' );
define( 'LOGGED_IN_KEY',    'v1utxedrpt4pjpcgadz4jl7p2zt27sgfw8fhtlhvjmhbyqhmvkxleitbtpllmgk0' );
define( 'NONCE_KEY',        'dilrp0sofbp6h7vjsxkc87xuk7unonbw9iqxghvfhamosd5ziab6uf3d1l9gfcls' );
define( 'AUTH_SALT',        'qcqldhucuyvn9pgutx2c8luvbyu0yccqzt0slpcxojwcyusjmemciffojhhrw28o' );
define( 'SECURE_AUTH_SALT', '7ldoilklmweihkm3pveblxbmcoofgflrisdu6gbrrzu77h6oi5u6of6jwbp4lqbi' );
define( 'LOGGED_IN_SALT',   'mnw4lgfuu633c87bvgfqfjwcwu9onx7mracjbysrhhmtbh9lpp1pre1zlnti9p6t' );
define( 'NONCE_SALT',       'wbcig0ql1adpkbhutbzprp09ijzq93ce6yzs9caaqruze4olgdfnkvxkhysfkmwg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpiq_';

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

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
