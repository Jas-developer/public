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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '|ik!pX JA[AOWU!f%W(4b78a}Q8!R`ygh(#K`D:Q`L7tHxJg9-mr-Wt&yTim)1? ' );
define( 'SECURE_AUTH_KEY',   'IgYhaNV8O<r)!26L1Ntup{h;Sye^Fh GtVx[HY@+Pf//VL(/;GU@RJ]Rf)BSAvQN' );
define( 'LOGGED_IN_KEY',     ' 6Oiqo@l2r,_<=?ybTqno2:$R0$tV<Eol=}r^K4fI;& w Cv2LNK!6W>7fFg~2=>' );
define( 'NONCE_KEY',         ':8IesG`,l]~oVB`9gDe5~|S3,fA!J+.Hq%S(R@Ik6<H,4IpR<X>%]q{mx/.vt@.)' );
define( 'AUTH_SALT',         '#rN#1d^nvcD(h#81k_V(}C(PAr*J# Vb4<t2!$qSjDtHgL_t/t$.c0M)~xv*$$cc' );
define( 'SECURE_AUTH_SALT',  'C]8T=G:~(o#waC(R^G6dJ6&sWAdezw53f(+(c$bpKWyp&iQ3Up|,dRQ@5cW{,3ak' );
define( 'LOGGED_IN_SALT',    'BLhSDm[$?)TWJJ&aD<k~&Q6!ClUTZ13{o x2WR- %]Bdc`A:~uB9+T4p2B^z#fy^' );
define( 'NONCE_SALT',        '[,<T&W5HH>GsUR0{EM5Dz}U/i=IG>gKSvT^_0Jg`>f)9lwJ=|1g[vEu=<e^]|ku2' );
define( 'WP_CACHE_KEY_SALT', ',0mRv]U]+2m%q|sEUqg*Bd}Lb+n_u^(/of6exbs{@O#|V:abD:V,L;7`1o42sd]c' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
