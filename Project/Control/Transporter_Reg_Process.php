<?php
  $formdata = array(
	      'name'=> $_POST["name"],
	      'national_id'=> $_POST["nid"],
	      'address'=>$_POST["address"],
		  'availability'=> $_POST["availability"],
	      'mobile'=> $_POST["mobile"],
          'transports_model'=> $_POST["model"],
          'transports_number'=>$_POST["tnumber"],
          'experience'=> $_POST["experience"],
		  'driving_license'=> $_POST["dl"],
          'username'=>$_POST["uname"],
	      'password'=> $_POST["pass"]
	   );
       $existingdata = file_get_contents('Transporter_data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   if(file_put_contents("Transporter_data.json", $jsondata)) {
	        echo "WELCOME TO SHIFTING PARTNER </br></br>Successfully Registered as a TRANSPORTER <br></br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("Transporter_data.json");
	 $mydata = json_decode($data);
?>
<html><body>
    Do You Want to continue ? <a href="../View/Transporter_Login.php" >LOGIN</a> </br></br></br> OR  </br></br> <a href="../View/Home.php">GO BACk</a>
</body></html>