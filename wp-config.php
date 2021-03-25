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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '>UH<>*=89.oN.sjZ;M$]o^afU!Zw^caj{Pow%B.]MOPM7B%-v!Dr(Fj5zE{7pw@O' );
define( 'SECURE_AUTH_KEY',  'D[BN)Rb]|j1%Az;{!_;nI+:KNh9QD11!.4BIWQb/XGlZfbJGgoG7n!$Mt,{~5RfG' );
define( 'LOGGED_IN_KEY',    'lr[X24TTw![e;vDWq^la+QV`_X!?7U]]MLPj,k#}JD5|iw^,KPK!aQoGgXt4K%Dc' );
define( 'NONCE_KEY',        'ct@p>_mNhHfe=#vce=>U.4kS08cH-9?[YE@%t9m&S&{-u;f<&&KFt@=@/iNS$]F}' );
define( 'AUTH_SALT',        'mKyKM9&`0{=#*b.~8/b,GgiVu)0$UO%Qx,qRRO4OD2`kU4rse;%R*t47x.A]LG$G' );
define( 'SECURE_AUTH_SALT', 'F.BXR<Kl$E#FXgYC0Ck7x(lXB%%8g;>9{dFTGJHYgihH+g!l{?e`d?}EzMRv@]|t' );
define( 'LOGGED_IN_SALT',   'Q.t,;&pac1J_[0gY*2+-QU&~aR.?;g]suCo=8|49.sn6&M)h([{l -,LK{~q1yF=' );
define( 'NONCE_SALT',       'b>Z/=O*rbc9=aNj4}3kTT}ek`<;:q{1E5IWa/nOJ}uI^C(.M ..%>g5h5Er!ur.c' );

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
