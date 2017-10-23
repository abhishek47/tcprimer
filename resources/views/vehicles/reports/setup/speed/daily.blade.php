<script type="text/javascript">
  function dailyChart() {

  	         startOfDay = moment($('#daily-date').val()).startOf('day');
			 endOfDay = moment($('#daily-date').val()).endOf('day');

			 $('#daily-date-label').html($('#daily-date').val());


			 console.log(startOfDay.format('YYYY-MM-DD H:mm:ss'));
			 console.log(endOfDay.format('YYYY-MM-DD H:mm:ss'));


			speedings.orderByChild("created_at").startAt(startOfDay.format('YYYY-MM-DD HH:mm:ss')).endAt(endOfDay.format('YYYY-MM-DD HH:mm:ss')).once("value", function(snapshot) {

				console.log(snapshot.val());
			    var speedCount = snapshot.numChildren();

			    var total = 0;
			    var labels = [];
			    var data = [];

			    snapshot.forEach(function(speedSnapshot) {
			    	time = moment(speedSnapshot.val().created_at).format('H:mm a');
			    	total += parseInt(speedSnapshot.val().speed);	
					labels.push(time);
					data.push(parseInt(speedSnapshot.val().speed)); 			    	
			    });
			    
			    console.log(labels);
			    console.log(data);
			    

			    var dailyAverage = total / speedCount;

			    

			    $('#daily-average').html(dailyAverage.toFixed(2));

			    initDailySpeedChart(labels, data, {{ $vehicle->high_speed }});
			});
  }


  dailyChart();

			 
			

	</script>