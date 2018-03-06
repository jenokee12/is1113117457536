<?php
// start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        
        <!--Recquired meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Receipt</title>
        
        <!--Stylesheets -->
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
    </head>
    
    <body>
        <!-- Navigation bar -->
        <header>
           <nav>
              <ul>
                  <li><a href="shophome.html">Homepage</a></li>
                  <li><a href="aboutcloud.html">About Cloud</a></li>
                  <li><a href="products.html">Products</a></li>
              </ul>
          </nav>
        </header>
        
        <!-- Adding content to the page -->
        <div class="ebus3">
            <h1>Receipt</h1>
            
            <?php  
            // Set session variables
              $_SESSION["user_name"] = $_POST["user_name"];
              $_SESSION["user_email"] = $_POST["user_email"];
            ?>
            
            <p class="ebus3_name">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Username: " . $_SESSION["user_name"] . ".";
                ?>
            </p>
            
            <p class="ebus3_email">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Email: " . $_SESSION["user_email"] . ".";
                ?>
            </p>
            
            <p class="ebus3_total">
                <?php
                // Echo session variables that were set on the previous pages
                echo "Total: " . $_SESSION["total"] . ".";
                ?>
            </p>
            
            <br>
            
            <h3>Thank you for your purchase!</h3>
            
            <br>
            
            <p class="ebus3_message">
                Our Software team will be in contact with you shortly to assist you in setting up your software package.
                
                <br>
                <br>
                
                In the meantime, you should have received an email from us detailing the next steps for you to take on our journey 
                in the cloud computing world! Why not take a look? If you have not received an email then contact us on the number below.
            </p>
            
            <a class="home_btn" role="button" href="shophome.html">Home</a>
        </div>
        
        <!-- Displaying copyright information -->
        <footer class="ebus_copyright">
            <p>
                <small>&copy; Copyright 2006-2018 Weightless Ltd. All rights reserved. Various trademarks held by their respective owners.</small>
                <br>
                <small>Weightless.com Limited, 29 Fake Street, Cork, Co. Cork, Ireland, A11 B22. General Enquiries: +353 1234567 | Fax: +353 1234567 | Sales: + 353 86 1234567</small>
            </p>
        </footer>
    </body>
</html>