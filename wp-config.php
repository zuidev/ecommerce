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
define( 'AUTH_KEY',         'a}xG_BfPQca?;Qzwz,}2M2AA5<l!#Rb=_uhx[;so+NSb&I[uCWv.2%& yr;KnE[w' );
define( 'SECURE_AUTH_KEY',  ')pn;p>OnC53e~aY*H_qMnhL%/);-~~zIZs#+AA;8LP>9@f-vV+*3kCQE`3NFojtC' );
define( 'LOGGED_IN_KEY',    'X*a$d=pt8WJ-aIksgDNKMyzcm%qBW0.r{L ,Nq8@w9tPOP[>SZ5m8(&*NMup9^KF' );
define( 'NONCE_KEY',        '%8P[lAf`I=S>pK<hoE71_Yzc(;s^x>EZb&I:U.vS8zox+Up(k)&8GuT>oeX=HbE6' );
define( 'AUTH_SALT',        'M`|g<th1|FP;5Q9=iMd?e.d&$WSNd9D(zXgO?VEI!WV~jr>?HF{H%zK3yymgRdp(' );
define( 'SECURE_AUTH_SALT', 'zxMw<1p4IQ3U8?~^F;f~K.}.rZV{gDd}[9oM2jgc0vO?1neuKfx_:*ahIKN[gj;.' );
define( 'LOGGED_IN_SALT',   '*Xq>HoqdVGZ/sZRaOX9xWYq6zX+3PL)3[GFHlMt(xu-1Kw!dt%sY]u^2u+OK|=Cy' );
define( 'NONCE_SALT',       'On5GZF).bf##,ziU/1%zD: R4Dn}?f.MjYM5vNq_#Jv+Ll}*Chk.0!::(`{=FZNF' );

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
