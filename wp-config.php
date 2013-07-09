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
define('DB_NAME', 'spaceadvocates');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '&mt(HQB<g(4c@C%Sq8V+-X;{iM-1j+ wK/AL/O5U:p;$GZNm_])0qt]epFzxeL=1');
define('SECURE_AUTH_KEY',  '?,R+(y8=: mcz{to3DnVT3O)KW!Ol6AP8heg,.C/vPY`7T/EAf{7XHHsE%hG[BRb');
define('LOGGED_IN_KEY',    'nh6mGgN2e8$eK?n49} WlQp7v=Tmd{OI.-H2j]<rO?R#`*t&*E9eiY+#-@:nc|L-');
define('NONCE_KEY',        'b2ew-E|eH_}ymAGJe%Juv$Zs,7qH@B^4iW>~,&-R6He(JzB?SZ`uCnZg>GQ1ou*R');
define('AUTH_SALT',        'ij}wp*r$le.W6CFJXY@lW?vi+-u|E|Tl(+IwiLUF,vY.SNONZm&5CiGB+,oV>xvN');
define('SECURE_AUTH_SALT', 'J(@N3!vnn+iK@+)_@~f8LRZm{SJP[7pd@s++Dt=<f)%7{NE=(L>E8YWZ2grhwXS-');
define('LOGGED_IN_SALT',   'GbX%+8<XAA|!+,N{#5GK765P6,lWi)|=~8X+CoX~h*X=AC`;8xni$lJtaaEfl9;7');
define('NONCE_SALT',       'fFCd^L5/@doUudLP)wb<^T@lJM>zR|t2o3}[#+>(,}6yP+wP$kyM[7_t!D$cAx?r');

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