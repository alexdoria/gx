$("button#add_user_button").click(function(){
	$("form#registry div.formgroup:last").after("<div class='formgroup'><label for='usremail'>Organizador</label><input type='text' class='form-control' id='usremail' name='usremail'></div>'")
});