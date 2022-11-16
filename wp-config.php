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
define( 'DB_NAME', 'job_base' );

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
define( 'AUTH_KEY',         'b/LB4*oVsgN|x`gtFBBJyeJ  ,)SC}[4uxf1Mck39DM2$J72IA]S+3#S)5`$A^#S' );
define( 'SECURE_AUTH_KEY',  '9aff2K-@,Zi8@|;u-#>5I*<nm4]`P}frmNFo0wz<qqI`#5/k2EBg0%{) XTGf/u?' );
define( 'LOGGED_IN_KEY',    'fpq^q!*9`I;IImeCxu=I!5woADEdJa++Da9sj_Q5TNIKsR!YNuF6OxM#+8mRa4yZ' );
define( 'NONCE_KEY',        '=8:3UvjMk>*&cq^C$5-Z1;ipu+s}P[@&;XdCDjA%Hi1phS@cB##n>Q]n>WTJ.;a3' );
define( 'AUTH_SALT',        'KA^~ yon~k=D[ge-Qyy<Mf=QZy~*TX)&(IQP)meo5$uq~%iGbxm4JxPmv7H4pwU>' );
define( 'SECURE_AUTH_SALT', '&{^;X)7!B{?n0|`n)8MH4$G#k ;mu0!3#.Xy!Z?NAB{sJhRT3*egZt|%vqP60_=5' );
define( 'LOGGED_IN_SALT',   '5%ug(R_*X~AHl>C3uKb;lLJav9Po(+>Ee7=dF+OK]x4>G-f/PMY[o1|4wl5wIX$@' );
define( 'NONCE_SALT',       'V(f%OWkDkU:JH(NE0vZLZsu/_vd<_rb)Qok0;IV.%/H5TBmOgwag}6uk1a;@U5.!' );

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
