<?php include HEAD_PATH; ?>
<?php include NAV_PATH; ?>

<div id="container">
	<div id="main">
		<div class="contentCentered">
			<h1>UDENIT Blog</h1>
		</div>
		<div class="blocktext">
			<h2><a href="<?php echo $link; ?>"><?php echo $articleTitle; ?></a></h2>
			<p><?php echo $teaser; ?></p>
			<p><?php echo "Veröffentlicht am ".$published." von ".$author; ?></p>
		</div>
	</div>
</div>

<?php include FOOTER_PATH; ?>

