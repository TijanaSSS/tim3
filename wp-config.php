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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tim3' );

/** MySQL database username */
define( 'DB_USER', 'tim3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tim3' );

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
define( 'AUTH_KEY',         ':@Klh)[~9>I#uwk)+epvcR8ABJ{eZ)scD 0uzjQaw7F Ew/v>{bcm5?H+{Tw;Ini' );
define( 'SECURE_AUTH_KEY',  '-O9KyVx!F0T3E^;Bbh5N6j)#4<=pfo}}ls1TT> d>1E1aC.=y]h0U^vb;I*zvKtN' );
define( 'LOGGED_IN_KEY',    '$T($q `K!mm5.}.3()lAup((sUKtsu3YQ1[rxnQ2;m/>Fy`B1aZr=Hv_l{N_ad8[' );
define( 'NONCE_KEY',        '~VMKm%`^huH,D|)COSVjxy.OaYKXo@5;I)4Q|nUbyW{h87N9qqUq](%|](NQDkz+' );
define( 'AUTH_SALT',        '&I.&~eK8N 1 [6;0lf!(=4?Y%[V*7ff3@HP4^w]-th3|KC=k`Bj$$/tBy[8=Ep~B' );
define( 'SECURE_AUTH_SALT', 'v^>(ULlvqd.nSZ1%{3q}[T[j yt`ct*6XCzQ9|@4hW#JS8on/IX(z?7`3-zS-Q=S' );
define( 'LOGGED_IN_SALT',   'N })^Fr4)r`vgJ&:}/yJG6Ip`CKmv`dGc#>1f$YV-$7F4ZB+z2M:Q}BcmQ8#*N|q' );
define( 'NONCE_SALT',       'Ow>B#iAI|}6|;11$]JF.YF.|R@o{vtmh7<Hw9$t}_uP02%RqPX$yRK<6^Qt2>94`' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
