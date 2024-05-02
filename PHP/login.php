<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration or Sign Up form in HTML CSS | CodingLab</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
      <h2>Login</h2>
      <form action="login.php" method="post">
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" />
        </div>
        <div class="input-box">
           <input type="password" placeholder="Enter your password" name= "passwd" />
        </div>
        <div class="policy">
          <input type="checkbox" />
          <h3>I accept all terms & condition</h3>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Login" />
        </div>
      </form>
    </div>
  </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['passwd'];

// SQL query to insert data into user table
$sql = "INSERT INTO user (email, passwd) VALUES ('$email', '$password')";
$conn->query($sql);


$conn->close();
?>
