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
define( 'DB_NAME', 'getworksa_db' );

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
define( 'AUTH_KEY',         'X0Ue^vj@:%aCYtv00yUC>gn@^mV>cDHk:qb2<Jn:`;zB{_dyB#wcLe,KQ0f+G[%s' );
define( 'SECURE_AUTH_KEY',  'y6da?;=%P(5?:[jmBly&gnL :5mZ7KAgaMLtJfgnA!kZ1ONvlu#P0{q5w=.  *M!' );
define( 'LOGGED_IN_KEY',    'L$o jeE4_>;jS-vftA6LVP:SZ!]t=>#aC!OIlHMSX3UNhqR5Al:%&_~c$XXppc~/' );
define( 'NONCE_KEY',        '85)@iSj2X*n$@%!5W2%|B)WiG?KU@|hC6%,IV!`@>}^cc;CX~B}BLcE;fV2CN?.P' );
define( 'AUTH_SALT',        ';S0MFgBU[;_C^)TKM4_4b6f1&ClCE3jYhSYq{EWr%vXEe,(5:rW8ZEzLUhZir5mL' );
define( 'SECURE_AUTH_SALT', '(~wEy}SQhAU*8%8`$7X;A[G4~brJF*Kxr3<0xr7sj:tB+Hyy9L%*/{,F8iC#x.2M' );
define( 'LOGGED_IN_SALT',   'Q=4`4|e* Ivb%c7@tgRSpjoG`H<@nGx^bcR? U/m]#]tYD4/!W 0Q+k8a_R(]17^' );
define( 'NONCE_SALT',       ',90HQto b=~SB[p0BA(L-gntoT_RM*E+!F[rkNdo^>u{:8`#4gK4gn6V9O7?Y&&<' );

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
