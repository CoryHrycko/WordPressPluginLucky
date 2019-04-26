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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'WxD^:]RLn/eoZHMUONif-3~KLlmv&e;wsc@o6+P:q6a:?lnLcR=NAZ?zz&;p}+E|' );
define( 'SECURE_AUTH_KEY',  '/R4+#ViTcZt5|.!2CYsT>[{rI3=3 (+O!h46uy>AgyR8b|8N^}IESR#mZ[%xJaZ.' );
define( 'LOGGED_IN_KEY',    'p2(QGDmBPr3SV@b:@_aNk3l%[ED8b?J&,?|2DIh5TBdJSb$4*|r?IdE_t2Ukv.Uk' );
define( 'NONCE_KEY',        'x^W:eS]^{eil}I~c x:OU)/`DO/6`ULx8}=:g5EUGS}=n.C9A3RpijQ?ABi0)j4m' );
define( 'AUTH_SALT',        '=PR@w6zv+*#$yhF1)b#e%$VyqB>(|>.BC$,W^?v?L/!t=nx8&k&R3b-LCJyWKj&U' );
define( 'SECURE_AUTH_SALT', '8W2o1HqJ%g}D{0z$T@F3X5*?sIgY~R0O]ORFjMtP6 &Y[;K~D Gi~frD^L-Fav)^' );
define( 'LOGGED_IN_SALT',   '1fFK>%/|)dma]<dOuQ#BS&sb2r0>)kKW+b[<LS:iAsNpCT.j+gUS]){5%OC`[b}F' );
define( 'NONCE_SALT',       '1PsERg,B?EpnWC+yjQ}a%^7n|yW&iPrKa<$^fBmls07*KHDo=fsTwatR0ZeM#w_J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_beg';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
