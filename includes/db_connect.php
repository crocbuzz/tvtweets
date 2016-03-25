<?php
	$username = "al089314";
	$password = "Funkychicken21*";
	
	$connection = new mysqli("localhost",$username,$password,"al089314");
    if($connection->error) {
        print ("Error connecting!  Message: ".$connection->error);
    } else {
        //print("Connection Successful! \n \r <br/>");
    }
    
?>