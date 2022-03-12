<?php
 $formdata = array(
	      'name'=> $_POST["name"],
	      'national_id'=> $_POST["nid"],
	      'address'=>$_POST["address"],
	      'destination'=> $_POST["daddress"],
          'transports_needed'=> $_POST["car"],
          'Shifting_time'=>$_POST["time"],
	      'person_needed'=> $_POST["person"],
          'mobile'=> $_POST["mobile"],
          'username'=>$_POST["uname"],
	      'password'=> $_POST["pass"]
	   );
       $existingdata = file_get_contents('Order_data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   if(file_put_contents("Order_data.json", $jsondata)) {
		echo "Order Placed Successfully </br>";
		$person=$_POST["person"];
		if(empty($person))
		{
			echo "Please enter how many shifter do you need . . .";
		}
		else
		{
			echo "Your shifter cost will be  </br>".$person*500;
		
		}

		$car=$_POST["car"];
		if(!empty($car))
		{
			echo "Your car cost will be 50 tk per km. ";
		}



		echo "<br>";
	        echo " </br></br>Thank you .<br></br> We will contact you as soon as possible.";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("Order_data.json");
	 $mydata = json_decode($data);

?>
<html><body>
    Do You Want to continue ? <a href="../View/Client_Login.php" >LOGIN</a> </br></br></br> OR  </br></br> <a href="../View/Home.php">GO BACk</a>
</body></html>