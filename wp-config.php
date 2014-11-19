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
define('DB_NAME', 'wp_colegios');

/** MySQL database username */
define('DB_USER', 'alecop_colegios');

/** MySQL database password */
define('DB_PASSWORD', 'D2HY4rwoEsszfZd');

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
define('AUTH_KEY',         '4o1y^x9-#iuHA.[lxUZ.r&!7lFGkaSbC}7`3PJdP&[<9p2efo0Gai)j+^|6@&B).');
define('SECURE_AUTH_KEY',  '+6.1DnI^tA &j6iWnEu=DcRtOgL}+)+z;z[k*iCVx!zxxBZ=ZM^!yAk%:J[1IZ&b');
define('LOGGED_IN_KEY',    '@Q9w_C<0o|Wxjv|lyBUJ+3CqkRYeA9OXvo8|iO:BO0t!)GWgJQM3dS.lBE)gY>j6');
define('NONCE_KEY',        '[/G>&W>_?PMz1?.ZJ,YEI2kDA|h6;+[U+R&7707MqOy Y&m$S4=&{at`!b~?!QNB');
define('AUTH_SALT',        '8l)l; )+(R+ZXt+k:P%y-0p1)tX=L0Amig|-r~oJdZ)7&sG2>7Yu?A]# 6|0jIw=');
define('SECURE_AUTH_SALT', 'VF8c(wVN{|1Gp,t!&PZ.p0* 1wzy|`{B%S])v+PH.V9Y MR|EIS{mr<-Xkem 5:Y');
define('LOGGED_IN_SALT',   'lNju[,iPH7>V#m6;vciNx?$`La#~Iw!_AJL}/nXFeA+yjSF}4.w?(vnG_si.QnC^');
define('NONCE_SALT',       ' Ba{,FEu=Kqo}*H#Ja~-Iqf$ES@a(fvw`Pq0,r~X |EgwwYie|32?W,#`qUBjJgX');

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
