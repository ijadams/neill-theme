// JavaScript Document
jQuery(function($) {

$( "#input_3_11, #input_3_13" ).change(function() {
	var reason = document.getElementById('input_3_11').value;
	var state = document.getElementById('input_3_13').value;
	var statelist = ["TX","OK","AR","LA","MS","TN","AL"];
	if( $.inArray(state, statelist) !== -1){
    var leadstate = 'yes'; 
}
else {
	var leadstate = '';
	}
	if((reason === 'Becoming a PureFessional' ) || (leadstate === '')) {
		$('#choice_3_18_1').removeAttr('checked');
	}
	else {
		$('#choice_3_18_1').prop('checked', true);

		}
});


$( "#input_5_11, #input_5_13" ).change(function() {
	var reason = document.getElementById('input_5_11').value;
	var state = document.getElementById('input_5_13').value;
	var statelist = ["TX","OK","AR","LA","MS","TN","AL"];
	if( $.inArray(state, statelist) !== -1){
    var leadstate = 'yes'; 
}
else {
	var leadstate = '';
	}
	if((reason === 'Becoming a PureFessional' ) || (leadstate === '')) {
		$('#choice_5_18_1').removeAttr('checked');
	}
	else {
		$('#choice_5_18_1').prop('checked', true);

		}
});
});