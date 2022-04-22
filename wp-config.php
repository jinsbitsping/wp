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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '+LD;qv=eUeHbk;;OB?n~dn=wEZ4Pk}^7z},T~o0YT|w8r9in,;MYg7S3@ t-0P}h' );
define( 'SECURE_AUTH_KEY',  'Sg;pd4rYaF?J!SxLrghsjUFd9$A3}3<. h>U>`Sad%FvB>w7[uvUJ4MpLAXMf6Mq' );
define( 'LOGGED_IN_KEY',    'zo1Ni)8;Poz_(u`t 3}qS[9m)Ll1pijw#2q-Ra`!6[v2E5a;&M4H/ ?4[)U2JRYs' );
define( 'NONCE_KEY',        '+v8t% d+M,p*iiO&-W0D|$DlC|ZQM3.wP:@+.6`3*bOs(S|::88G^yImc;|/wScQ' );
define( 'AUTH_SALT',        ' %1A_`b[Io&K&kKIyw5t7-Zy1wF-QMD+)PEe.h3[<{C%vPqYH}ahCThW/J[`xsm`' );
define( 'SECURE_AUTH_SALT', 'OJDGK5]cY9 Th)Iua<^,uK;bSrbPjh.ij&l?&IR-mLz9=aB<@>9XZNBB#uiMEM1P' );
define( 'LOGGED_IN_SALT',   'k*YC~g6]B2/VZjy+I{gPu95KqoG;6]=2i5&!p^Lb|JCv1ZwK/~N*sS25k!Sem:ly' );
define( 'NONCE_SALT',       '*cVuxrj=AiPuj{Nu`~%u:`v *;MtYyAhAtDYddzbFF!ffGl]k65^.o-_VM-gB&nz' );

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
