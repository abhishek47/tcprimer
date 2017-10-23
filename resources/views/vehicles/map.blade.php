
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Track My Vehicle | Technocoup</title>
    <link rel="stylesheet" type="text/css" href="/css/fullmap.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6Sb4PjlovzWwseUrvAKFlu2gzuE3i1E&libraries=drawing,places,geometry"></script>
      
  
  </head>

  <body>
     <div id="nav-control"  class="map-control">
        <a href="/vehicles/{{ $vehicle->uniqid }}">Go Back</a>
      </select>
    </div>

    <div id="vehicle-selector-control"  class="vehicle-control">
      <p style="text-align: center;font-size: 20px;">{{ $vehicle->plate_no }}</p>
     </div>

    <div id="map"></div>

    <input type="hidden" id="uniqid" value="{{ substr($vehicle->uniqid, 2)   }}">


      <script src="{{ asset('js/moment.js') }}"></script>


    <script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>

    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyAu6Sb4PjlovzWwseUrvAKFlu2gzuE3i1E",
        authDomain: "technocoup-165903.firebaseapp.com",
        databaseURL: "https://technocoup-165903.firebaseio.com",
        projectId: "technocoup-165903",
        storageBucket: "technocoup-165903.appspot.com",
        messagingSenderId: "35617699424"
      };
      firebase.initializeApp(config);
    </script>
    <script src="/js/fullmap.js"></script>

   <script type="text/javascript">
    $(window).load(function(){

            	



        		initializeMap();

               

            });

    </script>
   
  </body>
</html>