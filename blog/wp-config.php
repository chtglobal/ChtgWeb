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
define('DB_NAME', 'chtgblog');

/** MySQL database username */
define('DB_USER', 'hartie');

/** MySQL database password */
define('DB_PASSWORD', 'JeffG1695');

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
define('AUTH_KEY',         'FSb7/IoHl-3.SA}SThp*M[q5U2]>{y2n_l93<6q:4-%F!>5us$?glDnDC>.l9Yo-');
define('SECURE_AUTH_KEY',  'amuG}X:e8z7A8wkADJ:rz%`XOYm!W=MhPf}~Qu>Bw:_hTUiUu%EG:rzT+/0x]}wD');
define('LOGGED_IN_KEY',    '|mo~01R;):MaFho>*LY,l4&xpZ]jw$oWZ/ivgK[`IK@hn)#GY31b40/o$Z,uO{`4');
define('NONCE_KEY',        'J_RL~:KHfR_]u,Sx?;Q`_*Fq0@WWi*zMnnnyO]auJrXk^L$T4Hx9Rq}q*6WKJ).D');
define('AUTH_SALT',        'jY_l#6^UP{@YOvV[c/m45lYhYH1qR|aKxbV!{FDs@lol8O17,=As|+#=,Rn8~O(v');
define('SECURE_AUTH_SALT', '-JZVyIV.bM:rW~g7}bRwktZ&G>bvBpR7QYv^:RWJacNgJGsO.@dt?$S#JJ`;N9{m');
define('LOGGED_IN_SALT',   'F}%RIkJC.$0pL|#;^a8ofC)6h*>Dsu]Wea#=S#f)S;Ycy_0z40}RN+5h#x$,Dle_');
define('NONCE_SALT',       'N)sp}So8#>%:m7:-Eu:?=*mi,ExcH8t%k<?GXLZ4.PL00c/?Up;aB#og?!Ne5yyO');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
