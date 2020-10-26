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
define( 'DB_NAME', 'simplonenda' );

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
define( 'AUTH_KEY',         'P=$Q+-G*#?rY%_oUI4vl*2d2ScO|EI2Uv(?%hJs>[I:PUVU-7(WOZqaAbP&_?%S?' );
define( 'SECURE_AUTH_KEY',  'gX&?B_Pp2TpjTy.YIy:wxZQXpq[6.~`EHd}`:|:!lFzUl~8JoYp,Ea;zeymE!)}n' );
define( 'LOGGED_IN_KEY',    'JGW+6-5%_[>i|o= Y!v+ySRQ:/,lyDI:xg9w[f$&9;z-i:eX{Q+>ZwmWszuHiH=,' );
define( 'NONCE_KEY',        '{EPM]^<7EDY7usGt@,&-,0d8ov{6A^a=)Wi=IHIYcBTlH<oB?9oC=W,Sg AR;MRF' );
define( 'AUTH_SALT',        '.kbaT>c{9GmY&Sg~c@? rl(|xeG,^X*8j_ $UZZQ/40X8Q*kuD?&fa0q~J9^G`)x' );
define( 'SECURE_AUTH_SALT', '!w0+5oGd@uhc&#-pIu)p;0SgrDXo=*WFQUd:mv~2*UU|zzTNW$=<Gb#(&*7tD3v)' );
define( 'LOGGED_IN_SALT',   '2.-.&2OSiue7<S?Cg}xJBz}eFXZgAN2%o5vRH`XWdcw15:O/eTHU>5G/}N_L73$i' );
define( 'NONCE_SALT',       '*LG(?~`a.CZb$I_65/ ?2oRBpz4fW$V7&mFXYbasx!`PM[bu)<9N$M[||u?`-;zH' );

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
define( 'FS_METHOD', 'direct' );
