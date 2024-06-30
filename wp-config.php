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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'robertchuicpa_wordpress_db' );

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
define( 'AUTH_KEY',         ' E#>S4:Z^<Y2dD _)3Y@upKbNg.GF*!>89UxM279u`Ou0T9n+|&;jk]$4nP>cMo=' );
define( 'SECURE_AUTH_KEY',  'FOPqBli4Mb<[L[ZRyo(-}y=@C+{fL{2E}t$sA%cwI2VbE$9|I66W r}%XUcQ;,>m' );
define( 'LOGGED_IN_KEY',    'mS,fGs_m4)R>i*{W83a (tTQ;-R%00yI>e9@m?ypLXkzp7!aj,A.v=xAkT8qq7Uv' );
define( 'NONCE_KEY',        'pRP7G-9+nwsiJ=a>b?Z`KO4QLPq2+z]yAw$.)cv`[vH#KdTUUI^@Jtf*UqB0#d&%' );
define( 'AUTH_SALT',        '~*TwPy;]Y{)li9qgYf|J=J!k210@-v`,;Q!S{:2XKqBE7SOENQf,`1m6qNFkHXZk' );
define( 'SECURE_AUTH_SALT', 'c:Z,i<Tir,i5QIpQrFoAc@w9U`<R_=}C4hj]9rFUSb_6aQo:cGYk>f v^_6kkn}6' );
define( 'LOGGED_IN_SALT',   '*Xwo]meVlNdJfSzNk>EM9)@aF#vo~5R-]Hv>=pa#t0dgwn{X+x1e~i2mc~x~Y^>>' );
define( 'NONCE_SALT',       '&J1pX6z^]EdHUD=L#}$tm6v+U&d@ln_y5G_R]T_cq7Y^fWekM=FSCZd@.2_2]^f)' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
