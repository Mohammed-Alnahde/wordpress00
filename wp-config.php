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
define( 'DB_NAME', 'test0' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Z$&K1gcO>Z(J({Zn_d1>[;Y&MS|m[2g]vI``NnABVY-4SO=2z?AM2wncl!^oZ;%2' );
define( 'SECURE_AUTH_KEY',  'W$Y+$IiE4Qovsv&s.-J:v6h3yjxaK?+I0$4lH*N<84QfnA=nZ:GP}L.Cd`XLp-92' );
define( 'LOGGED_IN_KEY',    'O@s5lT8!XF(w0!W,d^L]/iE9)~AIUy[Mg_Y;=,p2TsqV#p](;86.2+FWI#heu&$F' );
define( 'NONCE_KEY',        'YTDz{u~)oD=4)14^dX<wo=~j][vQEkP*Y7&vsKpixVAF2](Bo7b;(5_tq}z%F%;|' );
define( 'AUTH_SALT',        '?j!_[EVJZk</2 t]jMj}%w7x :ptk#%iV~$y0-ed8=s2{`hbz4s<+{PeL&w?n`G#' );
define( 'SECURE_AUTH_SALT', '7?3|yWH=2C#U [MZs42#<8`}yUm,,9IT#fa>QS-o8MQ-P_%jr:]&E~21zI~P_YQ=' );
define( 'LOGGED_IN_SALT',   '|N2]/&x<j(0yd8.8NY`cE!)TG@t`GNk(+<<]8]k*j.kgl!3692.@BT+$wPG9.(^=' );
define( 'NONCE_SALT',       '8F{&.Fk@fjJEH.>Iy 7+t2N5#(@41uBc4*L+rRu4(G^zp@t1,DL^;<]YrE)[w[Zu' );

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
