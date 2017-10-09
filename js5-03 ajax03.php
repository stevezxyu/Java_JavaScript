<?php

header('Content-Type:text/xml');

$xml = "<bookList>";

for ($i=1; $i <= 9; $i++) {
	$xml .= "<book>圖書編號 Book-0$i</book>";
}

$xml .= "</bookList>";

echo $xml;


/*

<bookList>
	<book>圖書編號-01</book>
	<book>圖書編號-02</book>
	<book>圖書編號-03</book>
	<book>圖書編號-04</book>
	<book>圖書編號-05</book>
	<book>圖書編號-06</book>
	<book>圖書編號-07</book>
	<book>圖書編號-08</book>
	<book>圖書編號-09</book>
</bookList>


*/

?>