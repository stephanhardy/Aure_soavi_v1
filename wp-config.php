<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aure_soavi_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4,$8(/Bs?BGJ$Fe.>lH)qA7?=Oz/5|5nmMG[-N^7mq~-tQzR_9Pm1/:Ytb^b/: Q');
define('SECURE_AUTH_KEY',  'k#a{Uv(-O_F^B#&W|757fR$^}ff;&dklLGX-~C5EO3F(eL:R1M&zTmF|zI>sT(+j');
define('LOGGED_IN_KEY',    '}I|/nPYNQRU+{AV3X*M-|KrfMTN?UjfID>>E-hY;xXdn):?|&YcW6>:EJK@i%#`v');
define('NONCE_KEY',        '0P-WoWH.gjIJJ34^QH[`R+c=h8v)#ZLoz0b2(SE`)3XE~k$mi~WW*z[4-]-{5B6H');
define('AUTH_SALT',        '1EHB1H8Y|D?Vr>$0l:Th(}xw(=+1b3^rOA*M=tq`0]IxBycT%P-;b:P}`wI|bUA;');
define('SECURE_AUTH_SALT', 'e>Z*O5%-].c~@CHFsU-bvv;(}w|,F@>]|+?|6{C+|+-ofs*-`ooc:a&3omSEG`Zo');
define('LOGGED_IN_SALT',   'G1$*flUp67@v?v.,k8R&C!#j)^_T>_<)yq-1k8[z8O?;D]Tl0I|D;{Gi*$i_}r1^');
define('NONCE_SALT',       '-F|p=6:l|,Dvu8k>.kM-_$W&5]fq.3+b!(,HTM]_R+Y+CKd$d;P-L-G 0?Y,R9`>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'it_IT');

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
