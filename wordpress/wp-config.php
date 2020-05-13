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
define( 'DB_NAME', 'wp_nkantelberg' );

/** MySQL database username */
define( 'DB_USER', 'Admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Captain_092714' );

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
define( 'AUTH_KEY',         'Ql>=rv1{WYo{~?+KUzJ~j, &X$tgX~iA[;H:^p-?~lD7z*3*y@ik2bCvC,/|qp;3' );
define( 'SECURE_AUTH_KEY',  '`)F9{CMulG(pE_g>Nd~IVjav6D,:=B 866uB `Y2:[p=-ps]i+8c0Fm.LJgK%4lB' );
define( 'LOGGED_IN_KEY',    '[U*pNw9s[QD$1:L`Ofuk7o*iICUSHm$E~9&+;2]e%}CglsyWCE~9<X_2#bV9XT/P' );
define( 'NONCE_KEY',        'X,`4yFW`svu]6fjIeP]ab^.:<3_stALlo_A^LZ8oGqIzyA#Mj4jD%Nr[i~,O>ilY' );
define( 'AUTH_SALT',        'U!/~N%hYW!%Hv[l|APX[ex%61090P`h/FbE}2#.kF.8=[7{tPPD0{dWy87Q;O^3S' );
define( 'SECURE_AUTH_SALT', '?zD6c/`dSRnE~bL?<+|&FixZU{Y@&_Hwe-9MTm#`d5wkc{D>z%#hA.N!V:]*A+Rj' );
define( 'LOGGED_IN_SALT',   '9[^hS=Uv[;}Z:3K{_V?WNG1R3=Cs**+{S*?d=OCa@=L~KwrdtZdT?=Q{/X+1Jjn&' );
define( 'NONCE_SALT',       'ST8UadC&bmmy6EGgkWd3/^UDu}%97Gp2ya4iT?Ug(<uvZ>Z%BHV}nF%nier_L9.!' );

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
