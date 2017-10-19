 $(document).ready(function(){
  var sessionUsername = sessionStorage.getItem('username');
  if(sessionUsername!=null){
  	    $("#logout"). removeAttr("href");
		$("#loginout").text('Logout'); 
	}
 });

 $(document).on("click","#userlogin",function() { 
    var inputEmail = $("#inputEmail").val();
    var inputPassword = $("#inputPassword").val();
	$.ajax({
		type:"POST",
    	dataType: 'json',
    	url: 'api/authenticate',
    	data:{email:inputEmail,password:inputPassword}
	}).done(function(data){
		   sessionStorage.setItem('token', data.token);
		   var sessionToken = sessionStorage.getItem('token');
			$.ajax({
			type:"GET",
	    	dataType: 'json',
	    	headers: {
					    "Authorization": "Basic " + sessionToken,
					  },
	    	url: 'api/getuser',
	    	data: { token:sessionToken }
		}).done(function(data){
			$('#login').modal('hide');
			sessionStorage.setItem('username', data.name);
			var sessionUsername = sessionStorage.getItem('username');
			if(sessionUsername!=null){
				$("#logout"). removeAttr("href");
				$("#loginout").text('Logout'); 
			}
		});
	});

});

$(document).on("click","#logout",function() {
   sessionStorage.removeItem('token');
   sessionStorage.removeItem('username');
   $("#logout").attr("href","#login");	
   $("#loginout").text('Login');
 // var sessionToken = sessionStorage.getItem('token'); 
 //   $.ajax({
	// 	type:"POST",
 //    	dataType: 'json',
 //    	headers: {
	// 				    "Authorization": "Basic " + sessionToken,
	// 				  },
 //    	url: 'api/logout',
 //    	data: { token:"Basic " + sessionToken }
	// }).done(function(data){ 
	//   sessionStorage.removeItem('token');
 //      sessionStorage.removeItem('username');	
	//   $("#logout").attr("href","#login");	
 //      $("#loginout").text('Login');
 //    });

});
