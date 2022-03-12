<!DOCTYPE html>

<html>
<body>
<B><h1>WELCOME </h1>
<B><h1>----TO----    </h1>
<B><h1>SHIFTING  PARTNER         </h1><hr>
<B><h1>SHIFTER REGISTRATION</h1><hr></br>

<form action="../Control/Shifter_Reg_Process_chk.php" method="POST">
	Name:
	<input type="text" name="name">
	<br><br/>

	National Id:
	<input type="number" name="nid">
	<br><br>

	Age:
	<input type="number" name="age">
	<br><br>

    Gender : <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Others">Others <br>
	  
	<br>Email:
	<input type="email" name="email">
	<br><br>
	  
	Mobile:
	<input type="text" name="mobile">
	<br><br>

    Availability: <input type="radio" name="availability" value="Morning_Shift(7AM-12PM)">Morning Shift [8 AM - 12 PM]
    <input type="radio" name="availability" value="Afternoon_Shift(1PM-6PM)">Afternoon Shift [1 PM - 6 PM]
    <input type="radio" name="availability" value="Night_Shift(7PM-12AM)">Night Shift [7 PM - 12 AM] <br><br>

    Set an username:
    <input type="text" name="uname">
	<br><br>

    Set a Password:
    <input type="password" name="pass">
	<br><br>

	<input type="submit" name="Submit" value="Submit"><input type="Reset"><br><br>
    </br>OR<br>

    </br><a href="Shifter_Login.php"> LOGIN</a>(If already registered) </br></br> <a href="../View/Home.php"> GO BACK</a>
</form>
</body>
</html>