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
define( 'DB_NAME', 'myfirstwp' );

/** MySQL database username */
define( 'DB_USER', 'Reema' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         '(ifvVJUi~D&QWiTv([*4|*H6*3ceHyVXmd=92%y-G44c~/V?E{D^C)Qvuvry,9;f' );
define( 'SECURE_AUTH_KEY',  '0@>KMJ96yuvj]PATbqkX!fHR)N)mR3Jw&oy;)544D~S6Y /@`>|BObKoAQ`2 ZL:' );
define( 'LOGGED_IN_KEY',    'nvLrykztKsth,n@3$qjOJBZgkxM|W{qAZ-^DUU*%_7{tVV(kP |DyXRjo4VM3wQ5' );
define( 'NONCE_KEY',        '^,[1j7+!DAA|Q+.1}+RESN[C`9r2Qz Ir=~vcDNBz_m6uveW[1w2Og-Q{JDK))@c' );
define( 'AUTH_SALT',        'onPF!d_m]`68: dJL)9nE_7rlUX-@^3kXnR#FBtSr]*i-B__Pf2scaO=~o<Z(`bN' );
define( 'SECURE_AUTH_SALT', 'Ws1Oa!f1wMSbG?UJk7]>cdXy+s8*G<V#tHh0,)Clt9xh2QdPiQ)V=^u0`3Dn@JNH' );
define( 'LOGGED_IN_SALT',   'I^qal&PRsOTMWmvtvW`q7-##&D_;F=@.A8e5@TQ6b~xrh:OoC*giAU}@?n =zLT}' );
define( 'NONCE_SALT',       'Tp%tjKFYefcO)t g$)]6Y9MEa{lmy17xS5m8>In:)uw5t3wr5QfG7F;r<]T<Q3yY' );

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
