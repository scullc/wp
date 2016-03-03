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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'scullc');

/** MySQL database password */
define('DB_PASSWORD', 'T045man12');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~Rb~#(?JeP;iNP(j)=@+x8W2gFq:7;ya?&,`w+YdS1@VE+iquU+(dv#:IbyY[cF<');
define('SECURE_AUTH_KEY',  'KFk0,!K+-g]K+t$2DrS+Re-CKJ8N.|b/`y(z&9Y:Bk|z;gi,C322(Nvl7J,a+rxt');
define('LOGGED_IN_KEY',    'JN|BfXV9)&X7H0Bzj+r/lcjuU!9S *E#=hb8AqU-_^+-+Bj=|/+H]O+6iL<+3R`2');
define('NONCE_KEY',        ' c5E4hQ^titDUn10*OIY*YEH4Agu<~ A;44+QBNm{|&)?s=|e}Onnp7V}S=0W1?x');
define('AUTH_SALT',        '9N)SwQIU2W9XzsZ)R5n#mL[B|j~&7M2aH`b=q&!!zN?:&KQ%#1-A28TT-DRudy94');
define('SECURE_AUTH_SALT', 'A^1k)Fm);Kspb] %}%><ufh2x0V-j#$D!QNI&GC^_2$BBoCKtwteDC3{+P_ ihna');
define('LOGGED_IN_SALT',   '~U+e!0P4ZQ.5WB<qlDH)z/F8zE|7Z!Txrm/#6M!u)*1>=,ZM|NU)]5hOaO2;%Q1X');
define('NONCE_SALT',       'k0wVL2_U1W~`_?#N:3XQKH;j/wu%-|48:6=x; ve.0Nv+UY=nUEl![+nRg+9#joE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
