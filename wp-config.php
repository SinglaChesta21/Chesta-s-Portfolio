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
define( 'DB_NAME', 'MyPortfolio_db' );

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
define( 'AUTH_KEY',         'h|9p:WUwo+2uV+v V_d:l)FJn-M$bIHqYRx7Gk2D=)*)sBNK/(GTcVve4fQOQ{ N' );
define( 'SECURE_AUTH_KEY',  'Mz(hhF*jZy32<ebSELY]ih,+}:XS8;^IiZ9gH[T<G:$jkV?>U,JKpq30K3?_Wqry' );
define( 'LOGGED_IN_KEY',    'I?p?Bn^ ycH]pM%$jZ(,$`cW:-MWH:=C8I;zp0rFg(7e`?g3La1pa*3?<SZ<Uyr%' );
define( 'NONCE_KEY',        'pRmK7:U* /]Cd+#DiE|7d@)14(lP)87U]#g(3v16Ah(;/m$AGP6oiWm[//lX;=Y>' );
define( 'AUTH_SALT',        'H4X=.(;Iti%YHLTeaL=&wKX:5K3h!-qkwcJ.9FDV6;zij0vk%tKH%{v{_gZ^>/.E' );
define( 'SECURE_AUTH_SALT', 'JAfS]L&(Hrz+`>-SlosP,&,R.%8ra!Wh:]XZ^8iaoIVlw/X3}yB_^_LfG]!p3bfk' );
define( 'LOGGED_IN_SALT',   '/ct9>y0=d6oS8w%a}45|_Y):OxM4rGuXe.d%.MT5x2a-Zs$K!dH7=BBk)`+ )vH$' );
define( 'NONCE_SALT',       '!o%*)-@Hf<QG5[4+vy_L%&X2 )t!ae};w Ah20~Yo5V8@_tY<2J7hg~gw:s!nb?r' );

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
