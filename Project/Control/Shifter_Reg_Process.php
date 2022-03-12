<?php
 $formdata = array(
	      'name'=> $_POST["name"],
		  'nid'=> $_POST["nid"],
	      'age'=> $_POST["age"],
	      'email'=>$_POST["email"],
	      'mobile'=> $_POST["mobile"],
          'gender'=> $_POST["gender"],
	      'availability'=>$_POST["availability"],
          'username'=>$_POST["uname"],
	      'password'=> $_POST["pass"]
	   );
       $existingdata = file_get_contents('Shifter_data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   if(file_put_contents("Shifter_data.json", $jsondata)) {
	        echo "WELCOME TO SHIFTING PARTNER </br></br>Successfully Registered as a SHIFTER <br></br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("Shifter_data.json");
	 $mydata = json_decode($data);
?>
<html><body>
    Do You Want to continue ? <a href="../View/Shifter_Login.php" >LOGIN</a> </br></br></br> OR  </br></br> <a href="../View/Home.php">GO BACk</a>
</body></html>