<?php
$uri	= $_SERVER['REQUEST_URI'];
$path	= parse_url($uri, PHP_URL_PATH);

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/variables.php';

switch ($path) {
	case '/':
	case '/index':
	case '/index.php':
		require $_SERVER['DOCUMENT_ROOT'].'/controllers/index.php';
		break;
	case '/loesungen':
		require $_SERVER['DOCUMENT_ROOT'].'/controllers/loesungen.php';
		break;
	case '/kontakt':
		require $_SERVER['DOCUMENT_ROOT'].'/controllers/kontakt.php';
		break;
	case '/impressum':
		require $_SERVER['DOCUMENT_ROOT'].'/controllers/impressum.php';
		break;
	case '/datenschutz':
		require $_SERVER['DOCUMENT_ROOT'].'/controllers/datenschutz.php';
		break;
	default:
		require $_SERVER['DOCUMENT_ROOT'].'/controllers/index.php';
}
?>
