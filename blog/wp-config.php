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
define( 'DB_NAME', 'fst_wp_blog' );

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
define( 'AUTH_KEY',         '#kAuw`sY|+5O~nDE;R[^>!%F</[/<.~8~ou!mGe?Xu0zbMohT}W])CP^C:;:,T7U' );
define( 'SECURE_AUTH_KEY',  '1}*+:B2ufv)6Bl1MAIFuLt)vNk!n7s2lVUzdeMn}YCTk/@S:mcsz|TAeiu8U@KGi' );
define( 'LOGGED_IN_KEY',    'o)8rIeSoH@0Z5!O`eB1P#69SM<#O!~v2=194;9tR97z?KYyqp/41{i/Olle_dfU0' );
define( 'NONCE_KEY',        '#I^qMk[h7+*H0j~SSEO]uhDu+^ZlWow?#qNAp?i|i,;kcU1%n.hEL8a`Eiy=`twO' );
define( 'AUTH_SALT',        'tk|iG;haPb4zqpza UrO$fR2}:c2{V95Wh~3u,g+q?.|zl(2Z>>t{T}Ph)CK$280' );
define( 'SECURE_AUTH_SALT', 'Uf:~/Q#.{HD>0`A$$6VL%f<S#F4PujdhVwv>NhaK${^sg)*{JOGKC/fx;5i+d@~X' );
define( 'LOGGED_IN_SALT',   '9FhxfeB&>6VCMQ;#Wpp36nD$VM7@*!Xrlqwmyw0+B%njIka-cE[SyQymSNC~MDP^' );
define( 'NONCE_SALT',       'UUl/QEG`F=Y CyUVIWTZn*BcZCAKq9-vZeKb;pbCO*cYO|y~7]2b<}&Fz;JE(1fM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sft_';

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
