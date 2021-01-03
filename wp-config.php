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
define( 'DB_NAME', 'wp-domaci' );

/** MySQL database username */
define( 'DB_USER', 'wp-domaci-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't2hdM L0,F*-##+5P(Via)&gVp#UYYpP{N@ec6Sd5@Y_w/6lseQd-!#wmHQ,4J|W' );
define( 'SECURE_AUTH_KEY',  'zFIX{yhO[xI2d#mJ+!hHHgU`1$Shr_4 ;T*]4J#;9<CopvAD=L7#Z;z7o)oUY` 7' );
define( 'LOGGED_IN_KEY',    'ByuRj`D)_uP^2_c~.#3;o!#:BJ1ae&J8b[#F*#s}]pvKJ/m8@?sg.6b<wrH*io]n' );
define( 'NONCE_KEY',        '8=EzN(~@Z-Qn45vF.fo./h@lbmlD?a>mI=kpu;AT2efeK6mZLAYcWjy#9)0,bsA?' );
define( 'AUTH_SALT',        ',bfW<N6:NLEf|s*+!C^vE-lf_BHCSB.tfs& U|T5QyMI`pwgipBbXde]`#Qsi|.P' );
define( 'SECURE_AUTH_SALT', '.%2-7KJjXNs2.:or:yFD^&c| |dxzooL*SVRLMu`&qI+?7[&UIZfttyv_lDd5629' );
define( 'LOGGED_IN_SALT',   'L}D>io@7<O@X&u :.@k$?dyw5n$8Tx$a/86IMie!m/<!VG|i^h&i* #mq*3[^sGL' );
define( 'NONCE_SALT',       'FcJ&jPkQg3e3;hKgY$@iy(=|5hcr;n<E`{$}NPA`r;Y5-9`#N&=</K h.3wR9<{/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
