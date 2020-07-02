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
define( 'DB_NAME', 'flower' );

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
define( 'AUTH_KEY',         'gJa<vY`6Y$g=oZsI(I_N/Dkh20bJD,ytzA` ;8Hu]kt5emR0qmo^hHI=Au<v2eeY' );
define( 'SECURE_AUTH_KEY',  'RZhau$-]KI7<M<W9j>o?X|5`mRVG]Xlx0 x>rP9A-b&a*F*W:]4a*;ExcVJ*EN^=' );
define( 'LOGGED_IN_KEY',    'aFEf!V0oj#(-AoDbOyy>pSbhhFO+lJsPs#t<@9q?k%|+y~Bv?U>b+#,b-kwDD{?F' );
define( 'NONCE_KEY',        'nX/*3_/v/7ovd6r5G$8 >{*t8/~+I0N-J@E$;oOfdjS}87UuqmDgD)nuV`p`g$r|' );
define( 'AUTH_SALT',        'Bm>]p-/P7`_G6yRm?hr..}T.j+a%[)tXv%UmeJy6G(aRKv[:f6s,W[C]PpLv9vt9' );
define( 'SECURE_AUTH_SALT', '.HYM(!=$Aebf[KnJ_9Sk5gFo~=LD?_0@#4m{&3?K;SsEGPDlJrguN}L`a0B? ZUX' );
define( 'LOGGED_IN_SALT',   'I.H`?=bnHqx}DMZ{]yIYfH>fw9Qs~)~an+e}Cp;I|.+jn9<L1(yg{Mq[pvP@~[%b' );
define( 'NONCE_SALT',       'o7Mz7~^AlcW}FDEDMku3OOcFiRdSpMU iOlfk;%[HP(4iL5/+pyFtf{Y<*b;y}6c' );

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
