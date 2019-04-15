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
define( 'DB_NAME', 'wp_labspro' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'idTh.*C244Ato~`Q`Kp30it+x_v+fE9kZt_qxmWW4s0;aq/xV[.wygnIm|3;H D=' );
define( 'SECURE_AUTH_KEY',  'gd9}e2cE~*5mcC1D[@u;eNlHGaTd@?W|Fc&P?=e YIMNv|;t6dZSO V*noKr-AMT' );
define( 'LOGGED_IN_KEY',    'h.]^syrRA%FVfA6H27GjRK-@n=#!|#i1b@}b?FqaQUm`W;7e>VlQSlh(OApXcL<$' );
define( 'NONCE_KEY',        'W5Uv+XxRo~I?,-803?K30avGXJ:S.a9!@qq9Q?Fgn,p6&WQ.~[9WZBXCQPBf]emw' );
define( 'AUTH_SALT',        '3gw~:fW7[AraNh]drdZ86e{r>H8Kn{dy-gNFXenH}:/*[wmv,%,#4w@&bTw=zxsc' );
define( 'SECURE_AUTH_SALT', '|0E:5}a.%Q0*X/)Hv[6v]XgPzoe4S:CMn[rrA&5K]Wn|!fYij:E#vZ@WL$.==/_p' );
define( 'LOGGED_IN_SALT',   'NrbmsoO|9qS ^rJ/t_H]sx:DGmDclSSbgXc;/>h_F=(04]4O*MLCMvAMz&616,M@' );
define( 'NONCE_SALT',       'g;}*XaWdK6]3)!4P~[eQqj@Q<6~mfx&[*1KxN]y>~[N&X4.z88~T[Z c0G_O3_rI' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
