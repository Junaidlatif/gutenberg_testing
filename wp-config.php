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
define( 'DB_NAME', 'gutenberg-testing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5z,`8@^gFa}b6_f%RdtBC)`JbvbW&-8{H}a9&;0a5]V84j)2iVOy8Oz~raLJ8p}F' );
define( 'SECURE_AUTH_KEY',  'U(H[tF~ki3-/r&DqAEnGpH&fp.cW;2*1EL{4(sbt8=N+lfqY6w`31S<rQ}twi2!2' );
define( 'LOGGED_IN_KEY',    'T8pB3:Gbe8&fZ9,O~CZ(_<t+gSNE8-fi2J^f(o]b2VK!k/(<`(r=of@>2{6Ml%.R' );
define( 'NONCE_KEY',        'ax4NnrN96d93QM%U:|Y/d{<&6M<,i;H]!oL*(W^LT}!,i9(?C,Zdl9^^X=;VH~W[' );
define( 'AUTH_SALT',        '50mT-52Jt}1BFCWEbES#IX )/q1=U^-:y@oX,!iV-7%WX(K lD>?l8,WOfx~9}`E' );
define( 'SECURE_AUTH_SALT', ':,FD>C!G/;W)eJ/we~X9GH|D0aG;7kZrr-F36B#EfCTUcqdSgGekfbQ*5M*,_16`' );
define( 'LOGGED_IN_SALT',   '(|&wu)6fb#%7o4pF2#cwKHVDJhTnof<(FMrNvCjdb2)On?Uj<Dfo >-l+ T%S/ $' );
define( 'NONCE_SALT',       'v},bvN=RF&9MM]KBZL9o^tRdqTV&m*5||LwiYkR]0X{vGC&f_N~-#wn&DW:z_4JT' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
