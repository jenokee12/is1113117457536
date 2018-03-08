<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <meta charset="UTF-8">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>

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
        <div class="container4">
        <div class="container2">
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
           
            <label for="salesforce" class="lblsalesforce">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="lblcloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="lblaws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="lblgmail">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            
            
            <label for="subtotal" class="lblsubtotal">
              Subtotal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="lbldiscount">
              Discount @ 5%: <input type="text" id="discount" name="discount" value="0.00" readonly/>
              
              <br>
              
            </label>
                
            <br>
            
            <label for="vat" class="lblvat">
              VAT @ 10%: &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="lbltotal">
              Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
            </label>
      
            <br>
            
            <div class="btnadd">   
              <button class="addbtnstyle" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
             
          <button class="btncal" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          
          <a class="btnclear" role="button" href="Ebus1.php">Clear Choice</a>
        
        
        
        </div>
        </div>
                  <footer>
                  <div class= "copyright">
                           <p>&copy; </p> 
                  </div>
            </footer>
        
    </body>
</html>