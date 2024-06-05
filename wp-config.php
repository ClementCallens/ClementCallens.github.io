<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'RMhj%+}i9{KFf TI&qVTJnuiev-U0 kR=w4J-!:l;`$]2i|1OY_?{kv63]ai9FbV' );
define( 'SECURE_AUTH_KEY',  'Vd0B@O=@6IQ9X,>EI1P|-?j_Zg,:Qh]i#UemaAP+zF{xW%d22<,r^4MUAOF{PkI>' );
define( 'LOGGED_IN_KEY',    's $G29v9iaW=3pI_N=h}$>r1)a+TRs<4X}!?w=.{VVcAr:8L=}fd%b1l/{~<CkB_' );
define( 'NONCE_KEY',        'cBXyREV]fpi*ys+%jpJuxCNgdS5?}hng:Z:c`hFZFF-h<*d/[lFi*-r fS~B~1xI' );
define( 'AUTH_SALT',        'ph0VI>-I8`xKZ a9@XTYQZGz0oOkex%Rz,^UYrx,;=$5xRcRj6x6XJBIQ?g$`b-^' );
define( 'SECURE_AUTH_SALT', 'ys/-Aw9UO.5bW}DVph%`&-$^dt:VkNBJ~gpCn5>tkP{[JPih=X]&?|Ydc-`a,A^M' );
define( 'LOGGED_IN_SALT',   'l]n!B4 4.<}hgy%!kkN;oRvD`nGm_A=D.,*8[qG1qV(zm/xucX@*e)<.>QBJQ3,t' );
define( 'NONCE_SALT',       'MuK=<Z;9)[9P8<sS0 _4RGXM}yS^wOJRutao%hIUAwy>YkV10HlH; y&9 7lRhiR' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
