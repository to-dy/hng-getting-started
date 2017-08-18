<?php
	

	function connect(){
		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "quotedb";

		$link = mysqli_connect($server,$user,$password);

		if(!$link) {
					die("Error connecting to the database");
				}

		$db = mysqli_select_db($link,$database);

		if(!$db) {
			$sql = "CREATE DATABASE IF NOT EXISTS $database";

			if(mysqli_query($link, $sql)) {
				echo "<script> console.log('database $database created');</script>";
			} else {
				echo "<script> console.log('couldn\'t create database');</script>";
			}

			$sql1 = "INSERT INTO quotes (quote_text, quote_author) VALUES "."(
			'The best way to get a project done faster is to start sooner','Jim Highsmith'
			),
			(
			    'The first 90 percent of the code accounts for the first 90 percent of the development time...The remaining 10 percent of the code accounts for the other 90 percent of the development time.','Tom Cargill'
			),
			(
			    'Software innovation, like almost every other kind of innovation, requires the ability to collaborate and share ideas with other people, and to sit down and talk with customers and get their feedback and understand their needs.','Bill Gates'
			),
			(
			    'The bearing of a child takes nine months, no matter how many women are assigned. Many software tasks have this characteristic because of the sequential nature of debugging.','Fred Brooks'
			),
			(
			    'That's the thing about people who think they hate computers. What they really hate is lousy programmers.','Larry Niven'
			),
			(
			    'It is not enough for code to work.','Robert C. Martin'
			),
			(
			    'Any fool can write code that a computer can understand. Good programmers write <code></code> that humans can understand.','Martin Fowler'
			)";

			if(mysqli_query($link,$sql1)) {
				echo "<script> console.log('database updated');</script>";
			} else {
				echo "<script> console.log('couldn\'t update database');</script>";
			}
		}

		return mysqli_connect($server,$user,$password,$database);
	}

	function query(){

		$query = "SELECT * FROM quotes";
		$quotes = array();

		if ($result = mysqli_query(connect(),$query)) {

			while ($v = mysqli_fetch_array($result)) {

				array_push($quotes, $v);
			}

			return $quotes;
		}
	}

	function getQuote() {
		$rand = mt_rand(0,7);

		$array = query();
		mysqli_close(connect());

		return $array[$rand];
	}

?>