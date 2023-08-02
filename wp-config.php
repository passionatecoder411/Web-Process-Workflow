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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|4*hcQUyP6#+CDQo$t+m-KQ)J dy@<m&_k}u#eW2bUg}?/1t>+Tu{1 S+}>?dj/a');
define('SECURE_AUTH_KEY',  'brOv6*aB P5+w$8nhCc&kQ;5ui|*<LkR4;f.MJegDj(Ew2K= se)WIH;LsBac1:=');
define('LOGGED_IN_KEY',    '8zqWu=my|e-l*}~l59-naZI0_@?I/43-BNgU?F8|Ipo*-I17`ox-hTu5`hFn( Sa');
define('NONCE_KEY',        '{~T}*7==b||1N2u<w|DePuge,+2nxhv+dc-F!?gj%riLJ(]Q.eb-)^W?bk+?Lr95');
define('AUTH_SALT',        'T&-fnI&6dVg@=c+b%hkZ|68sg>O}wCp`QPx/_eqMN4N_hpiSRf-xcej>V3$0=@N.');
define('SECURE_AUTH_SALT', 'j[252-rHq26Alz|iN!0+dR:L~ck5w&H&)5i2:OU$.zRaA)xzD0f/$Cz-To5B}qj,');
define('LOGGED_IN_SALT',   ' Ht<5?)$(.m PqUS*{,!#V?2z}mC<o]#S%EN}BN|zBDD/:W[>b4[l2[ci&=q,gg&');
define('NONCE_SALT',       'w%4!{tAo|Y(s<`E2+qM|h>*k=[%{^bg:+-R+5:$KQEJczR)jSbto4vFw3h,+HuqN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
