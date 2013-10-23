<?php

/** Include Genesis to use with WordPress */
require_once(dirname(__FILE__) . '/../bower_components/genesis-wordpress/src/Genesis.php');

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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1B+DiYUVaEt3HKJz');

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
define('AUTH_KEY',         '3z~Aq:u/`f%-i6_x`3rZ+MR(OjzjDYh!NOOAK?sW_Qhx#i|ek+]Zj0=Agch$qyn5');
define('SECURE_AUTH_KEY',  '|FD!G@}]|6nO&h-+<6fr}@ufXU<R@}L)y$|o K-MblTU*ri-ZbKu|H@*BiWXy1{t');
define('LOGGED_IN_KEY',    '8hj%Q-=#{+,#.~^P(Fe=XQ54Q0l XO10q&Vp-;;q(!;v/Ul7tj/QO:1C.2P65K>,');
define('NONCE_KEY',        'Ru0BnkvwcJh-mZ`[VpXA|,VdenPT{1-]5EmtcG7Z3%LNp h)8rWQE-~clIZ(=/gq');
define('AUTH_SALT',        '](uC^pByG7Pm{J,1.W0ki3Ld[2I-MJ8hPs}FqJK(@<-&-+ZtW@91@;x^L;C0%S9o');
define('SECURE_AUTH_SALT', '+WTF5i0imet@Q?Qc?PCz|UY%*kJT.%=_2}qXgau3_S~/;uZ.n/cV/%l5q~O}-U4X');
define('LOGGED_IN_SALT',   '|/Ir_t5tQ;)->,$[ZiE|hWygXf4w^]H~m}ul9nt?s%5K[$AK`pY<PT3dzO~ExF1@');
define('NONCE_SALT',       '3qaxr%%Y)6*EV.KBo/!s3Em{x7(T4h[?Q>r,GJt1dGFTS4Se?ECyU4LLE)149H.9');


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
define('WP_DEBUG', WP_ENV === 'local');

define('WP_POST_REVISIONS', 5);

/*That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if (WP_ENV !== 'www') {
  Genesis::rewriteUrls();
}
