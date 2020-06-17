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
define( 'DB_NAME', 'brief-wordpress' );

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
define( 'AUTH_KEY',         '2V8/%PQs%K.=]7?**zjHeX/KmQ?EAwmbpB&)^ZAu2+@]cj~s^{.z!n7[#x?(9,^E' );
define( 'SECURE_AUTH_KEY',  'kA;vma,4by6>7H6M/d0p<]Xc<eZ)G~fm)B3JIQHQZiOUVut|)4t5S25<I0GXOohI' );
define( 'LOGGED_IN_KEY',    '[D^s1zugAZ@S92cu0.),T]L[s{HjnWCJ,=[!#P?Mf=]Xj&!#;*|h Jw;8gFQrp{8' );
define( 'NONCE_KEY',        '|HGlC~:irYBsSezL})|qEf5dLT hpy=)62a5Fc$}*e54:x,9=VAA[Z2}|?!wcvtz' );
define( 'AUTH_SALT',        '511-<:Je%RTb}[RYC5sm[%NqzM5Z*SMc]!FJxxH,He{m%4AjHr~X46Zgra:4r-te' );
define( 'SECURE_AUTH_SALT', '4X$wJcvp]l4#sxk0|)=KEhgHW=FeP7hh6-R ow2-oII,Y}js2E^TZxlJJL6*-eEn' );
define( 'LOGGED_IN_SALT',   'hQ>kN VogW#aa*I^,Z9Gb`lky$@yS|4B9Ac<V0Gj<ntZu%pf;zYXBXY-NF<pp$]@' );
define( 'NONCE_SALT',       'TGuzcB2?)B~HMU`MAlaES[I} i`5}zUAO*M.]w,s?|N?wmUwPSNt}wi{JLU)0z}5' );

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
