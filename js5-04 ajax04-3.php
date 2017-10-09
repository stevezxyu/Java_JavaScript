<?php

$books = array();

$books[0] = urlencode("深入淺出設計模式");
$books[1] = urlencode("最新 HTML5+CSS3 網頁程式設計(第二版)");
$books[2] = urlencode("JavaScript 之美：聽頂尖程式設計師闡述他們的思維");
$books[3] = urlencode("邁向 jQuery 達人的階梯");

$arr = array(
		"Category" => urlencode("資訊技術"),
		"BookList" => $books
);

echo urldecode(json_encode($arr));

/*

$arr = {
	"Category" => "資訊技術",
	"BookList" => $books
}

$books[0] = "深入淺出設計模式";
$books[1] = "最新 HTML5+CSS3 網頁程式設計(第二版)";
$books[2] = "JavaScript 之美：聽頂尖程式設計師闡述他們的思維";
$books[3] = "邁向 jQuery 達人的階梯";

*/

?>