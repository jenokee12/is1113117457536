<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <meta charset="UTF-8">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="ebus2_validator.js"></script>
        
        <link rel="stylesheet" href="Ebus.css" type="text/css"/>
        
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
        <div class="container5">
        <h4 class="heading2">Please enter your payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
           <div class="validation">
               <label for="username" class="lblname">
                Name:
                <input type="name" id="username" name="username" placeholder="Enter Your Name">
            </label>
            
            <br>
            
            <label for="useremail" class="lblemail">
                Email:
                <input type="email" id="useremail" name="useremail" placeholder="example@gmail.com">
            </label>
            
            <br>

            <label for="userpin" class="lblpin">
                Pin:&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="pin" id="userpin" name="userpin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
                (Numeric Characters only for PIN)
            </label>
            
            <br>
            <br>
            
            <button class="btnproceed" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br>
        
        <button class="btnvalidate" onClick="validateName()">Validate</button>
    </div> 
    </div>
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
          
        ?>
                    <footer>
                  <div class= "copyright">
                           <p>&copy; </p> 
                  </div>
            </footer>
        
    </body>
</html>