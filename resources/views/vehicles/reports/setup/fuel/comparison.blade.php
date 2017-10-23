<script type="text/javascript">
  function comparisonChart() {



			readings.orderByChild("created_at").once("value", function(snapshot) {

			    var fuelCount = snapshot.numChildren();

			    var data = [];

			    var high = 0;
			    var normal = 0;
			    var low = 0;

			    snapshot.forEach(function(fuelSnapshot) {
			    	var fuel = fuelSnapshot.val().fuel;
			    	 if(fuel > 130) 
			    	 {
			    	 	high++;
			    	 } else if(fuel > 50 && fuel < 130)
			    	 {
			    	 	normal++;
			    	 }else {
			    	 	low++;
			    	 }			    	
			    });

			    data.push((high/fuelCount) * 100);
			    data.push((normal/fuelCount) * 100);
			    data.push((low/fuelCount) * 100);

			    if(high > normal && high > low)
			    {
			       $('#speed-comparison-label').html("High");
			    } else if(normal > high && normal > low) {
			      $('#speed-comparison-label').html("General");	
			    } else {
			    	$('#speed-comparison-label').html("Low");
			    }

			  

			    initSpeedingComparison(data);
			});
  }


  comparisonChart();

			 
			

	</script>