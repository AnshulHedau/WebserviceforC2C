<html>
	<head>
	</head>
	<?php

	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=07WYdFc1qgOo5d9lpkE7x5fbSsp1');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->data as $item) {
	?>
	<body>
	<h4><?php echo($item->title); ?></h4>
	</body>
</html>

<?php } ?>
