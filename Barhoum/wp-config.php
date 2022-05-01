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
define( 'AUTH_KEY',         '%R:XoSTOR(@p+kAH]^2tjBa5Ft`ej/]PM#@}2{yj|,=68&fVE@3[M7x.>WX0r<aL' );
define( 'SECURE_AUTH_KEY',  'C#z=tOy$Hq tlvP)f8vMxxmW0%%1{C}eW!n.Nj13d0&![)O?CqN @@OJdi<}p]A@' );
define( 'LOGGED_IN_KEY',    'Fzwge>V 71edw2mW`uG0cx`1iB>=g&}FvVoL?UHx*foLyJ45fEhrAqRtW!Y;0IJ3' );
define( 'NONCE_KEY',        '=_=dT[>H07J<|CaI1jfoRD[XVn(jg;A~G]q!M,dAsAM%t9GB[z7%eA4CO@UwaY(_' );
define( 'AUTH_SALT',        'kQMIS7m6r;u5T2)p13^-l2zEW`$U%{4INR8^(wYgO^uDuN47^_.Z*WMDX[985<--' );
define( 'SECURE_AUTH_SALT', ';j| v&od}$ 2_Fu.+g0rgF&tita&#{1d{`QXd ciweFn,l>J.86%=S~h4jVI|v_<' );
define( 'LOGGED_IN_SALT',   '*WDLrz6}{~zr=edd[@q&nP@89OQ=euF{v5bCBWr`p!U(71OvYXVV8B/:)2NU7k.i' );
define( 'NONCE_SALT',       'M$.a{x=Zs>X|KMA,6j{vEAh7 Zds87C(R]w/`hIZV9]x$#2ctPY6jH=&:rXl %,r' );

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
