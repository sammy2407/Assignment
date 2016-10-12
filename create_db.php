<?php

Class Stack 
{
	var $conn;
	
	function curl($url)
	{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    curl_setopt($curl, CURLOPT_USERAGENT, 'cURL');
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_ENCODING , "gzip");//<< Solution

    $result = curl_exec($curl);
    curl_close($curl);

    return $result;
	}
	function connectdb()
	{
		
		$servername = "localhost";
		$username = "giftonde_god123";
		$password = "delivery";
		$db = "giftonde_god";


		// Create connection
		$this->conn= mysqli_connect($servername, $username, $password , $db);

		// Check connection
		if ($this->conn->connect_error)
		{
		die("Connection failed: " . $this->conn->connect_error);
		} 
	
	}
	
	function insert($ques,$name,$un_ans,$ratio)
	{
		$ins= " INSERT INTO `Stack`( `tag_name`, `tot_ques`, `tot_unans` ) VALUES ('".$name."',".$ques.",".$un_ans.")";
		mysqli_query($this->conn,$ins);
	}

	function get_db()
	{
	//connect to db
	$this->connectdb ();
	
	//Get top 50 tags
	$feed = $this->curl("https://api.stackexchange.com/2.2/tags?pagesize=50&order=desc&sort=popular&site=stackoverflow&filter=!-.G.68phH_FJ&key=CPmVp9K8KKqDCa9ee5WGqg((");

	$feed = json_decode($feed,true);
	//get count of their unanswered questions and storing data in db 
	for ($i=0;$i<50; $i++)
	{
	$c = $feed['items'][$i]['count'];
	$n=$feed['items'][$i]['name'];
	if ($n=="c#")
	{
		$n="c%23";
	}
	$no_ans = $this->curl("https://api.stackexchange.com/2.2/questions/no-answers?page=1&pagesize=1&order=desc&sort=activity&tagged=".$n."&site=stackoverflow&filter=!bCzph8k(qQRAAM&key=CPmVp9K8KKqDCa9ee5WGqg((");
	$no_ans = json_decode($no_ans,true);
	$x = (int)$no_ans['total'];
	$c = (int)$c;
	$r = (int)($x/$c)*100;
	//$r = $r*100;
	$this->insert($c,$n,$no_ans['total']);
	
	echo $c."->".$n."->".$no_ans['total']."->".$r."<br>";
	
	}
	mysqli_close($this->conn);
	}

	function refresh_data()
	{
		//connect to db
	$this->connectdb ();
	$trun ="truncate  Stack";  
	mysqli_query($this->conn,$trun);
	
	$this->get_db();
	}
};


$obj = new Stack();

$obj->get_db();
?>