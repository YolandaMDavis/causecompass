
function populateMap(charityList){
	var charityMarkers = new Array();
	var charity;
	
	$(charityList).each(function(){		
		charity = new Array();
		charity.push(this.charity_name);
		charity.push(this.city_lat);
		charity.push(this.city_long);
		charity.push(this.street);
		charity.push(this.cityname);
		charity.push(this.State);
		charity.push(this.phonenumber);
		charityMarkers.push(charity);
	});	
	return charityMarkers;
}

function renderGoogleMap(mapId,charityList){

	var markers = populateMap(charityList);
	
	var myOptions = {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    };
	
    var map = new google.maps.Map(document.getElementById("charityMap"),myOptions);
    var infowindow = new google.maps.InfoWindow(); 
    var marker, i;
    var bounds = new google.maps.LatLngBounds();

    for (i = 0; i < markers.length; i++) { 
        var pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(pos);
        marker = new google.maps.Marker({
            position: pos,
            map: map,
			title: markers[i][0]
        });
        
		google.maps.event.addListener(marker, 'click', function(marker, i) 
		{
            return function() {
                infowindow.setContent(markers[i][0]);
                infowindow.open(map, marker);
            }
        });
    }	
    map.fitBounds(bounds);		
}

function displayCharityList(charityList){
	
	$(charityList).each(function()
	{
		var row = '<tr><td>' + '<div id="charity_'+this.charity_id+'">' 
				   + '<a href="charirty/?c='+this.charity_id+'">' + this.charity_name + '</a>'+
				   '<br>' +this.street + 
				  '<br>' + this.cityname + ', '+ this.State + '<br>' + 
				  this.phonenumber + '<br>' +
				  '</div>' + '</td></tr>';
		$('#charityTable').append(row);
				
	});	
	
}


function displaySearchResults(state,donationType,causeId){

    var url = 'http://npbendre.com/causecompass/api.php?action=get_charity_list&cause_id='+causeId+'&state='+state+'&charity_type='+donationType;
	
	$.ajax(
	{
		url: url,
		dataType: "jsonp",
		success: function(data){
				renderGoogleMap('googleMap',data);
				displayCharityList(data);
				$('#mapResults').removeClass('hide');
			},
		error: function(){
			alert("Error loading the locations");
		}
	});	
	
}
