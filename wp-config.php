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
define('AUTH_KEY',         '(fm*j)wSVM.k-!M-sP*J!EF]S`;xR$XN@j?n(#a(#MoMrq&~Lj4f5I DDFq&m(6j');
define('SECURE_AUTH_KEY',  'b}_/;va(@^@ qdg>}:d?&OO2& pvGOi81/aLSUGG0_;`Ndywo+d0Rg9VH*[vX5Bn');
define('LOGGED_IN_KEY',    'dQ1]6XB)B):sq1!G*~E{_epJRjt_N<iW3p7Ea^*N[]mUg(z!N+9?r!nvs3NY=:jD');
define('NONCE_KEY',        '+HyQoPr#NXzC}v 7x$YZLFd9q+OT! [|iWV]516?Lxmx,_,A^haZ0(9 _>|p+$&e');
define('AUTH_SALT',        'jw9&[({&SExyKKdaEmKV&LMFmwT4n!G^Q[cA52X?W$WG<Kt/X7m9D$H^L`u =I1-');
define('SECURE_AUTH_SALT', 'j,8K1N<fQRlZ*Cyy%.Z,XNs-hvCufiQXBLt~!T.oc1l@nhO7F;,c1Gx^U_LiY$K0');
define('LOGGED_IN_SALT',   '6?M(>C<!(~Dt.QcBS d;~*#z*jPNd>}GApcakaGo}.Q2m/%A+Wo<f@QFb-==[%Yt');
define('NONCE_SALT',       'ph_7v1X`KJ[}4.q</0C G<P}#)PX0jhFy4+:t<x<38w]^u0;R$A9RNd-8BlT%P&X');

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
