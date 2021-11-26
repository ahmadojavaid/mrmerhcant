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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mrmeulxy_mmfeb2018');

/** MySQL database username */
define('DB_USER', 'mrmeulxy_asimmerchant');

/** MySQL database password */
define('DB_PASSWORD', 'Gmail&me009');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'MKO;oI uzSycAzXm}MyY:%J!!{izZ.^=g^?rw]%<MrT)D+(,6D)A[v6s-R:`W_<x');
define('SECURE_AUTH_KEY',  '!U RPLNs&txUj/#h7lLl2pvU?Z)[*=.]A4BFrYjK6~-|8rj*NJVc>5fG.)u}>#CL');
define('LOGGED_IN_KEY',    'ZT7^jT&H{9)7^~0>Vg_8H5)mV46uT9_9(EfUV#uBkUI-=FPjP:Ad%IWOP{#xU*e6');
define('NONCE_KEY',        '5COEp15Utj$H$eX%gp/%E5bC^CYxoDKNjbt2ex8py|;AzpnFcI2sjMj-7%&:fTtq');
define('AUTH_SALT',        'eo,kUUtV/bHBO&.qbHp+Cg%,yxbWw+(XFgXB tRy2}i_+vJnZF%~O6F;Fwd (GbX');
define('SECURE_AUTH_SALT', 'U]=FybxY@L$|xMGZF*m7zSlC4U`t4M;c#$ (^9MYk-,]e%LLyK*cg7tpGtBeR.;a');
define('LOGGED_IN_SALT',   '6TrncOlbm`A@V2QctA=wwC1EsT=B<k$vhjO}ium-#Z.dYA4mHt]Y+f`T&>6-C^VA');
define('NONCE_SALT',       '92FTw)27TsoIP6a(HDV bpB~2]~[4=5=CDNN26#RYC~dR{NGzispGsg,8fLK*MFJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
