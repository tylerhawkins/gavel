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
define('DB_NAME', 'gavel_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Cdx-A%#0K2?oh7*[A!IwpVq.`-W*-:m1b_&m#`X;H?447`-s-|iE+aM&|xr%<]y+');
define('SECURE_AUTH_KEY',  ' ]-X?w+g /hRLN_WHpFgc-vHdMKg18>:Mcz;n~u!a#tP6$r9KLq*3HhR{}#{ukW~');
define('LOGGED_IN_KEY',    'gq,mm]d/6ugoi+Qs6T5v_8.RiA8Z+C7B,{R#Ii7V#Dx}GV)-+D0<{6L1t*DDmAE+');
define('NONCE_KEY',        '`7Z|jf`uu5q|uJ-PH@7YAE-$jU*Wp9%(Rlm&?$wv}$z=S.&$mLr.VT:bH{(upc|=');
define('AUTH_SALT',        'js`<+ko/Ctw>L{XntuOZ>q.WQ3Dj&Ckn(+:hGq,?by$Ji{=zOC;I@K<$_)t$kb<|');
define('SECURE_AUTH_SALT', 'E*>>a$If^u(sX(-u%x2Dms`[tj 9G.HMni{g8SG?mna@0M?o^o%c::,#udBG#*]N');
define('LOGGED_IN_SALT',   'l::fUV%G)M|~yB5M|@+kgO3:kuqK%UrDy57|-!#[|HG+g5KiCy(k!9Ft]C}gl?|d');
define('NONCE_SALT',       'WiRnldqu$-?x:/DHNMWW%js!L,)$dgu-iLqSW=hdz)hhn/[WA9MK2EU+-+;)se:#');

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
