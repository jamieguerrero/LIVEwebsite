window.onload = function() {
    var myOptions = {
        center: new google.maps.LatLng(43.783551,-79.186397),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        streetViewControl: false,
    };

    var map = new google.maps.Map(document.getElementById("map"), myOptions);

   	var jcIcon = new google.maps.MarkerImage('images/marker.png', null, null, null);

	var marker = new google.maps.Marker({
	position: new google.maps.LatLng(43.783551,-79.186397),
	map: map,
	clickable: false,
	icon: jcIcon
	});
}