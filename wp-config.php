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
define( 'DB_NAME', 'veg_store' );

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
define( 'AUTH_KEY',         '+)Pq]0S1}G81m!1@v;6$.Q<EK.voaA*!^a[5pQzo%Xms9.x$Qet|vQpNas?JtNm[' );
define( 'SECURE_AUTH_KEY',  ')7wm5alCP_b]Tjs)Eo8+1_(^2)kfxZ0y.:3s[ac`Ej:=qhZL]PGz!;na^&D%yr86' );
define( 'LOGGED_IN_KEY',    ' tWm=1+V^+CZUm=$4RQ;w|(b(#4& C;jOpcHkY;D@0d_XJR%%3%p!9@Ox~ , lk_' );
define( 'NONCE_KEY',        '*zPa#>@Xcr&y%ErdAr?6CJ]?4z~jR>5O~N*L)s*zZz8ScAQ_[Y@_6-C1)OQsU2sj' );
define( 'AUTH_SALT',        'c[JmWr? 9KRNoF0;t6?NBuZ0?XY9ZmHr@Uo_nOn_#[z3.Ns*J;(B -ksHCKfEf[~' );
define( 'SECURE_AUTH_SALT', '?xuV,(I&ci{YEC;`%S mlVcloINopV{h )9WG7VCn{D]8J}l=xX]w3(/VUWUnOKt' );
define( 'LOGGED_IN_SALT',   'w:@ H;;@xe1lE$YEO~Yk8%f1Hd&r5>YF6CC?f%=4|bzLe<VA69<l?:ow.0JHdR@/' );
define( 'NONCE_SALT',       'Xn$)Xw+I,*tl<bh8%F3RjLn:B5%I $UmV)1Av{#9ptV:NDeU::^O~y $c5#V*KKx' );

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
