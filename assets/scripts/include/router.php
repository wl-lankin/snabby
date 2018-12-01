<?php
$request = $_SERVER['REQUEST_URI'];

if ($dev)
	$request = str_replace(PATH_PREFIX, '', $request);

switch ($request) {
	case '' 				:	$page = 'shortener.php';		break;
	case '/' 				:	$page = 'shortener.php';		break;
	case '/info'		:	$page = 'info.php';					break;
	case '/legal'		:	$page = 'legal.php';				break;
	case '/imprint'	:	$page = 'imprint.php';			break;
	default					:	$page = '404.php';					break;
}
