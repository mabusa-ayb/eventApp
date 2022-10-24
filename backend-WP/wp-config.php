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
define( 'DB_NAME', 'eventapp_db' );

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
define( 'AUTH_KEY',         ';Jm(#Wpwx,rIW}m7c%V6;d@f=O4R^?@+S}}!<l)yL}acL=|i)hM[W,Mn =8)2C<i' );
define( 'SECURE_AUTH_KEY',  'gs`&Rzblcncd:jYXX%;=(l=.1RKawF]p%RW]sCjOX#j.rBjY-=:`+Xww^P//y$Ho' );
define( 'LOGGED_IN_KEY',    '{U<[jYXB5aN?}NiGOC!e<LD%2.*c5(1NIYvKi?x)IX56{WF2Blj[r|Wzal+#EE2t' );
define( 'NONCE_KEY',        '?0#BLc~T cCY()y/4POD6#OmE}>2qfP?7A?)h{;k|Qm*6V7$7>Yn-%4QbRoo 5D,' );
define( 'AUTH_SALT',        'OoO/nH0p-fRZkebrGyHxde^ZN}{=c;P%9QFZ-d!,GIi2`6&R73a5PIW#XYkZ&>L@' );
define( 'SECURE_AUTH_SALT', 'p9.g`OZ!*6m^>.,N.4z6d{/hLd`dHF4JohS)BkdYd=gkl&Jz1~Lh?t^_Xdz [lN!' );
define( 'LOGGED_IN_SALT',   ';a K~Dv#E(.Ai`vcXgUh<4)$Xz}[(i-|HaZq/[vxYv?4Uji:*&Bn>hF{&(Qyt/=e' );
define( 'NONCE_SALT',       'Xt~_ZKKaPq!R(9+2o9#Au{qI)_.;KR&0mxN}^zU86pI jDd=yUKxKbeX* U$xRgM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
