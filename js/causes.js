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

CC.cause_id = 0;
CC.state = "";
CC.donation_type = 0;

$.ajax({
	url: "http://npbendre.com/causecompass/api.php?action=get_all_charities",
	dataType: "jsonp",
	success: function(data){
		console.log('loaded charities'+data);
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
		console.log('loaded causes');
		CC.causes = data;
		$.each(CC.causes, function(index, cause){
			console.log(cause.cause_name);
			$('<button class="btn" id="'+cause.cause_id+'">'+cause.cause_name+'</button>').appendTo('#causeTypeDiv');
		});
		$('#causeTypeDiv .btn').click(function(){
			CC.cause_id = this.id;
			$('#myCarousel').carousel('next');
		});
	},
	error: function(){
		alert("Error loading the cause");
	}
});

$.ajax({
	url: "http://npbendre.com/causecompass/api.php?action=get_all_locations",
	dataType: "jsonp",
	success: function(data){
		console.log('loaded locations');
		CC.states = data;
		$.each(CC.states, function(index, state){
			console.log(state.State);
			$('<button class="btn" id="'+state.State+'">'+state.State+'</button>').appendTo('#donationTypeDiv');
		});
		$('#donationTypeDiv .btn').click(function(){
			CC.state = this.id;
			/**
			Yolanda, here is where you should set up your map data.
			The relevant js data should be in CC.state, CC.donation_type, and CC.cause_id
			This should be used here: http://npbendre.com/causecompass/api.php?action=get_charity_list&cause_id=1&state=DC&charity_type=1
			(same ajax calls as all the others)
			*/
			displaySearchResults(CC.state,CC.donation_type,CC.donation_type);
			
		});
	},
	error: function(){
		alert("Error loading the locations");
	}
});

$.ajax({
	url: "http://npbendre.com/causecompass/api.php?action=get_donation_types",
	dataType: "jsonp",
	success: function(data){
		console.log('loaded donation types');
		CC.donation_types = data;
		$.each(CC.donation_types, function(index, type){
			console.log(type.chaity_type_name);
			$('<button class="btn" id="'+type.charity_type_id+'">'+type.chaity_type_name+'</button>').appendTo('#searchContainerDiv');
		});
		$('#searchContainerDiv .btn').click(function(){
			CC.donation_type = this.id;
			$('#myCarousel').carousel('next');
		});
	},
	error: function(){
		alert("Error loading the donation type");
	}
});


$(document).ready(function(){
	$('.carousel').carousel('pause');
	
	$('.backBtn').click(function(){
		$('#myCarousel').carousel('prev');
	});

});

})(jQuery);
