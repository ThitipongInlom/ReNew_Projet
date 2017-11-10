$(document).ready(function() {
	$("#yes_open_model").click(function() {
	var happy = document.getElementById('happy');
	var confused = document.getElementById('confused');
	var sad = document.getElementById('sad');
	var data_check = '';
	if (happy.checked) {
		var data_check = '3';
	} 
	if (confused.checked) {
		var data_check = '2';
	}
	if (sad.checked) {
		var data_check = '1';
	}	
	// Check Data == '' No Show Model	
	if (data_check=='') {
		$.getJSON('Welcome/Data_Alert', function(result) {
    	alertify.defaults.theme.ok = "btn btn-primary";
		alertify.defaults.theme.cancel = "btn btn-danger";
		alertify.alert('', result.Text_Pleasealert);
		console.log(result);
    	});
	}else{
			$("#yes_open_model").attr('data-toggle', 'modal');
			$("#yes_open_model").attr('data-target', '#Yes');
			$("#yes_open_model").attr('data-backdrop', 'static');
		}
	});



});	