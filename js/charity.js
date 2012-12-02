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
		displaySingleCharity(self.charityId);
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
		$('#info').html(data.additional_info);
		$('#info').html(data.emailaddress);
		$('#street').html(data.street);
		$('#addr').html(data.cityname + " "+data.State+" "+data.zipcode);
		$('#phone').html(data.phonenumber);
		$('#link a').attr('href', data.website_link);
		$('#link a').html(data.website_link);
	};
	/*
	Country: "USA"
	State: "GA"
	additional_info: ""
	charity_id: "9"
	charity_name: "United Funding Inc"
	city_lat: "34.0393"
	city_long: "-84.2972"
	cityname: "Alpharetta"
	emailaddress: ""
	phonenumber: "(678) 397-0800"
	street: "3600 Mansell Road "
	website_link: ""
	zipcode: "30022
	*/
	self.init();
};

})(jQuery);
