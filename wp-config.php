<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'racelwilliams');

/** MySQL database username */
define('DB_USER', 'racel');

/** MySQL database password */
define('DB_PASSWORD', 'Finerjoel2');

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
define('AUTH_KEY',         'xBR14qb%J5t@=1w)UPsk1n%^E*B#jZ)2o!lF3^0Dgrk]=0yx`K5eox&c+@m:)yX?');
define('SECURE_AUTH_KEY',  ',Oa~jy:u$f9o372rJl5 ;^$`nB~;3 ?`L)zbx4UhF.bH=*x 6 kICU[@7g-unInH');
define('LOGGED_IN_KEY',    'a%OK[9oi=[&*U4a E+I6(h%yf*v#m1N^W.Tp]vVh&*9l=ak@%iF>weYPiDn?K:Qi');
define('NONCE_KEY',        '0 tAn3oyrv03d6T`=Az]4;.F*HPgUQ?p<wqo~/+.{3t4>}!+OD/RI7Y3A8/T7Ixk');
define('AUTH_SALT',        'd#-7rj*LH=NhoB_,hGc*b.E&_+y{:|$k>8Qke0^$Bip;E3E>`|E00O4#|KH<=KdX');
define('SECURE_AUTH_SALT', 'WU!q/*Ynv<4`D<x;kFNOb57SZea:6k5(TDr62&`IEQV&:JN%n2t2BGS&+&0NjAnY');
define('LOGGED_IN_SALT',   '.wHii]Sk+3&t3`U?;#.{+W9gf ~1=a{~X@f$m($N)=[!l{cN180$.>&C%=zj%;td');
define('NONCE_SALT',       'OE/ u@75.[ju%@yZ%6od-wD_5Ohz%^EP$YI.{u8U>^gV]1|P00>GKoo.<GN2C,VV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
