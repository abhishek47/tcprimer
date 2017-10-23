var apiKey = 'AIzaSyDcV3dvZfjny181wWJGCl9otO-o2_0mHZM';




var completeDistance = 0;
var totalTime = 0;



function calculateDistanceTravelled(vehicle) { 

	completeDistance = 0;

	var points = [];
  var database = firebase.database();

  var timeStart, timeEnd;

  
  	
  database.ref('/users/' + vehicle + '/locations').once('value', function(snapshot) {

  	var points = [];

  	values = snapshot.val();

  	var count = 0;

  	snapshot.forEach(function(newPoint) {
  		newPoint = newPoint.val();
     	count++;
     	point = new google.maps.LatLng(newPoint.lat, newPoint.lng);
  		points.push(point);
	});
  	
    
    timeStart = moment(values[Object.keys(values)[0]].created_at); 
    timeEnd = moment(values[Object.keys(values)[count-1]].created_at); 


   $('#time-travelled').html(parseInt(moment.duration(timeEnd.diff(timeStart)).asHours()));
     


    callDistanceApi(points); 



  });




}


function callDistanceApi(points)
{
    
   
  console.log(points);
	if(points.length >= 2) {
		size = points.length;
		for (i=0; i<size-1; i++) {


		    var directionsService = new google.maps.DirectionsService();
			var request = {
			    origin: points[i], // LatLng|string
			    destination: points[i+1], // LatLng|string
			    travelMode: 'DRIVING'
			};

			directionsService.route( request, function( response, status ) {

			    if ( status === 'OK' ) {
			        var point = response.routes[ 0 ].legs[ 0 ];

			      	console.log("Distance " + i + " : " + point.distance.text);
			        

			        completeDistance +=  point.distance.value;

			        console.log("Complete Distance : " + completeDistance);


			        $('#complete-distance').html(completeDistance);
			    }
			} );
		    
		}

   }

   

		
}


