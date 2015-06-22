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
define('DB_NAME', 'cidadebike');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'senha');

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
define('AUTH_KEY',         'jBpCxD//&-^((W-x5XHN|3$.kHjY9%B8$]/0Ik}B,u)d4% ]|dP|IUJ{jA%e8<JX');
define('SECURE_AUTH_KEY',  '_&FN*t(I>Z_XER;Ma{+|~@ezn)moSq B].7O~SMvoqu$AlVeWM[}Vd&4o>|I|W%D');
define('LOGGED_IN_KEY',    'V8r_(Xl*@Q48U(M+TENb+=kl_T(]73,tA4s<>RoTS4)Jkpl_4:fR^izZGWf#Now(');
define('NONCE_KEY',        'nVG+#g9.yYL6&wD,[bpal%HFOd2c.-ZuP#=;w6yaJZ!HJxjl$ns~?gkaFI[o-8[:');
define('AUTH_SALT',        'e^4}$EIx=;:T0;3MMSF|+g@oQ9@UHBK`.,!3t fcyDj2;x:V45SpuX(,ikm5P9fO');
define('SECURE_AUTH_SALT', 'L;a$KANB8wrq:jch|)4-]9f^ovb%WykR@?l`(Qj|I)5:$Ff0l5F*W tn7;?e~,(V');
define('LOGGED_IN_SALT',   'Z(ibY53p[?&HH@Ub+5+r3-YG`D;Dxx<*r_!pdQDEUBgPZB7S5qd{x ~ [}3J ;1S');
define('NONCE_SALT',       'w ;#a%t5P+`Omewq>VOl2<Y(&t&s*F}#G|D#Sl+kY|I[{7J-V8D(~g0Gs)02!Ewx');

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
