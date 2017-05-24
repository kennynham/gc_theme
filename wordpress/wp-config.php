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
define('DB_NAME', 'wp_intro');

/** MySQL database username */
define('DB_USER', 'wp_intro');

/** MySQL database password */
define('DB_PASSWORD', '1CRHPrKuqGZXujVG');

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
define('AUTH_KEY',         '6aKEF{Gp#tA3VP)nx!7kZ79Yaca8cpVcfAANW=!Nn_jm(i9tHMdheBwP&KM@2(+&');
define('SECURE_AUTH_KEY',  'q*Vc!$Xqz}[3(38O25U}h]_MleQjtWD.7w!/Q5/&P)TD5EVRo,]5)tY7,KB*us<T');
define('LOGGED_IN_KEY',    '!9esCFL)3R,WK!adyXNnC}_Ecg?xUvm{,oR>1zB!R@P-r!|iD+MPW<*-YLpuY-/H');
define('NONCE_KEY',        '41!gRK!NJ|[-/>H$Ho&=Uf]mk0.76PZ(lV0nG@hz=/}lK%t{5Hmz?}g2lO1<jsDZ');
define('AUTH_SALT',        '3)w!WoPJ[yMd_Nf6.=zks[xFZe_JW;0J.s?9Gk~$kUqc[G|].sJro{->1kL|:Y <');
define('SECURE_AUTH_SALT', 'bA<&Zt+*oEXP1<6;Igc:<[TBIq*@9?,wNi/2B7IeQ@?$ 5j+4HV>TI`I~jm9O`{>');
define('LOGGED_IN_SALT',   'wx[sN}MP%k9oB&TqFs_3EDc%y-Lc35Lad)-//:lU,EBkf:S:4/,W>4~r`GLgCZ0-');
define('NONCE_SALT',       'I/yi;N9t2$M6,DT^u?4et;h*,W9sf=JJSsY4=r=1Q6>EZvZkc!>WR7PlWXb{ics5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'intro_';

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
define('WP_DEBUG', true); //True turns on database and PHP errors so we can see if there are any.

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
