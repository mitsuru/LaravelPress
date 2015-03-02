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
define('DB_NAME', 'laravelpress');

/** MySQL database username */
define('DB_USER', 'laravelpress');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'U^U`P9e=kgI@l1iE/(*H-&A~NC3KI|q1(?>6ajNU)|zMv|9l~;WQ@gAJX_dPLieL');
define('SECURE_AUTH_KEY',  '2ew)?VxrM|>F7W_h^sxk85uF4++~y(,QL^}M3;XqJKE,-POZd$Ql<|=Z#y x7^4G');
define('LOGGED_IN_KEY',    '}a($GHRAjNXt?w-5<_6i$i8oq26;#4<+Zqk?phc~.s7r4!Tvs)nn8cmJ1h*B-bi6');
define('NONCE_KEY',        'e%fx5}1v)9Py5vASof/eFy8e_c<]=2@do.m|@`c[Eq_H8Ki+.YTR$gR.Xu_li%<K');
define('AUTH_SALT',        'YnoHY-+A/5Hi(|L|Aa{4d+>EwfxSv/Ee~XxZ6LP^;W.9^Z+nq2NK/k&z-J7I2!4+');
define('SECURE_AUTH_SALT', '%Z+LaX_MJCTE`Y=vmb>OWfm7`d?Bi}*o)gxjvE/tG9KS*68.+9Ht3YZjhP3$t7:-');
define('LOGGED_IN_SALT',   '<>qfiA(p.1{12xzmU13~#i(,|(jut^p%+Hz[s({=iQC|TCOO~C8/LOnci;n$r*|}');
define('NONCE_SALT',       'p}^eB+Fb:63}w_;VG.0BRlmG3`k`xIIM?XbW|!Mi_:6-oz}}+ph95u0v3Gc7yMfS');

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
