<?php

	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=7dn28he8h2e72');	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

    foreach($cricketMatches->data as $item) {
<?php echo($item->title); ?>
} ?>
