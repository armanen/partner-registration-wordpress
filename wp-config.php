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
define( 'AUTH_KEY',         'uI,QrIaOk6[;iC8`d>|7v?W_D=1)O4C8FiJMqFP`u}kdyb%Xcpqu[$6II1;E&gQC' );
define( 'SECURE_AUTH_KEY',  '3434(B}jX9~9n]R-)`#3ksE?|^;izNIR+tsClYPCroOT@rVPh9t+jncbJ<6:`Y| ' );
define( 'LOGGED_IN_KEY',    'X?y54=q%-Px0m$M.m#o#gH22T!d:FBY]=Sg%*qChM}@CH[r4vr_NFur:yhkE5`0e' );
define( 'NONCE_KEY',        'unY{(wd&8<s*|qjE=ZGj9~JMh@pWgqmEml0xL>d#IOmY~@qNs8sEgNUW*XT3iVk`' );
define( 'AUTH_SALT',        '7dqXqhC(*BAN26XcH2l;Uy.p~+*f:J)}0y0fm y!gTSN2c]G!%~=+NZ=Uuqenq7E' );
define( 'SECURE_AUTH_SALT', '1`UVartO.9u}D1NCV?y>G2J#*;NKb=/QU]T)xVC]>g(Hu1WC]x|v:9V<%dc!HyKF' );
define( 'LOGGED_IN_SALT',   '!TqYtCWq|^){9n+3qt:#iUft-$?^pf{25v^_]}O)FzI?H{=!?9BH:WnHOKkc[>0y' );
define( 'NONCE_SALT',       '~O4@50E+@^$fUeoF5u#[F9{rF0[vE~S1]_*&s>37x;a$*Z_OFmTN(,2{-Zok#{n@' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
