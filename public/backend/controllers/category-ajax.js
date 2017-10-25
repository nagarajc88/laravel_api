var page = 1;

var current_page = 1;

var total_page = 0;

var is_ajax_fire = 0;


categoryManageData();
// alert();
// alert(category_url);
/* manage data list */

function categoryManageData() {

    $.ajax({

        dataType: 'json',

        url: category_url,

        data: {page:page}

    }).done(function(data){
        // alert(data);

    	total_page = data.last_page;

    	current_page = data.current_page;


    	$('#category_pagination').twbsPagination({

	        totalPages: total_page,

	        visiblePages: current_page,

	        onPageClick: function (event, pageL) {

	        	page = pageL;

                if(is_ajax_fire != 0){

	        	  getCategoryPageData();

                }

	        }

	    });


    	categoryManageRow(data.data);
    	productCategoryManageRow(data.data);

        is_ajax_fire = 1;

    });

}


$.ajaxSetup({

    headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

});


/* Get Page Data*/

function getCategoryPageData() {

	$.ajax({

    	dataType: 'json',

    	url: category_url,

    	data: {page:page}

	}).done(function(data){

		categoryManageRow(data.data);
		productCategoryManageRow(data.data);

	});

}


/* Add new Item table row */

function productCategoryManageRow(data) {
     var categCheck = $('#optgroup').multiSelect({
         includeSelectAllOption: true,
         enableFiltering: true
     });

	 var	rows = '';
	 $.each( data, function(key, value ) {
	 rows = rows + '<option value="'+value.id+'">'+value.name+'</option>';
	 // rows = rows + '<div class="collapse" id="demo'+key+'">';
	 $.each(value.subCategory, function(skey, subValue ) {
	 rows = rows + '<option value="'+subValue.id+'">--'+subValue.name+'</option>';
	 // rows = rows + '<div class="collapse list-group-submenu" id="SubMenu'+skey+'">';
	 $.each(subValue.subCategory, function(sSkey, secondSubValue ) {
	 rows = rows + '<option value="'+secondSubValue.id+'">---'+secondSubValue.name+'</option>';
	 // rows = rows + '<div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu'+sSkey+'">';
	 $.each(secondSubValue.subCategory, function(tkey, thirdSubValue ) {
	 rows = rows + '<option value="'+thirdSubValue.id+'">----'+thirdSubValue.name+'</option>';
	 });
	 // rows = rows + '</div>';
	 });
	 // rows = rows + '</div>';
	 });
	 // rows = rows + '</div>';
	 });
	 $(".product_categories_view").html(rows);
     categCheck.multiSelect('refresh');
}

