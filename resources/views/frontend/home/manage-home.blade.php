@extends('frontend.layouts.app')
@section('content')
<section id="featuredProduct">
<h3 class="title"><span>New Products</span></h3>
<div id="myCarouselOne" class="carousel slide">
    <!-- Dot Indicators -->
    <div class="carousel-inner">
    <div class="item active">
        <div class="row" id="newproductlist1">       
        </div>
    </div>
    <div class="item">
       <div class="row" id="newproductlist2">         
       </div>
    </div>
    <div class="item">
      <div class="row" id="newproductlist3">          
       </div>
     </div>
    </div>
    <a class="left carousel-control" href="#myCarouselOne" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarouselOne" data-slide="next">›</a>
</div>
        
<h3 class="title"><span>Popular Items</span></h3>
<div id="showCase" class="row">
<div class="span2">
<div class="carousel slide">
    <div class="carousel-inner" id="popularproductlist1">
          
    </div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
    <div class="carousel-inner" id="popularproductlist2">
          
    </div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
    <div class="carousel-inner" id="popularproductlist3">
           
    </div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
    <div class="carousel-inner" id="popularproductlist4">
            
    </div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
    <div class="carousel-inner" id="popularproductlist5">
            
    </div>
</div>
</div>
<div class="span2">
<div class="carousel slide">
    <div class="carousel-inner" id="popularproductlist6">
            
    </div>
</div>
</div>
</div>

</section>
<section id="scn">
<h3 class="title"><span>WELCOME !</span></h3>
<div class="row">
    <div class="span4">
    <h1><i class="icon-heart"></i> </h1>
    <h4>Who we are?</h4>    
    <p>Bootstrapapge.com helping you to design you a professional website.Converting PSD to XHTML & CSS. Even more in Graphic Design such as Coverpage, Logo etc. </p>
    <p>We are helping you to design you a professional website.Converting PSD to XHTML & CSS. Even more in Graphic Design such as Coverpage </p>
    </div>
    <div class="span4">
    <div class="seperator">
        <h1><i class="icon-truck iconShipping"></i> </h1>       
        <h4>Shipping Information</h4>       
        <p>If you are looking for upgrade your website for mobiles and tablets, Even if you do not have any website. Remember! bootsttrappage.com will come to make your dreams true.</p>
        <p class="shipping"><span class="shippingCall">Free Shipping On Orders Over $400</span></p>
    </div>
    </div>
    <div class="span4">
        <h1><i class="icon-comments-alt"></i> </h1>
        <h4>Find us in</h4>
        <p class="findUs">
            <a href="#"><i class="icon-facebook"></i> </a>
            <a href="#"><i class="icon-twitter"></i> </a>
            <a href="#"><i class="icon-google-plus"></i> </a>
        </p>
        <h4>Subscribe us</h4>   
        <div class="caption">
        <p> Subscribe us for our newsletters</p>
        <form class="">
          <div class="control-group">
            <div class="controls">
              <input type="text" id="userEmail" placeholder="eg: info:bootstrappage.com">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-success ">subscribe</button>
            </div>
          </div>
        </form>
    </div>
</div>
</div>
</section>
<hr class="soften"/>
<section id="client">
<h3 class="title"><span>BRANDS</span></h3>
<div id="clients" class="carousel slide">
        <div class="carousel-inner">
        <div class="item active">
        <div class="span12">
        <img src="frontend/themes/images/clients/1.png" alt="#" />
        <img src="frontend/themes/images/clients/2.png" alt="#" />
        <img src="frontend/themes/images/clients/3.png" alt="#" />
        <img src="frontend/themes/images/clients/4.png" alt="#" />
        <img src="frontend/themes/images/clients/5.png" alt="#" />
        <img src="frontend/themes/images/clients/6.png" alt="#" />
        </div>
        </div>
        <div class="item">
        <div class="span12">
        <img src="frontend/themes/images/clients/1.png" alt="#" />
        <img src="frontend/themes/images/clients/8.png" alt="#" />
        <img src="frontend/themes/images/clients/9.png" alt="#" />
        <img src="frontend/themes/images/clients/10.png" alt="#" />
        <img src="frontend/themes/images/clients/11.png" alt="#" />
        <img src="frontend/themes/images/clients/12.png" alt="#" />
        </div>
        </div>
</div>
    <a class="left carousel-control" href="#clients" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#clients" data-slide="next">›</a>
</div>
</section>
@endsection