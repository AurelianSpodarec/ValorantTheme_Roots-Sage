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
define( 'DB_NAME', 'sage-boilerplate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/l]-zh8,Q$vfIz}iuc/K<Ao:;OgJ)=e~S`C:sx4nAf@JY]re+lk&Li-y~.~rFei$' );
define( 'SECURE_AUTH_KEY',  'OYHMyIK7)&c%5z-ME2Y!`WtQ)s6R[{Ym?PG~_Ysx6*.[>uIc^s,9TS&[6*=OI}^:' );
define( 'LOGGED_IN_KEY',    'SZ![V|]|K$DI,4MKBl(Cr?n}`;BdIS{D`=:AMV38pj2)dA bfD}W_h{I >9>/s,!' );
define( 'NONCE_KEY',        ',Z(O_*EpT+uO3uftDy_N)jqmS~)Z:YUrz F^NYg6_{ED@Kxau;;#Me-ev-!@4_Vn' );
define( 'AUTH_SALT',        '%~Ua@{lhNG9GS:f0 Q!^8D=;</-r|Y%h{:fY+ablTs>@9i;&xr4(E+ku@_VtekNz' );
define( 'SECURE_AUTH_SALT', 'Z&Gpg#qP]CvV8 HMrpln@2CK H^gvi,J9]Qs15R8A~.dYhoSH@YVJ8KD09v7Bak1' );
define( 'LOGGED_IN_SALT',   ')j5#&2~H2w>mP|-t/p,{0.LUxz40 hm#{vi|*)_nZiod%TW~.VHVf<vgrn.A:T)Y' );
define( 'NONCE_SALT',       '#|8=:)cGJ/`(8Q_~r/|olp@FTzl8>D;R/t(,jH0KMl8`?N!MO*wF_XdWXX/rhYKP' );

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
