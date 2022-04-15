<?php

class db{
function opencon()
{
$servername="localhost";
$username="root";
$password="";
$dbname="testdb";

$conn=new mysqli($servername ,$username, $password, $dbname);

if($conn->connect_error)
{
    echo "could not connect";
}
    return $conn;
}

function closecon($conn)
{
    $conn->close();
}

function InsertData($fname, $lname, $age, $salary, $address, $tablename, $conn)
{
    $sql="INSERT INTO $tablename (fname, lname, age, salary, address) VALUES ('$fname', '$lname', $age, $salary, '$address')";

if($conn->query($sql)===TRUE)
{
    echo "data inserted";
}
else
{
    echo "couldn't insert data".$conn->error;
}

}

function fetchData($tablename, $conn)
{
    $sqlstr="SELECT * FROM $tablename ";

    $results=$conn->query($sqlstr);
    return $results;
}

function searchData($tablename, $conn, $fname)
{
    $sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";

    $results=$conn->query($sqlstr);
    return $results;
}

function updateData($fname, $lname, $age, $salary, $address, $tablename, $conn)
{

    $sql="UPDATE $tablename SET fname='$fname', lname='$lname', age=$age, salary=$salary, address='$address' WHERE fname='$fname'";

if($conn->query($sql)===TRUE)
{
    echo "data updated";
}
else
{
    echo "couldn't update data".$conn->error;
}    
}

}
?>