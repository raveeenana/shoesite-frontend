<?php include 'header.php';?>


<!--create account form-->
<div class="container mt-5 mb-5">
  <div class="row">

      <div class="col-lg-3 col-md-2 col-sm-1 "  >
      </div>
  <div class="  col-lg-6 col-md-8  col-sm-10" >
      <h1 >Login <span class="shoelogopaddinglogin text-dark">SummerSale</span> </h1>
      

         <form>
          
                
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
            
            <div class="row">
               
            <div class="col-lg-4 col-md-4 col-sm-4 middlelineforgetcreate">
         
          <label class="form-check-label label1 " for="exampleCheck1"><a href="resetpassword.php" class="text-dark">Fotget Password?</a></label>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-3 "></div>
        <div class="col-lg-4 col-md-4 col-sm-4 middlelineforgetcreate">
          
          <label class="form-check-label label1" for="exampleCheck1 "><a class="text-dark" href="aanothercreateaccount.php">Create an Account</a></label>
        </div>
        
        </div>
    </div>








   <button type="submit" class="btn  signinbutton shadow-lg text-white btn-dark   "> LOGIN </button>
        </form>
  </div>

  
  
  <div class="col-lg-3 col-md-2  col-sm-1"  >
  </div>
  </div>	
</div>

<!--end create account form-->



<?php include 'footer.php';?>