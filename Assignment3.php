<?php

include 'person.php';
include 'address.php';
	
$My_info = ["firstName"=>"Ahmed", "lastName"=>"Chaudhry", "age"=>"23", "street1"=>"250 jaycee ct", "street2"=>"apt202", "city"=>"Mankato", "state"=>"MN", "zipCode"=>"56001"];
	
    $name    = new Person;
    $address = new Address;
	
	$name->firstName  =  $My_info["firstName"];
	$name->lastName   =  $My_info["lastName"];
	$name->age        =  $My_info["age"];
	
	$address->street1 =  $My_info["street1"];
	$address->street2 =  $My_info["street2"];
	$address->city    =  $My_info["city"];
	$address->state   =  $My_info["state"];
	$address->zipCode =  $My_info["zipCode"];
	
foreach ($My_info as $i) { echo $i . "</br>"; }

?>

