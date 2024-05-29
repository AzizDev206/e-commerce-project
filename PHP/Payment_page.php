<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/payment.css" >
    <title>Document</title>
</head>
<body >
  
    <h1 class= "title" > Confirm order and pay</h1>
     <p>please make the payment, after that you can enjoy all the features and benefits</p>

    <form action="Payment_page.php" class="form row" method="post">
        <input type="text" name="card_num" id="name_card" class="form-control row" placeholder="card_number"><br>
        <input type="text" name="expiry" id="" class="form-control row" placeholder="Expiry">
        <input type="text" name="cvv" id="" class="form-control row" placeholder="CVV">
        <input type="text" name="street_add" id="" class="form-control row" placeholder="Street Address"><br>
        <input type="text" name="city" id="" class="form-control row" placeholder="City">
        <input type="text" name="state" id="" class="form-control row"  placeholder="State/Province"><br>
        <input type="text" name="zip" id="" class="form-control row" placeholder="Zip code">
        <button class="btn btn-success " type="submit"> PAY</button>
    </form>
    <div class="container">
        <h5>You have to pay</h5>
        <h2 >$549 <span>.99</span></h2>
        <h5>Enjoy all the features and perk after you complete the payment</h5>
        <h4>Know all the features</h4>
        <div class="cont">
            <h6>
                100% Guaranteed support and update for the next 5 years.</h6>
        </div>
    </div>
        
    </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pay_cart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$card_num = isset($_POST['card_num']) ? $_POST['card_num'] : '';
$expiry = isset($_POST['expiry']) ? $_POST['expiry'] : '';
$cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';
$street_add = isset($_POST['street_add']) ? $_POST['street_add'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';
$state = isset($_POST['state']) ? $_POST['state'] : '';
$zip = isset($_POST['zip']) ? $_POST['zip'] : '';



// SQL query to insert data into pay table
$sql = "INSERT INTO pay (card_num, exipiry, cvv, street_address, city, `_state`, `zip code`) 
        VALUES ('$card_num', '$expiry', '$cvv', '$street_add', '$city', '$state', '$zip')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
