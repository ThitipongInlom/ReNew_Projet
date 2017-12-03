$('#no').click(function() {
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
	// Go Check Alert
	if (data_check=='') {
		$.getJSON('index.php/Welcome/Data_Alert', function(result) {
    	alertify.defaults.theme.ok = "btn btn-primary";
		alertify.defaults.theme.cancel = "btn btn-danger";
		alertify.alert('', result.Text_Pleasealert);
		console.log(result);
    	});
	}else{
		var data_send =  data_check;
		$.ajax({
			url: 'index.php/Welcome/Click_No',
			type: 'POST',
			cache: false,
			data: {data_send},
			success: function(result){
				$.getJSON('index.php/Welcome/Data_Alert', function(result) {
		    	alertify.defaults.theme.ok = "btn btn-primary";
				alertify.defaults.theme.cancel = "btn btn-danger";
				alertify.alert('', result.Text_Data_Thank,function () {
				// Send To Thezign
			    window.location = '../popup/index.html';
				});
				});	
			}
		});	
	}
});