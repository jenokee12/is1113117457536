<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <meta charset="UTF-8">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_cals.js"></script>

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
    </body>
</html>