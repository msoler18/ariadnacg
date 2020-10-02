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
define( 'DB_NAME', 'ariadnacg' );

/** MySQL database username */
define( 'DB_USER', 'miguelso' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Prueba2020*' );

/** MySQL hostname */
define( 'DB_HOST', 'miguelso.ipagemysql.com' );

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
define( 'AUTH_KEY',         'qYYzbV9#G6AR{S28WD)wCIR^qw[Na!=kpI/06nEAv^&2Tr2G4YDv|*HQ7T5!DV|*' );
define( 'SECURE_AUTH_KEY',  '1L}EY;6PGlOD9qQ;PH|MgSPqB8Gm96me/ic9n&9$,pEr^WL3AoI%c|tD>!HAHzXN' );
define( 'LOGGED_IN_KEY',    'jA iCzL(u4FDDBlCsb ^lg|Js~B [!Y!lui$O4d%gHR!GJud=*)u1Bf@ma_}6Ep#' );
define( 'NONCE_KEY',        'UI74i;`A2j:&f>|lLqH9],GC=b=qO1Q3:~.z]j7(pV[@thj$0re8x8NsWObWq+eQ' );
define( 'AUTH_SALT',        '1e_R~N!Zj}i%(5)ae.FgU0rJ=tY8$y;*_H!}0UR<h^+7uQLM>P*4uBH{W&8;7K-H' );
define( 'SECURE_AUTH_SALT', '{E8mzD4t=sC:PdZSWcIG~V6`iuMlKSBgP*+5%4qL1]f}]0(X^<=WN*_-nc3Y<W[f' );
define( 'LOGGED_IN_SALT',   'o2U9HWQ-]$6KY.c-7>[[%:m6z}]EqXM)yJVoq_tJJ;)og_1eFdC#ro6bHbOJG1v?' );
define( 'NONCE_SALT',       'r@~n:jo[`dsnUZvY;s+Pd](Sx]xoL<69}qpeexv?us9|?II:*GlV]LjV*}j?;^h2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ard_';

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
