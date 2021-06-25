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
define( 'DB_NAME', 'mobile_shop' );

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
define( 'AUTH_KEY',         'w~CG?x5gN.S+Bwzl5f?-uVoza%A:X&rE^(o86bxkg[iS z,xPD,4>uV#/!{5A&E+' );
define( 'SECURE_AUTH_KEY',  '%*8-$n<F<aJySzHJRzR<aE&XZ9lRB8n!V|HMv/qE%*S0BS<U-8@Zhz[Fl^TJm *n' );
define( 'LOGGED_IN_KEY',    '23|4z*1K^Ea5%1/1@AZ$`-Q0N=MYKiD(}O9W+c{sRywY0{HaK~=mjFRP4-Ad7S<i' );
define( 'NONCE_KEY',        'NZJr>(D{y[h^m_:Q7bFs4).M,DpN?ED73/^efVTUvMLI.wG8dfzEW8{Zr>5-]/P:' );
define( 'AUTH_SALT',        'leO@w.y7PC9KW5C2wh, j)3aT-6uPa@Z?=Bo=E?DaeV;s_! /#>mQRZQughSL3X[' );
define( 'SECURE_AUTH_SALT', 'c}xxxMh2uWmQ*sx]Wl)=b9E-&Q~-JD:L,Xd0qjJd6?TE8y(Ak%efwEn|Claod?C<' );
define( 'LOGGED_IN_SALT',   'I)/)kB$c<I0_wu%LJ}uYn9S7kDBLfks3od< `q~@#Q#oJc >Wl/OX]_Q&J<9A51;' );
define( 'NONCE_SALT',       's7rf7+2LS.^cjQv,S4N!DD4U9h=Kb`i$#y8~G%)l3Tq{u(U$fWME^zBgAhuf+~7v' );

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
