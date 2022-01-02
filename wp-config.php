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
define( 'DB_NAME', 'naked-art.world' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'l[S=rV>|wbB:#Ip1%;+8M2u,H5Li;DcVz`o!@R,pM|p3|_WqrZ^<MMIy/1I[CAKo' );
define( 'SECURE_AUTH_KEY',  'VK0a[0c;J+4PT#[FARxRq_u@Hf|=6omIe1S-dA-z!OT9I`Yunzk#du5V[Crju*Hr' );
define( 'LOGGED_IN_KEY',    'ZGR?G.ff[}q@cRKq$};v_8@ZHdXH86L.J+!G4@0ojGJ0-.(,l/,LXDO.R.tHZw5?' );
define( 'NONCE_KEY',        '.]pUXY00Tk*y1@$pk]</%IP426W!Fs{82:FPOy_$PYJ1hzDoFP$>ME;)w$-1JRGv' );
define( 'AUTH_SALT',        'J%Y^umM 2qp4~6Cn@UrE,E3TUyW}`xSOCj/_ut7lLRubcTM_7Oe6}0m2=fkz0*bf' );
define( 'SECURE_AUTH_SALT', 'nkP(< M#l.EqFE%z=VQn_VUwG:&I6j-;dmn}=F:k%due STuYWjRp?E3;Tf?dLAI' );
define( 'LOGGED_IN_SALT',   '8/pzJPNW-;Q?JtG[K~67y*voU0qv0%GooF7d#tHe{mqFaqKE.lG]BP#cKl!&_2.P' );
define( 'NONCE_SALT',       '}YLHqjZtWgw%YXKMKf::=.@qo>2*D6=C=Fo,>Zds$dDxux3~H.K(~`B{#{eZ8NmA' );

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
