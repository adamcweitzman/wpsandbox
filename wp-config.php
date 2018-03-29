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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         'z4?;(_5.=J]nA/qvS*xltO5%E)$:5$B+QrAU!);|:ER6o(-67]@Y6W>b#,jLWBR9');
define('SECURE_AUTH_KEY',  'bn6cci{Pm<QN*~_>$Ar4KEfVt/?NF3p.~H}?,&nJhsDevSl=DF3$jBH_Vd2Zw0T/');
define('LOGGED_IN_KEY',    'QyU=aSM#!NN7d@p 3Tf~$bY3AaN@hEmD88YJQ1pU&<DEtjBkdOJqz-g&UJZFOrw@');
define('NONCE_KEY',        'QrB:Xst0bpcMgULjJm+d_W4B^&b5Q_D}EZ Ce$,VbN2cxmL^_eHfLs,I]WE5Dq@]');
define('AUTH_SALT',        'X7M.5%5uo32+Ve*!nfA[~YeZ7$.{;=7:6s92~W@*%$DQfTAr;XV$uk+drM>OIxLT');
define('SECURE_AUTH_SALT', '|Dw[<(tmQw]Z>RVTRvY9lKZnS+/dCuv6pQQR%)AGNo?7Q!.)6o^5Zr..U~0}s2up');
define('LOGGED_IN_SALT',   '{x:jcCCeG]]T5be9cB}z%&g +]WsBt*ot,$_6cJL5aXW<dL+~:DHswE6~!,c$9pE');
define('NONCE_SALT',       '`BSs>r)jsJiH~$zXac,y>zT$1-V965Ts7ZLVr%;rPx5nS38g#u&.JZPycjFp xM2');

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
