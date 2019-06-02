$(document).ready(function()){

	$.get(
			"http://localhost/testrepo_ver2/var/www/html/api/person",
			{
				"login": $(this).attr('login'),
				"email": $(this).attr('email'),
				"confirm": $(this).attr('confirm'),
			},
				function(data){

					let out = "";
					out += 'Login ' + data.person[0][login] + '<br>';
					out += 'email ' + data.person[0][email] + '<br>';
					out += 'confirm ' + data.person[0][confirm] + '<br>';
					$('person').html(out);
				}
		);




$("change_password").on("click", function(){

	var password = $("password").val().trim();
	var new_password = $("new_password").val().trim();
	var confirm_password = $("confirm_password").val().trim();


		if( password == "") {
			$("#errormessagge").text("input password");
			return false;
		} else if (new_password == ""){
			$("#errormessagge").text("input new password");
			return false;
		} else if (new_password == ""){
			$("#errormessagge").text("input confirm new password");
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
		beforeSend: function(){ $("#change_password").prop("disabled", true);},
		success: function(data){
			if(!data)
		 alert("input data"); 
			else
				 alert("password change");

});


});