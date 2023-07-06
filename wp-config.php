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
define( 'DB_NAME', '2ndAssignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'hR3K+qG_r6kS#|fy^#hz.]61aL]U(nuKh]}rIF?<g>iJL($~FW|S*K(A?[N.wPRH' );
define( 'SECURE_AUTH_KEY',  'tt]mbZ~~kF[9o=_Y%eL>RrRMWs/$]`y,tXcovYgVgD268#=my[@8kwY{0*yKk-uu' );
define( 'LOGGED_IN_KEY',    'V2gL.vXjd~:?c}-4^{>NuR{LnPhDVtE6hRp]k_+29^ziA*m~AP|Z[2Uqz?j3$|KC' );
define( 'NONCE_KEY',        '(p7xVfL>Q?lY)0ibnGHdK7`,:Jnn24p-CsB:ivj$W/<7!:rGocK@fg/@bYdN~[$p' );
define( 'AUTH_SALT',        '+3!H[:6jN,jNu*1Qq(9(I2xOdSzn}2h[])DhUT0o-I?*nl<z:b$prH,O5J&A{`.+' );
define( 'SECURE_AUTH_SALT', 'MP4R(|a0iW,oRY@jbA|e4C}Nkd2}uTrojDFBQE^VH<6:~NOv2,.N9uS)5|+?x+ i' );
define( 'LOGGED_IN_SALT',   'Q=aH>!njP<T(8w>GA}3S)gYy0~!pW|3jUoPP2 hR(kmf(45)7XYz9djoi2&QBedI' );
define( 'NONCE_SALT',       '_q*v0*1Pv&di[vPpp)8rYBA/Z;uv%:7yj,EubZvtp3(z+6nQXq}q{5=9l/ew2s9G' );

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
