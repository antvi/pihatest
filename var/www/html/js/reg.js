$("#sendreg").on("click", function() {

	var login = $("#login").val().trim();
	var email = $("#email").val().trim();
	var password = $("#password").val().trim();
	var con_password = $("#con_password").val().trim();

		if (login == "") {
			$("#errormessagge").text("input login");
			return false;
		} else if(email == ""){
			$("#errormessagge").text("input email");
			return false;
		} else if (password == "" ) {
			$("#errormessagge").text("input password");
			return false;
		} else if(con_password == ""){
			$("#errormessagge").text("input con_password");
			return false;
		} else if (password != con_password) {
			$("#errormessagge").text("different passwords");
			return false;
		}


		$("#errormessagge").text();
		$(".error").prepend("<p class 'for_error'>" + msg + "</p>");



	$.ajax({
		url: 'php/reg.php',
		type: 'POST',
		cashe: false,
		data: { 'login': login, 'email': email, 'password': password},
		dataType: 'json',
		beforeSend: function(){ $("#sendreg").prop("disabled", true);},
		success: function(data){
			if(!data)
		 alert("error, message not send"); 
		 else
		 	alert("check you email"); 


});