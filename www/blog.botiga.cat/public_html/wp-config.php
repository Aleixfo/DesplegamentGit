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
define( 'DB_NAME', 'prova' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'KZtPnoVX65uF.WP6M<O8(q4viL8`<!],|6XF,<x8ND|SlJ_H$fg8:Ja.[^h;sXh4' );
define( 'SECURE_AUTH_KEY',  '7M-fa?YU*xI>=_iqX|E$$H1(}h)^>qQx-~[e0<HqZ:^86Y:rOfQeS5ozfwXAkp(g' );
define( 'LOGGED_IN_KEY',    'ZKGeNxK OV;:Na9}mKE$;>s&]Rn`<,a*_B_GxSz}i/L ~(nMW$o0v0!z%x&t:Y5_' );
define( 'NONCE_KEY',        '!EfFi*w)VGn6Dj]H%~><eHMHf U~y!9byE0<3#DD@Qzxt*aM:F>)5L{;tvfM uGO' );
define( 'AUTH_SALT',        '*1qBd#>J<0NqW]5ux2^qxDk/JYsm`zSw6ganNliFE%zs*)R0mw ynPB!l(T5URP$' );
define( 'SECURE_AUTH_SALT', 'Jh_R/`@EMqoDfMmmdu@X;sH4t3!39FJ?x5mA}<4,~Kb0K+4c M;7O1F_`oB,=Qq+' );
define( 'LOGGED_IN_SALT',   'Q7^v%FY=x;QapcyA=nnxzb[~d~&Fb&Eg!}#(l<yG&1-&PlJsb!.I3h%__wE3`.]S' );
define( 'NONCE_SALT',       'I)_aWl<+tkv945,USS1*qOO?wLsGLN|#qEPWPYx14L@JO:J;fyG`$?xBIRw7K_gP' );

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
