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
define('DB_NAME', 'linovhr_landingpage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '@/cD,7p=U) tpZ<*$z<Yr|cb`FVj=Nwkq] %uG*dDqtnbKfdAOQTedco3A[U#Igb');
define('SECURE_AUTH_KEY', '4/*),`6e?:fmox%# ]|R|bKdRIW)&dMy);<%+TmC58D|4MRpv!h7Z.vcMuO_NS|7');
define('LOGGED_IN_KEY', '1ASrp|68g!^vw^SHu;MkzG)m|XLC?DO+Lc0|.b8O]|H|+?C&25azu`wMR4!p9!~b');
define('NONCE_KEY', 'bqBe!b09`w@j]-3M|}-cn_IxB&QwVDyS`L_Tgs#?f&Y)x=S?>jvnmWfh?NEzY:pP');
define('AUTH_SALT', 'FwCy~/0!H<Zg>9FKh?VY1t^_iMu&mD_O_mm~#+{TpD,(o@5,G+mXCj &)+U.;IPl');
define('SECURE_AUTH_SALT', 'R/;.1UQ >7/z6ko2(n}|%vL(OQ|AUb*H3_d=E.C2JGXH orO!RIWkLQ|$K (qkmF');
define('LOGGED_IN_SALT', 'qfE1}Y<mW]v~Q[zJ5I{h/%i7<h!yp+E_e_c+G+#TT&QebfJr#lvc g4BrCOIr{}w');
define('NONCE_SALT', 'Wh2k+lA~;*w_W<y<c#rpgue`kH2X~eb};YpbP/uOjJk6X8t6Ggk}=:oD#M3mBMSA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
