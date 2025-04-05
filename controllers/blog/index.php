<?php

$articles 	= require __DIR__ . '/metadata.php';

function getTeaser($filePath) {
    $content = file_get_contents($filePath);
    if (preg_match('/<p>(.*?)<\/p>/s', $content, $match)) {
        $teaser = $match[1];
        $hasMore = substr_count($content, '<p>') > 1;
        return $teaser . ($hasMore ? '...' : '');
    }
    return 'Kein Teaser verfügbar.';
}
$filePath	= __DIR__.'/'.$articles[0]['file'];
$link		= '/blog/'.basename($filePath, '.php');
$title		= $articles[0]['title'];
$author		= $articles[0]['author'];
$published	= date('d.m.Y', strtotime($articles[0]['timestamp']));
$teaser		= getTeaser($filePath);
?>

<?php include HEAD_PATH; ?>
<?php include NAV_PATH; ?>

<div id="container">
	<div id="main">
		<div class="contentCentered">
			<h1>UDENIT Blog</h1>
		</div>
		<div class="blocktext">
			<h2><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
			<p><?php echo $teaser; ?></p>
			<p><?php echo "Veröffentlicht am ".$published." von ".$author; ?></p>
		</div>
	</div>
</div>

<?php include FOOTER_PATH; ?>

