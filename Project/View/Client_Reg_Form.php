<!DOCTYPE html>
<html>
<body>
<B><h1>WELCOME </h1>
<B><h1>TO    </h1>
<B><h1>SHIFTING  PARTNER         </h1><hr>
<B><h1>CLIENT REGISTRATION </h1><hr></br>

<form action="../Control/Client_Reg_Process_chk.php" method="POST">
	Name:
	<input type="text" name="name">
	<br><br/>
	National Id:
	<input type="text" name="nid">
	<br><br>

    Address : <input type="text" name="address">
	<br><br>
	  
	Email:
	<input type="email" name="email">
	<br><br>
	  
	Mobile:
	<input type="text" name="mobile">
	<br><br>

    Set an username:
    <input type="text" name="uname">
	<br><br>

    Set a Password:
    <input type="password" name="pass">
	<br><br>

	<input type="submit" name="Submit" value="Submit"><input type="Reset"><br><br>
</br>OR<br>

</br><a href="Client_Login.php"> LOGIN</a>(If already registered) </br></br> <a href="../View/Home.php"> GO BACK</a>
</form>
</body>
</html>