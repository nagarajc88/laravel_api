 $(document).on("click", "#cart", function() {
    $(".shopping-cart").fadeToggle( "fast");
  });
   
  $(document).on("click",".add-to-cart",function(){

    // alert();
    var p = $(this).siblings("p").find("span .price").text();
    alert(p);

  });
	  // var ele=document.getElementById(id);
	  // var img_src=ele.getElementsByTagName("img")[0].src;
	  // var name=document.getElementById(id+"_name").value;
	  // var price=document.getElementById(id+"_price").value;
	
	  // $.ajax({
   //      type:'post',
   //      url:'store_items.php',
   //      data:{
   //        item_src:img_src,
   //        item_name:name,
   //        item_price:price
   //      },
   //      success:function(response) {
   //        document.getElementById("total_items").value=response;
   //      }
   //    });
	
    // }