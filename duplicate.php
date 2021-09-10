<?php include 'header.php';?>


<!--checkout shipping information form-->
<div class="container mt-5 mb-5  infospace backgroundwhite">

  <form >
      <h2 class="mb-5">Shipping Information</h2>
      <div class="form-row">
          
          <div class="form-group col-md-6">
            <label for="inputEmail4">Contact Name</label>
            <input type="text" class="form-control border border-dark" id="inputText" placeholder="Name">
          </div>
          <div class="form-group col-md-6">
          
              <label for="inputEmail4">Contact Number</label>
            <input type="password" class="form-control border border-dark" id="inputPassword4" placeholder="+94">
          </div>
        </div>
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Address line 1</label>
            <input type="email" class="form-control border border-dark" id="inputEmail4" placeholder="Street">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Address line 2</label>
            <input type="password" class="form-control border border-dark" id="inputPassword4" placeholder="Apartment,Unit,ETC">
          </div>
        </div>
      
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputCity">Country</label>
          <input type="text" class="form-control border border-dark" id="inputCity" placeholder="USA">
        </div>
        <div class="form-group col-md-3">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control border border-dark" placeholder="missuri State">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="inputCity">City</label>
          <input type="text" class="form-control border border-dark" id="inputCity" placeholder="New York">
        </div>
        <div class="form-group col-md-3">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control border border-dark" id="inputZip" placeholder="Zip Code">
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input border border-dark" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
              Set as default
          </label>
        </div>
      </div>
      <button type="submit" class="btn  my-2 my-sm-0 signinbutton shadow-lg text-white btn-dark   ">Confirm</button>
    </form>
  
  </div>
  <!-- end checkout shipping information form-->
  
  
  <!--checkout payments information form-->
  <div class="container mt-5 mb-5 infospace backgroundwhite">
  
      <form >
          <h2 class="mb-5">Payment Methods</h2>
       
              
              <div class="form-check paymentcards">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <img src="images/Visacardmini.jpg" class="paypalimg1">
                  
                  <label class="form-check-label" for="exampleRadios2">
                      Add a credit or debit card
                  </label>
                 
                </div>
                <div class="form-check paymentcards">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <img src="images/paypalminicubeset.gif" class="paypalimg2">
                 
                 
                </div>
                
               
          
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Card Number</label>
                <input type="email" class="form-control border border-dark" id="inputEmail4" placeholder="0000.0000.0000.0000">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Card Holder</label>
                <input type="password" class="form-control border border-dark" id="inputPassword4" placeholder="Name Here">
              </div>
            </div>
          
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">CVV</label>
              <input type="text" class="form-control border border-dark" id="inputCity" placeholder="000">
            </div>
            <div class="form-group col-md-3">
             
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">Expires</label>
              <input type="text" class="form-control border border-dark" id="inputCity" placeholder="MM/YY">
            </div>
            <div class="form-group col-md-3">
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input border border-dark" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                  Save this card
              </label>
            </div>
          </div>
          <button type="submit" class="btn  my-2 my-sm-0 signinbutton shadow-lg text-white btn-dark   ">Confirm</button>
        </form>
      
      </div>
  <!--end checkout payments information form-->
  
  
  
  <!--Order review information form-->
  <div class="container mt-5 mb-5  infospace backgroundwhite">
      <h2 >Order Review</h2>
      <p class="mb-3 orderreviewclr seller">Seller: yanhui Official Store</p>
  
      <div class="media">
          
          <img src="menshoes/5throw1st.jpg" class="mr-3 order-reviewimg imgnone" alt="...">
          <div class="media-body">
           
            <p class="smallthefont imgcaptionnone">Vivamus efficitur nisl purus, vel malesuada purus blandit in.Mauris semper cons
            ectetur sem et fermentum. Aliquam a eros justo.</p>
            <div class="row mt-3  orderreviewclr shoesize34line">
                <div class="col-lg-3">
                    <p>Shoe Size 34</p>
                </div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                </svg>
                  1 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
              </div>
            </div>
            <p class="mt-5 mb-5 shippingline1"><small class="font-weight-bold">Shipping: US $42.51</small> <small>via AliExpress Premium ShippingEstimated Delivery Time:7-15 Days</small></p>
            
           
  
  
          </div>
        </div>
        <hr class="hr1">
        <div class="row smallsizevieworder">
          
        <p class="mt-5 mb-5 shippingline2"><small class="font-weight-bold">Shipping: US $42.51</small> <small>via AliExpress Premium ShippingEstimated Delivery Time:7-15 Days</small></p>
     
        </div>
        <hr class="hr2">
  <div class=" row alwaysright">
      <!--ghjm,--
      <div class="col-lg-3 col--md-3 col-sm-3"></div>
      <div class="col-lg-3 col-md-3 col-sm-3"></div>
      <div class="col-lg-3 col-md-3 col-sm-3 sub">
          <p><small class="text-muted">Subtotal   </small>    </p>         
          <p><small class="text-muted">Shipping     </small>  </p>        
          <p><small class="text-muted">Store Coupons</small></p>
          <p><small class="text-muted">Total  </small>    </p>                
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 sub">
          <p><small class="text-muted">US $7.99</small></p>
          <p><small class="text-muted">US $42.51</small></p>
          <p class="text-muted"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
            </svg></p>
            <p><small class="text-muted">US $50.50</small></p>
  
      </div>
       <!--ghjm,-->
       <table class="table table-borderless text-muted">
        
          <tbody>
            <tr>
              
              <td>Subtotal </td>
              <td>US $7.99</td>
           
            </tr>
            <tr>
            
              <td>Shipping  </td>
              <td>US $42.51</td>
           
            </tr>
            <tr>
            
              <td>Store Coupons  </td>
              <td><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg></td>
           
            </tr>
            <tr>
            
              <td>Total </td>
              <td>US $50.50</td>
           
            </tr>
           
          </tbody>
        </table>
      </div>
      </div>
      <!-- end checkout shipping information form-->
      

      <?php include 'footer.php';?>