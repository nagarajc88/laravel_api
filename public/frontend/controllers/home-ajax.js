// New product List **********

$(document).ready(function(){
  getNewProductsOne();
  getNewProductsTwo();
  getNewProductsThree();
});

function getNewProductsOne() {
	$.ajax({
    	dataType: 'json',
    	url: newproductlist_url_one
	}).done(function(data){
		manageNewProductsOne(data.data);
	});

}

function manageNewProductsOne(data){
    var	rows = '';

	$.each( data, function( key, value ) {
		rows = rows + '<div class="span3">';
		rows = rows + '<div class="well well-small">';
	  	rows = rows + '<span class="newTag"></span>';
        rows = rows + '<span class="priceTag">';
        rows = rows + '<small class="oldPrice"><small>$</small>440.00</small>';
        rows = rows + '<span class="newPrice"><small>$</small>400.00</span>';
        rows = rows + '</span>';
        rows = rows + '<a class="displayStyle" href="#"><img src="frontend/themes/images/clothes/1.jpg" alt="#"/></a>';
        rows = rows + '<h5>Clothings</h5>';
        rows = rows + '<p>';
        rows = rows + '<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a>'; 
        rows = rows + '<a class="btn" href="details.php">view details</a>';
        rows = rows + '</p>';
        rows = rows + '<p><span class="price"><small>$</small>400.00</span></p>'
        rows = rows + '</div>';
        rows = rows + '</div>';
	});

	$("#newproductlist1").html(rows);
}

function getNewProductsTwo() {
    $.ajax({
        dataType: 'json',
        url: newproductlist_url_two
    }).done(function(data){
        manageNewProductsTwo(data.data);
    });

}

function manageNewProductsTwo(data){
    var rows = '';

    $.each( data, function( key, value ) {
        rows = rows + '<div class="span3">';
        rows = rows + '<div class="well well-small">';
        rows = rows + '<span class="newTag"></span>';
        rows = rows + '<span class="priceTag">';
        rows = rows + '<small class="oldPrice"><small>$</small>440.00</small>';
        rows = rows + '<span class="newPrice"><small>$</small>400.00</span>';
        rows = rows + '</span>';
        rows = rows + '<a class="displayStyle" href="#"><img src="frontend/themes/images/clothes/1.jpg" alt="#"/></a>';
        rows = rows + '<h5>Clothings</h5>';
        rows = rows + '<p>';
        rows = rows + '<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a>'; 
        rows = rows + '<a class="btn" href="details.php">view details</a>';
        rows = rows + '</p>';
        rows = rows + '<p><span class="price"><small>$</small>400.00</span></p>'
        rows = rows + '</div>';
        rows = rows + '</div>';
    });

    $("#newproductlist2").html(rows);
}


function getNewProductsThree() {
    $.ajax({
        dataType: 'json',
        url: newproductlist_url_three
    }).done(function(data){
        manageNewProductsThree(data.data);
    });

}

function manageNewProductsThree(data){
    var rows = '';

    $.each( data, function( key, value ) {
        rows = rows + '<div class="span3">';
        rows = rows + '<div class="well well-small">';
        rows = rows + '<span class="newTag"></span>';
        rows = rows + '<span class="priceTag">';
        rows = rows + '<small class="oldPrice"><small>$</small>440.00</small>';
        rows = rows + '<span class="newPrice"><small>$</small>400.00</span>';
        rows = rows + '</span>';
        rows = rows + '<a class="displayStyle" href="#"><img src="frontend/themes/images/clothes/1.jpg" alt="#"/></a>';
        rows = rows + '<h5>Clothings</h5>';
        rows = rows + '<p>';
        rows = rows + '<a class="btn btn-warning" href="#" > Add to <i class="icon-shopping-cart"></i></a>'; 
        rows = rows + '<a class="btn" href="details.php">view details</a>';
        rows = rows + '</p>';
        rows = rows + '<p><span class="price"><small>$</small>400.00</span></p>'
        rows = rows + '</div>';
        rows = rows + '</div>';
    });

    $("#newproductlist3").html(rows);
}

//New Product List Ends******

//Popular Products***********
$(document).ready(function(){
  getPopularProductsOne();
  getPopularProductsTwo();
  getPopularProductsThree();
  getPopularProductsFour();
  getPopularProductsFive();
  getPopularProductsSix();
});

