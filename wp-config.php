<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'angemi');

/** MySQL database username */
define('DB_USER', 'angemi');

/** MySQL database password */
define('DB_PASSWORD', 'NJyQKMVI8qBHUAen5N');

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
define('AUTH_KEY',         '}bwYuBM *2RcxK/iQ=m<QGVM_MXtzT1fy:*2G1I-iF-:0a9G:4l?hg|{Qd?NtsGH');
define('SECURE_AUTH_KEY',  '}Cm[(i>^,O&l7TR=(-Dw%nUR`@8sONehoPF3N1]/gyiKXb0hN_(+CPI.!>X1W1|7');
define('LOGGED_IN_KEY',    'CwKM4[P:aKmjnTM520hL+?0++b2EX044t7!KWNck(}=`!}~qDHQ{zvO-+8|HX-GE');
define('NONCE_KEY',        'yyhkq0ei`.$2:|Gvg%iSDK8-cg{S+v~eYpZfTj#QuyOg.-$E`}6-[<%xIuD|i/`}');
define('AUTH_SALT',        'u?zqT[CHlTezV^Y^Uw`,R8Sfcn}xJjAJ(ND2;1+V%.G}VcV/^m|lOLl+p+ 47R&o');
define('SECURE_AUTH_SALT', '5AHHV|%O= Y#<ShBj4|cW&9D#_)h8leFxhn83W[gXDfrGWq?Mk!g!Tt+HhiwW4cE');
define('LOGGED_IN_SALT',   '-Tb6(yRCJ 2rI.@xCsJz z+ ba7{rFU)Kcs1[4_.C8t(t?GTd+F^B26x$c~v}|@w');
define('NONCE_SALT',       'imGLXOG6%@b5t~?_S~$8lKx#Qt|;wMWF-b_AppZ-W>RMAsY=_9y?J!MzH3,MT{z`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
