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
define('DB_NAME', 'yeoguess');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ZY[guzp-q{tdD1Oy}Wpr8sOrW<r;ZjIZp/BZurK(aWY5((_aS^*z{,F-(Y-mnguV');
define('SECURE_AUTH_KEY',  '4A/.%j4kP-i-;=Go#DLQ~1<;oB[suc?>L%8U$QSc<0)it,[=y_Tj_rQyn$]Yg$?!');
define('LOGGED_IN_KEY',    ',GoYb+K16^iisI,Hup-zVk3kKe;f/D/L77AmS&0dVr]b@[asqr]qY0ZG2A:(;!V5');
define('NONCE_KEY',        '1 JYDl:00~a/F?+>~4[-^eT0JJ5DUAdN9698Nk$M5[rm$66WCm>[X8YsT1L,^(px');
define('AUTH_SALT',        '3@L@=Q@K]:q;|.9fEC5=)w4Sqq|Pr:p4XYu:E}.#R]GXrv~?sx-U*Iy^a7.f>{8P');
define('SECURE_AUTH_SALT', 'MK~1jm;HZ|M.6N9@9e8UA}%Otxs#T3hy?2>nI-L*XU,xY6k._~CQZnpi35*M~GlI');
define('LOGGED_IN_SALT',   'ym$-wCIi}_#1qQ<Wy]=vA|I)x#xXDws,-A;rpK@45JdzV8[fo!j55*w:7E]|]h[G');
define('NONCE_SALT',       'aiz5Alpq!iX,|R^%4[)Q(G(AggEolX^57I3CUG*u{%,Ul5syc>[t!ghil]B{-cQ.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_365';

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
