
$(document).ready(function() {
	//make each element display a tooltip - the title will have the full element name
	$('.element-ptable').tooltip();

	//make the overlay popup a proper jquery popup, and make it draggable
	//later, I want to customize the appearance and get my styles back - dammit
	$('.element-overlay').dialog({
		autoOpen: false,
		modal: true,
		resizable: false,
		width: 595
    });
	/*$('.element-overlay').draggable();*/

	// Assign an onclick function to each of the elements in the periodic table
	// This function will retrieve and display details about an element
	// when the user selects one from the periodic table. 
	$('.element-ptable').click(function() {
		var datanum = $(this).data('info');;
		var overlay = $('.element-overlay');

		overlay.attr('data-info', datanum);
		overlay.dialog('open'); //.show
		
		$.ajax({
			type: "GET",
			data: {atomic_num: datanum},
			url: "overlaydata.php",
			dataType: "html",
			success: function(response){
				$('.element-overlay').html(response);
			}
		});
		$('.element-overlay').removeClass('hidden');
	});
});
