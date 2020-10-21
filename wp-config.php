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
define( 'DB_NAME', 'notes' );

/** MySQL database username */
define( 'DB_USER', 'soltee' );

/** MySQL database password */
define( 'DB_PASSWORD', '11111111' );

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
define( 'AUTH_KEY',         '}Uk|96pO8~!0mW=2HbNRmKTmK!@l5Sr*IBvQUC_],Dx!%]E$,!{GG}TuvwQ4{!a*' );
define( 'SECURE_AUTH_KEY',  'X[spAE/^ZM`ls#T#zKrk[2Yq/Hy~GO{$#P@!fkz/o9pEDvl}-+p3-02lzJdC..y?' );
define( 'LOGGED_IN_KEY',    'z} _W+|4KP-1&1N={KMli7<+ems6+3{5H>A?sibUXP3(WU,)?Gi596%DDbX|1wNw' );
define( 'NONCE_KEY',        'w4Z97dPFBlw6V.FUF$ZALVizVf6K)|bt%VL<beB:GA}%ON7/?D7J=wh&j+12`2UM' );
define( 'AUTH_SALT',        '%Zn*a]K<ZcdwY{^6lkWw&3M.YdzorNP.]iu7KjcKsQ&E=3)`cA[p+)hg%1vwJgmp' );
define( 'SECURE_AUTH_SALT', '*u7|eaAIH~hU23pWe{x8bBC/ip}975|Tp|Lk:$Qehfw=ZYG C1.,2VAQW~xE!gv{' );
define( 'LOGGED_IN_SALT',   'E/jxXeriO^suO7O u{i!ry?`onKP_^|^]L;O#B,E)m=-NjSEE ^hkDl-EAH_V{Z~' );
define( 'NONCE_SALT',       '@35)5(>`#JOIOqNt}m,<dm/#}FAu*:x^a|OPx1PE%O5rVE>lwbxp,zZe@lLc2+@0' );

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
