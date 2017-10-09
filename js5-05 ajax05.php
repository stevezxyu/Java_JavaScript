<?php


$type = $_REQUEST["type"];

$arr = array();


if ($type==1)
{
	$arr[0] = urlencode("深入淺出設計模式");
	$arr[1] = urlencode("最新 HTML5+CSS3 網頁程式設計(第二版)");
	$arr[2] = urlencode("JavaScript 之美：聽頂尖程式設計師闡述他們的思維");
	$arr[3] = urlencode("邁向 jQuery 達人的階梯");
}

if ($type==2)
{
	$arr[0] = urlencode("破襪子花拉");
	$arr[1] = urlencode("小奇的藍絲帶(中文附注音 ＋CD)");
	$arr[2] = urlencode("小蟲蟲的金牌夢");
}

if ($type==3)
{
	$arr[0] = urlencode("向人生提問的藝術");
	$arr[1] = urlencode("微電影講堂：影片專題製作入門指南 ！(附教學DVD)");
}

if ($type==4)
{
	$arr[0] = urlencode("瑪奇英雄傳");
}

if ($type==5)
{
	$arr[0] = urlencode("澎湖五星饗宴");
}

echo urldecode(json_encode($arr));


?>