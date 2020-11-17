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
define( 'DB_NAME', 'tiomario' );

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
define( 'AUTH_KEY',         'w]d? CjfqBv+lU&[V>SmPru>yjN}xR]H[W&Rrpn8Lf%4t>Oj9}lvr bD~$iV;6f.' );
define( 'SECURE_AUTH_KEY',  'rKJw+GFtZyHr)y$dV!EhjyITCtXd;-jW<x-Cr$#R_L6(mXR8;^2Sp>b4ETdtdB_U' );
define( 'LOGGED_IN_KEY',    '9;,[n6Kn;*^6@[DH&,?j+r]1St5qEUVv1(0&x(qS3KSX yc^D~qYMqc]wG;jBDN#' );
define( 'NONCE_KEY',        'DF3cIe!dspRjWYAk 1F:,7@-Pbh9Ewh/^;<Sn91qy0kRiDR;v:5*c$=!/O ^iv4d' );
define( 'AUTH_SALT',        'e5q(,ed)>PFQ]6Q.0mA8=p)SY=61ha|<R=elFe4:dbJDEh-gFx=g/DR=r~JnlHCD' );
define( 'SECURE_AUTH_SALT', 'RM/L?Tte;l>xA7K[hM;GxZiH+6nW1waNBx[cWBR:p4NZA` bekUQJy^3L;[slI;v' );
define( 'LOGGED_IN_SALT',   'mQaPWa}eQk7[mMiu7XnMiy NEOr>,EcJm~)x)}%5Y5U?Mf3{@d0^`{o}y<bmH9Vn' );
define( 'NONCE_SALT',       ']k3gs[$q6Y$6RO7M!1x!V:#x($S0VYrj0~P-sw=S_on,k%+D^$1&Et=eZ/+=((H)' );

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
