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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'l:H`+:ff7kwWqQmBS>YB}SJvu(!Od/qpP}1ltH<PSsafiu#oIp]90*B>,H  MU3O' );
define( 'SECURE_AUTH_KEY',  '<|2_[uX&uqf:z{e9.~O:LkV$O^[_-~fs.;(Q;=b=b7WUFbcH![4?EOHt~jeC0YXu' );
define( 'LOGGED_IN_KEY',    '&7Oz#iF:R6e[0+SdDm&[(*iP5muNgFZY?tCDDClY9;essXxhxj6$1@YZqhp;I4 ^' );
define( 'NONCE_KEY',        ',d;7`7(Dg:{LM>!DsW1L#vNAKv[YjPZV5!gBM^[~!/!WqXf/T),!Yf`e%Hq}SR-i' );
define( 'AUTH_SALT',        '|ME{/a(b3YzRy&*3gGL~FAAT.:r6DrdjW>F3[Fj=77/7n51?@A@M4lr@Fj5oS6:X' );
define( 'SECURE_AUTH_SALT', '2[53#6|z!f`N=S|}#!~^i/J#H39o`aKe?4?h%8*.KChGoN`5Y-[}H%s>fne1J4g&' );
define( 'LOGGED_IN_SALT',   '~TgR9RBuJxv5dzm}}pAy<s2pu~2#M}%B;rBN3X2M3>>+` {sErOt<2Z}5K(:vlgM' );
define( 'NONCE_SALT',       'f/r|@XS!]]S|(9hgDk.{[@S,&G!uLBPMPa!Miqh2nwf,#- u&2wORy>pKM[#C3zn' );

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
define('WP_MEMORY_LIMIT', '256M');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
