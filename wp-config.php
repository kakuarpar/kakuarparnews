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
define( 'DB_NAME', 'kakuarparnews_db' );

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
define( 'AUTH_KEY',         '9>jBV0]7|B9Yjfrs`EfH?4&LV]V]5baam^/.4-.R[DhqN?Ad4pc(=G0)&WFDUw /' );
define( 'SECURE_AUTH_KEY',  '3_E+^,+%K]AxTU~g$ezrrKua_GP<OG>NHin)8^ I*?#{Y+0B~Z }D0:s1;Gplzb;' );
define( 'LOGGED_IN_KEY',    'W5rwgDx5RGp}1MFn9ec!L!i0^SR~ WEg&KsApX $idCb~mF@{L^=FY@/}=GPYZqN' );
define( 'NONCE_KEY',        'dF6hsAZuCXajH~n9|Iqrfn}/WQrR;GqT/l<0IPpqU&0dyPvQViv7:nUMz2~OX4WE' );
define( 'AUTH_SALT',        '3[<*K51)<ghf9U~MoPx;>5fxf){}Hl<f)e`XmEm?_:$|1=C@ik,h7+_:xD(|3e6M' );
define( 'SECURE_AUTH_SALT', '0$1;[!(-r?w;p~n;cEbTJ`4,=:>m-D_ui6![<*xJf7g^Hs97g(l#JZt#lcNK>M!R' );
define( 'LOGGED_IN_SALT',   'k:0e}nRa0L`RHF&50t1.MMOBlNlp7}Ea]OC|*=2T<y5#!Gs,d.V*-6/h*GT|I+[!' );
define( 'NONCE_SALT',       ':ex^8-<F^PDg=+SJ9>fQ%O$|nA5$ -|fte7I4s.kn%R|V7k&0wQCz}wF$f]`J-bb' );

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
