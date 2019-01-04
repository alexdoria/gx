$(document).ready(function(){
	$('#signin-button').click(function(e) {
	$("#signup-container").fadeOut(200, "swing");
	$("#signin-container").fadeIn(400);
	$('#signup-button').removeClass('btn-primary').addClass('btn-secondary');
	$(this).removeClass('btn-secondary');
	$(this).addClass('btn-primary');
	e.preventDefault();
});
$('#signup-button').click(function(e) {
	$("#signin-container").fadeOut(200, "linear");
	$("#signup-container").fadeIn(400);
	$('#signin-button').removeClass('btn-primary').addClass('btn-secondary');
	$(this).removeClass('btn-secondary');
	$(this).addClass('btn-primary');
	e.preventDefault();
});
});