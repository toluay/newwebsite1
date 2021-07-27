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
define( 'DB_NAME', 'gicofficial' );

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
define( 'AUTH_KEY',         '3SSn5o?S!Nz2Kn=*`?*r`%IAikoC!UyPR)0-9JXjP674!W9XY(=M_R*lO1j;x@h@' );
define( 'SECURE_AUTH_KEY',  '#JG5)rTNXGtO&SNRcC%eG8q9lq_^):9STY}h~:m6%iS`4y3spHFfMDC$9UB`ULN:' );
define( 'LOGGED_IN_KEY',    'Gn~#1iL^<=]85T;T[>a?J+8?[VsVp0|8L(nS+ITvqm]I5`RM&b{KW &6f;t<pVsh' );
define( 'NONCE_KEY',        'oj?z=c4/)+TTF$JM-*Dxm7Mis5al=bL-jiY+QIq]`?xQdnOpaM,F$3iKpZ;OonDs' );
define( 'AUTH_SALT',        'u=LP;Qfkj2BF1(!L,7 6(*TouuT/K}l]*5a$BuNw>Y? Ka~U<JTQpNe{eSFQ6CE+' );
define( 'SECURE_AUTH_SALT', ' >&I%Uw::e&n-|JDTSb{DH.,$[3/n>v}h{u WAIBSc!(mDB[?$}uR6<;=JHm]FDd' );
define( 'LOGGED_IN_SALT',   'z3PK`-5aA(?mZA%nT:zWxVt99pSi YP9{iWab?1dG-/#Up<x<uOOY]x{j:rY!5p_' );
define( 'NONCE_SALT',       '$X9h5T44U3bNEa!V;1=~]64~}a rr)oQ.m)HM%4PR+U-gVSb.u1}1nSZcj~v`(yU' );

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
