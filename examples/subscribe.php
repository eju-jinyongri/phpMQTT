<?php
//消费者例子
require("../phpMQTT.php");

	
$mqtt = new phpMQTT("example.com", 1883, "phpMQTT Sub Example"); //第三个参数是client name 不能和其他client重复

if(!$mqtt->connect()){
	exit(1);
}

$topics['topicName'] = array("qos"=>0, "function"=>"procmsg"); //$topics的键是 topic name 生产者和消费者要一一对应
$mqtt->subscribe($topics,0);

while($mqtt->proc()){
		
}


$mqtt->close();

function procmsg($topic,$msg){
		echo "Msg Recieved: ".date("r")."\nTopic:{$topic}\n$msg\n";
}
	


?>
