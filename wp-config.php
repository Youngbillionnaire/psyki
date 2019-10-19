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
define( 'DB_NAME', 'wordpress-psyki' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lytXDIGgH%o*g;`TM#hV[4vl@6<hQV]?YWo~h2VfW9Z%2JEb;d4J8!NqXy#:6iX%' );
define( 'SECURE_AUTH_KEY',  'C|S2FNVll*}jRaQX!7:(FHcn%)N6=BoTm |_#r>|+R4vd62/M=`a7]#7,&-|.Hdf' );
define( 'LOGGED_IN_KEY',    'n@LS=,0#L_%-2Bt5v@zut$R}syl2<{rp|q:NN)zv|~cwaDKF>3J7w6a;<RTuFB]z' );
define( 'NONCE_KEY',        '.zS[I44r+5OPR$lC8yUl|fg6RT-Q&C%zm(CqQ_ahZM vp&E*J<&? ,A1zAMKuyE~' );
define( 'AUTH_SALT',        'v=:aqEn%},l($1phHl-tc1K%^}pCr}*q#Yw4Z,1;Gd@|4*kR B3)<{T[&OE<+D7:' );
define( 'SECURE_AUTH_SALT', '/^x]V)3z#3wlx$ .7AR#fInX!:ra2Dm55jfU!aW)]_8N@APsH@B8eCgdS7oTX&4R' );
define( 'LOGGED_IN_SALT',   'gQ~aLb-*oI;gDUF_CyH&opr&:Qr)nDivlqUzL686wE`K,2;g%nh)zLowqz7Q1^Ld' );
define( 'NONCE_SALT',       'ldcA_Vy>n*TaP9q&oyo Dh^1+LvF]8{#ie?@y`x* -%/#dTh03g(Um 0|G0pG=2T' );

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
