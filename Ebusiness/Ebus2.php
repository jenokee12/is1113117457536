<?php> 
// Starting the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title> Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <!--stylesheet-->
        <link rel="stylesheet" href="EBus.css" type="text/css"/>
    </head>
    
    <body>
        <nav>
          <ul>
              <li><a href="shophome.html">Homepage</a></li>
              <li><a href="aboutcloud.html">About Cloud</a></li>
              <li><a href="products.html">Products</a></li>
          </ul>
        </nav>
        
        <h5>Please enter your payment details below</h5>
        
            <br />
            
            <form method = "POST" action = "EBus3.php">
                
                <label for="user_name" class="lbl_name">
                    Username&nbsp;&#8758; &nbsp;
                    <input type="name" id="user_name" placeholder="Enter Your Name">
                </label>
                
                <br>
                
                <label for="user_email" class="lbl_email">
                    Email-Address&nbsp;&#8758; &nbsp;
                    <input type="email" id="user_email" placeholder="example@gmailcom">
                </label>
                
                <br>
                
                
                <label for="user_pin" class="lbl_pin">
                     PIN &nbsp;&#8758;&nbsp;
                     <input type="pin" id="user_pin" placeholder="Enter PIN" maxlength="4" pattern="/d{4}">
                     <br>
                     <div class="container">(Only enter numbers for the PIN)</div>
                </label>
                
                <br>
                <br>
                
                <button class="btn_proceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                </form>
                
                <br>
                
                <button class="btn_validate" id="btn_validate" onClick="validateName()">Validate</button>
                
                <a class ="btn_return" role="button" href="Ebus1.php">&#8882;&nbsp;&nbsp;Return</a>
    
    
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>
</html>