<?php
$dev = (file_exists('dev.php')) ? true : false;

define( 'ROOT_PATH', dirname(dirname(__FILE__)) . '/snabby/' );
define( 'SCRIPTS', ROOT_PATH . 'assets/scripts/' );
define( 'LANG', ROOT_PATH . 'assets/lang/' );

if($dev) {
	define( 'DIR_PREFIX', '//localhost/snabby' );
	define( 'PATH_PREFIX', 'snabby/' );
} else {
	define( 'DIR_PREFIX', '' );
	define( 'PATH_PREFIX', '' );
}
