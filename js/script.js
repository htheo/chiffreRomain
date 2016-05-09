$('#problem').hide();
var minimum =1;
var maximum=10;
$('#min').change(function() {
	
	minimum=$('#min').val();
	
	console.log(minimum);
	console.log(maximum);
	if(minimum < maximum){
		console.log('min plus petit');
		$('#valid').show();
		$('#problem').hide();
	}else{
		console.log('min plus grand');
		$('#valid').hide();
		$('#problem').show();
	}

});
$('#max').change(function() {
	
	maximum=$('#max').val();

	if(minimum < maximum){
		console.log('min plus petit');
		$('#valid').show();
		$('#problem').hide();
	}else{
		console.log('min plus grand');
		$('#valid').hide();
		$('#problem').show();
	}

});	