<?php
define( 'WP_CACHE', true );
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
define( 'AUTH_KEY',          'A 8Th!&g!WvUsPbz2g4Jc;Pya[_Sq^nN@X1#L;<:Sn>NOe7P|eRs#c`q|1b_5!RI' );
define( 'SECURE_AUTH_KEY',   'uHLn}wDt.V5v!Enm^[s${1l@O3gD2(L:>Z+C~qlpaMgBO9]i<3(Ykg@<&bD7tFtn' );
define( 'LOGGED_IN_KEY',     '[b)bCEQLV=(`G8@6d4QT.5xtCnpB_fw_TFz>/Vd-MuM#A|a~g1Z0ZyD:!kaYl_B}' );
define( 'NONCE_KEY',         'm1CjF3a`rn/W($Jla!C(oDljui(1zM{:G1_-8fvmfe6H1NW[r9yIjE$|WAr6fB$m' );
define( 'AUTH_SALT',         '|Ly&?^^nXoBc>{L*jaqQ0aAm.t6iI=%1~PlKF45``A?.%XK=Nt`O-,H7d+5c[<4Y' );
define( 'SECURE_AUTH_SALT',  'EcdCY!7}6WO1Y}JRofggI-L86|c;l5p4jnor&v@o_J^10-h~g!Yn<RHMeLp!RJ[%' );
define( 'LOGGED_IN_SALT',    '9RGKBin%&yi2cqY:NaM$6sO1CM%FZ[zQYOll%3p-P9VB`21rvgPF~fZ|Xyl`IE-q' );
define( 'NONCE_SALT',        '3*TXBz0j.~ sevrCZntiRyO(fpOi:pBLul=|B=|NT;]/aT Kv>r%TGyxBdOY%:L0' );
define( 'WP_CACHE_KEY_SALT', '|41=!la!Lx/e2E)EKj3 PIPK,n_!`k+>mRr- h_9E!-?y&j>C]5!/!1u$9&-|,Ky' );


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
