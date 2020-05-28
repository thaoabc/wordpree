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

define( 'SAVEQUERIES', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nQt65iEt)sT|f/w-~Oetl9U7FZxB!}i}cGpB+K0(c=v|ko_Q@%OMV!vaZ2O:<[*,' );
define( 'SECURE_AUTH_KEY',  '>#x8AeiW5fEHe4@AxC{Fo.X0O+ZBD@yo6-COOym7=-uQ}b2+`Ezug.sY b{@A|w.' );
define( 'LOGGED_IN_KEY',    'z+SSqlOS)yNpwymYF_Ue<, AJ-LPWY!b36C0C;rsVxP5bdeYr1!v%z}GmvtNR;ZJ' );
define( 'NONCE_KEY',        '(6.a> B+WgC%w6DpQL)CpG3_%u5)+bs+V+^=9$xaB)*IE?Y^Zz+%uI6F}:j|&cf0' );
define( 'AUTH_SALT',        'vB4Zy)uISz0}g00X,f,0}LR=Ukfi9Pdr<hm&jC)}oC#P`]6z-+ ZlxL91J!:/(r=' );
define( 'SECURE_AUTH_SALT', 'sq!=b~;t:w?IS2Qsx-:oBl6 >WI+oV}nS{jiZ{]`CWV7aZs1:nmy+;dtylJ5-BZ7' );
define( 'LOGGED_IN_SALT',   '=@w-(/ZbKnkh 9J:8)kr:+H40@^u^da_@GMgVz<NQ1it~eHmkHL>KnK;6?#l>4hN' );
define( 'NONCE_SALT',       'p{ZWZ:U>]aQCg>3uB?PM/Efu)~%lvh5kc]8wQfa-^|(NX1o.mDhNy]l}>gUfZG=Z' );

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
