<?php

	  $name=$_POST['name'];
	  $email=$_POST['email'];
	  $mob=$_POST['mob'];	
	  
	  $addresses = ['nansei.volunteers@gmail.com'];
	  $subject ='Nansei - 2017';
	  $msg ="
			 Name	: $name \n
			 Mobile : $mob\n				 	
			 E-mail	: $email\n ";	  

	  foreach($addresses as $address){
	  $mail=mail($address, "Subject: $subject", $msg );
 }

	  header("location:thankyou.html"); 	  
	   
?>

