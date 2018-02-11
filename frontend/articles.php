<?php

	session_start();
	
	if(isset($_SESSION['login']) && isset($_SESSION['pass'])){
		echo "<h1>Liste articles du NYT </h1><br/>";
		
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$query = array(
  "api-key" => "7275cbb14102448991b3b0597568b777",
  "begin_date" => "20171201",
  "end_date" => "20180131"
);
curl_setopt($curl, CURLOPT_URL,
  "https://api.nytimes.com/svc/search/v2/articlesearch.json" . "?" . http_build_query($query)
);
$result = json_decode(curl_exec($curl));
	echo "<ul>";
	foreach ($result->response->docs as $doc) {
		echo "<li><a href=\"$doc->web_url\"> ".$doc->headline->main." </a></li><br>";   
	}
	echo "</ul>";
		echo '<br><br><br><a href="../backend/logout.php"> logout</a>';
	}else{
		echo "Veuillez vous connecter pour accéder aux articles : <a href=\"../index.html\">Se connecter</a>";
	}
