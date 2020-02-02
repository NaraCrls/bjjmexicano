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
define( 'DB_NAME', 'wp_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',         '!oO]<,TfU2Y^D@t(fH#h~&KG8W@lRNt5$g6kU,4E#5]-E<9J83Br%|]S*O#7deix' );
define( 'SECURE_AUTH_KEY',  'U)ed&!G$#HfVhG{StLTB:d,jv.A3ae?:Ja6*)Xg))iUp;!5)DK*$X8CH0-ac /?;' );
define( 'LOGGED_IN_KEY',    'dSqM6xBo. YW,-hom9)Zb++-C7YR_wJ&@fHHA?KAo?62;71*<>)_%vm|*?.-PGHQ' );
define( 'NONCE_KEY',        '8M2peT3XS5x&WPJ4^zr?Aa<UE=72`/R*/,EWg^T?r5GiSU;>1R}BTwN.Q:pA[/&~' );
define( 'AUTH_SALT',        'vZ:fp5L]wWzT&lnK_W28t3Ok,8xa.<lDN*(t-l1IX(M E6DN+.fuI<,2:lWBk8O,' );
define( 'SECURE_AUTH_SALT', '-`0]OcZ~;<_9q9[OgKEc{nD5~NXfA)nVYJQJ*|e!tf M|ZuK:B+#k*c7UFT:/g@{' );
define( 'LOGGED_IN_SALT',   '3Hz@&B!>jCs#cJw{CxY+#&N%s[I~C6mUs2H4q?%BgT[&U,20znK!{=z[t?TUZA.[' );
define( 'NONCE_SALT',       'A,bkWKmDkmH+IW>a4|DW!]pdUk51vt~A ah*E<kNA3nEBCg3!d^- KE2^v*D$0D@' );

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
