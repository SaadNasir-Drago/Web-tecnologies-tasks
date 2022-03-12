<?php
   	
	   $formdata = array(
	      'name'=> $_POST["name"],
	      'national_id'=> $_POST["nid"],
	      'address'=>$_POST["address"],
	      'mobile'=> $_POST["mobile"],
          'email'=> $_POST["email"],
          'username'=>$_POST["uname"],
	      'password'=> $_POST["pass"]
	   );
       $existingdata = file_get_contents('Client_data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
		if(file_put_contents("Client_data.json", $jsondata)) {
			echo "WELCOME TO SHIFTING PARTNER </br></br>Successfully Registered as a CLIENT <br></br>";
	    }
	   else 
	        echo "no data saved</br>";
     $data = file_get_contents("Client_data.json");
	 $mydata = json_decode($data);


?>
<html><body>
    Do You Want to continue ? <a href="../View/Client_Login.php" >LOGIN</a> </br></br></br> OR  </br></br> <a href="../View/Home.php">GO BACk</a>
</body></html>