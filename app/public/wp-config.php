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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '1xOqGlas:I7{3gAL)#Yb*aqV+OHG&f@f#7}Y4IyRd3Xc#/lZe)s[He$.It,Pc,0,' );
define( 'SECURE_AUTH_KEY',   'PrCqB,2+asb+.4NUz,vC?joX=5^/>CH*h}yi9_V5B[n+DY,zPsOF0y1!`!(TrD!*' );
define( 'LOGGED_IN_KEY',     'mNK4bjqwT:{`kSoo_/F`s)<f#Q$DcNY#im|#6Y=&{z7L,wHp!mxC>DLvS_*c`Hsm' );
define( 'NONCE_KEY',         '~M$[rK{Xv/!2&<LyGi9fS,?Q%Gh?&(|Bu4)?-ViCEC(4LG.Cx%?Vp3ijbD3hkLY~' );
define( 'AUTH_SALT',         ' [E7.76i.Cf-^W*!jXCyq$KWMgu.*KKNRe=AI^D;^btcD q}SNs*g<ok[3!{:/;T' );
define( 'SECURE_AUTH_SALT',  'WavjM<&5a}<g($M^z(N>,qRtd8mqfis6@kw=h#sgP1>O;*k78tD$}5NIBCeD&__D' );
define( 'LOGGED_IN_SALT',    'v0@J%2%`jVF`JV1S{#d`zul0aIOP2G3f|b)PP%KHE3gdTY[U?p6PL0r;^4:`QBHr' );
define( 'NONCE_SALT',        'Jp8/o@<hH;*]2w;pH|=e$Uv?i7.#H;X%}W9>^x2,vM4N,([PhM#p~4{<ffxtvw3m' );
define( 'WP_CACHE_KEY_SALT', 'T|i%X@x=y!{o<JIs5v9xnV/=3WXsRj3Y+oMDmEU<4bj }W2VV*$G7eas[X!ae8;,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
