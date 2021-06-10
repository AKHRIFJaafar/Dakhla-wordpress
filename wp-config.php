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
define( 'DB_NAME', 'WordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'e<S-v#hAMh=Tqg7%a5@kgsJE=#bA,,4~r*y/C.#K#sOyyI)uzg./2jIMwaAng|.z' );
define( 'SECURE_AUTH_KEY',  'N9<4=(A}lX>!AiC|*UPo]8[5q!6z&O@!A6E^ITrP:%1xWG)1By~WFbLKweUN}hEU' );
define( 'LOGGED_IN_KEY',    '>8cycHWF},l(}e@@2I_`zyzyQo@We)#{kEX~j/ue[0zDugX.!|/mvu&J}$jB=|Y#' );
define( 'NONCE_KEY',        '#a`z/;g8,aKaz`x.v,XMNm%v]Bbl^0t#Xmln?5|?K^HN`u4d*qi4s3bi&5&F}Iv,' );
define( 'AUTH_SALT',        'snoJ:E<QApz^Z12X9zD18e<*TS)`H[d Pr%AGWul7}%@*=1%d[iDF=;tJGV3wZ$+' );
define( 'SECURE_AUTH_SALT', 'aG~n|Mk#lNRDXu4>-*er;)*&z-ORloD3&6F.$]R!(g.<<Du7w99I<C3z8icem9C^' );
define( 'LOGGED_IN_SALT',   '+rPdX$Fk@u~t`6Y<@8Iua8sY*V?)WpP8D).rg8~I]DoxV5ja-c1UYc^(t~?j_BK`' );
define( 'NONCE_SALT',       '9HUy`P9%2n;<!q><l:hwel_RXHH8nBWgu$*2tI|EY&&k1e=c:XRf-E%:^zaXF%O;' );

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
