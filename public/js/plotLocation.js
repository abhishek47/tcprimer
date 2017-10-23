var apiKey = 'AIzaSyAp_qwzD26z0cb0JKq5iVvBvsct8TUQ5rE';
var snappedPoint;
var marker;

var map;

function initializeMap() { 

 var mapOptions = {
    zoom: 17,
    center: {lat: 0, lng: 0}
  };

  map = new google.maps.Map(document.getElementById('gmaps-basic'), mapOptions);

var database = firebase.database();
  
  	
  database.ref('/users/' + $('#uniqid').val() + '/locations').limitToLast(1).on('child_added', function(snapshot) {
    
    newPoint = snapshot.val();
    var point = new google.maps.LatLng(newPoint.lat, newPoint.lng);
     

    runSnapToRoad(point);

  // ... 
  });

}


// Snap a user-created polyline to roads and draw the snapped path
function runSnapToRoad(point) {

  $.get('https://roads.googleapis.com/v1/snapToRoads', {
    interpolate: true,
    key: apiKey,
    path: point.toUrlValue()
  }, function(data) {
      processSnapToRoadResponse(data)
  });

}


// Store snapped polyline returned by the snap-to-road service.
function processSnapToRoadResponse(data) {
  snappedCoordinates = [];
  for (var i = 0; i < data.snappedPoints.length; i++) {
    var latlng = new google.maps.LatLng(
        data.snappedPoints[i].location.latitude,
        data.snappedPoints[i].location.longitude);
    snappedCoordinates.push(latlng);
  }

   snappedPoint = snappedCoordinates[snappedCoordinates.length-1];
   
   map.setCenter(snappedPoint);

    var anchor = new google.maps.Point(20,25),
    size = new google.maps.Size(32,32),
    origin = new google.maps.Point(0.5,0.5);
        var icon = new google.maps.MarkerImage('../images/truck32.png',size,origin,anchor);

     

     marker = new google.maps.Marker({
          position: snappedPoint,
          map: map,
          icon: icon,
          flat: true,
          title: 'Current Position!'
        });

     $('#loc-time').html(moment(newPoint.created_at).fromNow());

}


