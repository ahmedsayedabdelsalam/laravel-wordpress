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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '@3GiQfJmPEnHn2^c]6#,k,N|8?c)Tpg3 9<L+MuHP;u[_X]:96~mZPPyXj3uF4` ' );
define( 'SECURE_AUTH_KEY',  'e$AJ.B1$8p34e8^v])DnS[YzzDQR<G8ui]GSq?TVpv1kp[44,7VR!Pi->l+dcqnp' );
define( 'LOGGED_IN_KEY',    '[{M>|&!ta*9QbT~YYH!VQhR?,Fh8vBy`rp#&Vc{*saI`g>QR4gE^K7{x,S.bND]0' );
define( 'NONCE_KEY',        '|UsD~QK@$YJcNx9:oxco/bh5FkQQwIlbC4,Ll4h~V9.Lud8%QS,023+o}T$VZ/?y' );
define( 'AUTH_SALT',        'Ul(K~bHN84XSe/Q4EkbK<J_w*r]<^K}Q,QZ~7 !GRF^^Qp;#%twHL,#zuhOLs%BE' );
define( 'SECURE_AUTH_SALT', 'c,bv^oN0~9-r-xDNfOf-kV<8 .&F#bAnJ>g|[ka;(I<i%8MNKUN+Q6-qXXOxep+O' );
define( 'LOGGED_IN_SALT',   '5/D(E`lsKD/M]B+5b7 2lw+OR1F4eegzJ5fwplLo4$FM6;B/]>EYvNMUr_/z[928' );
define( 'NONCE_SALT',       'FYTWpd##}8O|}jdiR|D=Y7nP iaVym:kL<$E#JS0GAyegq4UR&]O86}f9-UVgM/x' );

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
