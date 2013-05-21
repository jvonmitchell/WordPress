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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'jason');

/** MySQL database password */
define('DB_PASSWORD', 'hiya');

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
define('AUTH_KEY',         '~aTGHB]2WNtHu].*(^s!O(3-= Ed:qLXi w|<]PRo(_xp$^o{^h!y|,+BvrL(I9N');
define('SECURE_AUTH_KEY',  'C}<-~+zDjEfKvG R^-<<_Gv2^f:iJPD=>r(&?lszO5YFJ-Pvk]I|7on91GVIOFY!');
define('LOGGED_IN_KEY',    'C}$$!Eq&~FbVJxZ8_fnhJ<23`3SXWtv|kzw4FJe.B:_}~wfU7$ws1_138hW3K2b@');
define('NONCE_KEY',        '[0#K/alpuE~%c0{uf?i:w;2L62+1_=Mu^v:7]!8DP6OUDDMyjh7|O(.wmCK8}@Nv');
define('AUTH_SALT',        'F!|-w+_a?EqE2T~||M=Z!;zMocfjO@4:$&(R{-I6|(#S$.2zj;4s~vDf#a.`+I7f');
define('SECURE_AUTH_SALT', '(m@@kX#wW7s-jg`]ObSkY<$L#63h[^8E#o%)j{UKJ0s4?&.iipAzWij`c-<l--g.');
define('LOGGED_IN_SALT',   'J|W(+L06*ea<N`=t&uT%>w|=rgdv<uM[5|1Bc0auu=:cBnE}opkwE]/m1}GUtti]');
define('NONCE_SALT',       'a)m,`}u<2n{>eO;jX*oAh%sZVAp m&{qZ!~bO*+ e_c*HcxoQA(6Grh[Y~p(%0<(');

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
