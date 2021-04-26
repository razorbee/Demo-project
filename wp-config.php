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
define( 'DB_NAME', 'demoproject' );

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
define( 'AUTH_KEY',         'U0>rhu^7z4t%zkW00!S.?jI L9QrXHKL5u=kY[J:ps28)6:*&hZM7$8plNTqLz%~' );
define( 'SECURE_AUTH_KEY',  'BVNDvdfo.K:q3dsWI/c9>7[K 6J_A6YTUu&X0E}R4B,@qXAX3>:u&fA[]Mpl4j_z' );
define( 'LOGGED_IN_KEY',    ':B-#3so}aOmlr,IulLE5248v26?{tv`opb<H_ <e-imwV[@/.p{1W$YL/tC/;T3[' );
define( 'NONCE_KEY',        '54xbwBQ{:=Z*FyeI{F)n16#z=?Fd:+7/nw/qGM8(x3N})x:_ZMq+{>d(E7-R|P<G' );
define( 'AUTH_SALT',        ');+XUtv<&$Wo*#zX*ICh|ogIKHkd]N*N|?D~%(u+g<~_zMF}(Nm#=Jcu}V1xqo:[' );
define( 'SECURE_AUTH_SALT', '{)t(#fL-UiT3qM]tsJ|DWH@0Oqwm/dS)?i8z[uzodQgjkkyF$vH|Pd{.}aYZp72`' );
define( 'LOGGED_IN_SALT',   '@a kr+bLC-|ALkP7/1U1$=n(.nm+dmw-l8Girx!e5PAhm3jpTVfW~bI%^GKVV4:<' );
define( 'NONCE_SALT',       '{KTD/>o1DwU~RP0D`-GwU=BMgn(o#)dXmyb|DrF|.}::}q/T{QNM^W;xKV2)#lO2' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
