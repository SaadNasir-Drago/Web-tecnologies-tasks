<!DOCTYPE html>

<html>
<body>
<B><h4>WELCOME </h4>
<B><h4>TO    </h4>
<B><h1>SHIFTING  PARTNER         </h1><hr>
<B><h3>PLACE AN ORDER </h3><hr></br>

<form action="../Control/Order_Form_Process.php" method="POST">
	Your Name:
	<input type="text" name="name">
	<br><br/>
    Your Username:
    <input type="text" name="uname">
	<br><br>

	National Id:
	<input type="text" name="nid">
	<br><br>

    Detailed Address : <input type="text" name="address">
	<br><br>
Destination Address:<input type="text" name="daddress">
	<br><br>

    Mobile:
	<input type="text" name="mobile">
	<br><br>
	  
	
    Shifter Needed:
	<input type="text" name="person">
	<br><br>

    <br>Transport Needed:<input type="radio" name="car" value="Yes">Yes
    <input type="radio" name="car" value="No">No<br><br>

    When Do You Want To Shift: <input type="radio" name="time" value="Morning_Shift(7AM-12PM)">Morning Shift [8 AM - 12 PM]
 <input type="radio" name="time" value="Afternoon_Shift(1PM-6PM)">Afternoon Shift [1 PM - 6 PM]
 <input type="radio" name="time" value="Night_Shift(7PM-12AM)">Night Shift [7 PM - 12 AM] <br><br>

    

    Insert Password:
    <input type="password" name="pass">
	<br><br>

	<input type="submit" value="Submit"><input type="Reset"><br><br>
</br>OR<br>

</br>
</br></br> <a href="../View/Home.php"> GO BACK</a>
</form>
</body>
</html>