
$(document).ready(function() {
	//make each element display a tooltip - the title will have the full element name
	$('.element-ptable').tooltip();

	//prepare the element overlay to be dragged around
	$('.element-overlay-toolbar').disableSelection();
	$('.element-overlay').draggable({handle: '.element-overlay-toolbar'});

	// Assign an onclick function to each of the elements in the periodic table
	// This function will retrieve and display details about an element
	// when the user selects one from the periodic table. 
	$('.element-ptable').click(function() {
		var datanum = $(this).data('info');
		var overlay = $('.element-overlay');

		clearElementOverlay();
		overlay.attr('data-info', datanum);
		populateElementOverlay(datanum);
		if (overlay.attr('data-moved')==='false') { 
			centerElementOverlay();
		};
		overlay.show();
	});

	$('.element-overlay-toolbar').click(function() {
		$('.element-overlay').attr('data-moved', 'true');
	});

	$('.element-overlay-dismiss').click(function() {
		$('.element-overlay').fadeOut(300);
		clearElementOverlay();
	});

	var clearElementOverlay = function() {
		$('.element-overlay').attr('data-info', 0);
		$('.element-overlay-content').html('');
	}

	var populateElementOverlay = function(atomic_num_data) {
		$.ajax({
			type: "GET",
			data: {atomic_num: atomic_num_data},
			url: "overlaydata.php",
			dataType: "html",
			success: function(response){
				$('.element-overlay-content').html(response);
			}
		});
	}

	var centerElementOverlay = function() {
		$('.element-overlay').position({
			my: 'center top',
			at: 'center',
			of: '#header'
		});
	}
});

// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
