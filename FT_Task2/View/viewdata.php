<?php
include ("../Control/viewdatacheck.php")
?>

<html>
    <body onload='document.form1.email.focus()'>
    <br><br>
        <form name= "form1" action="" method="post" onsubmit="return !!(validateform() & ValidateEmail(document.form1.email))" >
        <p id="message1"></p>
            First Name: <input type="text" name="fname" id="fname" ><br>
            <p id="message2"></p>
            Last Name: <input type="text" name="lname" id="lname"><br>
            <p id="message3"></p>
            Age: <input type="number" name="age" id="age"><br><br>
            Salary: <input type="text" name="salary" id="salary"><br><br>
            Address: <input type="text" name="address" id="address"><br> <br>  

            Email: <input type="text" name="email" id="email"><br><br>
            
            Password: <input type="text" name="pass" id="pass"><br><br>
            <p id="message4"></p>
            <input type="submit" name="submit" value="Submit" >
        </form>

        <br>
        <form action="" method="post">
        <input type="submit" name="viewdata" value="View Data">
        </form>
    <!--    
        <br>
        <form action="" method="post">
        <input type="text" name="searchbar">
        <input type="submit" name="search" value="Search">
        </form>

        <br>
        <form action="" method="post">
        <input type="text" name="fname" value="<?php echo $fname;?>">
        <input type="text" name="lname" value="<?php echo $lname;?>">
        <input type="text" name="age" value="<?php echo $age;?>">
        <input type="text" name="salary" value="<?php echo $salary;?>">
        <input type="text" name="address" value="<?php echo $address;?>">
        <input type="submit" name="update" value="Update">
        </form>
-->
<script src="../js/myjs.js"></script>
    </body>
</html>