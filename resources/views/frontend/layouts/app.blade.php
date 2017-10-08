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
    <script src="frontend/themes/js/less/less.js" type="text/javascript"></script>

    <!-- favicon-icons -->
    <link rel="shortcut icon" href="frontend/themes/images/favicon.ico">
  </head>
<body>
  <!-- Facebook script -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
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
        <a id="logout" href="#login" role="button" data-toggle="modal"><span id="loginout" class="btn btn-mini"> Login  </span></a> 
        <a href="register.php"><span class="btn btn-mini btn-success"> Register  </span></a> 
        <a href="checkout.php"><span class="btn btn-mini btn-danger"> Cart [2] </span></a> 
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
        <input type="text" id="inputEmail" name="email" placeholder="Email">
      </div>
      <div class="control-group">
        <input type="password" name="password" id="inputPassword" placeholder="Password">
      </div>
      <div class="control-group">
        <label class="checkbox">
        <input type="checkbox"> Remember me
        </label>
      </div>
     <button type="button"  id="userlogin" class="btn btn-success">Sign in</button>
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
<section id="mainCarousel">
    <div class="displayStyle">
    <div id="myCarousel" class="carousel slide">
        <span class="newTag tagRight"></span>
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
            <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="span6">
                        <img src="frontend/themes/images/carousel/carousel2.jpg" alt="#" />
                    </div>
                    <div class="span6">
                        <div class="promoDetail">
                                  <h1>Ladies Pullover Doll Collar  <span>3/4 Sleeves Chiffon Blouse Blue M</span></h1>
                                    
                                  <p>Sourcingmap</p>
                                <ul>
                                    <li>Size: Medium, Colour: Blue</li>
                                    <li>In stock. Dispatched from and sold by sourcingmap.</li>
                                    <li>US Size : 8;UK Size : 10;EU Size : 38</li>
                                    <li>Bust Girth : 36 inches;Waist Girth : 28 inches;Hip Girth : 38.5 inches</li>
                                    <li>Shoulder Width: 15.7inches, Sleeve Length: 16inches, Total Length: 22.8inches, Net Weight: 82g</li>
                                </ul>
                                   
                                <p>Reviews: <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star-empty"></i></p>
                                <br>
                                <div class="cntr">
                                <h3>Price: $9.00 <small class="oldPrice">$18.00</small></h3>
                                <a class="btn btn-success" href="details.php" >50% off BUY NOW</a> 
                                <br>
                                <br>
                                <div class="fb-like" data-href="http://www.bootstrappage.com/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="true"></div>
                                <br>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="item">
                  <div class="row">
                        <div class="span6">
                            <img src="frontend/themes/images/carousel/carousel3.jpg" alt="#" />
                        </div>
                        <div class="span6">
                            <div class="promoDetail">
                              <h1>Women Zipper Closure Hooded   <span>Short Sleeve Mini Dress </span></h1>
                              <p>Sourcingmap</p>
                              <ul>
                                <li>Size: X-Small</li>
                                <li>Colour: Navy blue</li>
                                <li>In stock. Dispatched from and sold by sourcingmap.</li>
                                <li>US Size : 2;UK Size : 4;EU Size : 32</li>
                                <li>Bust Girth : 33 inches;Waist Girth : 25 inches;Hip Girth : 35.5inches</li>
                                <li>Shoulder Width : 16.5 inches;Sleeve Length : 6.7inches;Total Length : 31.5inches</li>
                              </ul>
                               <p>Reviews: <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i>  <i class="icon-star"></i> <i class="icon-star-empty"></i></p>
                              <br/>
                            <div class="cntr">
                              <h3>Price: $14.00 <small class="oldPrice">$28.00</small></h3>
                              <br/>
                                <a class="btn btn-warning" href="details.php" >50% off BUY NOW</a> 
                              <br/>
                              <br/>
                                <div class="fb-like" data-href="http://www.bootstrappage.com/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="true"></div>
                            </div>
                            </div>
                    </div>
                  </div>
              </div>
               <div class="item">
               <div class="row">
               <div class="span6">
                    <img src="frontend/themes/images/carousel/carousel4.jpg" alt="#" />
                </div>
                <div class="span6">
                    <div class="promoDetail">
                          <h1>Woman Sheer Long Sleeve   <span>Doll Collar Blouse Shirt Burgundy </span></h1>
                          <p>Sourcingmap </p>
                          <ul>
                            <li>US Size : 10;UK Size : 12;EU Size : 40</li>
                            <li>Bust Girth : 37 inches;Waist Girth : 29 inches;Hip Girth : 39.5 inches</li>
                            <li>Shoulder Width :41cm / 16inches; Sleeve Length (inches):58cm / 23 inches; Total Length:62cm / 24.4inches</li>
                            <li>In stock. Dispatched from and sold by sourcingmap.</li>
                            <li>Color:  Burgundy</li>
                          </ul>
                           <p>Reviews: <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i><i class="icon-star"></i> <i class="icon-star-empty"></i></p>
                          <br/>
                         <div class="cntr">
                           <h3>Price: $12.25 <small class="oldPrice">$24.50</small></h3>
                            <a class="btn btn-danger" href="details.php" >50% off BUY NOW</a>
                            <br>
                            <br>
                         <div class="fb-like" data-href="http://www.bootstrappage.com/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="true"></div>
                        </div>

                    </div>
                </div>
                </div>
              </div>
            </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>
       </div>
     </section>
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
    <script src="frontend/controllers/header-ajax.js"></script>
    <script src="frontend/controllers/home-ajax.js"></script>
    <script src="frontend/themes/js/jquery-1.8.3.min.js"></script>
    <script src="frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="frontend/themes/js/smart.js"></script>
  </body>
</html>






