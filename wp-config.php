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
define('DB_NAME', 'werkmet_nl_wordpress');

/** MySQL database username */
define('DB_USER', 'werkmet_nl_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'moykg6xDcDay');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2tqZ9QrxHm3OrBiK)Ou4ROPA#!oTviC$7tMcNmw3h(mlQ8f(O5$J@@Gc)b5jsFpB');
define('SECURE_AUTH_KEY',  '5*m%^aa7kyCadYXlZNM$HtTSlv#5^R9KoSsMYtZdy#kkt*5usrljyVdOyOhMA%#L');
define('LOGGED_IN_KEY',    'vgCKsAXNjA*aX18$IFXZAn#cAQdSKaHI!8epBhUPDqg84i61UlID@*N*ZnEJWdFs');
define('NONCE_KEY',        '@5V41*(VLPpoO$cRzhTb^23scZdIIsmhFQ9jFjp$Zg2*ee*%o$iVSDti4rA30!d@');
define('AUTH_SALT',        'c)V95LFyz4Dn08K6i1s)mpcQk4h@JSb6%W9)$UlUJ^brc92*aSqMidIa*Pji@YD)');
define('SECURE_AUTH_SALT', '6!im%n@U8WOaLzYAflxxA$8e^(EUBBC6QQIiohxZyTqL71tQR7x40CHG0to4^B6V');
define('LOGGED_IN_SALT',   'GjY81qj5R267P)Sm4TigwKaHys#!)02x$hNusOQRN@yBm%u#2^Q!fEiQ$sJ2Z%s(');
define('NONCE_SALT',       'KCGAbLAkvDl#uACFf^eoo%nDND0gxDUx6@eQHnR%WJHz!givxJIEdCW3irM7VG6C');

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
