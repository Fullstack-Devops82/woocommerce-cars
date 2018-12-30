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
//define('WP_HOME','https://icontinentalenterprise.com/');
//define('WP_SITEURL','https://icontinentalenterprise.com/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'admin_icon43');

/** MySQL database username */
define('DB_USER', 'admin_icon45');

/** MySQL database password */
define('DB_PASSWORD', 'y01448W9Q4T1szEreu11');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r8-lkZMn<}@OqgxK(P4+`44dh5?vKi0n5cc[1{=/)</v)|!G!uey_X}&E9r?wSE7');
define('SECURE_AUTH_KEY',  'uz:qlL(y vc.e)q4%[fB?tI^U{_.BodvhJjRw.-lsfd*S[oVSp]I jKPB/Z(2(kJ');
define('LOGGED_IN_KEY',    '*X=.)yTH>Mv%Bd{+-mX.-z;YD}(xhTRxi2!l(7;D0hJE-k,yT.1}(I|zoP|v[xj!');
define('NONCE_KEY',        'Es)UNzTZMAE3H:IEa1),uD!GBDDTPs$^V$])?U#A>j96r]Xa-36Ft,#mJ7xG*f_A');
define('AUTH_SALT',        'E#.}Rj*%?i}g>NF!mCB`Iag<E66$RW![iq<P-U*)OB.K(0-s-R-Vlu0aq,+, 7Ic');
define('SECURE_AUTH_SALT', 'lEwEQ)UjfX`GI0d?KAex^W =(#v=W j%@HI&EZqbJF=o9w 1L*uQ[wS[S.KY1V}O');
define('LOGGED_IN_SALT',   'BrwX|5c8Y^TBoD,r _  @UJY.}>w{)l)z^i$<HSQakNrX) zeP:qj,D} C*E2OZk');
define('NONCE_SALT',       'MZfO}2%/ZtK%XU;o,curCKe<HTdn%tI0p30*E[gQxylNNtf5`<87W|Lp.&dG=fDL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pon2h0i3w_';

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
//define('WP_DEBUG', false);
//define('WP_ALLOW_REPAIR', true);
/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
