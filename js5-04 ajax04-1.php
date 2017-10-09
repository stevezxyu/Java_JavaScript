<?php

$arr = array();

for ($i=0; $i < 9; $i++) {
	$arr[$i] = "Book-0".($i+1);
}

echo json_encode($arr);

/*

$arr[0] = "Book-01";
$arr[1] = "Book-02";
$arr[2] = "Book-03";
$arr[3] = "Book-04";
$arr[4] = "Book-05";
$arr[5] = "Book-06";
$arr[6] = "Book-07";
$arr[7] = "Book-08";
$arr[8] = "Book-09";

*/

?>