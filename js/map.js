
function populateMap(charityList){
	var charityMarkers = new Array();
	var charity;
	
	$(charityList).each(function(){		
		charity = new Array();
		charity.push(this.name);
		charity.push(this.lat);
		charity.push(this.long);
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
		var row = '<tr><td>' + '<div id="charity_'+this.id+'">' 
				   + '<a href="charirty/?c='+this.id+'">' + this.name + '</a>'+
				  '<br>' + this.city + ', '+ this.state + '<br>' + '</div>' + '</td></tr>';
		$('#charityTable').append(row);
				
	});	
	
}

function displaySearchResults(charityList){
	renderGoogleMap('googleMap',charityList);
	displayCharityList(charityList);
	
}

function getDummyCharities(){

	return [{id:1,name:'Salvation ',short_desc:'Giving organization',city:'Atlanta',state:'Georgia',lat:-33.890542,long:151.274856},
	{id:2,name:'Goodwill',short_desc:'Giving organization',city:'Atlanta',state:'Georgia',lat:-33.923036,long:151.259052}];

}