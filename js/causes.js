(function($){
/**
 * Page to load, populate, and search causes for landing page
 */

/* right off the bat we want to load the causes and charities */
var CC = {};
CC.causes = [];
CC.charities = [];
CC.states = [];
CC.donation_types = [];

$.ajax({
	url: "http://npbendre.com/causecompass/api.php?action=get_all_charities",
	dataType: "jsonp",
	success: function(data){
		CC.charities = data;
	},
	error: function(){
		alert("Error loading the charities");
	}
});

$.ajax({
	url: "http://npbendre.com/causecompass/api.php?action=get_all_cause",
	dataType: "jsonp",
	success: function(data){
		CC.causes = data;
	},
	error: function(){
		alert("Error loading the cause");
	}
});

$.ajax({
	url: "http://npbendre.com/causecompass/api.php?action=get_all_state",
	dataType: "jsonp",
	success: function(data){
		CC.states = data;
	},
	error: function(){
		alert("Error loading the cause");
	}
});

$.ajax({
	url: "http://npbendre.com/causecompass/api.php?action=get_all_donation_types",
	dataType: "jsonp",
	success: function(data){
		CC.donation_types = data;
	},
	error: function(){
		alert("Error loading the cause");
	}
});

$(document).ready(function(){
	$.each(CC.causes, function(index, cause){
		$('#slide-1').append($('<span title='+cause.cause_id+'>'+cause.cause_name+'</span>'));
	});
	
	$('#state').autocomplete({
		source: CC.states
	});
		
	$('#donation').autocomplete({
		source: CC.donation_types
	});
	
	
});

})(jQuery);
