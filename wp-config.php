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
define( 'DB_NAME', 'project-web_db' );

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
define( 'AUTH_KEY',         '`WBSeQh5s%&TV+4/g><(_8Xsd+^Xt;3#NEqs]!]lol0Tn@3RK_E^mM[gIa4cq4&e' );
define( 'SECURE_AUTH_KEY',  'h4S,N:n%{u38_}?EfKlFXSx&0|K;!IzHOrIrrD%_6,u]O}t^H!*hBdTt>A,oOBx`' );
define( 'LOGGED_IN_KEY',    ':a*Rm;QHuq3;ZNR=DEYk0JTHpE(G4~v)7:}dT>kz[M8<Sf=kXp_Tl$6qxy&]*mZ-' );
define( 'NONCE_KEY',        '8k4x+|xma;J}&9)5XW4 ^8ca!2YCyEx#j!.tl!LG7>OT~CojqGp`?@w<cB!$%W$W' );
define( 'AUTH_SALT',        'z^NgK1K4@ 7Cle#?_ZK#uDkR**P8g(lEu eGq5O}akWagD1Ey9$_8d)HpRGU6,]w' );
define( 'SECURE_AUTH_SALT', 'j}Ip$;y3#94utYq<c=MLXje42,q&C[!Pdv 5Vmp5L>WEMz#Dy:fxo!lZEQN6$9,H' );
define( 'LOGGED_IN_SALT',   'D?vN]!`OCL}=+sJx0=c:%obN:OeZ^`M=Jo-x$(U9h[}dOR9uml;S3Q[0/&O?IJ{L' );
define( 'NONCE_SALT',       'GYxF`nv $JdU<@(h5^@^~Y,me}Iae,<w6O.K96vhB@[TavXJga5W$PtPTkn/g2X#' );

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
