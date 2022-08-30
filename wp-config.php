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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'julieiben_dkjulieiben' );

/** Database username */
define( 'DB_USER', 'julieiben_dkjulieiben' );

/** Database password */
define( 'DB_PASSWORD', 'Cille123.' );

/** Database hostname */
define( 'DB_HOST', 'julieiben.dk.mysql' );

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
define( 'AUTH_KEY',         '}?t}NF!tm?r.)f~ZyoE3lguok.51L;j|R7{A w-6%I;,^qxl6EA6Mvh/33Yx/*gB' );
define( 'SECURE_AUTH_KEY',  '-!`EJ :_7{uH$;q4ESqH<^(#0k2+N3[Mv^;!%e^t4+xNM!kCkYCP3,Y.?PVyshHL' );
define( 'LOGGED_IN_KEY',    'U?gLJ|A11EC>0j9ewu:YQ3LDX(s+6:P{3[h[)Eu!VmA(-!TJU-2Q|ZjFI8RAE50)' );
define( 'NONCE_KEY',        'hfb/VX0_ZZY~2ujDp#U(d}xF0hK0~+L.&#*MyQU<`p.]-dgNRyD9sP80v1SX6=Mq' );
define( 'AUTH_SALT',        'UiQ?utM#j5`6z&v@UzfQ8eD9QUZ:}oc&@n4a-}G2M:3R50{]1wM>PvQ{@Wo`]1pr' );
define( 'SECURE_AUTH_SALT', '3g,Wepz(It1lwp9@P~>ke6^VOIl?y}9rqf!RALm~[PPef;>;*mP,?es6C%U$E%v|' );
define( 'LOGGED_IN_SALT',   'GO|e?I.8>xP;9#3%/F5sS5QDaC8zz{Gw@IP=Lzh4&{Xw&uj_8tsk1J8SJN(w%Erm' );
define( 'NONCE_SALT',       'j&@qC$CY`cR;T+=D]8J.=c@~A#d`QYPrM]eOmAn^>#u5-c1PB(HTWhe0kK3m DA+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Eksamen_wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
