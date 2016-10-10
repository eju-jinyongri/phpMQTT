<?php

require("../phpMQTT.php");

	
$mqtt = new phpMQTT("example.com", 1883, "phpMQTT Pub Example"); //第三个参数是client name 需要具备唯一性的字符串

if ($mqtt->connect()) {
	$mqtt->publish("topicName","Hello World! at ".date("r"),0); //在这设置topicName
	$mqtt->close();
}

?>
