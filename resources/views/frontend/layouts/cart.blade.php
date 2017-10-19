<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <title>My Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- styles -->
    <link rel="stylesheet/less" type="text/css" href="frontend/themes/less/bootstrap.less">
    <link rel="stylesheet/less" type="text/css" href="frontend/themes/less/style.less">
    <script src="frontend/themes/js/less/less.js" type="text/javascript"></script>

    <!-- favicon-icons -->
    <link rel="shortcut icon" href="frontend/themes/images/favicon.ico">
  </head>
<body>
  <!-- Facebook script -->
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<header class="header">
<!-- <h1 class="seo">Welcome to sell anything! :<em class="blink"> 50% </em> discount is available for more than <span class="blink"> 400 </span> items.</h1> -->
<div class="container">
<div class="row">
    <div class="offset6 span6 right-align loginArea">
        <a href="#login" id="logout" role="button" data-toggle="modal"><span class="btn btn-mini" id="loginout"> Login  </span></a> 
        <a href="register.php"><span class="btn btn-mini btn-success"> Register  </span></a> 
        <!-- <a href="#" id="cart"><span class="btn btn-mini btn-danger"> Cart [3] </span></a>  -->
    </div>
</div>
<!-- Login Block -->
<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3>Sell Anythings : Login Block</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal loginFrm">
      <div class="control-group">                               
        <input type="text" id="inputEmail" placeholder="Email">
      </div>
      <div class="control-group">
        <input type="password" id="inputPassword" placeholder="Password">
      </div>
      <div class="control-group">
        <label class="checkbox">
        <input type="checkbox"> Remember me
        </label>
      </div>
     <button type="button" id="userlogin" class="btn btn-success">Sign in</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </form>
  </div>
</div>

<div class="navbar">
<div class="navbar-inner">
    <a class="brand" href="index.php">
    <!-- <img width="20" height="20" src="frontend/themes/images/mylogo.png" alt="Bootsshop"> -->
      <h4>MY CART</h4>
    </a>
    <div class="nav-collapse">
        <ul id="topMenu" class="nav pull-right">
         <li class="">
         <form class="form-inline navbar-search" method="post" action="products.php" style="padding-top:5px;">
            <select class="span3" style="padding:11px 4px; height:auto">
                <option>All</option>
                <option>Clothes </option>
                <option>Women's Wear </option>
                <option>Men's Wear </option>
                <option>Kids Wear </option>
            </select> 
            <input class="span4" type="text" placeholder="eg. T-shirt" style="padding:11px 4px;">
            <button type="submit" class="btn btn-warning btn-large" style="margin-top:0"> GO </button>
        </form>
        </li>
        <li class="dropdown">
          <button style="margin-top:10px; margin-left:20px; " class="btn btn-danger btn-large dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span>Cart [3] <span class="caret"></span></button> 

          <ul class="dropdown-menu dropdown-cart" role="menu" style="width: 325px;">
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <hr>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <hr>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://lorempixel.com/50/50/" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <hr>
              <a href="/product-checkout" class="btn btn-xs btn-primary pull-right">Checkout</a>
          </li>
        </ul>

    </div>
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    </div>
  </div>
 </div>
</header>
<div class="container">
   @yield('content')
  </div>
    <!-- Footer
    ================================================== -->
    <footer class="footer">
    <div class="container">
    <h5>Accepted Payment Methods </h5>
    <p><a href="#"><img src="frontend/themes/images/payment_methods.png" alt="payment methods"/></a></p>
    <hr class="soften"/>
    <div class="footerMenu">
        <a href="register.php"> REGISTRATION</a> | 
        <a href="about_us.php"> ABOUT US</a> | 
        <a  href="topology.php" >TOPOLOGY</a> | 
        <a href="contact_us.php">CONTACT </a>
    <p class="pull-right"><a href="#">Terms and condition.php</a> &copy; Copyright 2013 Sell Anything. </p>
    </div>
    </div>
    </footer>
    <span id="toTop" style="display: none;"><span><i class="icon-angle-up"></i></span></span>

    <!--  javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="frontend/themes/js/jquery.min.js"></script> 
    <script type="text/javascript">
    var newproductlist_url_one = "<?php echo route('product-frontend-getNewPorductsOne'); ?>";
    var newproductlist_url_two = "<?php echo route('product-frontend-getNewPorductsTwo'); ?>";
    var newproductlist_url_three = "<?php echo route('product-frontend-getNewPorductsThree'); ?>";
    </script>
    <script type="text/javascript">
      var popularproductlist_url_one = "<?php echo route('product-frontend-getPopularPorductsOne'); ?>";
      var popularproductlist_url_two = "<?php echo route('product-frontend-getPopularPorductsTwo'); ?>";
      var popularproductlist_url_three = "<?php echo route('product-frontend-getPopularPorductsThree'); ?>";
      var popularproductlist_url_four = "<?php echo route('product-frontend-getPopularPorductsFour'); ?>";
      var popularproductlist_url_five = "<?php echo route('product-frontend-getPopularPorductsFive'); ?>";
      var popularproductlist_url_six = "<?php echo route('product-frontend-getPopularPorductsSix'); ?>";
    </script>
    <script src="frontend/controllers/cart-ajax.js"></script>
    <script src="frontend/controllers/header-ajax.js"></script>
    <script src="frontend/controllers/home-ajax.js"></script>
    <script src="frontend/themes/js/jquery-1.8.3.min.js"></script>
    <script src="frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="frontend/themes/js/smart.js"></script>
  </body>
</html>