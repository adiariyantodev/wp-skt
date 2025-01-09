<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adig2162_wp285' );

/** Database username */
define( 'DB_USER', 'adig2162_wp285' );

/** Database password */
define( 'DB_PASSWORD', '4v2]BpS55-' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'vsxkzgajekalzxumcdwew0yrylzcg9lwfeaspcw94pjifbyuwbvtdb8439ba6g3m' );
define( 'SECURE_AUTH_KEY',  'dbktdzufnvlwqk9cmt6xpcj4yfw4aqb6gehm18ewbr9vhqyqgknout3md8zmdcwv' );
define( 'LOGGED_IN_KEY',    'tboqkerv3dzsyfniay84u5bgj28or10wdeixn1j8owsiftp48eh6fxzmdkirliye' );
define( 'NONCE_KEY',        'lhbvdsgrfa9bt2ccugpopesimj3glpoppvfpcmripviqajxpqc4dj4l9f5l8nkz8' );
define( 'AUTH_SALT',        'tbuxzzpyxew2pfd6x8eschoqmniogro1xsajqegxcd5gn0nusvymgmoqqlwejj4v' );
define( 'SECURE_AUTH_SALT', 'xxz0nqppkeqorximgpdlphwwfiu5tv8lsrm00q29hwbd1ggoobltghukkncut2lm' );
define( 'LOGGED_IN_SALT',   '8jhlmdteitqne6e3krpvms2tw4fidefyy0ewdgkkxrje7zjtjjum9omm8kdwtxby' );
define( 'NONCE_SALT',       'yvm3eyjrskcnnx8mllgu9fe9fkbrddwkg7toolpeyg5zjjwi97ws4obz6jvlbdcc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp87_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
