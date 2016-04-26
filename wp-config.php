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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'nibbs');

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
define('AUTH_KEY',         'QKPB;sMepb9QGxesxdL+D(U;-:E,Z-]3W<N34mR :9rA0t<Q|25*k=.58S3s}R6W');
define('SECURE_AUTH_KEY',  'zNy&)@nUb-BuTSkcjw0>+c#v&d[quC`?>(+9Ebc6UQO;^inH[-S`7(^^iryJF9}>');
define('LOGGED_IN_KEY',    'roAP^_4B{P)bwdEvk=M[ngEuR(uRfeo)?+T@,Z9bE,SW;Lru6zy=A88$|9Sm[N(Q');
define('NONCE_KEY',        'v329v!l#`[NO2Z^k`2-|ksRd{7;#O.!UCn&.oOQtcm^z(K_1V}>_g{4p;(eNeR7K');
define('AUTH_SALT',        'sb[SGxKd`<wH._Q~JjX,Q@4ZTs$C)TDJH6dSF(55pY,%}=]c>,=F+%_}?56rH?3(');
define('SECURE_AUTH_SALT', '2qY=`k;JHf0P-C+8@~ ~bCEQM+<WeN%NnnsCCw`+Tb$!0qd=b0#Ap|6YPo%s_KnP');
define('LOGGED_IN_SALT',   'nu!]~6qt@k>ImOR@zaL,bn`e_4{(m. ZPpc6v&wRA{2?v;<:sdS_/fKoHY46;sIz');
define('NONCE_SALT',       '4DvR}~xG7k/=XGgsD?HqZz]^!7z_fv?B!gk{^UO9X=<KG+ph13neu6<E^X^u=)ae');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

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
