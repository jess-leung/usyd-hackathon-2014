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
define('DB_NAME', 'SSH');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '!q9Ud#+8p|cxQDHxuT})|X]shGS0A32|q{yq5[BRMHZnS5NK0|j98B-!+0vb#/4b');
define('SECURE_AUTH_KEY',  'V#B7B=CYlis^HmsdI[&Ly+_cRL}.c|4]nn`Q$30K;_1_@-94qT33`w>/YXneH28V');
define('LOGGED_IN_KEY',    '|E+.z+;ut4b`~[dmsXK@8@iRZ96/:~m-s|>3v]H*Qm9__k0;!DB^CgDAjmnff!J]');
define('NONCE_KEY',        'wbwH,/eqZ7)|~[Z5jK)!#F:*s>@oD%lI.s*/^O-QzQ~X~bJrMq*asZyx.7W>PDi$');
define('AUTH_SALT',        'Qxf-lzcr={8_Q`k@^[=6Pyz =gl+{lDG.zhjt1j^$Rw7Q0{*3>nlC>/3P-TY9Eki');
define('SECURE_AUTH_SALT', '~r<V4BG$P)kp4?>p].hlH+(sUu#%1 - t`+ ^>KA}m U!zgCs%#T|2hEo[2NZm22');
define('LOGGED_IN_SALT',   '(ows|gjRFEG+H4v:mU4=pG&7OeOTR4Io*]hI]z8lw0$12[)>OQ-[GI45SU]Tw;1M');
define('NONCE_SALT',       'Hzh&1yTXC[e!C#pr%|++0q31_^W}pT-zmt-,V+Rm+[*vJEP1PZk/Kwhg8v#:mFp3');

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
