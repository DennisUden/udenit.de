<?php
define('NAV_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php');
define('FOOTER_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');	
define('HEAD_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/head.php');	

switch ($path) {
	case '/':
	case '/index':
	case '/index.php':
		$title		= 'UDENIT';
		$description 	= 'Startseite von UDENIT. IT-Beratung und Dienstleistungen in der Gemeinde Ihlow.';
		break;
	case '/kontakt':
		$title		= 'UDENIT - Kontakt';
		$description	= 'Kontaktieren Sie UDENIT für IT-Beratung und Dienstleistungen.';
		break;
	case '/loesungen':
		$title		= 'UDENIT - Lösungen';
		$description	= 'Unsere IT-Lösungen für Ihr Unternehmen.';
		break;
	case '/impressum':
		$title		= 'UDENIT - Impressum';
		$description	= 'Impressum von UDENIT.';
		break;
	case '/datenschutz':
		$title		= 'UDENIT - Datenschutz';
		$description	= 'Datenschutzerklärung von UDENIT.';
		break;
	default:
		$title		= 'UDENIT';
		$description 	= 'Startseite von UDENIT. IT-Beratung und Dienstleistungen in der Gemeinde Ihlow.';
}
?>
