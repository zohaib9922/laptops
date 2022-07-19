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
define( 'DB_NAME', 'laptops' );

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
define( 'AUTH_KEY',         '%+Rv@o>N$H%;`s@vo>>-HeA@W}ijQ=3i8kcEyn:nkZJvlF~Wc6Hg~G5q[q>y>X5M' );
define( 'SECURE_AUTH_KEY',  '##it`.YoQKIMK*BbB)b[pKhLJhB]{9,}kl=RB5ZJF:0*k)7:C0oNW_E55^|zl++6' );
define( 'LOGGED_IN_KEY',    'B<|uQDh3]gN|Wk6aNhnhIqCX&.e;D}vUDy_!A#GAWGmWe7{S0!7oU4_d$IZi#tHp' );
define( 'NONCE_KEY',        '>bNtO48&A^r,?/fA*qE{z:^@gk!bw9>]pYtoh0yH`M]Ug;1tDk2bb@Y77O_C[B:g' );
define( 'AUTH_SALT',        '.<$&zoIzm0Xz9q>PF 2/q7JI?=,RqQ%yk6% 5=Y/4+Fp=.s?B(`D:1:m$BgA+{JH' );
define( 'SECURE_AUTH_SALT', 'r,H7sX7#U>444qD3+{G&0nH~loW>1IkF@ M0tbM v1=uI1e4CVAgnO=,PvNmQ^Lg' );
define( 'LOGGED_IN_SALT',   '%wHE*kS?^_<$!nt):8hHdK!0sH5|lk/ESuP{XDG`OdHx)?#7$r<<]mGT/*g$au-5' );
define( 'NONCE_SALT',       '7t~>wti3zIS7>-|k=Uk4q`)}lq+[oWP_]Ifo7pRP6DHO|JE7UsZ5X{&9ITZ,BQ+`' );

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
