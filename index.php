<?php
$uri		= $_SERVER['REQUEST_URI'];
$uri_path	= parse_url($uri, PHP_URL_PATH);

if ($uri_path != '/'){
	$path	= rtrim($uri_path, '/');
} else {
	$path	= $uri_path;
}


require_once $_SERVER['DOCUMENT_ROOT'].'/includes/variables.php';

require $controller;

?>
