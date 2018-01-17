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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oc3`R0oMmYMGDH1xyKDdvF=q8_TFzZdAg>9=*lOM$USsZGn7,`}5[KeH+T^}!*A:');
define('SECURE_AUTH_KEY',  'rC>sr`Wc(<[Vqtv4#ucF8e*D/`:s/FL.oR_Hi+>FI*NML3Qb:&i!7YnY)%|X!-ro');
define('LOGGED_IN_KEY',    'Y!*,zRA$MazH~$Vv1$Kh(ot+530rKi1AN)lEK&ew&749<$`Woa;VJ+gKoklh/g _');
define('NONCE_KEY',        '[Ek5! zSfV%1KXwCB]zd*RO.i$?$|v_-*jg,.M`&+SX[=ICngdp0CdKb_~S.,L6P');
define('AUTH_SALT',        '>jMN[ b&q8zz;>{U.70Zlzz_rstWXY|4(z/kM[Rcp5HeRoD1;!]67qoV#;m!Uu5~');
define('SECURE_AUTH_SALT', 'JSBF5v,M3NbnroMV5XMf;DjE5KRZ/#wH%L}d~EhWlg(o11Y4Bn>[|=KJ;p00xqr|');
define('LOGGED_IN_SALT',   'vT&hSxeKI*X wMkH}hy4m[J1gzt(i=@}W>s.{bR/7}Z5hScbHI]Uh:&/7aNuc )D');
define('NONCE_SALT',       '3h1^IAP  jZ@p)Bcgpvd9>keC]J]j&{0.=mVM?^*}5HPC5hxWBb=RaZM9P~n%Xi=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
