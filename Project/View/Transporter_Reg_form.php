<!DOCTYPE html>

<html>
<body>
<B><h4>WELCOME </h4>
<B><h4>TO    </h4>
<B><h1>SHIFTING  PARTNER         </h1><hr>
<B><h3>TRANSPORTER REGISTRATION </h3><hr></br>

<form action="../Control/Transporter_Reg_Process_chk.php" method="POST">
	Name:
	<input type="text" name="name">
	<br><br/>
	National Id:
	<input type="text" name="nid">
	<br><br>

    Address : <input type="text" name="address">
	<br><br>

	Availability: <input type="radio" name="availability" value="Morning_Shift(7AM-12PM)">Morning Shift [8 AM - 12 PM]
    <input type="radio" name="availability" value="Afternoon_Shift(1PM-6PM)">Afternoon Shift [1 PM - 6 PM]
    <input type="radio" name="availability" value="Night_Shift(7PM-12AM)">Night Shift [7 PM - 12 AM] <br><br>

    Mobile:
	<input type="text" name="mobile">
	<br><br>
	  
	Transports Model:
	<input type="text" name="model">
	<br><br>

    Transports Number:
	<input type="text" name="tnumber">
	<br><br>


    Experience: <input type="radio" name="experience" value="2years">Less than 2 Years
    <input type="radio" name="experience" value="3-5years">3-5 Years
    <input type="radio" name="experience" value=">5years">More than 5 years<br><br>

	Upload Your Driving License paper <input type="file" name="dl"><br><br>


    Set an username:
    <input type="text" name="uname">
	<br><br>

    Set a Password:
    <input type="password" name="pass">
	<br><br>

	<input type="submit" name="Submit" value="Submit"><input type="Reset"><br><br>
    </br>OR<br>
    </br><a href="Transporter_Login.php"> LOGIN</a>(If already registered) </br></br> <a href="../View/Home.php"> GO BACK</a>
</form>
</body>
</html>