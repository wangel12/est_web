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
define('DB_NAME', 'eservicetracker_home');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ifB+SB-`$$KDR#Z0~bN6<Pyl+H^L&`$fJB8~ MhrCM/Li)Od.%<uxD?L-xa%x=SR');
define('SECURE_AUTH_KEY',  '-[r9uG>WYR.=hDTWhXJrEg}$s|pu|zTZ^36-[%XL;aGKcY@PYqYB0}Dh.jSq:DFm');
define('LOGGED_IN_KEY',    'P:>iBtxDC*Z))*kPf$x2@@3K8.f-<rP)bdl+ ,{u576OWF0.{o!f]!x&6;+ q#B=');
define('NONCE_KEY',        '6,L$20k)wF}O)6k iS)M>oq8UkR(Yp.!Sbo1tU*hS2zK{EX3})S=9/SAV0Bk>Wsp');
define('AUTH_SALT',        'H.u]gabH+/sz3(Dh[`#$WD#`j<lsy,30-GwN(bNU{d/fv})3n,lgm$Aa~D_-L@w_');
define('SECURE_AUTH_SALT', 'P5$hh^o*EAB=a-IllI#NGnr3?S&Kxp7$*!1)QOw?>$rQHrX2;aO[7B5fxgmWH4%0');
define('LOGGED_IN_SALT',   '&QKY6<svM7)C}f#o,L?_M?:4#mUIF:=&z2W&R_:MO[)J2KBS`U= @[?JlG}nJ uo');
define('NONCE_SALT',       '5wk(2j6LJimKkVEOdQ.+o=pSV+}#z{3L_,$MgP78|pOUs@/v?2IZ3zea2kJ+Q0YZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'est_';

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
define('WP_DEBUG', true);

// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 1 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');