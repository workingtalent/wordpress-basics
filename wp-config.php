<?php
require_once(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();
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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define( 'AUTH_KEY',         'yN~AcB4`;7gpfxDpJb5,5Y~Ivq:ICK:n<Iur|mJhlSPL~$iOj=PL6fNiO_P`_|e@' );
define( 'SECURE_AUTH_KEY',  'o;reHJNy G(]ySZ8x?E~6tOP:3b>,/Ne%gD8JI48*XHKqr{dv]&m,$F ;Gdi{Cox' );
define( 'LOGGED_IN_KEY',    '1.>jp)%}7a5uvvn!&9e{qJ&YX_7q7yfOc_/K{;>RW&v@T&-T7,v9wXR%8@yY+JF;' );
define( 'NONCE_KEY',        'r;h>2Pds6?kD~M1wGJ&IHGd2(+_wqpV7^+z#XiK [qjoV,1&INZVQNt-l;)c+!ax' );
define( 'AUTH_SALT',        'Y_%:k3 -=dr&r?Z>;6dVFIo+X}K :;&!Oq=W5mMEUu@O#aL|+i6tIq6zIbGxL`Y.' );
define( 'SECURE_AUTH_SALT', 'HHIb)Dc1gb:#r^g9Ir]3L@-]t7Z_:evoRnCF0~eO`G@eI8kq#F@;;vSpQr|I?qs1' );
define( 'LOGGED_IN_SALT',   '7GiO;4t$/l;8!}P44y[J&go[m: 6C~]V])=T2@4grn IS.Ys%S)4`2hKl07jF`.g' );
define( 'NONCE_SALT',       'Y*Wiw`-yw1tEY%CS%+^9!Yk<>b*spzxNmj0|,n$c m<%s Z#N8a2HaE(TBWp3Gis' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
