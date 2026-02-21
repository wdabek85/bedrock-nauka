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
define( 'AUTH_KEY',          'l<M~olfYfs}2S]c^3Sry$a7Q]8QN6Uix~O8S*.|V{HO6w|AZ:&J,o*-&0tMcD/)u' );
define( 'SECURE_AUTH_KEY',   't+s2 /%Thf`f7.upMr~jG0m=DD=e!P,sT%ViK6#hrh [d.f`MdP5!b#!}_ZMzHTk' );
define( 'LOGGED_IN_KEY',     '`nWU6;j%<L[!9BVTk^1kLLaG?B-b^0$.]Wkhb>N-A:[P>C5k]&/L/&@%K|_R4P0.' );
define( 'NONCE_KEY',         '$-[X^6cE# PqXSY:!2#NMqAC`nj7jl>L$P@PY 3yBqvQhA3wL9jr0: M1 pyH4wH' );
define( 'AUTH_SALT',         '4K>8=k;Q_fxI1_qYrcO76AzJHZ_+b7??m<8_iuwxe+L4m1]dF`;_[rnuUCofx;$v' );
define( 'SECURE_AUTH_SALT',  '.HC*iUxQ.W`51U5L(0A^[N^ x$WQQW_0t>yw pGrJF9T?igjsGR_E)V=`Gp6PKB;' );
define( 'LOGGED_IN_SALT',    ')ggI!ob8LL]iDWawe?~:pC~ogIG;ag7Hyyrs!mqWjWyi;D$V*u.Lj65u*90Kzrfl' );
define( 'NONCE_SALT',        'x4~OWc<E!lDyk|by/^%VG=U[1CK0p4 Z_+[_3^d^E.ZI#O.a3(5R]MplMW`Gt+Gc' );
define( 'WP_CACHE_KEY_SALT', 'ow5cSXk*d7p]2#3&%$aCfW:UKt0(zw6~Mbn/&>[6](Zk[*XdpU9s9s>o{lVh)Z@`' );


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
