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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '2>Zg;3b``0;k-RwH3}Ox$eYc-DYmm5!1L]sv)!*RN|-K=6qF?n#s!P71cTauu=%+');
define('SECURE_AUTH_KEY',  '0-Kb5Se8H%a1gt)-nV?VuyepH|O55(/3>r&nTd#lNv*R-S$RLw@3.,1_Q}TiZR@#');
define('LOGGED_IN_KEY',    'kln.uUCYPqyJx];5m9g.bK@yIpNb}=y6[WD##*5(`Bstoxt%xVN-.9_NM^H+&2ZO');
define('NONCE_KEY',        '}!~t9f+PCpi/wl u)tcQRP&u>>2Jug<thG&Y*@$b1JU/XQf+bQdYAWa*Sn`ni(^0');
define('AUTH_SALT',        '{YK,)U8PhNuZN8x:A=x8TB(@q/UbxY~%*2#;xT*lvgcm ;%sk: m`.aErX0U-D#m');
define('SECURE_AUTH_SALT', '(^aw+gX+p A~%#7q?Acyy0/Bei]J.cl[GwK$=]hA5a-23X[x+ScquSdeEizmv&iQ');
define('LOGGED_IN_SALT',   'z=X8r3wEwKX!Z(y9+XyBkE1Hg2Q;GS/&9+qU8^a|miry!)<*=K<{fo|uCj.G:G?1');
define('NONCE_SALT',       'DM4o$Z+k+$LIu?z]`VO+~{*<984{Dx}.>8+,__+B4r=cAF,IzTV_jc}*Apk~^9J.');


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
define('FS_METHOD', 'direct');
