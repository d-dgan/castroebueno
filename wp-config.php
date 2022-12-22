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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u818122065_castroebueno' );

/** Database username */
define( 'DB_USER', 'u818122065_castroebuenous' );

/** Database password */
define( 'DB_PASSWORD', 'Mix4p4039*' );

/** Database hostname */
define( 'DB_HOST', 'sql813.main-hosting.eu' );

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
define( 'AUTH_KEY',         'Zj<Z5 /Xn}M/lx`}hj0=/n_fDEGZ?eR>`pVHjGH$d YXO95xt,A2v_)Dr+RC(p;Y' );
define( 'SECURE_AUTH_KEY',  '5pj{O_*`z^*XFR$Z[9.Pd1]&Sz]DeR}m6wc`EsL]xY#~XA|O6#h9_)J@5X5ze8`U' );
define( 'LOGGED_IN_KEY',    '#q-(ZC{D>QyC0x%%gD9=gDp9s;4A@Yf=]kiYa#3%S|M~0cPK4:wC!n?7~Q6$kc`l' );
define( 'NONCE_KEY',        'J!gn]@R$@5>-[ 3w~f>4GEVe N>b$i@Pv;GPdcF8`c*C[hwsJkK@.J_A6S2)$N:[' );
define( 'AUTH_SALT',        'Y$VJ#i=3#`p{wZ/edDfYwmHJK)WBPIQCaar95y;}6bK?DjTP<fCOX.e8A,-WWvJ~' );
define( 'SECURE_AUTH_SALT', '.w=~tgy#(gU&P3NV_[w!EprB[_/G8H>FGSL^eOx40&(A1N`hClV,UW]cz,kH0u s' );
define( 'LOGGED_IN_SALT',   'Zl7>+;{/] qR[} (v+%a;YkrE^NPq!W514{v%3r%,=:s9?)H<q/Yw:=Di[BeDrpL' );
define( 'NONCE_SALT',       'YNxBxP~age 26[v|=cv}q5F1(mQl#H3|h1FNfC8.{SAX9yQ3W[W$T5s;g :)REGM' );

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
