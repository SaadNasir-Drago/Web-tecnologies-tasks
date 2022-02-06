<html>
<head>
<h2>Registration Form</h2>
    <p>_____________________________________________________________________________________________________________________________________________________________________________________________</p>
</head>
<body>

    <form action="/action_page.php">
        <label for="fname">First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" id="fname" name="fname"><br><br>

        <label for="lname">Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="age">Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" id="age" number="age"><br><br>

        <label for="designation">Designation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="radio" id="jp" name="designation" value="jp">
  <label for="jp">junior programmer</label>

  <input type="radio" id="sp" name="designation" value="sp">
  <label for="sp">senior programmer</label>

  <input type="radio" id="pl" name="designation" value="pl">
  <label for="pl">project lead</label><br><br>

  <label for="preferred language">Preferred Language&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="checkbox" id="java" name="java" value="java">
  <label for="java">JAVA</label>

  <input type="checkbox" id="php" name="php" value="php">
  <label for="php"> PHP</label>

  <input type="checkbox" id="c++" name="c++" value="c++">
  <label for="c++"> C++ </label><br><br>

  <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="password">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" id="password" name="password"><br><br>

        <label for="myfile">Please choose a file</label>
        <input type="file" id="myfile" name="myfile"><br><br>

  
  <input type="submit">
  <input type="reset">
      </form>

</body>
</html>