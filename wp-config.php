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
define( 'DB_NAME', 'uas_cms_khrisna' );

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
define( 'AUTH_KEY',         'Q()MOY-%_)OD3dnq%O?32n$}/f)~*M;b1|E0z5]}I>!Xn dCj7wBIX)SQml/ocTa' );
define( 'SECURE_AUTH_KEY',  '*rFTFdQ8-4VSH!7z+@q={`6^k|n/Uj5&gTSq`E~kbR6FhL1/UUifqZQR_;fg=$E@' );
define( 'LOGGED_IN_KEY',    ' 7*-NeofD3i$d]g*|hbsM$v/6_m{+PW.ZLfhuRm}s5?HsCIdLY&lDO;GyB^`!|~s' );
define( 'NONCE_KEY',        '!7fKrV}%zv}R94d;1[#)/GwXJz!Q(O>8GujWORHu8Y:L{1 nDawp.;t 7C 1*aDm' );
define( 'AUTH_SALT',        'xXx>QtttPFsk|Y8-@ZT|YSQ@?S_T|78KrH;Q(3I~JxFR1n+6;FT[Q|kzKOf}MJ>{' );
define( 'SECURE_AUTH_SALT', 'p9DtW@`L<#v}$0XNs<f6$whE&B=Y,txB6ZF*pB)5Qw<8[<nXYOV~,MA<w0 @|.r{' );
define( 'LOGGED_IN_SALT',   '@]qv{`B(Bs`e6{(=/*+a_]@}H,as_5@b]9csusqwZNps1)b2+A?nuctU&$+eGY-}' );
define( 'NONCE_SALT',       '{cWFNO;@z+.Y]_=hmxPbttKc-A!M+wM1GEX{jf~3ex5;tL;~x[tIp4bDaexeH#kH' );

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
