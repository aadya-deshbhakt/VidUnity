<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'VidUnity' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^W-*M13>/7iTrUWl=e I:#-%?fSx3$?>wj;:my-bG_c-#;ei[|htNJPSv!7ki3{T' );
define( 'SECURE_AUTH_KEY',  'XgC~)1OhYdGmzE.QqJ/2+#~:LNx4@kI|U#Ni?ra<qqiu=}ctcNQCB.Q+ s}n?*(r' );
define( 'LOGGED_IN_KEY',    'J4m:R1a!K(x>7P9[WT_,Zxb|i3OESz5H)qiSJ`K37Qk%8jaw]YM%)]k+K;Zc@{3I' );
define( 'NONCE_KEY',        '@0uiq4CKTz:RXIUyg0 1HOf$e !y$~w7z3@&g-:^Bw|R:F/np)T6|WSu[4q%7q0T' );
define( 'AUTH_SALT',        '(hRw RnC`,a5yhxEt(q2 #D~K?J.Wt:KlBann~X=vQk*QcU Z+=AT_68ZO>q>[zl' );
define( 'SECURE_AUTH_SALT', 'vBQt,s9f64%Hf!G,n(,73V@ZK@q3O[iHsR540i1<qW,oSs_q;VU,c>J9ifgI1>lz' );
define( 'LOGGED_IN_SALT',   '[lMhM)=8<B<lT{ecJ}j&GJ)N;L]bUGM soy5u/ZJ>>>8B/X{YyGN6WI+((}g-`N=' );
define( 'NONCE_SALT',       '3$6oH!=s.iQB:Q5s<[9RsbP6g9?tw,C*Z;J%G.n>sVlZr,xy=YL@?U]/99|@JBx,' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
