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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coursgithub_db' );

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
define( 'AUTH_KEY',         '(_+KjgvX15WJ~jspSE{RR])(}=iK~2{XdYeG[W?w>Z[bM|`tEZT K=YjYTD56#X4' );
define( 'SECURE_AUTH_KEY',  'z_mcY`f<GQUsqq4)rJE_`j|=ZqI<Yx:#Sx3ELLTr+!fRob,Rr)vU?P7mGZh&-[&2' );
define( 'LOGGED_IN_KEY',    ',B8/V^]y$ycrK=A9Sz.zG;S{Kydr*jO`.s@V<TqH;[A LU0TBdYFJEJ[/jX2kW++' );
define( 'NONCE_KEY',        'Rm_ rU+2*EursP7?`TMT2iM0zt]Mrkp/8mT[f;dn-@Y6-%veuDu~^F6r<IhEhjgR' );
define( 'AUTH_SALT',        '<PV|+^]>8aQJBj=Fc3C/+ga2%aXBz;OO-%M1z}d{l! :878}{6<]N6AO9ekXQCE1' );
define( 'SECURE_AUTH_SALT', 'v]Bi$T~Q>iaH%6/?|v0my<dPCc4.{bD&9s-Om%OrKoT7S`^zjU/s/S[Qpgw2r+UY' );
define( 'LOGGED_IN_SALT',   'xv1L~S5HxTI>79tfX2#Hw-;<3H4 ?*!zR:u9d::lerKF6J$o=?3YG1MA!Kfc|$qI' );
define( 'NONCE_SALT',       '0[c;y.kZ=rSrfJF`fYC(aP4!)2+|SQi|6<r>.%**D180na};1MS^C;Ju=dwiyEZq' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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



