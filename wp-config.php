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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thelvip' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'bHioKupqxE7ndkroMpuk' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Q(Pure?Zf4vcw~Np=EmUf8B}^YH.N|`D:)4:,kEbkF@rK=/N9`JT222{hXV_P.ew' );
define( 'SECURE_AUTH_KEY',   '$VQL26/{flOXhS>kDnC3%7]|=8#0.g:%Kq&pS$H_b8M pAz7PBcwbZfAMLHvv[Bn' );
define( 'LOGGED_IN_KEY',     '-Dbiv_w+!>RB7_QIp7{4.9=T52?:[o8E,(xX2SlX,_5l[exJ^Wcv{e G5zbR^d*Y' );
define( 'NONCE_KEY',         '6Xer1Lz}h>8N<.habfuACp3G!O=/(7FK/igF@2(UbXs=`E>wPR ]eD-iX~pVs`^D' );
define( 'AUTH_SALT',         'XSHypw(zy3pkJT=1(n;n&9-:Ps6$6IZ1GEFj[X8&W2|;&Gfq/q^)?^d{r`aUDzB;' );
define( 'SECURE_AUTH_SALT',  'nj7d%n{m2e372>)yMv6tuS_U.MwL}[nDQV?1#Tc)8iRUzPkBcI$CCOCGT!uEcH|h' );
define( 'LOGGED_IN_SALT',    'dGm[uyHIoI[k^DwxkFCpt=bIv/9!-6eh!CU;IexZ$Y<{b.=x]wPzt&wsz^WRw>[D' );
define( 'NONCE_SALT',        '^#q8WN>;(BHK4)n?]O<Mh}y?2_XxRidAGcnRgags]Rh?^ !|kJJ>vtT*-}Z}2J+B' );
define( 'WP_CACHE_KEY_SALT', '(/Mjx2Z.<;GW3hK/+HTEZ.g&T$N6vHaDrVd^yi!^ZjqBP36SO=Ut1Fj*:<45z=~:' );


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
