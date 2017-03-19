<?php
	header("Content-Type:text/plain;charset=utf-8");
	header("Access-Control-Allow-Origin:*");
	header("Access-Control-Allow-Method:POST,GET");
	
	// $data = $_SERVER["QUERY_STRING"];
	if (!isset($_GET["searchKey"]) || empty($_GET["searchKey"])) {
		echo "please input your searchKey";
	};
	$searchKey = $_GET["searchKey"];
	$requestUrl = 'http://jwzx.cqupt.edu.cn/jwzxtmp/data/json_StudentSearch.php?searchKey=';
	$res = file_get_contents($requestUrl.$searchKey);
	echo $res;
	

?>
