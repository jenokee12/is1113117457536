<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel="stylesheet" href="EBus.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">


    </head>
    
    <body>
      <nav>
      <ul>
          <li><a href="shophome.html">Homepage</a></li>
          <li><a href="aboutcloud.html">About Cloud</a></li>
          <li><a href="products.html">Products</a></li>
      </ul>
  </nav>

      <h4>Select a Product</h4>
      
      <br/>
      
      <form method="POST" action="Ebus2.php" id="form">
        
        <label for="salesforce" class="label1">
          <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
          SalesForce @ $100
        </label>
        
        <br/>
        
        <label for="cloud9" class="label2">
          <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
          Cloud9 @ $200
        </label>
        
        <br/>
        
        <label for="aws" class="label3">
          <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
          AWS @ $300
        </label>
        
        <br/>
        
        <label for="gmail" class="label4">
          <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
          Gmail @ $400
        </label>
        
        <label for="subtotal" class="label5">
          Sub Total: &nbsp;
          <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        
        <label for="discount" class="label6">
           Discount @ 5% &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
        <br>
        <br>
        (- Discount)
        </label>
        
        <label for="vat" class="label7">
              VAT @ 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
        
        <br/>
                
        <label for="total" class="label8">
          Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="total" name="total" value="0.00" readonly/>
        </label>
        
        <p>(- Discount + VAT)</p>
  
        <br>
        
        <div class="add_btn">   
          <button class="add_btn" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        </div>  
          
        
      <button class="cal_btn" onClick="calcSub()">Calculate Cost</button>
         
      <br>
      <a class="clear_btn" role="button" href="Ebus1.php">Clear Choice</a>
      </form>
    </body>
</html>




