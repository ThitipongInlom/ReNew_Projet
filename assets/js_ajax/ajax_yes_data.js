$('#send_data').click(function() {
	var happy = document.getElementById('happy');
	var confused = document.getElementById('confused');
	var sad = document.getElementById('sad');
	var data_check = '';
	// Level Below
	if (happy.checked) {
		var data_check = '3';
	} 
	if (confused.checked) {
		var data_check = '2';
	}
	if (sad.checked) {
		var data_check = '1';
	}
	// Check Data
	var room = document.getElementById('room');
	if (room.checked) {
		var room = '1';
	}else{
		var room = '';
	}
	var spa = document.getElementById('Spa');
	if (spa.checked) {
		var spa = '1';
	}else{
		var spa = '';
	}
	var fitness =  document.getElementById('fitness');
	if (fitness.checked) {
		var fitness = '1';
	}else{
		var fitness = '';
	}
	var restaurant =  document.getElementById('restaurant');
	if (restaurant.checked) {
		var restaurant = '1';
	}else{
		var restaurant = '';
	}
	var other =  document.getElementById('other');
	if (other.checked) {
		var other = '1';
	}else{
		var other = '';
	}

	var detail = document.getElementById('detail').value; 
	var text_other = document.getElementById('text_other').value;
	$.ajax({
		url: 'index.php/Welcome/Click_Yes',
		type: 'POST',
		cache: false,
		data: {'data_check':data_check,'room':room,'spa':spa,'fitness':fitness,'restaurant':restaurant,'other':other,'detail':detail,'text_other':text_other},
		success: function(result){
			$.getJSON('index.php/Welcome/Data_Alert', function(result) {
	    	alertify.defaults.theme.ok = "btn btn-primary";
			alertify.defaults.theme.cancel = "btn btn-danger";
			alertify.alert('', result.Text_Data_Thank,function () {
			// Send To Thezign
			window.location = 'http://172.16.1.14/renew/index.php/Promo/';
			});
			});

		}	
	});
});
