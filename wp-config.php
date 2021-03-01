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
define( 'AUTH_KEY',         'tsBe)CohZAp~vQ>D1M*jl)MU.{;V8$:o*<0C*lfLy-.60}@{M5b9`SJ1cvQaL0(F' );
define( 'SECURE_AUTH_KEY',  '3CHc)6=NO_W%io`2Km&tC|G;<*23#omuzQT/*m/2`:z8%p~k{4enIaq@{xf95!L4' );
define( 'LOGGED_IN_KEY',    'O^3I-i{W,hVo0}x%(me=fU.[(1GF:=0s =m72_vi%yT[?{CK3xSut_u5l7Y/%kpe' );
define( 'NONCE_KEY',        'Io_.p|GL@ pgt+a<(W|qWi)d34|(YZ`VB5XCgNLZSGXc`=sS+[t{G/CXk3Dg-}nz' );
define( 'AUTH_SALT',        '`3L*$*R`d Xz{iSNy$0b=;s31CF5wO;mg$5_R1h1}s:D1zeVq[X#^K6F._.?D,v#' );
define( 'SECURE_AUTH_SALT', '~U1~(JJ)a.r8ZkBCS{$!Fb_>NX^h&Qn)[m,:Ad-eO8Ne8|#>RNv}|{+h$9}b077(' );
define( 'LOGGED_IN_SALT',   ',{9Oc{*`ptY>x`It7KFiP> %%`d.IvN_[V5c!L$2-Wwj1&-wzTNcvfFUfAj}`lu-' );
define( 'NONCE_SALT',       'J4#zX/Sn2d~?~XKF-sl[-F:IX`tHS7S/&XmCjwW_6mV;2<zYz]/R.:)ynoCE^&Uz' );

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
