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
define( 'DB_NAME', 'peopleal_wp1' );

/** MySQL database username */
define( 'DB_USER', 'peopleal_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q.Kw8Wv0OS1iRJGuKy285' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'KMjtYpf7aArpRAZhDXjhYIhz8o8TMGotSTtfyGd58Chf8Vd0rwN9o005cbLSKLw3');
define('SECURE_AUTH_KEY',  '3wWF5oy1GkfOG6SKHaYCeu1YP3vG1EAP8tR4pQ23aYqvfI10XlsOKaPRXTcPW29E');
define('LOGGED_IN_KEY',    'kqisRt2dhFPmguOmL6QxjNXqdPcqb48vIVoj1aQwQNyUTH24aOxfKT3UZ8jPlOL8');
define('NONCE_KEY',        'NHYhSGp9sUDOmxF7Yzdx64h3YOvU10kms4bIgEetsMqMHzjr6s6lBNYDL13QdPaf');
define('AUTH_SALT',        'WjKnqPfaFVtB1mvTmPe0Z2WG1ckBasjczv8HxX4vXYgQH8nHtv1O9Y4Kf0s2dEC0');
define('SECURE_AUTH_SALT', 'ap0dYlykOcWFQuadf3Vx39tnQ8n89GgKYbPMow6fGTG7UtgjPtOLxcYdUtzzFJpz');
define('LOGGED_IN_SALT',   'DGwWLbZSAHLahf7CtGno7HKS6jG7YQfg9EJTMGgx05sJrXJd9yEmnOA5QU569bhr');
define('NONCE_SALT',       'ZLrRAEa6c7oPMpgjt0ZJ5LZyKJYLqFa27PLOz9PbfIrjpcAPlnBasp2jQTwU1rbW');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
