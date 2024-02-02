<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'demoweb_sitewp1' );

/** MySQL database username */
define( 'DB_USER', 'demoweb_sitewp1' );

/** MySQL database password */
define( 'DB_PASSWORD', '9KniaEP63iaSVF!' );

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
define( 'AUTH_KEY',         ' 9~K,G`l-eKriBg(~]BzF|=Z&[%R1]e~R|RfGKQ2{gmeUGsO4g5ZE)f`:p.339}$' );
define( 'SECURE_AUTH_KEY',  'AV4&@i=1~p!HJBF2t%JaDbIZ`BrJuE$($!,s1C%S/lDKij`-:DwWt;jN-Y%teU!8' );
define( 'LOGGED_IN_KEY',    'W3wV6yTBq<ec&u-25Cf&_5sPst2Xip?N,[GRIZY@fVSgR/=N40LFxkpNi*@`8Hr0' );
define( 'NONCE_KEY',        '*BO[oCl:xh6 uP1N3hFh$^hq&28l)gf(b^.z4c<UjsEjszSD@ayxak,~]X*YO8Td' );
define( 'AUTH_SALT',        'bcf=yy@&6Tq::p`8TA@eHhR>K}=*/wK1VBL%e%PpR+J1tW!p?hK])@XP4s]>pT}q' );
define( 'SECURE_AUTH_SALT', 'jENR:aiX5cR,WGVTp(^BF!`@o=si$.T`xQM)?yBaj->_2?R:)<pqkSs.?pzH/ArJ' );
define( 'LOGGED_IN_SALT',   'PtSSI?i<U<jmJJkqJSg.h>L=Myo_,JG-nTomJBgxR fdgH,F/jkG`VN^aZgI9 u]' );
define( 'NONCE_SALT',       '>d}alt0sO~S)wF1YFlWXTPXPC56Nli5M*(8FEA&4$y*B/`AS~R)iV|g*`LW2oh#J' );

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
