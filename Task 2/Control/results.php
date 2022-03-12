<?php
$validateemail="";
$fname=$lname=$email="";



if(isset($_POST["Submit"]))
{
$fname=$_POST["fname"];
if(empty($fname) || strlen($fname)<4 )
{
    echo "Please enter a valid name . . .";
}
else
{
   echo  "Your first name is ".$fname;
}
echo "<br>";


$lname=$_POST["lname"];
if(empty($lname) || strlen($lname)<4)
{
    echo "Please enter a valid name . . .";
}
else
{
   echo "Your last name is ".$lname;
}

echo "<br>";


$age=$_POST["age"];
if(empty($age))
{
    echo "Please enter your age . . .";
}
else
{
    echo "Your age is ".$age;
}
echo "<br>";



if(isset($_POST["Designation"]))
{
    echo "You are a ".$_POST["Designation"];
}
else
{
    echo "Please select a radio button . . .";
}
echo "<br>";


if(!isset($_POST["c1"]) && !isset($_POST["c2"]) && !isset($_POST["c3"]))
{
    echo "Please select a checkbox . . .";
}
else
{
    if(isset($_POST["c1"])){echo "Your preferred language is ".$_POST["c1"];}
    else if(isset($_POST["c2"])){echo "Your preferred language is ".$_POST["c2"];}
    else {echo "Your preferred language is C++";}
}
echo "<br>";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$email=$_REQUEST["email"];
if(empty($email) || preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z](2,6)$/ix",$email))
{
   echo "You must enter a valid email . . .";
}
else
{
    echo "Your email is ".$email;
}
}
echo "<br>";




$password=$_POST["password"];
if(empty($password) || strlen($password)<8)
{
    echo "Please enter valid password . . .";
}
else
{
    echo "Your password is ".$password;
}
echo "<br>";
}


?>