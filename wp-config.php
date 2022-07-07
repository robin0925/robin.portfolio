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
define( 'DB_NAME', 'my_database' );

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
define( 'AUTH_KEY',         '2KUrpIi0A9p6+UfXw|wVzeyY:uRN;+!|Om2RS</cqhQrtVrxNq {2av4IUk3Z_4L' );
define( 'SECURE_AUTH_KEY',  'PC!uZVGI8FO4eqcbK&kK,JI[CrU?mK=/?1mQtt=O6K5zjU-DdE_W%bS<e)2]lao`' );
define( 'LOGGED_IN_KEY',    '+$If[xq_*RQ`!a1>/+_ssgocPgJ@NHp4gi(0JHm47#dn=oVvU@j1NY2ta;QK/ kH' );
define( 'NONCE_KEY',        '`&QMEv_3,9DXS<6S*Vd)1=6[vf)8EV$TX+[%8xC|Q9ewh ehttT58O]eBLYEAx<G' );
define( 'AUTH_SALT',        'T|nb1T)lC<,cVF5$rizxSc 24@qEfGvfIKti[p?n{pENu~gYn8UO=|$~AB/CkD@H' );
define( 'SECURE_AUTH_SALT', '}* yaVa/vG!FzzAtyJw)8YUbQMJi<ERLoC+P0M4_fO2u%^EbIsj5]tzPNR )D?%)' );
define( 'LOGGED_IN_SALT',   '-NwghaZPEI9glIGPd^-EW)}XTT?y&f]0#+VF_f]bTH6]r:(%|cU5KQYS+Gm{6xf*' );
define( 'NONCE_SALT',       '(1[140|B4CI+ZR@~`1!uvj}iy%n*vmhCbo8]t$77g8NRSr>2Za,fvq5VJUoodC*1' );

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
