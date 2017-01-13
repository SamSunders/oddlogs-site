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
define('DB_NAME', 'oddlogs-site');

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
define('AUTH_KEY',         '{-T%Vwq~X5x)UO%eD,_#KD(7O8f/u^0%?LavpJX4VND<x==TY7nt.{:4g0.aFrMS');
define('SECURE_AUTH_KEY',  '|Bc-_/nbCBhxic(<Wr=RKd[Hd6pi#;5m*YPX{Q1?UOh]hf&GkugLj8X5> 96z(tB');
define('LOGGED_IN_KEY',    '{]8#8#$^( n Iga-cT=S-Tci;9}V%LP6BPFAH~Q]|BHHVKLG[.>s1K^#{u 9GeQ<');
define('NONCE_KEY',        'g/9`1Hx>J T9KT*S[+)2P!18C+kp~Un)%%@_p+Rs(b]S}F[D&OK*bGKzM<j r<ts');
define('AUTH_SALT',        'Gc?$4Z4+*G><.>Ou@rXRL@<zFz8rn>wz+OLKG0yML.IttbluxNLrR!Dyl6MK$ho/');
define('SECURE_AUTH_SALT', 'Ei;35t/R@,grqSx_D`E7K$6z9{JEu5]E~Yob$^UUc:s*16Dgulj]w:XS~_G9hAKM');
define('LOGGED_IN_SALT',   '$e&`# 0<@EcUUB?NM),6RF$%s_+z6:,Bg^L8 lg.~VM//Zz32L0i`ogpN,%@tCu4');
define('NONCE_SALT',       ')AcM@dg>w(F}DF+hD.&Fr`gNH$$qdk5V;~U^R69w q%`j8-y+.ltZIU;8yQLJ9Xp');

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
