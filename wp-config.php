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
define( 'DB_NAME', 'wp_fishy' );

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
define( 'AUTH_KEY',         'U-m#CF80BkgPi2CDx i{^d)5xHhA$0Bk)dF/xY[A74@9&7|z$DbdQSrnD,L.Ktf.' );
define( 'SECURE_AUTH_KEY',  '0ZW~-4t&n@+<t/aSi ]>A1EK0ZL(.Fw8Xa7D*Fj[jO~` 9E^vlM,6Bj/X*D%_P4s' );
define( 'LOGGED_IN_KEY',    '5s9V+p$*usYtt4faO)aW~+)Gnf0-E5(J,,%`0#xmER${t012<>^QaESrMi3.`DXn' );
define( 'NONCE_KEY',        'rQY%etVrmYswKVFL[kSRA $iSPOa0Rk.dWTT]<IBc}6Ya>)-UAw)I}=BnO)!-ec9' );
define( 'AUTH_SALT',        'e{mNF0^(r~cUCv<ntW)d;1b!Bd6{0ddp@/oFGNJE!<PrUE3~:;,-bZ)yitFWF;p(' );
define( 'SECURE_AUTH_SALT', 'Hbt_(e&L#7?%~+c`y9E.P;* L3TZ!6;<(v4[d#D$Q;3grBlzRo@-V}7u-Em_e{oN' );
define( 'LOGGED_IN_SALT',   '$k1ZM[C[uv1GtYb|Kx3ZLs&nbK_@.|l=#SlkuQyf7W]r!{yN.Yh<nY=rUK7oQJQ$' );
define( 'NONCE_SALT',       '{^9N}+!j}0muhVJ3f{{K(Um{~=5F[?ZNbko|}v4dC(wxVj!X$zil8YIf%7Z`+=G?' );

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
