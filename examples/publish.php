<?php

require("../phpMQTT.php");

	
$mqtt = new phpMQTT("10.0.60.162", 1883, "1phpMQTT Pub Example"); //第三个参数是client name 需要具备唯一性的字符串

if ($mqtt->connect()) {
	date_default_timezone_set('PRC');
	$mqtt->publish("topicTest","Hello World! at ".date("r"),0); //在这设置topicName  例:topicTest
	$mqtt->close();
}

?>
