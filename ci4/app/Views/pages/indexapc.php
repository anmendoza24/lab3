<!DOCTYPE html>
<html>
<head>
  <title> My Portfolio </title>
  <script src="https://kit.fontawesome.com/50fba37455.js" crossorigin="anonymous"></script>
</head>
<body> 
<Style>

ul {
  list-style-type: none;
  margin: 40;
  padding: 0;
  overflow: hidden;
}

li {
  float: right;
}

li a {
  display: block;
  color:black;
  text-align: center;
  font-family: 'Fantasy', 'copperplate', cursive;
  padding: 14px 16px;
  text-decoration: none;  
}

li a:hover {
  background-color: rgb(149, 147, 147);
}

body {
  background-color: HEX #00000081;
}

h1, h2, h4 {
  color: black;
  text-align: center;
}

h1, h2, h3, h4 {
  font-family: 'Fantasy', 'copperplate', cursive;
}

#rcorner {
  display: block;
  margin:auto;
  border-radius: 25px;
  border: 2px solid #000000;
  padding: 50px; 
  width: 800px;
  height: 130px;  
}

.center-div {
   width: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
}

.fa-facebook, .fa-discord, .fa-instagram, .fa-github{
  color: black;
  font-size: 30px;
  padding: 5px;
  text-align: center;
}

p.round {
  border: 3px solid black;
  border-radius: 15px;
  padding: 20px;
}

</style>

<ul>
  <li><a href="resources.html" target="_blank">Resources</a> </li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a class="active" href="#home">Home</a></li>
</ul>

  <div style="text-align: center";>
    <img src="./img/Pogi.png" alt="Profile" style="width:200px; border-radius:30%;"/>
      </div>
 
<h1>Andrew's Portfolio</h1>
<div id="rcorner">
  <h2>About Me</h2>
    <p>I am the ultimate epitome of strength and athleticism, 
      with a chiseled physique honed through tireless hours of bodybuilding and football practice. 
      My passion for physical fitness extends beyond the gym, 
      as i'm also known to hit the clubs and let loose with my friends.
      With my impressive muscles and infectious energy, 
      i get attention wherever i go and inspire those around me to lead a healthier, 
      more active lifestyle.
    </p>
 </div>

  <div style="margin-top:20px"></div>

 <div id="rcorner">
  <h3>Email:</h3>
  <p >anmendoza@student.apc.edu.ph</p>
  <h3>Contact:</h3>
  <p>0999999999</p>
 </div>

 <div style="margin-top:20px"></div>

<div class="center-div">
  <h4>My Socials</h4>
  <a href="https://www.facebook.com/ANDREWTHENOTORIOUS/" target="facebook">
    <i class="fa-brands fa-facebook"></i>
  </a>

  <a href="https://www.instagram.com/admendoza_x/" target="instagram">
    <i class="fa-brands fa-instagram"></i>
  </a>
  <a href="https://github.com/anmendoza24" target="github">
    <i class="fa-brands fa-github"></i>
  </a>

  <a href="https://discord.com/users/SOUL#8218" target="discord">
    <i class="fa-brands fa-discord"></i>
  </a>

</div>
  
<script src="myscript.js"></script>
  <button onclick="window.print()">Print this page</button>

  <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$servername = "192.168.150.213";
  $username = "webprogmi211";
  $password = "j@zzyAngle30";
  $dbname = "webprogmi211";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO anmendoza_myguests (fname,email,website,comment,gender)
	VALUES ('$name','$email', '$website', '$comment', '$gender')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}
?>

</body>
</html>