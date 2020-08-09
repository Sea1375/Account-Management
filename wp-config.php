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
define( 'DB_NAME', 'neve' );

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
define( 'AUTH_KEY',         'Lap(G/!E:DI#gczN7HmN_2V4lkZwYrVAF}pF*{ll-=3r)ut~/IDM1%Sf0Rj{L0Uk' );
define( 'SECURE_AUTH_KEY',  ',A-ko$|7GvtBA.Z9j_Ok#J!DmpM2-]+Cs2|j]c&,Ml%cn[BT5=kEQa`fiUw{cpp/' );
define( 'LOGGED_IN_KEY',    'd^.W#EXjoR.i@e@4}HG840vwakIMLF&n67|%2!0EWVm`fu5Yj{Z_GGgG?ltO[b/z' );
define( 'NONCE_KEY',        'Hk({xCGwbFON|Ka4[b[(l5UY/T|IL9qCeHVCVWX3^;5>JYA)TdXb]{ttH<52lY+;' );
define( 'AUTH_SALT',        '$+HO_PxY<RC?O2gzNXF3yA[Y*NntzvX8e>yW<y;nR@32KwJ_98YJ 1Gp]*Y:84lu' );
define( 'SECURE_AUTH_SALT', 'OulpIz4t]9Hi(-qi3Q@dbk!z`Ew1oEl85pi{Z}&iIH{ad=a*$.z@BKuTtST5)DNF' );
define( 'LOGGED_IN_SALT',   '47_Wuc%ER/8^4N8PC_f(:U:G,]wIZs5(TvTTb*m6yv>Jk5LD~#bWpOalr=30c]F|' );
define( 'NONCE_SALT',       'w@YAQ^#gDAt {.|;qQ8#:VbJ*9Q g#@pH*TNLM+rtl^kX]k/{2u670FR##SCWn?6' );

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
