<?php
session_start();
if(isset($_POST["Submit"]))
{
    $data2 = file_get_contents("Shifter_data.json");
$mydata2 = json_decode($data2,true);
    foreach($mydata2 as $key=>$value ){
    if($_POST["uname"]==$value["username"] && $_POST["pass"]==$value["password"])
    {
        $_SESSION["uname"]=$_POST["uname"];
        $_SESSION["pass"]=$_POST["pass"];
        header("location: ../View/Shifter.php");
    }
    else{
        echo"username and password is not valid</br>";
        echo '<a href="../View/Shifter_Login.php">Try Again</a>';
    }
}
}
?>
