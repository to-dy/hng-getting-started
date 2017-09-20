<?php
	include("dao.php");
	
	$quote_text = "";
	$quote_author = "";

	// function start() {
		$quote = getQuote();

		$quote_text = $quote['quote_text'];
		$quote_author = $quote['quote_author'];
	// }


?>