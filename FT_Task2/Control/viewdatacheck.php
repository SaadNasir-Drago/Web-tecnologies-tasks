<?php
include ("../Model/model.php");

$fname=$lname=$age=$salary=$address=$email=$pass="";

if (isset($_POST["submit"]))
{
         
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $address=$_POST["address"];
    $salary=$_POST["salary"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];


    if(empty($fname) || empty($lname) || empty($age) || empty($salary) || empty($address) || empty($email) || empty($pass))
    {
        echo "field cannot be empty";
    }
    else
    {
        $dbobj= new db();
        $conobj=$dbobj->opencon();
        $dbobj->InsertData($fname, $lname, $age, $salary, $address, $email, $pass, "person", $conobj);
        $dbobj->closecon($conobj);
      
    }
    
}

if(isset($_POST["viewdata"]))
{
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->fetchData("person", $conobj);

 
    if($mydata->num_rows>0)
    {   
        echo "<table>";
        echo "<tr><td> First Name</td> <td>Last Name</td> <td>Age</td> <td>Salary</td> <td>Address</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
           
            echo "<tr>";
            echo "<td>".$row["fname"]."</td>";
            echo "<td>".$row["lname"]."</td>";
            echo "<td>".$row["age"]."</td>";
            echo "<td>".$row["salary"]."</td>";  
            echo "<td>".$row["address"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}

if(isset($_POST["search"]))
{
        
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->searchData("person", $conobj, $_POST["searchbar"]);
    

    if($mydata->num_rows>0)
    {   
        echo "<form>";
            
        while($row=$mydata->fetch_assoc())
        {
            $fname=$row["fname"];
            $lname=$row["lname"];
            $age=$row["age"];
            $salary=$row["salary"];
            $address=$row["address"];
        }
       
        echo "</form>";
    }
    else
    {
        echo "no results found";
    }
    $mydb->closecon($conobj);
}

if(isset($_POST["update"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $address=$_POST["address"];
    $salary=$_POST["salary"];
   
     
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->updateData($fname, $lname, $age, $salary, $address, "person", $conobj);

$mydb->closecon($conobj);
}
?>