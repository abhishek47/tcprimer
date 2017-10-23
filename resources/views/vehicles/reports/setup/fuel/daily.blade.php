<script type="text/javascript">
  function dailyChart() {


  	         startOfDay = moment($('#daily-date').val()).startOf('day');
			 endOfDay = moment($('#daily-date').val()).endOf('day');

			 $('#daily-date-label').html($('#daily-date').val());




			readings.orderByChild("created_at").startAt(startOfDay.format('YYYY-MM-DD HH:mm:ss')).endAt(endOfDay.format('YYYY-MM-DD HH:mm:ss')).once("value", function(snapshot) {

				console.log(snapshot.val());
			    var fuelCount = snapshot.numChildren();

			    var total = 0;
			    var labels = [];
			    var data = [];

			    snapshot.forEach(function(fuelSnapshot) {
			    	time = moment(fuelSnapshot.val().created_at).format('H:mm a');
			    	total += parseInt(fuelSnapshot.val().fuel);	
					labels.push(time);
					data.push(parseInt(fuelSnapshot.val().fuel)); 			    	
			    });
			    
			    

			    var dailyAverage = total / fuelCount;

			    

			    $('#daily-average').html(dailyAverage.toFixed(2));

			    initDailySpeedChart(labels, data, {{ $vehicle->high_speed }});
			});
  }


  dailyChart();

			 
			

	</script>