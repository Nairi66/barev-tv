<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'barev_tv_web_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%ffAI0yDJ>ZcZ6SE$F5}v:`,SgtZbo.I02<;T+i?TH<!SZ!wJ=*Vz*Ak2$ptqOzL' );
define( 'SECURE_AUTH_KEY',  '1gIJtKZ{0_UArl_WsCqZou->w5,h(ku&8xF%W?E:l;IOHOw@=eoM^R%p`EB~,|X+' );
define( 'LOGGED_IN_KEY',    '_93`j3;}e-z[]az!GBLDQMYu]`oECeWA.}1`#HfZ1|&c<(!%2FY=}0mDt#;B$VT#' );
define( 'NONCE_KEY',        'A|L#gzSGd2,u>54~*j-8t=X[u1-7Xbav|~Y:v@)A>a4.zhSKyX@LK~-QB;,S;mXv' );
define( 'AUTH_SALT',        '2]IyJGM +0?;P5REqKgYxy.d-iu1l;6qC=UJ J;f9o$Gamz? z[dZB^.-L[^((!i' );
define( 'SECURE_AUTH_SALT', '2z~-(&h`cc6)CTU[%PgAa$S3?ilY]ji_v@vM +|0$i=S(F%GThx?$rr.c,s+#O`P' );
define( 'LOGGED_IN_SALT',   'xs+:$ooq#FlfBgS~T*}CpC-}}{pXWx[eEmsrEPu@obL%FMW,Dzh(4),y7_gZRusX' );
define( 'NONCE_SALT',       'f)_2{[R4$KvMelDjj/^2[.aWo235ni8v.]Ejdxn[SmdW>1=Lq:lGZcl_cbV}EbK3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
