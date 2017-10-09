<?php

$cid = $_REQUEST["cid"];
$arr = array();

if ($cid == 1)	//資訊技術
{
	$data = array(
		"Image" => urlencode("P01.jpg"),
		"Title" => urlencode("深入淺出設計模式"),
		"Description" => urlencode("寫應用程式時需要依照需求預先規劃、設計，而設計模式累積了前人的經歷，經由四人幫彙整出一系列的設計模式，以利後人可以套用。本書集合四人幫的23個模式（十幾年前的事）外加這十幾年來新增的一些模式，作者群以詼諧、幽默、圖文並茂、打破傳統著書的方式，由淺入深地詳解了設計模式的精神及重點。全書全部以當紅的 Java 程式語言為範例。 "),
		"Price" => 792
	);	
	
	array_push($arr, $data);
	
	$data = array(
		"Image" => urlencode("P02.jpg"),
		"Title" => urlencode("最新 HTML5+CSS3 網頁程式設計(第二版)"),
		"Description" => urlencode("學習網頁程式設計，當然要從時下最流行的HTML5+CSS3學起，市面上不乏相關教學書籍，但大多數都太快切入各種網頁新技術，對HTML5及CSS3的基本功草草帶過，結果就是造成觀念不清、看不懂程式碼，做出來的網頁效果老是跟想像中的不一樣…"),
		"Price" => 494
	);	
	
	array_push($arr, $data);
	
	$data = array(
		"Image" => urlencode("P03.jpg"),
		"Title" => urlencode("JavaScript 之美：聽頂尖程式設計師闡述他們的思維"),
		"Description" => urlencode("JavaScript或許是世上最兩極化且最被誤解的程式語言，許多人嘗試要換掉它作為網路語言的角色，但JavaScript還是存活、演化且十分活躍。為何一個趕工出來的語言會如此成功，而其他語言卻失敗了？"),
		"Price" => 380
	);	
	
	array_push($arr, $data);

	$data = array(
		"Image" => urlencode("P04.jpg"),
		"Title" => urlencode("邁向 jQuery 達人的階梯"),
		"Description" => urlencode("使用 jQuery 可以輕鬆操作複雜的 JavaScript， 做出令人驚豔的動態網頁效果， 是時下網頁程式設計師不可或缺的技能。本書從基本的 Javascript、jQuery 語法解說起， 搭配各種商業級的實務範例， 帶您逐步熟悉 jQuery， 學會連 Apple、Facebook、Flickr、Pinterest…等網站都在用的動態網頁技術， 讓你在職場上佔有一席之地！"),
		"Price" => 466
	);	
	
	array_push($arr, $data);
}


if ($cid == 2)	//兒童圖書
{
	$data = array(
		"Image" => urlencode("P05.jpg"),
		"Title" => urlencode("破襪子花拉"),
		"Description" => urlencode("襪子花拉破了個洞，被丟到垃圾桶，但她相信自己還是有用的，於是去尋找需要自己的人。經過幾次失敗後，她終於找到老鼠太太需要她來保暖。後來花拉遇到傷心的破鞋子，建議老鼠太太拿他來當床。從此以後，他們三個一起過著幸福快樂的日子。"),
		"Price" => 154
	);	
	
	array_push($arr, $data);

	$data = array(
		"Image" => urlencode("P06.jpg"),
		"Title" => urlencode("小奇的藍絲帶(中文附注音 ＋CD)"),
		"Description" => urlencode("小奇不喜歡上體育課，因為他跑不快，也跳不遠，而且小奇每次總是得到最後一名，有一天，小奇發現可以得到第一名藍絲帶的方法，而且還是可以開開心心的上體育課，他是怎麼做到的呢？"),
		"Price" => 252
	);	
	
	array_push($arr, $data);

	$data = array(
		"Image" => urlencode("P07.jpg"),
		"Title" => urlencode("小蟲蟲的金牌夢"),
		"Description" => urlencode("蟲蟲運動大賽的日子到了，小蟲安安卯足勁兒地的認真練習，希望能為自己贏得一面金牌。他抬腿、伸展、伏地挺身的不停練習著，比賽項目一項項的過去，蚱蜢跳得比較遠，水黽滑水滑得比較快，舉重也贏不過獨角仙，就連比大聲都比不過蟬......總是有比自己厲害的蟲蟲贏走了金牌，安安既沮喪又失望，他能達成夢想，為自己的人生贏得第一面金牌嗎？"),
		"Price" => 243
	);	
	
	array_push($arr, $data);
}


if ($cid == 3)	//人文藝術
{
	$data = array(
		"Image" => urlencode("P08.jpg"),
		"Title" => urlencode("向人生提問的藝術"),
		"Description" => urlencode("每天，從真誠地回答一個問題開始，透過不斷地反問，看見日漸清晰的生命輪廓。總是用別人期待的答案去回應這個世界，你有多久沒有誠實地面對自己了？隨書附贈「與人生對話」手記，寫下關於人生的種種問題，你最真誠的回應。"),
		"Price" => 221
	);	
	
	array_push($arr, $data);

	$data = array(
		"Image" => urlencode("P09.jpg"),
		"Title" => urlencode("微電影講堂：影片專題製作入門指南 ！(附教學DVD)"),
		"Description" => urlencode("攝影基本知識全面解析：畫面尺寸、鏡頭效果、攝影位置與角度、光線運用、光圈、快門、對焦、白平衡一次掌握！"),
		"Price" => 359
	);	
	
	array_push($arr, $data);
}

if ($cid == 4)	//線上遊戲
{
	$data = array(
		"Image" => urlencode("P10.jpg"),
		"Title" => urlencode("瑪奇英雄傳"),
		"Description" => urlencode("Garena 台灣競舞娛樂今（27）日宣布，由 NEXON 研發的線上遊戲《新瑪奇英雄傳》第十一位英雄「薔薇聖劍」蒂莉亞將於 2 月 3 日在台登場，新英雄為近戰騎士，她擅長大範圍、聚氣的多段式攻擊，也能利用不同段位的連續技能給予敵人強大的傷害，還能與卡魯展現華麗的雙人連技；研發團隊今日特地來台介紹蒂莉亞，同時預告凱跟薇拉將於近期調整。 　　《新瑪奇英雄傳》主企劃崔琳、美術盧孝真與產品經理金賢俊今日特地來台，預定今晚 6 時將參與 Garena 台灣競舞娛樂舉辦的《新瑪奇英雄傳》新英雄線上發表會—「王女降"),
		"Price" => 300
	);	
	
	array_push($arr, $data);
	
}

if ($cid == 5)	//旅遊優惠
{
	$data = array(
		"Image" => urlencode("P11.jpg"),
		"Title" => urlencode("澎湖五星饗宴"),
		"Description" => urlencode("1.★【2015/12/1~3/29 出發限定】慶開幕：贈飯店晚餐宜客樂餐廳中式套餐(限佔床者/每人兩晚晚餐)<br/>2.★贈摩托車 48小時 (兩人一部);(若需單人騎乘，則需補每人600元差額)"),
		"Price" => 7999
	);	
	
	array_push($arr, $data);
	
}

echo urldecode(json_encode($arr));


?>