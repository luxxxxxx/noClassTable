<?php
	header("Content-Type:text/plain;charset=utf-8");
	header("Access-Control-Allow-Origin:*");
	header("Access-Control-Allow-Method:POST,GET");
	
	// $data = $_SERVER["QUERY_STRING"];
	
	$stuNum = $_POST["stuNum"];
	$requestUrl = 'http://hongyan.cqupt.edu.cn/redapi2/api/kebiao';

	// function send_post ($url,$post_data) {
	// 	$postdata = http_build_query($post_data);
	// 	$options = array(
	// 		'http' => array(
	// 			'method' => 'POST',
	// 			'header' => 'Content-type:application/x-www-form-urlencoded',
	// 			'content' => $postdata,
	// 			'timeout' => 15 * 60
	// 		)
	// 	);
	// 	$context = stream_context_create($options);
	// 	$result = file_get_contents($url,false,$context);
	// 	return $result;
	// };
	// $post_data = array (
	// 	'stuNum' => $stuNum
	// );
	// send_post($requestUrl, $post_data);

	$url = 'http://hongyan.cqupt.edu.cn/redapi2/api/kebiao';
	$data = ['stuNum' => $stuNum];
	$ch = curl_init();
	$opt =  array(
	          CURLOPT_POST => 1,
	          CURLOPT_RETURNTRANSFER => 1,
	          CURLOPT_POSTFIELDS => http_build_query($data),
	          CURLOPT_URL => $url,
	          CURLOPT_TIMEOUT => 30,          
	        );
	curl_setopt_array($ch, $opt);
	$output = curl_exec($ch);
	echo $output;
	curl_close($ch);

	

?>
