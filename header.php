<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <meta name="keywords" content="app design,HTML,CSS,Create websites">
    <meta name="author" content="raveesha">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <!--myCSS-->
    <link rel="stylesheet" href="css/finalsheet.css">
    <link rel="stylesheet" href="css/cant.css">
   
    <title>Online shoeshop</title>
    
  </head>
  <body class="bg">
<!--navbarrr-->
<nav class="navbar navbar-expand-lg navbar-light navcolor">
  <a class="navbar-brand shoelogopadding text-white" href="#">SummerSale</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <!--rng-->
     <ul class="navbar-nav mr-auto navcenter1">
  
      <li class="nav-item active ">
        <a class="nav-link text-light" href="womenpage.php">WOMEN'S <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="salepage.php">MEN'S</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="salesale.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         SALE
        </a>
        <div class="dropdown-menu navcolor" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-light" href="salesale.php#womensection">WOMEN'S SALE</a>
          <a class="dropdown-item text-light" href="salesale.php#mensection">MEN'S SALE</a>
        </div>
      </li>
      <li class="nav-item active ">
        <a class="nav-link text-light" href="aboutus.php">ABOUT US <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link text-light" href="contactuspage.php">CONTACT US <span class="sr-only">(current)</span></a>
      </li>
    </ul>
<!--rng-->
<div class="svgmarggin navcenter1">
 
  <button type="button" class="btn btn-no-outline text-light" data-toggle="modal" data-target="#exampleModal"><svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  </svg></button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body ">
        <form class="form-inline">
        <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0 " type="submit">Search</button>
      </form>
        </div>
       
      </div>
    </div>
  </div>
        

   



   

  <a href="favorite.php"><button type="button" class="btn btn-no-outline text-light"  ><svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></button></a>
<a href="loginpage.php"><button type="button" class="btn btn-no-outline text-light"  ><svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg></button></a>
<a href="shoppingcart2.php"><button type="button" class="btn btn-no-outline text-light"  ><svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></button></a>
</div>





  </div>
</nav>

<!--navbarrr-->