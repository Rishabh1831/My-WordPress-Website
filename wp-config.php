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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'JkSq(URq::Zr(pGRV}KP~$-wKwHgDZ?;drK&N[vh=_67f9KJGNDq*x[!2J[(Mk++' );
define( 'SECURE_AUTH_KEY',  'EX8hr?|W!.9W]X FsL!7n;v&G<DXhkZRt3SbWg@JKG7+rri_YlP<^V)KENNgw](~' );
define( 'LOGGED_IN_KEY',    'lac=|C@z2i,mY7<h9vzu95E+_2whPMsBA|cj$QqX[~)VXuByP!v`@P)EzXn20c<I' );
define( 'NONCE_KEY',        '(JD=~%=W]x6*lpmw:,/&FczM=vKO`h&OQ($8!S<MA?_?3i#xDLOC <x]5ch5ySBu' );
define( 'AUTH_SALT',        '(UO5ZgF%-[W4V3$gK&u5g`/4<Gd5<2T>aifj(D4|X}ke~tMv#q8`;;d (O2:Jbn^' );
define( 'SECURE_AUTH_SALT', ' >bgX@> D(}.9G8(5W13<n|<-|W1n-|Kg*zI[M^j:JrM/?djk;y0h<kQIDL)D8CL' );
define( 'LOGGED_IN_SALT',   'l=%hNucJTy+ tQ*0JgD[;*40MPK1?|;h~q9JO{<G-bL<rNjAGY[Ts0TT?WD@83?g' );
define( 'NONCE_SALT',       'H&T{z%1cc-)K9d=B[QFW<lcM!;KFRc*)]Ry`sIqvD4gT jf;_d-]|Ut hg+1}7]m' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
