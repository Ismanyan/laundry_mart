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
define('DB_NAME', 'mesinspi_laundry_mart');

/** MySQL database username */
define('DB_USER', 'mesinspi_laundry');

/** MySQL database password */
define('DB_PASSWORD', 'laundrymart123');

/** MySQL hostname */
define('DB_HOST', 'lapras');

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
define('AUTH_KEY',         'N7V-S%aaM&(P`1>Jk*eun(;ye8$h0/ska.1S[A4Ogt=kE^3)FDvDn9R9tR}v`^:G');
define('SECURE_AUTH_KEY',  '+`D8s&HY{}0^j=-[y~)pzmM#Jj<O5O?1hq>?{cNQ=u55L3>NA]:#jZ1b]ztDxAi5');
define('LOGGED_IN_KEY',    'H_@5k <~w2KT8HRm(QeY@VH<zCk:I,/N%|$*N~Z01Q>b%L S0D#Hrl[~UH>j}*D ');
define('NONCE_KEY',        '8CH:D`@ayTXr;o84dzOh}H}oO??)QVEz4-E!p<$$zp4?^br6Rws}B(&-uh~4)X:v');
define('AUTH_SALT',        'KDe$4>ts3tRRp;p5p&@MZWtRSGu6e;Er7L9xDt{>Hp86^f`boczbaFXU`EKZ!eiw');
define('SECURE_AUTH_SALT', 'bGb<5-.| aD;_=uOG+2}!{rf|EZ_9904qlK>]Ng<)mu+<E93$dKTqw`OtQ@m*n!l');
define('LOGGED_IN_SALT',   'gg3+Tv(&c#EoIt(]jwrar&%*^a^td=zkfY;|6GG]0YfPgo0PwcsQCP%?QU.asA>/');
define('NONCE_SALT',       'W|kbE-;xW7P!sNOuPIeh <6%>dW:H}Mm`GmwC3uv,r*)ZhxC#hycc$J7^4wyL$|Y');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
