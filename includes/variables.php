<?php
define('NAV_PATH',      $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php');
define('FOOTER_PATH',   $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');      
define('HEAD_PATH',     $_SERVER['DOCUMENT_ROOT'].'/includes/head.php');        

$defaultRoute = [
        'controller'    => 'index.php',
        'title'         => 'UDENIT - IT-Beratung und Dienstleistungen in Ihlow',
        'description'   => 'UDENIT bietet IT-Beratung und Servermanagement in Ihlow, Ostfriesland – Ihr Experte für Netzwerke und IT-Lösungen.',
        'canonical'     => '/'
];

$routes = [
    '/loesungen' => [
        'controller'    => 'loesungen.php',
        'title'         => 'UDENIT - IT-Lösungen für Unternehmen in Ihlow',
        'description'   => 'IT-Lösungen für Firmen in Ihlow: Servermanagement, Netzwerkadministration und IT-Beratung von UDENIT in Ostfriesland.',
        'canonical'     => '/loesungen'
    ],
    '/kontakt' => [
        'controller'    => 'kontakt.php',
        'title'         => 'UDENIT - Kontakt für IT-Beratung in Ihlow',
        'description'   => 'Kontaktieren Sie UDENIT für IT-Beratung, Servermanagement und Netzwerklösungen in Ihlow, Ostfriesland – Ihr IT-Experte!',
        'canonical'     => '/kontakt'
    ],
    '/impressum' => [
        'controller'    => 'impressum.php',
        'title'         => 'UDENIT - Impressum',
        'description'   => 'Impressum von UDENIT – Ihr Anbieter für IT-Beratung, Servermanagement und Netzwerke in Ihlow, Ostfriesland. Rechtliche Infos.',
        'canonical'     => '/impressum'
    ],
    '/datenschutz' => [
        'controller'    => 'datenschutz.php',
        'title'         => 'UDENIT - Datenschutzerklärung',
        'description'   => 'Datenschutz bei UDENIT: Servermanagement und IT-Beratung in Ihlow, Ostfriesland – Ihre Daten sicher in unseren Händen.',
        'canonical'     => '/datenschutz'
    ]
];

$route          = $routes[$path]        ?? $defaultRoute;
$title          = $route['title']       ?? $defaultRoute['title'];
$description    = $route['description'] ?? $defaultRoute['description'];
$controller     = $_SERVER['DOCUMENT_ROOT'] . '/controllers/' . $route['controller'];

?>
