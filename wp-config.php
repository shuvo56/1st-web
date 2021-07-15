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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shuvo' );

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
define( 'AUTH_KEY',         'n+JFq$9IQ/uKLvP3K)16*up|g1v)qVpTAjnb0m{ <vR9>&45an.0L@aUTEZ&%%_#' );
define( 'SECURE_AUTH_KEY',  '8];FMj%2u}-:z/r-=NPpV1(1i_LQ 6pNb+i7!m4F))>#kGJcm)82>k>Ti9|si7 N' );
define( 'LOGGED_IN_KEY',    'kTCA$aGJT2WhEh@LM3n`Jhw>cX0kw-%Dw IK.3%k4@n~PB0r$a39Me4,THmbr]6%' );
define( 'NONCE_KEY',        '83{>WzT1r0!t(FbRA*3]$@f=DJ.P.n(OzPLe^;$E~O+D#tw?>Xw/WtNTqM]{j6US' );
define( 'AUTH_SALT',        '.?0_p2mH%hm7I P7q^qgsy($i[96J|y[}gfjlmJ`wb10|]b6@#> C_YMyBnC;p<G' );
define( 'SECURE_AUTH_SALT', '4P23rP*O{z&U4^XA8`)Z$~>$53M$g}HDQtv/!G+c!m b|?%9^8;>v#{{<Bs>Z=bm' );
define( 'LOGGED_IN_SALT',   '_Wqp)7~?a=AMEBG4!)cy~0.Qw=qD fRis$2Y>{:2]NdskdtvMF4pBL^J_(+5DQQ9' );
define( 'NONCE_SALT',       '3)F2?w%SR<*?E8-B}kx>;7fq}(_9pv3seq ^U/7{>v0I$[c5TNfQn[u!3<l5{r9 ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
