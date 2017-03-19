<?php
header("Content-Type:text/plain;charset=utf-8");
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
echo "hello ";
$staff = array
(
	array("name" => "洪七","number" => "101","sex" => "男","job" => "总经理1"),
	array("name" => "12","number" => "102","sex" => "男","job" => "总经理2")
);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	search();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
	create();
};


function search () {
	if (!isset($_GET["number"]) || empty($_GET["number"])) {
		echo "参数错误";
		return;
	}

	global $staff;
	$number = $_GET["number"];
	$result = "没有找到员工";
	echo $number;
	echo "<br>";
	foreach ($staff as $value) {
		if ($value["number"] == $number) {
			$result = "找到员工:员工编号:".$value["number"].",员工姓名:".$value["name"].",员工性别:".$value["sex"].",员工职位:".$value["job"];
			break;
		}
	}

	echo $result;
}

function create () {
	if(!isset($_POST["name"]) || empty($_POST["name"]) 
		|| !isset($_POST["number"]) || empty($_POST["number"])
		|| !isset($_POST["sex"]) || empty($_POST["sex"])
		|| !isset($_POST["job"]) || empty($_POST["job"])) {
		echo "参数错误 , 员工信息填写不全";
		echo isset($_POST["name"]);
		return;
	};
	echo "成功";
}


?>