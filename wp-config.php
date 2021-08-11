<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hello123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'o>X[2nlW7|UF7F:LJo-3I.&Q,Ph57a$:t-`J~M~3@ib2r.$P%nhBA$? j)C#HM<y' );
define( 'SECURE_AUTH_KEY',  'C`^C8[ar(Xd14, Pqg?YX/v<vtIeGBr5xPyP9HoqIQMw36J b=)(K`G+[z)HT^Iz' );
define( 'LOGGED_IN_KEY',    'PkeOUEUhMa9vT$K_.CcmyOVl(w5UL><Pfo]hEYFcj415Ku[f%72-l~WOqSpet2mY' );
define( 'NONCE_KEY',        'Z4#6j@jA!1-aCN(l+E(Lx 4dSH66e5{;W/ANlUY%WQ@C>Z$q7k(m>q5DT?&Kgpo9' );
define( 'AUTH_SALT',        'OIw$J^2RM)m_L#nj3]9$/1Af9r[R:2bK]%R&h2K_sJ%^;SJo0$TGK28F.cWFbYvk' );
define( 'SECURE_AUTH_SALT', 'al(E6-+XtDbv@My%s_0ZNZAD{LwC5x8n-7U^hPCY(Q2F/K<}Q2|A#BKk|cn(FlHn' );
define( 'LOGGED_IN_SALT',   '^g^|OH6gnx$PqJTCXe$F{Q,]gomY&d[#}He7J]jL;ysoCcvt~-{7bYqEJ4.4{m?a' );
define( 'NONCE_SALT',       'i6xj8UrJvJ[{<ZEE%]MZwu.d=E^-T;{L0WWo93T^LpM:2f]h$N+%tM?1n}wmj0$|' );

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
