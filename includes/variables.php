<?php
define('NAV_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php');
define('FOOTER_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
define('HEAD_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/head.php');

$defaultRoute = [
        'controller' => 'index.php',
        'title' => 'UDENIT',
        'description' => 'Startseite von UDENIT. IT-Beratung und Dienstleistungen in der Gemeinde Ihlow.'
];

$routes = [
    '/loesungen' => [
        'controller' => 'loesungen.php',
        'title' => 'UDENIT - Lösungen',
        'description' => 'Unsere IT-Lösungen für Ihr Unternehmen.'
    ],
    '/kontakt' => [
        'controller' => 'kontakt.php',
        'title' => 'UDENIT - Kontakt',
        'description' => 'Kontaktieren Sie UDENIT für IT-Beratung und Dienstleistungen.'
    ],
    '/impressum' => [
        'controller' => 'impressum.php',
        'title' => 'UDENIT - Impressum',
        'description' => 'Impressum von UDENIT.'
    ],
    '/datenschutz' => [
        'controller' => 'datenschutz.php',
        'title' => 'UDENIT - Datenschutz',
        'description' => 'Datenschutzerklärung von UDENIT.'
    ]
];

$route          = $routes[$path]        ?? $defaultRoute;
$title          = $route['title']       ?? $defaultRoute['title'];
$description    = $route['description'] ?? $defaultRoute['description'];
$controller     = $_SERVER['DOCUMENT_ROOT'] . '/controllers/' . $route['controller'];

?>
