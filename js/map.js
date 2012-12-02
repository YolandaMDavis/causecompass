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
    var marker, i;
    var bounds = new google.maps.LatLngBounds();
	
	var map = new google.maps.Map(document.getElementById("charityMap"),{	    
        mapTypeId: google.maps.MapTypeId.HYBRID,
        mapTypeControl: false
	});
	
	zoomChangeBoundsListener = 
    google.maps.event.addListenerOnce(map, 'bounds_changed', function(event) {
        if (this.getZoom()){
            this.setZoom(7);
        }
	});

	var infowindow = new google.maps.InfoWindow(); 

    for (i = 0; i < markers.length; i++) { 
        var pos = new google.maps.LatLng(markers[i][1], markers[i][2]);		
        bounds.extend(pos);
        marker = new google.maps.Marker({
            position: pos,
			animation: google.maps.Animation.DROP,
            map: map,
			title: markers[i][0]
        });
        
		google.maps.event.addListener(marker, 'click', function() {
			var marker = this;
			var latLng = marker.getPosition();
			var href = $("#charityTable a:contains('"+marker.getTitle()+"')").attr("href");
			infowindow.setContent('<table><tr><td><a href="'+href+'">'+marker.getTitle()+'</a></td></tr></table>');
			infowindow.setSize(new google.maps.Size(50,50));
			infowindow.open(map, marker);
			}
		);		
    }	
    map.fitBounds(bounds);
	
	google.maps.event.addListener(map, 'click', function() {
      infowindow.close();
    });
		
}

function displayCharityList(charityList,donationType){
	
	$('#charityTable').empty();
	$(charityList).each(function()
	{
		var row = '<tr><td>' + '<div id="charity_'+this.charity_id+'">' 
				   + '<a href="charity/?c='+this.charity_id+'&t='+donationType+'">' + this.charity_name + '</a>'+
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
				displayCharityList(data,donationType);
				$('#mapResults').removeClass('hide');
			},
		error: function(){
			alert("Error loading the locations");
		}
	});	
	
}
