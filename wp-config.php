<?php
require_once(__DIR__ . '/vendor/autoload.php');
//(new \Dotenv\Dotenv(__DIR__.'/../'))->load();
$dotenv = Dotenv\Dotenv::create(__DIR__);
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
define( 'AUTH_KEY',         'D#</FcQ)^xl3b,?JPKW0@3-NrMr=zF>*5WiB3_&SFAg_<EXZi%w<t0Kzno4{3xdW' );
define( 'SECURE_AUTH_KEY',  'G|w`0n}f@nRFIZcf.EU9JCrQ.AjdW<F0?tB7.NIu/4,S|f]PxdOYrfP:EMGhp=iW' );
define( 'LOGGED_IN_KEY',    'TsP[o)]uU^qbi<KAv,+lTww`xuUc#bAp] Xp2{2kqjiM8Z2Un4g?)j[pn{SZ96,C' );
define( 'NONCE_KEY',        'rk8^wGhQ.x$ @clT?;*Vs7lGyKr6OT4QO8JbkaWWT[z`BE+x|jS_5N4HZ&+~$}B^' );
define( 'AUTH_SALT',        'A7g3&,F0Sn*|IdW:`A+{:%?Ufxwaxd5 mEh7#<slZAkI}hAb.;3:3Oi~{VdFN.aI' );
define( 'SECURE_AUTH_SALT', 'WbR[g-2z4oGEb3o5TH3:tVNrw^1Q!@3zW2OpP#J!JHQ5/MmTLbh0^MV_aG1P-@nV' );
define( 'LOGGED_IN_SALT',   'jSmBQ4wR}F;CWwNL`EZ1T4@K`vwF{S#m{am(yHbGxC1*yf#qyfP4TvxH}Aq:I :*' );
define( 'NONCE_SALT',       'm,<xjFUh_x!I}D#J,03I<|yl$95!?18ivQYRPG/5tb<kWC+^%dFumB{H#xO|61pB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_PREFIX');

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
