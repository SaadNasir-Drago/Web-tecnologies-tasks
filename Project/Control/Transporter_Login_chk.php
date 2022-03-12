<?php

session_start();
if(isset($_POST["Submit"]))
{
    $data2 = file_get_contents("Transporter_data.json");
$mydata2 = json_decode($data2,true);
    foreach($mydata2 as $key=>$value ){
    if($_POST["uname"]==$value["username"] && $_POST["pass"]==$value["password"])
    {
        $_SESSION["uname"]=$_POST["uname"];
        $_SESSION["pass"]=$_POST["pass"];
        header("location: ../View/Transporter.php");
    }
    else{
        echo"username and password is not valid</br>";
         echo '<a href="../View/Transporter_Login.php">Try Again</a>';
    }
}
}
?>
