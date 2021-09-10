<?php include 'header.php';?>

   <!------------------------------CART---------------------------------------------------->
        <div class="container-fluid mb-5" >
        <div class="row" >
        <div class="col-md-10 col-11 mx-auto">
        <div class="row mt-5 gx-3">
        <!-- left side div -->
        <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow " >
        <div class="card p-4 border-0">
        <h2 class="py-4 font-weight-bold">Cart (2 items)</h2>
        <div class="row">
        <!-- cart images div -->
        <div class="col-md-5 col-11 mx-auto  d-flex justify-content-center align-items-center  product_img">
        <img src="ladies/Prodigy-Women's-Training-Shoes.jpg" class="img-fluid cartimg" alt="cart img">
        </div>
        

<!-- cart product details -->
<div class="col-md-7 col-11 mx-auto px-4 mt-2">
    <div class="row">
    <!-- product name  -->
    <div class="col-lg-7  card-title">
        <h4 class="mb-4 product_name">Pink marbual ladies shoes</h4>
        <p class="mb-2">Quantity : 2</p>
        <p class="mb-2">Color: Black</p>
        <p class="mb-3">Size : 36.5</p>
    </div>
    <!-- quantity inc dec -->
    <div class="col-lg-5  plusminusbtn">
    <ul class="pagination justify-content-end set_quantity">
    <li class="page-item">
    <button class="page-link rounded-circle" onclick="decreaseNumber('textbox','itemval')"  >
    <i class="fa fa-minus"></i> </button>
    </li>
    <li class="page-item"><input type="text"  class="page-link border-0 rounded-circle" value="1" id="textbox" style="width: 40px;">
    </li>
    <li class="page-item">
    <button class="page-link rounded-circle" onclick="increaseNumber('textbox','itemval')" > <i class="fa fa-plus"></i></button>
    </li>
    </ul>
    </div>
    </div>
    <!-- //remover move and price -->
    <div class="row">
    <div class="col-8 d-flex justify-content-between remove_wish">
        <p ><a href="" class="text-muted"><small><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
          </svg> remove item</small></a></p>
    
    </div>
    <div class="col-4 d-flex justify-content-end price_money">
    <h3>$<span id="itemval">15.00 </span></h3>
    </div>
    </div>
    </div>
    </div>
    </div>
    <hr/>
    <!-- 2nd cart product -->
    <div class="card p-4 border-0">
    <div class="row">
    <!-- cart images div -->
    <div class="col-md-5 col-11 mx-auto  d-flex justify-content-center align-items-center  product_img">
    <img src="ladies/RS-X-Glitz-Women's-Trainers.jpg" class="img-fluid cartimg" alt="cart img">
    </div>

    

<!-- cart product details -->
<div class="col-md-7 col-11 mx-auto px-4 mt-2">
    <div class="row">
    <!-- product name  -->
    <div class="col-lg-7  card-title">
        <h4 class="mb-4 product_name">Pink marbual ladies shoes</h4>
        <p class="mb-2">Quantity : 2</p>
        <p class="mb-2">Color: Black</p>
        <p class="mb-3">Size : 36.5</p>
    </div>
    <!-- quantity inc dec -->
   <!-- quantity inc dec -->
   <div class="col-lg-5  plusminusbtn">
    <ul class="pagination justify-content-end set_quantity">
    <li class="page-item">
    <button class="page-link rounded-circle" onclick="decreaseNumber('textbox','itemval')"  >
    <i class="fa fa-minus"></i> </button>
    </li>
    <li class="page-item"><input type="text" name="" class="page-link border-0 rounded-circle" value="1" id="textbox" style="width: 40px;">
    </li>
    <li class="page-item">
    <button class="page-link rounded-circle" onclick="increaseNumber('textbox','itemval')" > <i class="fa fa-plus"></i></button>
    </li>
    </ul>
    </div>
    </div>
    <!-- //remover move and price -->
    <div class="row">
        <div class="col-8 d-flex justify-content-between remove_wish">
            <p ><a href="" class="text-muted"><small><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg> remove item</small></a></p>
        
        </div>
        <div class="col-4 d-flex justify-content-end price_money">
        <h3>$<span id="itemval">15.00 </span></h3>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- right side div -->
    <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
    <div class="right_side p-3 shadow bg-white">
   
    <h4 class="product_name mb-5">The Total Amount Of</h4>
    <div class="price_indiv d-flex justify-content-between">
    <p>Product amount</p>
    <p>$<span id="product_total_amt">0.00</span></p>
    </div>
    <div class="price_indiv d-flex justify-content-between">
    <p>Shipping Charge</p>
    <p>$<span id="shipping_charge">50.0</span></p>
    </div>
    <hr />
    <div class="total-amt d-flex justify-content-between font-weight-bold">
    <p>The total amount of (including VAT)</p>
    <p>$<span id="total_cart_amt">0.00</span></p>
    </div>
    <a href="checkout.php"><button class="btn text-uppercase checkoutbtn shadow text-white btn-dark">GO TO CHECKOUT</button></a>
    </div>
    <!-- discount code part -->
    <div class="discount_code mt-3 shadow">
    <div class="card">
    <div class="card-body">
    <a class="d-flex justify-content-between text-dark" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Add a discount code (optional)
    <span><i class="fa fa-chevron-down pt-1"></i></span>
    </a>
    <div class="collapse" id="collapseExample">
    <div class="mt-3">
    <input type="text" name="" id="discount_code1" class="form-control font-weight-bold" placeholder="Enter the discount code">
    <small id="error_trw" class="text-dark mt-3">code is thapa</small>
    </div>
    <button class="btn btn-primary btn-sm mt-3 applybtn shadow text-white btn-dark" onclick="discount_code()">APPLY</button>
    </div>
    </div>
    </div>
    </div>
    

<!-- discount code ends -->
<div class="mt-3 shadow p-3 bg-white">
    <div class="pt-4">
    <h5 class="mb-4">Expected delivery date</h5>
    <p>July 27th 2020 - July 29th 2020</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

 <!------------------------------END CART---------------------------------------------------->





    
<script type="text/javascript">

    var product_total_amt = document.getElementById('product_total_amt');
    var shipping_charge = document.getElementById('shipping_charge');
    var total_cart_amt = document.getElementById('total_cart_amt');
    var discountCode = document.getElementById('discount_code1');
    const decreaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
    console.log( itemprice.innerHTML);
    // console.log(itemval.value);
    if(itemval.value <= 0){
    itemval.value = 0;
    alert('Negative quantity not allowed');
    }else{
    itemval.value = parseInt(itemval.value) - 1;
    itemval.style.background = '#fff';
    itemval.style.color = '#000';
    itemprice.innerHTML  = parseInt(itemprice.innerHTML) - 15;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) - 15;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    const increaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
    // console.log(itemval.value);
    if(itemval.value >= 5){
    itemval.value = 5;
    alert('max 5 allowed');
    itemval.style.background = 'red';
    itemval.style.color = '#fff';
    }else{
    itemval.value = parseInt(itemval.value) + 1;
    itemprice.innerHTML  = parseInt(itemprice.innerHTML ) + 15;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 15;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    

const  discount_code = () => {
let totalamtcurr = parseInt(total_cart_amt.innerHTML);
let error_trw = document.getElementById('error_trw');
if(discountCode.value === 'thapa'){
let newtotalamt = totalamtcurr - 15;
total_cart_amt.innerHTML = newtotalamt;
error_trw.innerHTML = "Hurray! code is valid";
}else{
error_trw.innerHTML = "Try Again! Valid code is thapa";
}
}
</script>
<?php include 'footer.php';?>
