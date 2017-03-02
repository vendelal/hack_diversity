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
define('DB_NAME', 'hack_diversity');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'p:OLF=;)WN^ee`=|=%J?Mwd 8YCzBrk^MMfpV/8L,*EP].x*<6C W<A%wLk`L,(R');
define('SECURE_AUTH_KEY',  'tH6{4:~?;50(BJf<frfJ,b95~7w4U~8=>/=Za7(R;+>J}=R0OHG,W]p`Y@V n9YX');
define('LOGGED_IN_KEY',    '0 PhkbjMf6P=L;zu4Sw?oVOfoOSIO:s{jOSm[yGMjDOIADZp]cz4c9vw}(dBx5={');
define('NONCE_KEY',        'Vh:wuDQ}FwY&js(<EM^*7p@y:&R2e%?R|RXthvNGBb>!;!y$zD2V<{>:Ojdn_vTx');
define('AUTH_SALT',        '{0#QkI0&WmfG-8XJ},1UF2j}9a!=Kt7Md0~S&0+ |p3<I!f*B!hbKttp88%*[t&c');
define('SECURE_AUTH_SALT', 'Ah@RI:ul@eQF*c)vd9d7h<v)8JZ4]%j>!jlvYUdlI@e>_G$Pm0m_l!|XD8rCsmxF');
define('LOGGED_IN_SALT',   '_ZmEHw{OF}3|gvjA_8C2Sn|{D1+Zw1S|qK=)qX6*Et*dn@ShtH3<D]@_lh=kJ{Cp');
define('NONCE_SALT',       'Aj2es#4UV]Lp={c3aUD{B((^q}@bEp(]hpZ3C[3ekZEXbX-JMwY [1BB>B3Y;G8c');

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
