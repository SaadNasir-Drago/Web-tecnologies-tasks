<?php
include "../control/results.php";
?>
<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1><hr>
<table>
<form action="" method="post" >
 First Name: <input type="text" name="fname"><br><br>
 Last Name:<input type="text" name="lname"><br><br>
 Age: <input type="number" name="age"><br>
 <br>
 Designation : <input type="radio" name="Designation" value="Junior Programmer">Junior Programmer
 <input type="radio" name="Designation" value="Senior Programmer">Senior Programmer
 <input type="radio" name="Designation" value="Project Leader">Project Leader <br><br>
 Preferred Language : <input type="checkbox" name="c1" value="JAVA">JAVA
 <input type="checkbox" name="c2" value="PHP">PHP
 <input type="checkbox" name="c3" value="PHP">C++ <br><br>
 Email:<input type="email" name="email"> <br><br>
 Password:<input type="password" name="password"><br><br>

 <input type="submit" name="Submit">
            <input type="Reset"><br>

</form>


</table>
</body>
</html>
