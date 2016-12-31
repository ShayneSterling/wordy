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
define('DB_NAME', 'wordPres');

/** MySQL database username */
define('DB_USER', 'Press');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'Fku?Rh!8QpTEW=}MFy%[27AB@cA#0gZ^allBYNGwPA!=Om4>$Dg>@:T=ig[_Jf`@');
define('SECURE_AUTH_KEY',  'xFYuey-aPw6fyxZ-M[0[4EP`ZrcVN.ev)6winT}]zZd) rg!TPiOiT,[98&O##7?');
define('LOGGED_IN_KEY',    ':A74z-wg28;eTB;<60EPqi7!2L:c>*h3/!CMJ%~RKv_D#F;!kGEOv/G7TYgO-C~I');
define('NONCE_KEY',        'U(0vseXjRTXB]5.AnWpNTu#VJ/+IK(%/+mm2N)vJRVKrCW{[lKl~mJ1Rbrf:/LKY');
define('AUTH_SALT',        '&ql;BZzlq0820w>kV.CQ0RU&wN-MK].?5M)Ur%>jz2Nkghc?c4(cB);A-1rp;&h/');
define('SECURE_AUTH_SALT', 'oTrrF=6<o<n*D<i)>&=zYJ&N+0{iHs]**jyCJ(csK2LC;vxd&tO%f8qHz8|A~ Y.');
define('LOGGED_IN_SALT',   ';ND`J75Z[J5H2CdDkK#:p;;AGu-cwv/%~G Srf&DbE)Yk&0NxFXGdG#vU^_ M;(-');
define('NONCE_SALT',       ';]H8-5Knn2m&,^@RH2IdeKH:Xu@-Tn|9aLWFkW;aTFl4y|7z+2 56I_%kAG`>);]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wrd';

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
