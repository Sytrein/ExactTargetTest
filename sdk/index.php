<?php

require('ET_Client.php')
$myclient = new ET_Client();


//method

$authStub = $myclient
$objType = "Subsciber"
$props = array("EmailAddress" => "subscriber1@test.acceleration.biz", "List" => array("ID"=>2034505))
$response = new ET_Post($authStub, $objType, $props)

print_r($response)
?>