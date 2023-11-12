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
define( 'DB_NAME', 'shop2020_db' );

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
define( 'AUTH_KEY',         '){9_e,Ue6}/W&A73 &5|Il${g+Tm L{JQ08]2<gQ}^E8zc467Lh*X}/c~TIel@#v' );
define( 'SECURE_AUTH_KEY',  'cEU&ryR$Twj5Z)=vT&V:heYkx4L9e90YSP!yxx]m_QC0]Uc8CCerjm[ZeP~U%BT5' );
define( 'LOGGED_IN_KEY',    '|d~v<TwkaFmN$t`avgyd)GAt*fmQPc6[l_;[ea|xjcC`Elu)sai6>E{KOWd;q*kA' );
define( 'NONCE_KEY',        'QvI^Qs&BAl_6;Z@2+!dl*V~R]O^p??t,{D#G^Uf#B$ipDTs.(B@zvYHm%Af9unI0' );
define( 'AUTH_SALT',        '{Oqj[<mV2_jl.8w!4,p3aw.PkmZ+pX8E]2Tk2T-;Sz(Ji/ 1jRCj<6tq6K>@jm|X' );
define( 'SECURE_AUTH_SALT', '{QY} )1 trx+n9qr!DLjb^;Sk-hWa7H}`F-C;IyZPk;B.|qIG)@d3%s[yrSQ+$XR' );
define( 'LOGGED_IN_SALT',   'GmaX8RA@?@5;mU _? &GG70o>~}rpWYRoUjEW_^ia-!}&Ky<noT%Vzo*UY[:BpFS' );
define( 'NONCE_SALT',       'V0y:`Fz^cRxelxAZX{``k%JkV E?,R4:;}W![9TBj-u^xR7u-X]D@b5P4d}]4Y70' );

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
