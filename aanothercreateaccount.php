<?php include 'header.php';?>


<!--create account form-->
<div class="container mt-5 mb-5">
  <div class="row">

      <div class="col-lg-3 col-md-2 col-sm-1 "  >
      </div>
  <div class="  col-lg-6 col-md-8  col-sm-10" >
      <h1 >Create Account <span class="shoelogopaddinglogin text-dark">SummerSale</span> </h1>
      

         <form>
          
              <div class="form-group everymargin">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control border border-dark" id="exampleInputEmail1"  >
                  
                </div>
                
              <div class="form-group everymargin">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control border border-dark" id="exampleInputEmail1"  >
                  
                </div>
                <div class="form-group everymargin">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control border border-dark" id="exampleFormControlInput1" placeholder="name@example.com">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group everymargin">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control border border-dark" id="exampleInputPassword1">
              
            </div>
            <div class="form-group form-check everymargin">
              <input type="checkbox" class="form-check-input border border-dark" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Please Sign me upto the news letter and send me occasianal news and 
                offers.</label>
            </div>
          
          
          <button type="submit" class="btn  my-2 my-sm-0 signinbutton shadow-lg text-white btn-dark   ">CREATE</button>
        </form>
  </div>

  
  
  <div class="col-lg-3 col-md-2  col-sm-1"  >
  </div>
  </div>	
</div>

<!--end create account form-->


<?php include 'footer.php';?>