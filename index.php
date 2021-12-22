<?php

include_once 'db_connect.php';
include_once 'functions.php';
include_once 'simple_html_dom.php';

// Parsing URL
$parsing_url = 'https://www.wildberries.ru/catalog/9322636/detail.aspx?targetUrl=XS';
$tag_class_name = '.search-tags__item';


// Get page HTML
$page = curl_get_page ($parsing_url);
$html = str_get_html($page);
$tags = $html->find('li.search-tags__item');

// Get tags array
if (count($tags) > 0) {
	foreach ($tags as $tag) {
		$tags_values[] = $tag->plaintext;
	}

	$tags_array = serialize($tags_values);

	// Put tags array into database
	$sql = "INSERT INTO tags(tags_url, tags_array) VALUES ('".$parsing_url."', '".$tags_array."')";
	if ($pdo->query($sql)) {
		echo "Similar queries inserted into database.";
	} else {
		echo "It's wrong!";
	}
}
















