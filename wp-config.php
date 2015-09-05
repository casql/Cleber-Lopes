<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cleberlopes');

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
define('AUTH_KEY',         'cf+H*/} yTnCGO:%MAo.x#k>Rb5[Ll<E6Cn2>3sB#Bg=S@,AC5Y>o|wf,I+xY{e,');
define('SECURE_AUTH_KEY',  '<jSQumYAMDO4$faOz^C#xfhV-&s&RSCO!na^0v+jWYdRyz-(-QJ5=Ne+KaxnfC|y');
define('LOGGED_IN_KEY',    'EQ `3pE&VKOA O4+z*o;zajK|1o(uBvK@E_)FbPs8`kN-Jvo+|W?K[S:^0@;UZE+');
define('NONCE_KEY',        '+(qc78{T*8).ZT.Yhd2R7W.H|gZ.my<||;Ak`uQ,_LI?[F0q6Z-0cR(i5!J8vYcF');
define('AUTH_SALT',        '~~?zi{A0h~d-k31Q#Vyh0m{Q&7bA//_M74;l.=$+8~l5y?S#@ZJU$Y7P`v5J>E3,');
define('SECURE_AUTH_SALT', '|F)s,n($Oe_=B(cMA/1DkF*--V<5VM=SSBi4:-YsjgbyS(a^ t|vp[Em4x)frcnk');
define('LOGGED_IN_SALT',   'Q}dv(wD97#as ,t!uh.*HWMw+),j7+yE,8]c+E.V+L0r[6VyZq~Sp>F*`~15cfer');
define('NONCE_SALT',       'U0&]J3ZsYos2eFG-,xoMS9Z)):?Za6Y2n+}E2|[3j;}wq;38?-;n|sfrZ2<o.))J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
