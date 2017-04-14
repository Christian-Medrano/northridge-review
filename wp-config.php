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
define('DB_NAME', 'northridge-review');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'q!y.>zwGB{I5TqW.k.#6aB; .:d:MxA],LljlDxLHUUEjF)^)86%7@Hc.]{jU&?n');
define('SECURE_AUTH_KEY',  '_h6y ~Ea4&g3|AW6AxN}&hl)hqrity2!p>S:8A(r$aeUQ|iTw?wamj1d!~|rcz=D');
define('LOGGED_IN_KEY',    ',_UA9i}nb0&}ZrcB^c:rRwAZeE1YV-yq2>N<)B%+]b]V8GOs-^C5?x|P>zcyQU^B');
define('NONCE_KEY',        ') Jo4s0.TJXwW# R$F2$b%H0J|BXl?_&kI7Obcor4X^@7K<>hpK]>tV{Bb)C#+gy');
define('AUTH_SALT',        'pd$d+Pl?w)5/J0JzVys3urB?p`:,w]Wt<$80fv*3O=e1:1jWJs?W7ZqSXH#tea^`');
define('SECURE_AUTH_SALT', ']|4Bpst%}SHAp^[mxC,`lj[#Zn#!:A~a/<s,ee3*bAYueTP 1I_[fIz[u%}9{s$7');
define('LOGGED_IN_SALT',   'Rvp>dBQP!^BGB0H=Bv<2%nH)$55u&/L!W:=Ld0HKZY.71wo_1JZp~w<%:Y}|!%#;');
define('NONCE_SALT',       'o~{q>MKmPc2wtAp)Y??ex.qb~E 8|K.S,Wf0kJ MW?rA|cHW5&O=3V7Zyh:UC$7b');

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
