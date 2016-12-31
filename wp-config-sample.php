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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         '/IcG&)K^~%Znz[JsDu,9+u%0_G+&r,3TXz[AN7_B~_$Qoi3s0[SlTj4RfQ_}gti-');
define('SECURE_AUTH_KEY',  '{q2PZ2?AF?9xt{P*M;AcC9p`O99p]`.FDZ?xJtKAvZbyFB-[WuL grQudHaaT22N');
define('LOGGED_IN_KEY',    'Bko-F5S:~xSmLpzbEq|]+- b_-;.l+q_GIOi6taWx_wGY,].p+<yvSG|*p^>0<B0');
define('NONCE_KEY',        'fjh^9q7MMyIUQ|#!6&V,?]yc;{G&w];T|DU(C2]yqb 19|:F*EeU) Zna?-ls9f@');
define('AUTH_SALT',        '|{$+,tZ&6TANkXo: FOjCQR[|xwL.:)+VK9QarIkTk&0utI#I_``N#Q[X-[R3euU');
define('SECURE_AUTH_SALT', 'Am2/[f?7j<Lr-g&LTnohwNZ/sbuXHc!-d|Tlt@^6ZI:-!&28ykBqr@R2$)Z/@`CV');
define('LOGGED_IN_SALT',   ' Rd(D_L8N(eRr$PYvGR$4y#mwK2I]vP)oI$k3Axl4C<Z#f3M*I)?Y_+Y4J(a<B0V');
define('NONCE_SALT',       '^RSr:a/*<e(vyMm@1a_c63,JSMM{A}^]krD*IBR0Z]4=W**[{m9(&<}}#+m$$E(*');

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
