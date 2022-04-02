<?php
include ("../Model/model.php");

$error="";
if (isset($_POST["Submit"]))
{
    if(empty($fname) || empty($lname) || empty($age) || empty($salary) || empty($address))
    {
        $error="field cannot be empty";
    }
    else
    {
    $fname=$_POST["fname"];
    $lname=$POST["lname"];
    $age=$POST["age"];
    $address=$POST["address"];
    $salary=$POST["salary"];

        $dbobj= new db();
        $conobj=$dbobj->opencon();
        $dbobj->InsertData($fname, $lname, $age, $salary, $address, "person", $conobj);
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
       // echo "<form action='' method='post'>";
           echo "<tr><td> First Name</td> <td>Last Name</td> <td>Age</td> <td>Salary</td> <td>Address</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
           
            echo "<br>";
            echo "<input type='text' name='fname' value='".$row["fname"]."'>";
            echo "</br>";
            echo "<input type='text' name='lname' value='".$row["lname"]."'>";
            echo "<br>";
            echo "<input type='text' name='age' value='".$row["age"]."'>";
            echo "</br>";
            echo "<input type='text' name='salary' value='".$row["salary"]."'>";
            echo "<br>";
            echo "<input type='text' name='address' value='".$row["address"]."'>";
            echo "</br>";
            echo "<input type='submit' name='update' value='Update'>";
            echo "</tr>";
        }
        echo "</table>";
        //echo "</form>";
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
        $mydata=$mydb->searchData("person", $conobj,$_post["searchdata"]);
    

    if($mydata->num_rows>0)
    {   
        //echo "<table>";
        echo "<form action='' method='post'>";
         echo "<tr><td> First Name</td> <td>Last Name</td> <td>Age</td> <td>Salary</td> <td>Address</td></tr>";
            
        while($row=$mydata->fetch_assoc())
        {
            $fname=$row["fname"];
            $lname=$row["lname"];
            $age=$row["age"];
            $salary=$row["salary"];
            $address=$row["address"];
          /*  echo "<br>";
            echo "<input type='text' name='fname' value='".$row["fname"]."'>";
            echo "<br>";
            echo "<input type='text' name='lname' value='".$row["lname"]."'>";
            echo "<br>";
            echo "<input type='text' name='age' value='".$row["age"]."'>";
            echo "<br>";
            echo "<input type='text' name='salary' value='".$row["salary"]."'>";
            echo "<br>";
            echo "<input type='text' name='address' value='".$row["address"]."'>";
            echo "<br>";
            echo "<input type='submit' name='update' value='Update'>";
            echo "</tr>";*/
        }
       // echo "</table>";
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
    
    $mydb=new db();
    $conobj=$mydb->opencon();
    $mydata=$mydb->updateData("person", $conobj,$_post["updatedata"]);


if($mydata->num_rows>0)
{   
    //echo "<table>";
    echo "<form action='' method='post'>";
     echo "<tr><td> First Name</td> <td>Last Name</td> <td>Age</td> <td>Salary</td> <td>Address</td></tr>";
        
    while($row=$mydata->fetch_assoc())
    {
        $fname=$row["fname"];
        $lname=$row["lname"];
        $age=$row["age"];
        $salary=$row["salary"];
        $address=$row["address"];
      /*  echo "<br>";
        echo "<input type='text' name='fname' value='".$row["fname"]."'>";
        echo "<br>";
        echo "<input type='text' name='lname' value='".$row["lname"]."'>";
        echo "<br>";
        echo "<input type='text' name='age' value='".$row["age"]."'>";
        echo "<br>";
        echo "<input type='text' name='salary' value='".$row["salary"]."'>";
        echo "<br>";
        echo "<input type='text' name='address' value='".$row["address"]."'>";
        echo "<br>";
        echo "<input type='submit' name='update' value='Update'>";
        echo "</tr>";*/
    }
   // echo "</table>";
    echo "</form>";
}
else
{
    echo "no results found";
}
$mydb->closecon($conobj);
}
?>