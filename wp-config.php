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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tmdt17_02' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'zV5i?R~G<as4n{F0]Z%bBYH]@Qmp^*PtXPG7*`V-~w(Vg[P#i-yN!u$d>^[SAX|o' );
define( 'SECURE_AUTH_KEY',  'U4]0??-5n.#[t{6l.0,Z&D,6|=A/+aMD.V(^CFy)jc=<oy=vcj-erL(R.#(HxtL6' );
define( 'LOGGED_IN_KEY',    'F1e/^`EoM/`37a6NzK bY_`/&.=c5BI-Ur:D Qk#koPdsd+(Id/O7!lgcEMSq^WT' );
define( 'NONCE_KEY',        'jW/Zt&YZQ~);yc`6d5If7z{->rHa2_DVr5cR{|mVktU.ji!=xWLK-_o?Q@=yX$BH' );
define( 'AUTH_SALT',        'W{=p #dtQ1^(Taa]ZnxnTP1Mz[5#x2/!~NA;v[G`wwV!>4u?^DpPsuoxo<PQ?y=q' );
define( 'SECURE_AUTH_SALT', 'ouo!Z1r5![!a7d|be/nI!N7Q2vox}P.hdnJ?+$>J>9hZWN>48AH^@HkiF2[A,S2H' );
define( 'LOGGED_IN_SALT',   'k1TX,$/G0d1h79fVtH#/(+uVE7<u$[ JVN#s;VK@-Qbb/FOx;XWK< DD9{T4e^7z' );
define( 'NONCE_SALT',       ' #7`=?+29N[MTI5R=/0%{LA>6%2~u0L-75#^1%t49Y+KI9L=|B5&C{iFbl1S@!SU' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
