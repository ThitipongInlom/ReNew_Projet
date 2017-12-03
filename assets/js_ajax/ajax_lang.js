$('#english').click(function() {
	$.ajax({
		url: 'index.php/Language/switchLang/english',
		type: 'GET',
		success: function(result){
		$.getJSON('index.php/Welcome/Data_Alert', function(result) {
    	location.reload();
    	});
	
			}
		});
	});

$('#thai').click(function() {
	$.ajax({
		url: 'index.php/Language/switchLang/thai',
		type: 'GET',
		success: function(result){
			location.reload();
			}
		});
	});

	
