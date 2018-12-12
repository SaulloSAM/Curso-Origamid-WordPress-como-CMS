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
define('DB_NAME', 'wpdb-bikcraft');

/** MySQL database username */
define('DB_USER', 'wpdb_user');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '+u$)I+Mm*P4|<7p@>v&:m/-%!4IKqYYcavmIKUQY|XP#hAJ|Ag4)rL;_4g~*0i6l');
define('SECURE_AUTH_KEY',  'H5EpQcB/:zX-NAmeoWWq<h*V>,`SQD[01e!X^9{PP:l|{wBbXkPr4q/,9u0BU_]q');
define('LOGGED_IN_KEY',    'D9PB9H5-)Ecx5n7<p>K!AAAweyu`eZpsu^dsIV031B=DPo%M3IL}U4c!K}{Ca}U?');
define('NONCE_KEY',        ',1?x_o1ZG`<nqe|u8]Z7(ztI~ks8Qaq> A7oVR#_@vZs`<t`&IoXPndb0/nDGiIC');
define('AUTH_SALT',        'A3e?V}ajE/>d!(2Bs Gl%`6?y*Q01 !&DDCDhF.:Y_sF2bt#<AzcFHTRf}3^K{#b');
define('SECURE_AUTH_SALT', ']aaXjQX3N#BBl.cR+/^8^3y8<@&~N0#b+l20X?_,<mrou%b$CMV}AD#5j]!b`kRl');
define('LOGGED_IN_SALT',   'M8a4m|B(&BgCFC<=99)m^<P[,Bs-D58$kq,gH`,Z  r74JxN93n18ur&tLIC v,H');
define('NONCE_SALT',       'Z6q(#$e$QO`kQOLy_xhi rXFj?_~2oC$)Y@E|&py7K@5Od=C#IgDa_vw*Xc P>Vk');

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
