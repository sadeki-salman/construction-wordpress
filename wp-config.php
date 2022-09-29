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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'construction-wordpress_db' );

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
define( 'AUTH_KEY',         '+J._6`.4;$#Y({2hU(n4UC66*Zo~oi`hst9@uUc|X$mOus_%ckYekoRHxOzYC]|^' );
define( 'SECURE_AUTH_KEY',  'g^/!{MDU|2~.Vor+b;,JWg8a2QQ+lpve{K.!^<ek>M4VL-i|4JO!3~3AHmB; ^qa' );
define( 'LOGGED_IN_KEY',    '*wm4;#z@I@f;#S-`gdl|/-)1`%j|2qA^|^R`3Z=MNu6i4-$l:| 2VuYhes@76Yf%' );
define( 'NONCE_KEY',        'A+;(@?bbi@qzSkRZ>:kSg46t[dAyf/g<,hX~9>LrhJQyexFlw#=r>*J/}B3*Zu-n' );
define( 'AUTH_SALT',        'O?3R5BK`es7?>)px3WkmHc=N.l6a9(izEE?J_aBRVo3B_1fa~Fd81]H4MLDy^/v;' );
define( 'SECURE_AUTH_SALT', '{F)@B,@r^R;E.8j.9K0bE9c6L83r2~dwr-o7>-/i~Af2yqrB/tX3]kxQY2g=qba&' );
define( 'LOGGED_IN_SALT',   'Iy*e$o6/rALJbdi~Us+.7<sGV:{;i4[*}WY9j0pH]weRP[oW1@N?&RB{f%Kj5 +S' );
define( 'NONCE_SALT',       'T$5Yt#Ry ouc=5@/X-1:mRV!@3q [YQ^B/]Q!*7^tcki.fKkvNE1,-j.sVdd5+h9' );

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
