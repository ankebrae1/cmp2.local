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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_pop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Q|lzE6.d*LZVOP$G:@U`1IU&}sgiE[y<Ch`n|Pm0`<..MC)C#d2?Vhbd|w;<@Hw!');
define('SECURE_AUTH_KEY',  'v1}6iZM*ztBq.U2JTXBZzFS{X%J/Czgo8l-e!+gX!)xw]f+00*X7cke;6pt?pKnF');
define('LOGGED_IN_KEY',    'z,=yu&X[!OM5Hs(b-fdi6]__ox$sM(y=6a6e5:zUlN`|MP`/!GYAKY013 yf$tps');
define('NONCE_KEY',        'Rx!b9lO)(Q@N~OK-GA(8EbRS7$D>h`+OdPDz6H6h=RYnNgc+Vbw?wpXl[y)Bw:8m');
define('AUTH_SALT',        'skO~(Pi7}`nGq]VXXBy:[LfXOS~P/KhdT]+D?6{nZy@DqVcWsRQH;wM|3:m4ow+H');
define('SECURE_AUTH_SALT', 'ks61IB3bjMYYh!JINS6d:SC:(J:_S&EBe/nBWaUVzpq1nX):Ndd%A(c~,NY>zKG`');
define('LOGGED_IN_SALT',   '}k)Bf,9Z-l*QFfUkzrq8:%2s=#F`RM_e8av+|%W@*0;PW4Mg<9!p.@eJn!|-C*rV');
define('NONCE_SALT',       'ZWohFdYZ<EX+JI)*yOFq;DCf(]Dm,wO=`p-vX?qL<Uvl;$XwY]psvv2iStt0Ohmp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pop_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
