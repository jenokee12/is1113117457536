<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
    </head>
    <body>
        <header>
           <nav>
              <ul>
                  <li><a href="shophome.html">Homepage</a></li>
                  <li><a href="#">About Cloud</a></li>
                  <li><a href="products.html">Products</a>
              </ul>
            </nav>
        
        </header>
        
        <div class="container6">
        <h4 class="ebus3head">Purchase Receipt</h4>
        
        <?php  
        // Set session variables
          $_SESSION["username"] = $_POST["username"];
          $_SESSION["useremail"] = $_POST["useremail"];
        ?>
        
        <p class="ebus3name">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Name: " . $_SESSION["username"] . ".";
            ?>
        </p>
        
        <p class="ebus3email">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Email: " . $_SESSION["useremail"] . ".";
            ?>
        </p>
        
        <p class="ebus3total">
            <?php
            // Echo session variables that were set on the previous pages
            echo "Total:&euro;" . $_SESSION["total"] . ".";
            ?>
        </p>
        </div>
    </body>
</html>