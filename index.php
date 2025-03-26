<?php
$uri	= $_SERVER['REQUEST_URI'];
$path	= parse_url($uri, PHP_URL_PATH);

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/variables.php';

require $controller
?>
