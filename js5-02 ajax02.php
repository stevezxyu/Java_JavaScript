<?php

$type = $_REQUEST["type"];

$txt = "我是 Plain Text";
$html = "<span style='color:red'>我是 HTML Content</span>";

echo  (($type == "text") ? $txt : $html);

?>