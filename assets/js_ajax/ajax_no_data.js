$('#no').click(function() {
	var happy = document.getElementById('happy');
	var confused = document.getElementById('confused');
	var sad = document.getElementById('sad');
	var data_check = '';
	if (happy.checked) {
		var data_check = '1';
	} 
	if (confused.checked) {
		var data_check = '2';
	}
	if (sad.checked) {
		var data_check = '3';
	}
	// Go TheZign
	if (data_check=='') {
		window.location = '../popup/index.html';
	}else{
		var data_send =  data_check;
		$.ajax({
			url: 'index.php/Welcome/Click_No',
			type: 'POST',
			cache: false,
			data: {data_send},
			success: function(result){
				alert(result);
				window.location = '../popup/index.html';
			}
		});	
	}
});