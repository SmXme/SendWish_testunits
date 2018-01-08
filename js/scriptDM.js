
function init(){

	var origin1 = new google.maps.LatLng(48.436621699999996, 0.0888186);
	// var origin2 = 'Greenwich, England';
	// var destinationA = 'Stockholm, Sweden';
	var destinationA = new google.maps.LatLng(48.3507435, 0.09056970000006004);

	var service = new google.maps.DistanceMatrixService();
	service.getDistanceMatrix(
	  {
	    origins: [origin1],
	    destinations: [destinationA],
	    travelMode: 'DRIVING',
	    // transitOptions: TransitOptions,
	    // drivingOptions: DrivingOptions,
	    // unitSystem: UnitSystem,
	    // avoidHighways: Boolean,
	    // avoidTolls: Boolean,
	  }, callback);

	function callback(response, status) {
	  console.log(response);
	}
}

