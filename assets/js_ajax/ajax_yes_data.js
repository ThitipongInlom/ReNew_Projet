$('#send_data').click(function() {
	var happy = document.getElementById('happy');
	var confused = document.getElementById('confused');
	var sad = document.getElementById('sad');
	var data_check = '';
	// Level Below
	if (happy.checked) {
		var data_check = '1';
	} 
	if (confused.checked) {
		var data_check = '2';
	}
	if (sad.checked) {
		var data_check = '3';
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
	var other = document.getElementById('other').value; 
	$.ajax({
		url: 'index.php/Welcome/Click_Yes',
		type: 'POST',
		cache: false,
		data: {'room':room,'spa':spa,'fitness':fitness,'restaurant':restaurant,'other':other},
		success: function(result){
			alert(result);
		}	
	});
});