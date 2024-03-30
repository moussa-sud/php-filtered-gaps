<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="os.php" method="post">
    Visa 
    <input type="radio" name="credit_card" value="visa" id=""><br>
    Mastercard 
    <input type="radio" name="credit_card" value="Mastercard" id=""> <br>
    American Express
    <input type="radio" name="credit_card" value="AmericanExpress" id=""><br>

    <input type="submit" name="confirm" value="confirm"><br>


</form>
    
</body>
</html>


<?php

 if (isset($_POST["confirm"]))  { // Check if the form is submitted

    if(isset($_POST["confirm"]))  // Check if credit card type is selected

        $credit_card = $_POST["credit_card"]; 

         echo $credit_card ;

 } else {

    echo "Please select a credit card.";  // Display a message if no credit card type is selected
}

?>