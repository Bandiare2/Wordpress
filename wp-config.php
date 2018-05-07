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
define('DB_NAME', 'basededonnee');

/** MySQL database username */
define('DB_USER', 'nouveaucompteuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '=JhqA~/kV_g%QbviDuI)8Yp};F(Nlcdg<qY8PEBexI-5</$]0b0%xGvov1CrmQei');
define('SECURE_AUTH_KEY',  '0~-pup/6+Q,l %5)+[Xhj9j^=QyL9CbKMLKx:F?6o~P2))Bd0;6XN7=F_pF$xP]|');
define('LOGGED_IN_KEY',    '7;0e)G<hTz1KEozn6gL`z98mk6`IF0V}KG ,^#1!PJ7M`nwtCD51!Gx#6!HL/4m}');
define('NONCE_KEY',        '%2#~@{=J#>K{=C}7 >Yf&/56L~,b3J[!2B Wv3~l9fw+Q^G;3Y`&/j$ &yV#3Wh2');
define('AUTH_SALT',        'A,VDyPsuohPmZxVc&r/cmY+91bgm`vsS#)d}YJ5D}!zi Hm/pjhtc1)j+uU)Y-<k');
define('SECURE_AUTH_SALT', 'iDBtf+6l8Buc`sPA Yj$(yo3N*0bnE=_dtqGsSqJjeZ*]?N;~+gf08UDtG3fqVDc');
define('LOGGED_IN_SALT',   's6e$jFi@LO]1Cm(bp,YZK6HX_GP=LK89mB4[} 2 LfFzv-r/kdh*-0@&t}^<$`4z');
define('NONCE_SALT',       'pb9Tor=&n:w;H[XUa8|B+R6rd:=|kIJ+yLf[rws@tsIC`6SiiTPa5./!:z{Bd!;k');

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
