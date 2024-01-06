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
define( 'DB_NAME', 'amandaportfolio_db' );

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
define( 'AUTH_KEY',         'pQlgPbMhrk2e@J=m49u/}d EgY(Bph/)7*0tE4}4t%#c%LpN$oWW}&53K/^N5=ek' );
define( 'SECURE_AUTH_KEY',  'kQl^2=?F2^_l0K3k#YH2K,l{a-C{0=Iy9%w?U[,yF0) UZw7$W$SYWV_HypX~Lrc' );
define( 'LOGGED_IN_KEY',    'oBHHg~3f(fkaNI)!us!v6/25_x6TXoO0^$t/=:im)vG/]<w=):a8hA5`$lUb7j%_' );
define( 'NONCE_KEY',        ':635dp~RZUo<]6>chcEA!2T5<Hu$CVw zDtKHonTo:4_rC]F=5m2hVW$4 s18B+f' );
define( 'AUTH_SALT',        '`P9<5oS< KF)T;d8_0O&1$=R9&EtPv}`Xb*INBd7)fH{Bt)a@GR/ljj>[3Nb6Xi4' );
define( 'SECURE_AUTH_SALT', '9{nLf:9_X}FZvF#UUn}v$S^vTBqKB@Z#F}zH^{F)tr8q3ZPl7y0Y+j4PqDT<STC=' );
define( 'LOGGED_IN_SALT',   'VhhM?&lj}DP.JaXl3Yq()$ARX/I@I$FTBAa2ESQ$TClaIM-}WY_@d$n<RNI(_}Pm' );
define( 'NONCE_SALT',       '6B)9X^Dt#?TraNf0d& 2~2l%y1ekqJ:h]~:bBHVy=?gX`rBcQx#bg-]D) $K}.nL' );

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
