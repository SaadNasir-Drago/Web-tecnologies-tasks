
<?php
session_start();
if(isset($_POST["Submit"]))
{
$Admindata = file_get_contents("Admin_data.json");
$Addata = json_decode($Admindata,true);
foreach($Addata as $key=>$value ){
    if($_POST["uname"]==$value["username"] && $_POST["pass"]==$value["password"])
    {
        $_SESSION["uname"]=$_POST["uname"];
        $_SESSION["pass"]=$_POST["pass"];
        header("location: ../View/Admin.php");
    }
    else{
        echo"username and password is not valid</br>";
        echo '<a href="../View/Admin_Login.php">Try Again</a>';

    }
}
}
?>
