<html>
    <body>
<?php

//validation

session_start();

if(isset($_POST["Submit"])){
	$name=$_POST["name"];$nid=$_POST["nid"];$address=$_POST["address"];$mobile=$_POST["mobile"];$model=$_POST["model"];$tnumber=$_POST["tnumber"];$dl=$_POST["dl"];$uname=$_POST["uname"];$pass=$_POST["pass"];
	if(empty($name) )
	{
		echo "Please enter Full name . . .";
	}
	else
	{
        if(empty($nid) || strlen($nid)<10)
        {
            echo "Please enter valid national id . . .";
        }	
        else
        {
            if(empty($address))
            {
                echo "Please enter your address . . .";
            }	
            else
            {
                if(!isset($_POST["availability"]))
                {
                    echo "Please select when you are available. . . ";
                }
                else
                {
                    if(empty($mobile)|| strlen($mobile)<11)
                    {
                        echo "Please enter valid mobile number . . .";
                    }
                    else
                    {
                        if(empty($model))
                        {
                            echo "Please enter car model . . .";
                        }
                        else
                        {
                            if(empty($tnumber)) 
                            { 
                                echo "Please enter car number . . .";
                            }
                            else
                            { 
                                if(!isset($_POST["experience"]))
                                {
                                    echo "Please select your experience ";
                                }
                                else
                                { 
                                    if(empty($uname)|| strlen($uname)<5)
                                    {
                                        echo "Please set a valid username more than 5 letters . . .";
                                    }
                                    else
                                    {
                                        if(empty($pass)|| strlen($pass)<8)
                                        {
                                            echo "Please enter 8 letters password . . .";
                                        }
                                        else
                                        {include("../Control/Transporter_Reg_Process.php");}
                                    }    
                                }    
                            }    
                        }
                    }
                }
            }
        }
    }
   
   
}
echo"</br>";
echo '<a href="../View/Transporter_Reg_Form.php">Try Again</a>';

?>

</body>
</html>