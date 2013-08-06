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
define('DB_NAME', 'spaceadv_dev1_wordpress');

/** MySQL database username */
define('DB_USER', 'spaceadv');

/** MySQL database password */
define('DB_PASSWORD', 'p3VR>r@8JsF');

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
define('AUTH_KEY',         '9{l=N3DXd2+G+I<Z|8?~l(1xED x7|4P]cJ#R#StD,C$raeFaW-+D0J&!H-3g  .');
define('SECURE_AUTH_KEY',  '9kapV*wGBn!ka[!YUigAfmIm.!1YEgNl!U]uX%Sx,Ze{tz`R8vfk|keAe`bwJH2t');
define('LOGGED_IN_KEY',    '$TuSjy27DO{?~maxl%i.#8r;6|4oWNd%+TFvqDbkF^F#U1$*RK(*hJJd7j+Do#cm');
define('NONCE_KEY',        ')]X&RXwi-{6*7S#V36,T+&v%d8LoGqb3aWR&|:x`:y-h<kV?:t*jtz ipNayX+.o');
define('AUTH_SALT',        'uJTDOtsPT^+:O3To7N-( 9.m2#aEc1+sbDx2]3;n:o]t__)!}.>Ul(>TYblN;!Pn');
define('SECURE_AUTH_SALT', '%t{(H|n`5pJdJnh5%43GTr)S&5i[bN{NX8m5PRc$K 1>psTU@lm|OQIu.r4Wd=H4');
define('LOGGED_IN_SALT',   'OSk+2L]+_A+LqwP&4gLK{K_*NCgVpXE LA0qQ_$Ji>6[|t!r~z cf!z||xwwe{|S');
define('NONCE_SALT',       'V ]m&e{<Tw4ZIlpHHxv7oM?*QcUeESI/SW+uHox0s9|zY|.MQzYgWixT=h!qSMjb');

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
