<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Game_Bench' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'aAI9FKybuW8MqCuc' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{R}dGk4%{:nm_PL&lKsM#%=D*QBh{j/c%!!<=0_KLei+UxR9k@jqW&iOc0?rg|-b' );
define( 'SECURE_AUTH_KEY',   'NPJArG9;[|`XjC7_=!6SrsT/cgiP9m^+|_s jP+(Ad?H?xlrpgy) &YS*K(F>y:t' );
define( 'LOGGED_IN_KEY',     'lexu%bBVN<(cm;$=6Hp<8:_&Lh~iq!8f9!fOTw$OAI<t@qx<JV+C39F%G5N3>AZ5' );
define( 'NONCE_KEY',         '%9)VU>H?)s}a*|8d.YfA2[IgM/B_wFQ1D+.Pc%|LT`qQ92$OIsZ$M?|nXcLh6cUE' );
define( 'AUTH_SALT',         'c~<{=K;}a6+]-BjR.HteX%=xcSQ)`}4/v`I23l9LX4A!~1|6Y0k4=z-C]-+yb!bC' );
define( 'SECURE_AUTH_SALT',  '@AN-Ycw5QavY=I)gO_H!LKreUEh`y(!O6qA5(umi#f![OG#Zws7*n|T8~WIg4y.=' );
define( 'LOGGED_IN_SALT',    'OK0W1x{/&$b?;Llcu=D+ -DRGj+i OU+@Y9jsQ!Cdf!L&`r{Mqp NY#VzqIjhkbm' );
define( 'NONCE_SALT',        '?0eEn2]^jCs7YzWa;0Q<B].iy-a8!i^lp<dj&z?Uf>IBoa6Pel=!h;;M?CC|b%=h' );
define( 'WP_CACHE_KEY_SALT', '*/--pwzG~!uTq0<EIoT9Ol^^]9zl*RB02wwugxYU&;C,[wDbZf#8ca!lyRfqun Y' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
