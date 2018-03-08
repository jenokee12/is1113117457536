<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/hawcons/32/699966-icon-1-cloud-256.png">
    </head>
    <body>
        <header>
                <nav>
                        <a href="../HomePage.html">
                                <img class = "img2" src = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Status_iucn_LC_icon_blank.svg/2000px-Status_iucn_LC_icon_blank.svg.png" alt="homeicon">
                        </a>
                    <ul>
                        <li><a href="../Cloud/shophomepage.html">Shop Home</a></li>
                            <li><a href="../Cloud/aboutcloud.html">About Cloud</a></li>
                        <li><a href="../eBusiness/Ebus1.php">Purchase Products</a></li>
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
                    <footer>
                  <div class= "copyright">
                           <p>&copy; </p> 
                  </div>
            </footer>
        
    </body>
</html>