function categoryManageRow(data) {
	// alert(data);
	 var	rows = '';
	 rows = rows + '<div class="row">';
	 rows = rows + '<div class="col-md-12">';
	 rows = rows + '<div id="MainMenu">';
	 rows = rows + '<div class="list-group panel">';
	 $.each( data, function(key, value ) {
	 rows = rows + '<a href="#demo'+key+'" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">'+value.name+'<div id="cdelete" class="btn btn-danger" style="float:right;margin-left:4px;">Delete</div><div id="edit" class="edit btn btn-warning" nag="'+value.id+'" style="float:right;margin-right:4px;">Edit</div></a>';
	 rows = rows + '<div class="collapse" id="demo'+key+'">';
	 $.each(value.subCategory, function(skey, subValue ) {
	 rows = rows + '<a href="#SubMenu'+skey+'" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">'+subValue.name+'<div id="cdelete" class="btn btn-danger" style="float:right;margin-left:4px;">Delete</div><div id="edit" class="btn btn-warning" nag="'+subValue.id+'" style="float:right;margin-right:4px;">Edit</div></a>';
	 rows = rows + '<div class="collapse list-group-submenu" id="SubMenu'+skey+'">';
	 $.each(subValue.subCategory, function(sSkey, secondSubValue ) {
	 rows = rows + '<a href="#SubSubMenu'+sSkey+'" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">'+secondSubValue.name+'<div id="cdelete" class="btn btn-danger" style="float:right;margin-left:4px;">Delete</div><div id="edit" class="btn btn-warning" nag="'+secondSubValue.id+'" style="float:right;margin-right:4px;">Edit</div></a>';
	 rows = rows + '<div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu'+sSkey+'">';
	 $.each(secondSubValue.subCategory, function(tkey, thirdSubValue ) {
	 rows = rows + '<a href="#" class="list-group-item" data-parent="#SubSubMenu'+sSkey+'">'+thirdSubValue.name+'<div id="cdelete" class="btn btn-danger" style="float:right;margin-left:4px;">Delete</div><div id="edit" class="btn btn-warning" nag="'+thirdSubValue.id+'" style="float:right;margin-right:4px;">Edit</div></a>';
	 });
	 rows = rows + '</div>';
	 });
	 rows = rows + '</div>';
	 });
	 rows = rows + '</div>';
	 });
	 rows = rows + '</div>';
	 rows = rows + '</div>';
	 rows = rows + '</div>';  
	 rows = rows + '</div>';

	$("#categories").html(rows);

}
manageCategoryDropDown();
function manageCategoryDropDown(){
	$.ajax({
				dataType: 'json',
				url: '/category-dropdown',
		}).done(function(data){
			manageSelection(data);
		});
};
function manageSelection(data){
	 var rows = '';
	 rows = rows + '<option value="0">Top Leave Category</option>'; 
	 $.each( data, function(key, value ) {
	 rows = rows + '<option value="'+value.id+'" href="#demo'+key+'" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">'+value.name+'</option>';
	 $.each(value.subCategory, function(skey, subValue ) {
	 rows = rows + '<option value="'+subValue.id+'" href="#SubMenu'+skey+'" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">&nbsp;'+subValue.name+'</option>';
	 $.each(subValue.subCategory, function(sSkey, secondSubValue ) {
	 rows = rows + '<option value="'+secondSubValue.id+'" href="#SubSubMenu'+sSkey+'" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">&nbsp;&nbsp;&nbsp;'+secondSubValue.name+'</option>';
	 $.each(secondSubValue.subCategory, function(tkey, thirdSubValue ) {
	 rows = rows + '<option value="'+thirdSubValue.id+'" href="#" class="list-group-item" data-parent="#SubSubMenu'+sSkey+'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+thirdSubValue.name+'</option>';
	 });
	 rows = rows + '</div>';
	 });
	 rows = rows + '</div>';
	 });
	 rows = rows + '</div>';
	 });
	$("#exampleSelect1").html(rows);
}
/* Create new Category */
$("#form_validation").submit(function(e) {
        var form_action = $("#create-category").find("form").attr("action");
		var parent_category = $("#create-category").find("select[name='parent_id']").val();
		var category_name = $("#create-category").find("input[name='name']").val();
		var category_image = $("#create-category").find("input[name='image']").val();
		var category_slug = $("#create-category").find("input[name='slug']").val();
		var category_description = $("#create-category").find("textarea[name='description']").val();
		var category_status = $("#create-category").find("input[name='status']").val();

    $.ajax({
           type: "POST",
           url: form_action,
           data: $(this).serialize(),
           success: function(data)
           {
                categoryManageData();
			    $(".modal").modal('hide');
				$("#create-category").find("select[name='parent_id']").val("");
				$("#create-category").find("input[name='name']").val("");
				$("#create-category").find("input[name='image']").val("");
				$("#create-category").find("input[name='slug']").val("");
				$("#create-category").find("textarea[name='description']").val("");
				$("#create-category").find("input[name='status']").val("");
				toastr.success('Category Created Successfully.', 'Success Alert', {timeOut: 5000});
                
            }
         });

    e.preventDefault();
});




/* Remove Item */

$("body").on("click",".remove-item",function(){

    var id = $(this).parent("td").data('id');

    var c_obj = $(this).parents("tr");

    $.ajax({

        dataType: 'json',

        type:'delete',

        url: category_url + '/' + id,

    }).done(function(data){

        c_obj.remove();

        toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});

        getCategoryPageData();

    });

});


/* Edit Item */

$("body").on("click",".edit-item",function(){

    var id = $(this).parent("td").data('id');

    var title = $(this).parent("td").prev("td").prev("td").text();

    var description = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='title']").val(title);

    $("#edit-item").find("textarea[name='description']").val(description);

    $("#edit-item").find("form").attr("action",url + '/' + id);

});


/* Updated new Item */

$(".crud-submit-edit").click(function(e){

    e.preventDefault();

    var form_action = $("#edit-item").find("form").attr("action");

    var title = $("#edit-item").find("input[name='title']").val();

    var description = $("#edit-item").find("textarea[name='description']").val();


    $.ajax({

        dataType: 'json',

        type:'PUT',

        url: form_action,

        data:{title:title, description:description}

    }).done(function(data){

        getCategoryPageData();

        $(".modal").modal('hide');

        toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});

    });

});

