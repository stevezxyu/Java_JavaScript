<?php

$cid = $_REQUEST["cid"];
$arr = array();

if ($cid == 1)
{
	$data = array(
		"CID" => 1,
		"Name" => urlencode("資訊技術")
	);
	array_push($arr, $data);
	
	$data = array(
		"CID" => 2,
		"Name" => urlencode("兒童圖書")
	);
	array_push($arr, $data);

	$data = array(
		"CID" => 3,
		"Name" => urlencode("人文藝術")
	);
	array_push($arr, $data);
}


if ($cid == 2)
{
	$data = array(
		"CID" => 4,
		"Name" => urlencode("線上遊戲")
	);
	array_push($arr, $data);
	
	$data = array(
		"CID" => 5,
		"Name" => urlencode("旅遊優惠")
	);
	array_push($arr, $data);

}

echo urldecode(json_encode($arr));
?>