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
define('DB_NAME', 'neridesi_wor1');

/** MySQL database username */
define('DB_USER', 'neridesi_wor1');

/** MySQL database password */
define('DB_PASSWORD', '640n5QZk');

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
define('AUTH_KEY',         'mYfu%RxG7PZ>Do:Oj=zZpDC4g^=+b?:RafsO;lloEQO.V/gK-+dRN[Os{rM+/+=B');
define('SECURE_AUTH_KEY',  '{JgD}w%kp.d]QLP_D_E}p=c9V;Ix|GDUFwQq5qNDrCO`<.Zh7MaV6I):7!^W(/38');
define('LOGGED_IN_KEY',    '<HsL,}Iva&BIW_XJ=+i$?Z,(,O@B5^OAE*AodHEjX5V(D:d[A7h3#S_hw?S;>MWy');
define('NONCE_KEY',        ';{zH-L*vl<B-2r$+lS;-Q7q)bpW4];N4.yHtyOydMu]/f^qk9A#wuJjgx8VrIT[p');
define('AUTH_SALT',        '~<K`8|a-V%!&|eSX#+]Zb&<W,*3OR-b)-X2#JI+i*s2_yG:tAx77>15rd{%DZ?0R');
define('SECURE_AUTH_SALT', 'Z=lAA,i3B8oXs10<=r;{P1w+D?Wh| ;EI] }_khg4U5oh57n1bxe#|1EPA b(f:`');
define('LOGGED_IN_SALT',   '*_[/ij|~I_Q.PzO[EYRH1w7{MCa$`uMd?%n5MvZNg}sR@LP9+5AfXQt&]9KtaW%F');
define('NONCE_SALT',       '.qm8, 041>ogv8LGSB.-gsVBv:{=!.Kpb|Vuzw}T7v1_!Z!yTXB,:8> |Q9zQOkR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'soc_';

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
