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
define('DB_NAME', 'films');

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
define('AUTH_KEY',         'G_>jG%{~p@heRQD$P+YnK=/Tedp0F3rZLarqQGI[jVI2)Am~LUv~0ziaX@%s->x0');
define('SECURE_AUTH_KEY',  'Mk8WY_ZBjGGmtd^7DqZI7{j!d4:j@XKw{}Z]]A3FL*%e(qRLC09g}iFP%w>{rlQ+');
define('LOGGED_IN_KEY',    '1pw~bU^v=b ^anCxJt3TPD16,kEb>__s}0dSw^N1.3t4C,,AiUsq3kY:O)cMp4Lp');
define('NONCE_KEY',        'E3s_eY3uBY@qy{LWL^rUWn=aom%|Nfl>`G%_2}!s[AL>Uu1jdTQs../a^y~Ci^op');
define('AUTH_SALT',        '#t&sN{RHjfoaVoiE2rgQ.BCx`n7{i.DXKW4qfCTftFf@h KhV1gP-cf|v9Ej}@c#');
define('SECURE_AUTH_SALT', '=/O4|T[yaL9W!b=]x~*~S8+Lra!;rAQN/$1B4m?D{b=$<!}qasgB+.,c,3_~dcfW');
define('LOGGED_IN_SALT',   'PaC-^yM.pAAU%NS=bna48fs8`uq3(H T4~_KXwyI_=z/Kx4gC4yaDMoJ>HE|jV!6');
define('NONCE_SALT',       'dWZ+L0UG^+t0>X8q~(?HgXQv+b)dx./,W,CT]d1(S6g4XbVHL(<O!mMB;d?fQ}@-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
