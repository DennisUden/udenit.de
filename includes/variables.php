<?php
define('NAV_PATH',      $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php');
define('FOOTER_PATH',   $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');      
define('HEAD_PATH',     $_SERVER['DOCUMENT_ROOT'].'/includes/head.php');        

$defaultRoute = [
	'controller'	=> '404.php',
	'title'		=> 'UDENIT - 404',
	'description'	=> 'UDENIT - 404 Fehler - Seite konnte nicht gefunden werden',
       	'canonical'	=> '/404'	
];

$routes = [
    '/' => [
        'controller'    => 'index.php',
        'title'         => 'UDENIT - IT-Beratung und Dienstleistungen in Ihlow',
        'description'   => 'UDENIT bietet IT-Beratung, Dienstleistungen für KMU und ehrenamtliche Betreuung im Rahmen der Nachbarschaftshilfe für Senioren in Ihlow, Ostfriesland', 
	'canonical'     => '/'
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
    ],
    '/blog' => [
	    'controller'	=> 'blog/index.php',
	    'title'		=> 'UDENIT Blog - Tipps, Tricks und Praxiswissen von Dennis Uden',
	    'description'	=> 'UDENIT Blog - Tipps, Tricks und Praxiswissen von Dennis Uden aus diversen Bereichen der IT, vor allem über Linux und Server.',
	    'canonical'		=> '/blog'
    ],
    '/blog/ksnip' => [
	    'controller'	=> 'blog/ksnip.php',
	    'title'		=> 'UDENIT Blog - Einfache Screenshots in Linux',
	    'description'	=> 'UDENIT Blog - Einfache Screenshots in Linux - Pfeilschnelle Bildaufnahmen und Annotierungen mithilfe von Ksnip als Alternative zu Snipping Tool',
	    'canonical'		=> '/blog/ksnip'
    ]
];
if (empty($routes[$path])){
	http_response_code(404);
}
$route          = $routes[$path] ?? $defaultRoute;
$title          = $route['title'];
$description    = $route['description'];
$controller     = $_SERVER['DOCUMENT_ROOT'] . '/controllers/' . $route['controller'];

$articles 	= require $_SERVER['DOCUMENT_ROOT'].'/controllers/blog/metadata.php';

function getTeaser($filePath) {
    $content = file_get_contents($filePath);
    if (preg_match('/<p>(.*?)<\/p>/s', $content, $match)) {
        $teaser = $match[1];
        $hasMore = substr_count($content, '<p>') > 1;
        return $teaser . ($hasMore ? '...' : '');
    }
    return 'Kein Teaser verfügbar.';
}
$filePath	= $_SERVER['DOCUMENT_ROOT'].'/controllers/blog/'.$articles[0]['file'];
$link		= '/blog/'.basename($filePath, '.php');
$articleTitle	= $articles[0]['title'];
$author		= $articles[0]['author'];
$published	= date('d.m.Y', strtotime($articles[0]['timestamp']));
$teaser		= getTeaser($filePath);

?>
