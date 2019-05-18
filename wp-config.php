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
define( 'DB_NAME', 'sampledb' );

/** MySQL database username */
define( 'DB_USER', 'samad29' );

/** MySQL database password */
define( 'DB_PASSWORD', 's1a2m3a4d' );

/** MySQL hostname */
define( 'DB_HOST', mysql://mysql:3306);

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '&>1Al./CLq)R8feR!CV~JP-&frvly/=+$|VU|esClis=R[5QXyn@C&%7#~%p-f9G');
define('SECURE_AUTH_KEY',  'A ,xY1$8OB_FuBDa]4:6=otlnWsqD!+1X*7o|dHidfJTSa=cl3;/t5+-><RH(}Tr');
define('LOGGED_IN_KEY',    'TD2f~i!(4)92-xkL,@VnLX4+?]:%f#fp Ak4U4V.r4sTtvG]0BCSlkee?+Plp5s9');
define('NONCE_KEY',        '?z`m[v`]rsr;k+c-K]m~2 PMf,S^,#g:y[El(r!,fBP+is+6gIEgGSQa Oum0Et6');
define('AUTH_SALT',        '/]p9l#+r6-_9Q&2S^2b|g,bmOaVJPsYL7YVSq{CK)HJ}GTA3Q~(/jvlE~[pk*&K;');
define('SECURE_AUTH_SALT', '_7Az24}9T-o!-:c1h?&^9Dh3b#({gq}HPV/A@:V jbNL)|rlZV294fpUScyuwGJJ');
define('LOGGED_IN_SALT',   'T4Rc.I%g;;AIU utgu$!KgRl|2nr93&2e]4GON-dO5/uO|R+e~*++7;<Sj{fEL/o');
define('NONCE_SALT',       'S:veIs~!JuPg+m%1.J7e$bCKKlGc+{c)!R>/=$9/$ny50Vd/,&Z=nL9+b-kz37Nj');

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
