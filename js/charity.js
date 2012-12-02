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
		console.log("charity init");
		self.ajaxUrl = "http://npbendre.com/causecompass/api.php?action=get_charity&charity_id=";
		self.charityId = id;
		self.ajax();
	};
	
	self.ajax = function(){
		console.log("pulling ajax from: "+self.ajaxUrl);
		$.ajax({
			url: self.ajaxUrl + self.charityId,
			dataType: "jsonp",
			success: function(data){
				console.log("ajax success!");
				self.populate(data[0]);
			},
			error: function(j,t,e){
				console.log("error loading charity: "+self.charityId);
				//window.location.href = "/";
			}
		});
	};
	
	self.populate = function(data){
		console.log("populating data");
		console.log(data);
		$('#name').html(data.charity_name);
		$('#desc').html(data.additional_info);
		$('#phone').html(data.phonenumber);
		$('#link a').attr('href', data.website_link);
		$('#link a').html(data.website_link);
	};
	
	
	self.init();
};

})(jQuery);
