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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^- LyWB?S|hpLNd|uP*4sFp9Od3PzgZ!GA<ftAHns%4aq,WGBwV7mD&BO(!~.=W/' );
define( 'SECURE_AUTH_KEY',  '6YmLr${@SGr@DAkf`/:</GHxMe_iAra{?4hfCr5Bi!sfo:`r6ohBH??puFsZ=]C~' );
define( 'LOGGED_IN_KEY',    '85v+|!K.l9fK.)aLF?nh4#eMT*}l8?b?1#@9??v7Y~O(JeNAqEw!KPHp;mg/KAv}' );
define( 'NONCE_KEY',        'p2A<%K;d`[E^f|,<^{Hr[@T>RIYrc~6Qqr,ai}a)~XYnbl2u!T~vdJic7ir64K=;' );
define( 'AUTH_SALT',        '1b2&w:>&jD%G>[_bWTmwy6s@tqNqvGUFW)9|ml<xRX5fmKZZI]{PvJ~Xzb,g8{iU' );
define( 'SECURE_AUTH_SALT', '6MzU#dn6UH/1]WqwgNeQi>_`Dy Oh5 )p%<~dG8;_A=H,S38I!o4Qp&|cT3EFCdM' );
define( 'LOGGED_IN_SALT',   '@x5;KjjRFk+a;y])UZ5~OFCd;]/eDrj,OgB3XRj>HGMQ|?j0}p+lw%x[AQB/uppA' );
define( 'NONCE_SALT',       '1m>ihA!ycAYwbl?%%9`9`Q>/r:,xAi R8V}p*57EvceB>IuihKi/ W5xZedHMcZL' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
