<html>
    <body>
<?php

//validation

session_start();


if(isset($_POST["Submit"])){
	$name=$_POST["name"];$nid=$_POST["nid"];$address=$_POST["address"];$email=$_POST["email"];$mobile=$_POST["mobile"];$uname=$_POST["uname"];	$pass=$_POST["pass"];
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
                if(empty($email))
                {
                    echo "Please enter valid email . . .";
                }
                else
                {
                    if(empty($mobile)|| strlen($mobile)<11)
                    {
                        echo "Please enter valid mobile number . . .";
                    }
                    else
                    {
                        if(empty($uname)|| strlen($uname)<5)
                        {
                            echo "Please set a valid username more than 5 letters . . .";
                        }
                        else
                        {
                            if(empty($pass)|| strlen($pass)<8)	{echo "Please enter 8 letters password . . .";}
                            else{include("../Control/Client_Reg_Process.php");}
                        }
                    }
                }
            }
        }
    }
   
   
}
echo"</br>";
echo '<a href="../View/Client_Reg_Form.php">Try Again</a>';

?>

</body>
</html>