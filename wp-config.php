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
define( 'DB_NAME', 'areebwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Welcome@1!' );

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
define( 'AUTH_KEY',         'ocKh%sV#U8YDp/yK1Y1#D$AdLB8&0Yi@<Q)Dl7i29Xgal~Y-ddFW(Zqi21Wq0egL' );
define( 'SECURE_AUTH_KEY',  'XIMZ[Qc=3L+N3FJW9N[BAe6B;Arua-28?K.B+iZ[j=Xghm(ydK)sW/ $z.z:*3Cf' );
define( 'LOGGED_IN_KEY',    'MSqD12oC7ul4>ewKw|5ee LfBR@<92S/d3%fKA!Nb^cglXO02k*D<Q[S!4QFkjo=' );
define( 'NONCE_KEY',        '<SQ!}]s-zIoH5!lN41gz}QWOMha1ytysa`b<{c~USdx:{J5y?+xQ+g&=F?{t5fAe' );
define( 'AUTH_SALT',        '?y-KlCm8nf76)]|(%Q6EZ[Upz*PSiYkL7%C8=s`[fiyQnAiOnW2|[l}e9fh`xcP ' );
define( 'SECURE_AUTH_SALT', 'F>4IP00mIw$f5[:1K*Sqqu1kDbeRv$Gz+Q)@>m@v/XLj<{{TC<,r4M~~udn=`;GY' );
define( 'LOGGED_IN_SALT',   '%7HWfVk#l>xIZ+ h58.yJxyPx@h(p9O;Pg9GR7-PAxjqnWD|<*Cs3{8/B3gOz|[@' );
define( 'NONCE_SALT',       '}lPJDWpBsTh~8UxZu_XKhB?:Y_SRP W?S}vX$Jc,TB2!/eMDxYz$#fM22.QlgRE2' );

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
