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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'u^+,k[-=Dn.TfYxg2:4Z3t{;[n<Es~xzC@%au:>MH`%^?k,5_C%SveG1{*8c^9u3' );
define( 'SECURE_AUTH_KEY',  '6] 2~HyQYd&-Gpffjr^gl8.fI>P[|~Fz&ExNvdny$l1u5nm/EpS!&eh#~&fm_sPM' );
define( 'LOGGED_IN_KEY',    '24z{VMc0Y-F#G(`:cnw24)OT8v$f{+8{3[n?}}^?#lVRxm4EV!o2A{{S~P9&d;ND' );
define( 'NONCE_KEY',        'Is{@,OBTxJj4$^NZY&X^CfVN`y@]r|-o@%iRjH2d2bNy)vibuLUp6J@p_65?,ZAJ' );
define( 'AUTH_SALT',        'x{a_q0Miaz|qi|.^/+!sNSMkL8:IRw28yd0^X`kmF}jI,Gy&c;ouMrZp}o,bCt2-' );
define( 'SECURE_AUTH_SALT', 'SF2R0T#*}d;&_;M`)Pp)E*^jx{u[%a<.ZfRLcBlmxXgPuO{t,^K@ILuPB/fJw0|z' );
define( 'LOGGED_IN_SALT',   't/p$6=L.(Hht S%<chda*RmrHI9Ewc8B?$-g [Rp=56?;x$D`<eIc4*:eKCT+Q[E' );
define( 'NONCE_SALT',       'RvJeBGp*~l{#j2NYY]4Y@clSZ=c[={QiEyY?QBYYq6s|FtK)D:IFFUp?Ep]j,yFn' );

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
