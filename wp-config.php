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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

// Test om vi kører LOKALT
if ($_SERVER['SERVER_NAME'] == "deployment-velse.local") {
	define('DB_NAME', 'local');

	/** Database username */
	define('DB_USER', 'root');

	/** Database password */
	define('DB_PASSWORD', 'root');

	/** Database hostname */
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'amalieandreasen_comdeployment');

	/** Database username */
	define('DB_USER', 'amalieandreasen_comdeployment');

	/** Database password */
	define('DB_PASSWORD', 'Eyv96jfz121199');

	/** Database hostname */
	define('DB_HOST', 'amalieandreasen.com.mysql');
}

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'Ilbld5IaSOw-[v2Cm@nZQ*keU>xSdNJ,46[Z(EBf!2{bzq%|pDI[U7$qGLd?Z~^e');
define('SECURE_AUTH_KEY',   'Z)VEmP169/0S/H2xKS#epoPUFL(J_FhUXmTJ{^f<l EVwxggp}+oa=Tgw;|e3^!`');
define('LOGGED_IN_KEY',     'v+aIfBYH*0&dSb((;d&:Rr0n1S:/QNJWK-o&S|x@3-6+EkQ4M_w9ti/$7rs%Q/M{');
define('NONCE_KEY',         'iGAzs6?pmg,Hp>!#/Azjt,~ir,wOt7b:RoA@W2~)2cX=wX||WrZ4Q}_MvMa:#@`i');
define('AUTH_SALT',         'P;KrzOaPE-.X%^tQu>oG:yF^^3YHdJ^Jy3pxvE,@tb_KK^I5:]r),/kioB6yLQde');
define('SECURE_AUTH_SALT',  'GdD#Z0k4 4pqp0?/.J kbNO}W9<Bb_3J1Dtf^>,]kEjeE0B6WZr>C? gYdduXJ7n');
define('LOGGED_IN_SALT',    'k$h|;?4R<;e,nh>UPg%vBZTbIX:VWb:]RJBP&dA~ST:|`yM:@m2XT1St<M@rrD%)');
define('NONCE_SALT',        'VZ M,tV=$31, %i2tphz=^lE)=LHNv/zTr[D!.KIWNsq7`oy1IoMg=p{$!uff!3n');
define('WP_CACHE_KEY_SALT', 'cNExB~;7rY:nmr?(i2Pw,Rq.g]x.YT:]NtU*%T@+0OPd]G%h{pi?VIo-;hX.@9 `');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
