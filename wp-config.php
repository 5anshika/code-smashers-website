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
define( 'AUTH_KEY',         '4>1Zd`7j((4v4tfiS;sq`4]c2F}mLAo96rlbM<Jp M|+ *wmk7n!p6c3npT!)bQZ' );
define( 'SECURE_AUTH_KEY',  'mu=L8i!uKdk+*@$pYAocxJz@NLj>z5cE1))sv&<azEtM*?F1[fZr]GbH.L2ZKftq' );
define( 'LOGGED_IN_KEY',    'ypj&<Ahz?g}l6Xwn/PgE1 ouZd;ajM{xsb$B|{XZpxK-%NVP4U q=$>5PG8<hqo`' );
define( 'NONCE_KEY',        'mj2J)^z>[M37b}:+JsX>{M<X?wt[d1d1ATu_6@59RR87X*a[8U~&u3/p;[rW6`hD' );
define( 'AUTH_SALT',        'wBBucXs1H_f3e8Ee[,kzaQY./Fyr!|S&/Ql~wYF!7VF[+]#*n {f::Fy.2RJL 8e' );
define( 'SECURE_AUTH_SALT', '}PDH[&.af;]5V1RGlp1p<SLtwqEq>)6z>ARb0uPEqo/_Ts6JnrIm8>7@w/u&b^-N' );
define( 'LOGGED_IN_SALT',   'sK^n+XlF1$pz%_;BC?|+*:VaE/EveMw=m<LPZ:#wKJ@2Cp1Q<$~[A0<3MEsz0B%`' );
define( 'NONCE_SALT',       'qrdmw;&n:x7@zRdQ[p5c|7;aHO<u)@^o+5j3&b A>&!}0*a38&<or$)o <{@e2?1' );

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
