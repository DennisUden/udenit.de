<?php
define('NAV_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php');
define('FOOTER_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
define('HEAD_PATH', $_SERVER['DOCUMENT_ROOT'].'/includes/head.php');

$routes = [
    '/' => [
        'controller' => 'index.php',
        'title' => 'UDENIT',
        'description' => 'Startseite von UDENIT. IT-Beratung und Dienstleistungen in der Gemeinde Ihlow.'
    ],
    '/index' => [
        'controller' => 'index.php',
        'title' => 'UDENIT',
        'description' => 'Startseite von UDENIT. IT-Beratung und Dienstleistungen in der Gemeinde Ihlow.'
    ],
    '/index.php' => [
        'controller' => 'index.php',
        'title' => 'UDENIT',
        'description' => 'Startseite von UDENIT. IT-Beratung und Dienstleistungen in der Gemeinde Ihlow.'
    ],
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

$route = $routes[$path] ?? $routes['/'];
$title = $route['title'];
$description = $route['description'];
$controller = $_SERVER['DOCUMENT_ROOT'] . '/controllers/' . $route['controller'];

?>