function getPopularProductsOne() {
    $.ajax({
        dataType: 'json',
        url: popularproductlist_url_one
    }).done(function(data){
        managePopularProductsOne(data.data);
    });

}

function managePopularProductsOne(data){
    var rows = '';

    var i=0; 
    $.each( data, function( key, value ) {
        if(i==0){
        rows = rows + '<div class="item active">';
        }else{
        rows = rows + '<div class="item">';   
        }
        rows = rows + '<a  href="details.php" ><img src="frontend/themes/images/clothes/sma1.jpg" alt="#"/>';
        rows = rows + 'View Details</a>';
        rows = rows + '</div>';
        i++;
    });

    $("#popularproductlist1").html(rows);
}
function getPopularProductsTwo() {
    $.ajax({
        dataType: 'json',
        url: popularproductlist_url_two
    }).done(function(data){
        managePopularProductsTwo(data.data);
    });

}

function managePopularProductsTwo(data){
    var rows = '';

    var i=0; 
    $.each( data, function( key, value ) {
        if(i==0){
        rows = rows + '<div class="item active">';
        }else{
        rows = rows + '<div class="item">';   
        }
        rows = rows + '<a  href="details.php" ><img src="frontend/themes/images/clothes/sma6.jpg" alt="#"/>';
        rows = rows + 'View Details</a>';
        rows = rows + '</div>';
        i++;
    });

    $("#popularproductlist2").html(rows);
}
function getPopularProductsThree() {
    $.ajax({
        dataType: 'json',
        url: popularproductlist_url_three
    }).done(function(data){
        managePopularProductsThree(data.data);
    });

}

function managePopularProductsThree(data){
    var rows = '';

    var i=0; 
    $.each( data, function( key, value ) {
        if(i==0){
        rows = rows + '<div class="item active">';
        }else{
        rows = rows + '<div class="item">';   
        }
        rows = rows + '<a  href="details.php" ><img src="frontend/themes/images/clothes/sma5.jpg" alt="#"/>';
        rows = rows + 'View Details</a>';
        rows = rows + '</div>';
        i++;
    });

    $("#popularproductlist3").html(rows);
}
function getPopularProductsFour() {
    $.ajax({
        dataType: 'json',
        url: popularproductlist_url_four
    }).done(function(data){
        managePopularProductsFour(data.data);
    });

}

function managePopularProductsFour(data){
    var rows = '';

    var i=0; 
    $.each( data, function( key, value ) {
        if(i==0){
        rows = rows + '<div class="item active">';
        }else{
        rows = rows + '<div class="item">';   
        }
        rows = rows + '<a  href="details.php" ><img src="frontend/themes/images/clothes/sma4.jpg" alt="#"/>';
        rows = rows + 'View Details</a>';
        rows = rows + '</div>';
        i++;
    });

    $("#popularproductlist4").html(rows);
}
function getPopularProductsFive() {
    $.ajax({
        dataType: 'json',
        url: popularproductlist_url_five
    }).done(function(data){
        managePopularProductsFive(data.data);
    });

}

function managePopularProductsFive(data){
    var rows = '';

    var i=0; 
    $.each( data, function( key, value ) {
        if(i==0){
        rows = rows + '<div class="item active">';
        }else{
        rows = rows + '<div class="item">';   
        }
        rows = rows + '<a  href="details.php" ><img src="frontend/themes/images/clothes/sma3.jpg" alt="#"/>';
        rows = rows + 'View Details</a>';
        rows = rows + '</div>';
        i++;
    });

    $("#popularproductlist5").html(rows);
}
function getPopularProductsSix() {
    $.ajax({
        dataType: 'json',
        url: popularproductlist_url_six
    }).done(function(data){
        managePopularProductsSix(data.data);
    });

}

function managePopularProductsSix(data){
    var rows = '';
    var i=0; 
    $.each( data, function( key, value ) {
        if(i==0){
        rows = rows + '<div class="item active">';
        }else{
        rows = rows + '<div class="item">';   
        }
        rows = rows + '<a  href="details.php" ><img src="frontend/themes/images/clothes/sma2.jpg" alt="#"/>';
        rows = rows + 'View Details</a>';
        rows = rows + '</div>';
        i++;
    });

    $("#popularproductlist6").html(rows);
}