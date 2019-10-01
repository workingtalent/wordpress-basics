<?php 
require_once(__DIR__ . '/vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/'))->load();
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
define('DB_NAME', getenv('DB_NAME')); //wordpress

/** MySQL database username */
define('DB_USER', getenv('DB_USER')); //root

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD')); // ''

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST')); //localhost

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', getenv('DB_CHARSET')); //utf8mb4

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', getenv('DB_COLLATE')); // ''

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'olZo{>yJw=!ks?x~GO=L1P}$rsl9u+lq0+$_=ePYJe]yelL6Go}ex4n-Yt+To;~w' );
define( 'SECURE_AUTH_KEY',  'p?uY+FTo1]G1>gvofWRTV,6l]_4fl[%Qi1c0Ud.~-~Y k1FRTwW:_Z7!_$G>XFTg' );
define( 'LOGGED_IN_KEY',    'tKZx_xwX[ k ,&B|4PP$A :>!bW6K]I={x7^zjD1i:JNjJr6qZt<KuZ^.S+(M`-f' );
define( 'NONCE_KEY',        'a1-p-q4_M>t6[r]/uK|Oh@(a<pF .`L1<v]$}*S]HD=2Y?L;.eTL5 ]#RrQ:S[4W' );
define( 'AUTH_SALT',        'bK=?olD131rAJSUiv*.?z-z`nM2Ec<R&4}3uE UBA+(P=pav^@ 70}k8-Psq1d]5' );
define( 'SECURE_AUTH_SALT', 'm>(tFN~Pm>^K+[)yvb}on*6jT*T*;A -yF&,R:|{>wWm0#jZr;5u{*iu{Y;(JxO&' );
define( 'LOGGED_IN_SALT',   'g]heAA~GNB$g~lP/Id%j*@ALQ9`Pt<iKR2G4R200Yp--#RWm,&FNBWiPpRC>3[k;' );
define( 'NONCE_SALT',       'n*)RT`E.hU:^E)?8~!U#wZ)|P0FAOL-Y$,lyqU?3?~E5w$]^S`Z&Z7J6N2- ,Hrl' );

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
