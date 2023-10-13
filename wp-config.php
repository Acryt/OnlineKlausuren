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
define( 'DB_NAME', 'onlineklausuren' );

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
define( 'AUTH_KEY',         '}c<)ff7orRk.+EL4[HTWA,/.v3>#R(,u;n_4qAdCmTH-Ny}twEscK+S1Y0B3nfi{' );
define( 'SECURE_AUTH_KEY',  '2$8MAj0?x9HUzbpzN`m2*58/-]&HIdUXW(AA.tm^FA!Kr<* rIb P6$Xx}!$.m^3' );
define( 'LOGGED_IN_KEY',    'j1<(lB(|dqdES5 X7gD}UgQF8Xu?[D${_{<&kLb*}}JVXK^,x$1>W]db>=~eVU5!' );
define( 'NONCE_KEY',        ']$Bgtkm8@9y6~1NEeH.M=cfg48&y! LCf+G{ANiWd`jkK15n3M~_zPtT>@~i, `)' );
define( 'AUTH_SALT',        '2{&<M/U/xpsNBg47&Y-Tkv;^cuzJ0;nV.+O[Me0{miF67-2G9?^/.;7qr#X2hvU1' );
define( 'SECURE_AUTH_SALT', 'p?Tr:pK@!>lVCutc{n[J&yP:t58Fv#LZ_EVTC_BQ[|WuV?ucerX)XDp2)GQ*Y[#Z' );
define( 'LOGGED_IN_SALT',   'ZV|FH b,;P]c0HOeE%w-S:r:kd;DI+_.MNB/Zgb(;N+sF(wE>(shh,Y*@5qA2UXk' );
define( 'NONCE_SALT',       'Z39o?&>z]hF<i 8E7>W}j?iNv.P9KS9R1(&tuiy&9O&8 L}KcS*vI2L23yNp]?NW' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
