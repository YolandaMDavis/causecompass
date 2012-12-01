(function($){

/**
 * Loading js for single charity page.
 * Pulls charity info from ajaxUrl
 * Populates info into charity.php page
 * Assumes element ids from charity.php
 */
CHARITY = function(id){
	
	var self = this;
	
	self.init = function(){
		self.ajaxUrl = "/tbd-load-charity";
		self.charityId = id;
	};
	
	self.ajax = function(){
		$.ajax({
			url: self.ajaxUrl,
			type: "POST",
			data: {
				charityId : self.charityId
			},
			success: function(data){
				self.populate(data);
			},
			error: function(j,t,e){
				console.log("error loading charity: "+self.charityId);
				window.location.pathname = "/index.php";
			}
		});
	};
	
	self.populate = function(data){
		$('#name').html(data.name);
		$('#desc').html(data.longDescription);
		$('#link a').attr('href', data.link);
	};
	
	
	self.init();
};

})(jQuery);
