 $("#loginsend").on("click", function() {

	var login = $("#login").val().trim();
	var password = $("#password").val().trim();
	
		if (login == "") {
			$("#errormessagge").text("input login");
			return false;
		} else if (password == "" ) {
			$("#errormessagge").text("input password");
			return false;
		}


		$("#errormessagge").text();

		$(".error").prepend("<p class 'for_error'>" + msg + "</p>");



	$.ajax({
		url: 'php/auth.php',
		type: 'POST',
		cashe: false,
		data: { 'login': login, 'password': password},
		dataType: 'json',
		beforeSend: function(){ $("#loginsend").prop("disabled", true);},
		success: function(data){
			if(!data)
		 alert("error, login again or sign up"); 
		 else
		 	alert("success, you login"); 
		 	
	})


});