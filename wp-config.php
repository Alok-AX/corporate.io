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
define( 'DB_NAME', 'praticetwo' );

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
define( 'AUTH_KEY',         '}tMVt0RK4Gr8}8&_BrL^-ir#`}(#-%_(a5P/~~a/,MyfjW^~IwY[(}oFpR6V+}s>' );
define( 'SECURE_AUTH_KEY',  'g54ycI6UHSbZP*X*5l~2*|#[R?Hh%;5=iC[h0v:Dy4CiQGB/:<!(Qy246Uf3hg0B' );
define( 'LOGGED_IN_KEY',    '0LY[+x=2^Gj}Aef&q/$[HgRWi`AD4jZaV^I_oCQsQVC*Jm+9iq!AczW,u8%7J6qS' );
define( 'NONCE_KEY',        '>x`MB9cp@b)n- _+&a%[^P4FAm.XB_>yS_o9B+-V7?C}/qM{kZj!6d3RLaFeVOl7' );
define( 'AUTH_SALT',        'y-dRew&28X;a1rTl 3QAKM}|bTN;p2obukb]mW>-Pa?1UPWD|]]B|1*5twxg7C;:' );
define( 'SECURE_AUTH_SALT', '2}NT{SgUju&EeJ8(=)6)D5}/QCdHxVLo7<ep72<1U7^Orn#p_vIr5|@cw6>0Q^d(' );
define( 'LOGGED_IN_SALT',   'Mb=rmY4w$FEuK?f{7L0ZEbZnHHqNLrNiTWxYfwq]Uq)1QSTGuO#X`Wh>P-BGBN)<' );
define( 'NONCE_SALT',       'Rd0I!M*.0Lv,Gk^a~8[5C15_Y%-{|v|ue<>C|[Z|z&KY{+ZI53[U0745n7&52DZt' );

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
