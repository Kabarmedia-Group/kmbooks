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
define( 'DB_NAME', 'dbg1hg7g4ergum' );

/** Database username */
define( 'DB_USER', 'kabarmed_jan' );

/** Database password */
define( 'DB_PASSWORD', 'JJdata99' );

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
define( 'AUTH_KEY',         'vc|i;%PA1awnR8<2&+-^hWMi[<+a=-DE)Dly 5XBtYA&9]A(8&/OyhW?[T`Z_Csp' );
define( 'SECURE_AUTH_KEY',  ')>Ag~;r7WF@zC>?tJ0}@WN^)^C1GT2_g!%#]R(_=a2aIZKU}#6~vY0ex4p3--4mq' );
define( 'LOGGED_IN_KEY',    'R#;sSz$;:WfCQV173eomw:zb F {L[|LojXyPEfT;-lITdx5.&`w|o>0y*U^Yw5>' );
define( 'NONCE_KEY',        '0?w=0>b~lQv;[B$$Q|q:EA$wVoX*(dVNOG}cOFYl[2iNTcwQ)mPl%qUqd%!fvhzS' );
define( 'AUTH_SALT',        '4G)j/Om2}bDIFvoM.TN~/&{VkWB F53$X@KU%x2N P<IM6Q,HB 6g+ v:_F0V4mP' );
define( 'SECURE_AUTH_SALT', 'dFfyJ qMj+28y&8P8>[N]IR!Za(@R%@D?Q|03l/Q;u&(OF0nG_USslT{%j76zd:z' );
define( 'LOGGED_IN_SALT',   'L0;KxhL!qO/`M[nMP#fKH*_|xd%4)y~c>GUoJ%CWZ3<>;iPt>!1.}yxk^>FftEye' );
define( 'NONCE_SALT',       'bZPF>R|hF3r^cR>{=a.PCQMBhPP+)+8/Y(8[A~WVbbWQh,KYU}6/Rdilxp=^HQ3x' );

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
