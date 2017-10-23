<script type="text/javascript">
  function comparisonChart() {

  	         


			speedings.orderByChild("created_at").once("value", function(snapshot) {

				console.log(snapshot.val());
			    var speedCount = snapshot.numChildren();

			    var data = [];

			    var high = 0;
			    var normal = 0;
			    var low = 0;

			    snapshot.forEach(function(speedSnapshot) {
			    	var speed = speedSnapshot.val().speed;
			    	 if(speed > 130) 
			    	 {
			    	 	high++;
			    	 } else if(speed > 50 && speed < 130)
			    	 {
			    	 	normal++;
			    	 }else {
			    	 	low++;
			    	 }			    	
			    });

			    data.push((high/speedCount) * 100);
			    data.push((normal/speedCount) * 100);
			    data.push((low/speedCount) * 100);

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