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

define('DB_NAME', 'tutkart_wp2');



/** MySQL database username */

define('DB_USER', 'tutkart_wp2');



/** MySQL database password */

define('DB_PASSWORD', 'M(~&1kgA3@JI8uZTDH&95.@0');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');

define( 'WP_MAX_MEMORY_LIMIT', '3000M' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         '0nqrHfUxvdAt92gRMIRwd3v07D1zmnEyfFn0Ab0OpKaOMlYqHnzfB4QCcWDjFY6c');

define('SECURE_AUTH_KEY',  'XOw1jRRZ79O3WbskC7bdPE4EhhaVZFJFMdhdRfktkzr9ayYUZdWNbFuoJxfWrP3s');

define('LOGGED_IN_KEY',    'f8ehnfzBB1kRXgMR4PyoHQdwhb5vzLJG9x3n682IzDaMiAOSfTNeeykQPQUaqcZm');

define('NONCE_KEY',        'aYotNcYqg8hD0EbD7ig3z9jk6ZdMOlXaaufA4DBaylQd80P3XjSlqx1jUOt6AYYL');

define('AUTH_SALT',        'nctxKFuM869HFkvAcPP2Hv00RlAc4ikeu1T1qLFRxigWiY6YDNkjp9FSnfFG39JM');

define('SECURE_AUTH_SALT', 'pul4I1KP9rbKkzj8Od6sZoj9KST6DLpFTDOdLr7R9hB0MsSZGv7M2hOfGCYjqlXS');

define('LOGGED_IN_SALT',   'm0lykHR0GOeV0bML4QmBAROIHOedaSwmmAaTzqFrgnkuJf83m5yU9RfTW1QXigxD');

define('NONCE_SALT',       'tpQawa7luCI3Kjzv7MTjlwV7YEBEHujU37pjWzSdQEUh3hztuv3xsesKYHBEjCfD');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





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

