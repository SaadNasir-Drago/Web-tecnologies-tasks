<?php
include ("../Control/viewdatacheck.php")
?>

<html>
    <body>
        <form action="" method="post">

            First Name: <input type="text" name="fname">
            Last Name: <input type="text" name="lname">
            Age: <input type="number" name="age">
            Salary: <input type="text" name="salary">
            Address: <input type="text" name="address">

            <input type="submit" name="Submit">
        </form>

        <form action="" method="post">
        <input type="submit" name="viewdata" value="View Data">
        </form>
        
        <form action="" method="post">
        <input type="submit" name="search" value="Search">
        </form>

        <form action="" method="post">
        <input type="text" name="fname" value="<?php echo $fname;?>">
        <input type="text" name="lname" value="<?php echo $lname;?>">
        <input type="text" name="age" value="<?php echo $age;?>">
        <input type="text" name="salary" value="<?php echo $salary;?>">
        <input type="text" name="address" value="<?php echo $address;?>">
        <input type="text" name="update" value="Update">
    </form>

    </body>
</html>