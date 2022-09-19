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
define( 'DB_NAME', 'hourglass' );

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
define( 'AUTH_KEY',         'EpItf6B58UC,CN)Q6_5F-4]3~.>z:kw;~xo~1+ti}vpHR$~iTB|WaZc8nZHT^}m3' );
define( 'SECURE_AUTH_KEY',  'LknB%B-87_*Vm/QQ!7xQ!jBI%=`6XFlGUh@3f)6bxLng^1X=!{>>!L@>vR_PF*eG' );
define( 'LOGGED_IN_KEY',    '64f@)&D;Zq%7BQYJLcH=$|{BUc@}m`RCBQ,yscb|2-/z/i_?OK$^=vjGGWj%F>~r' );
define( 'NONCE_KEY',        '[gkR4v2 rh>c=D%)UOQ$dX7?Rw^ZXBw{PXUIT,@{<wXthj2Oscdp4E%gHQM^yEd;' );
define( 'AUTH_SALT',        'gLWL2Hm>:B9uLUO+_n@+)LZ/G:1;>MiR#^{)ltBk:1V0n%~169ZX!>y)`8}P:0(F' );
define( 'SECURE_AUTH_SALT', '#0K{cSXMA+_MQRl@$*Ti @BqDy|d!>lWB3Sy,1/2u`FTseutNYs/BS-.tlI(FVm6' );
define( 'LOGGED_IN_SALT',   'kAS&=-C<{YwZ[9PhF=Hw3O#[!PAgYI:wrn))C5P%QYb;}-9l698ulx@D0RIf{{JK' );
define( 'NONCE_SALT',       'u*9JDN25b/ajxX]v)_@)S}s&(}_[,(F6LJm1am7BHymU3y2p}]v;Ii7WF:,nTkTB' );

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
