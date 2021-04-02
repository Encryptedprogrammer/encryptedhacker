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
define( 'DB_NAME', 'encryptedhacker_db' );

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
define( 'AUTH_KEY',         'kB0q^Y&t=0l_.4C*<jB:oRjnUR(B)0<*.ATRc0_ZfA?:^{JY`GO*X=Ljh#kr|zPd' );
define( 'SECURE_AUTH_KEY',  't3 +EsECG%U+vQionH&6aGV(A<E>*O:8-,5_spBuE}l=mQ je3SY)DYo=9Qx;*:n' );
define( 'LOGGED_IN_KEY',    'Pkb^yP;l<)!zbP%9/|izNUgGx(fq^Z)$&zxJOFvEO *.-~cBx9XrgRmr{=Xz]4Nw' );
define( 'NONCE_KEY',        '==(a{)Wr^{T)_|^wy$y1pRnIEu]6hkaw?wy+[*?nc)TOpIsj+ot)Y-pFo`epHdAF' );
define( 'AUTH_SALT',        '}q7[~/G0n:jvwYJ}Sf?`l.,VgQO(_-Hy+=(UDlJ`7c{DR>Hn=XvB=>=+zVq7[Y$L' );
define( 'SECURE_AUTH_SALT', 'PLqXgPy1cr`+ujs,~a{4zJY<m!~f}V`fQ?xbC.~Q$OCf-XhJLicUk;^h=+N38kc7' );
define( 'LOGGED_IN_SALT',   '^uO#rexEe,2K*k),VYO.L#U)i$_Ki%[uqxR<F-5||DE|b9ggiI#TgX#bS7hxZx~j' );
define( 'NONCE_SALT',       '>ceZGyoMu_))b7sLi<OK]AL-:f]R< 6GS,.!8wuJ=9eq@+EfO*G}?,8tJHw%}#S6' );

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
