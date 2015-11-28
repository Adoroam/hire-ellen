//javascript functions/variables
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
function align(outside, inside){
	var bfix1 = $(outside).height();	 
	var bfix2 = $(inside).height();
	var bmargin = (bfix1 - bfix2) / 2 -5;
	if (bmargin <= 0) { 
		bmargin = 0; 
	}	
	$(inside).css("margin-top", bmargin );
	$(inside).css("margin-bottom", bmargin);
}
//jquery
$(document).ready(function(){	
	align($("#afix1"), $("#afix2"));
	align($(window), $(".scooch"));
	$(window).resize(function(){
		align($("#afix1"), $("#afix2"));
		align($(window), $(".scooch"));
	});
	
	$('#clientEmail').change(function( event ) {
		var emailText = $("#clientEmail").val();
		if (validateEmail(emailText) == true) {
			$("#formEmail").removeClass("has-error");
			$("#formEmail").addClass("has-success");			
		} else if  (emailText == "")  {
			$("#formEmail").removeClass("has-error");
			$("#formEmail").removeClass("has-success");			
		} else {
			$("#formEmail").addClass("has-error");
		};			
	});
	$('#scoot').click(function(){
		var emailText = $("#clientEmail").val();
		if (validateEmail(emailText) == true) {
			$('#wholeForm').submit();
		}	else {
			$('#alertBox').html('<div id="emailAlertLose" class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong> Uh Oh!</strong> Something went wrong. Check your email and try again.</div>');	
		};
	});
});