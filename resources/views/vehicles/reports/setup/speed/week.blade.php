<script type="text/javascript">

			 var speedings = firebase.database().ref('users/' + $('#uniqid').val() + '/locations');

			 var days = [];
			 var dates = [];
			 var speedsForDay = [];
			 last7Day = moment().subtract(7, 'days').startOf('day');
			 last1Day = moment().subtract(1, 'days').endOf('day');

			 console.log(last1Day.format('YYYY-MM-DD H:mm:ss'));

			speedings.orderByChild("created_at").startAt(last7Day.format('YYYY-MM-DD HH:mm:ss')).endAt(last1Day.format('YYYY-MM-DD HH:mm:ss')).once("value", function(snapshot) {

			    var speedCount = snapshot.numChildren();

			    var total = [];
			    var averages = { };




			    snapshot.forEach(function(speedSnapshot) {
			    	dates.push(moment(speedSnapshot.val().created_at).format('YYYY-MM-DD'));
			    });

			    dates = $.unique(dates);



			    for(var i = 0; i < dates.length; i++)
			    {
			    	speedsForDay.push(groupByDay(snapshot, 'created_at', dates[i]));
			    }

			    for(var i = 0; i < speedsForDay.length; i++)
			    {
			    	speedsList = speedsForDay[i];
			    	var sum = 0;

			    	if(speedsList.length <= 1) continue;

			    	for(var j = 0; j < speedsList.length; j++)
			    	{
		    			sum += parseInt(speedsList[j].speed);
			    	}

			    	total.push(sum);
			    }



			    for(var i = 0; i < dates.length; i++)
			    {
			    	averages[dates[i]] = total[i]/speedsForDay[i].length;
			    }


			   


			    
			    last7days = getLastDays(7);




			    var averagesForChart = [];
			    for(var i = 0; i < last7days.length; i++)
			    {
			    	
					averagesForChart[i] = averages[last7days[i]];

					if(averagesForChart[i] == null)
					{
						averagesForChart[i] = 0;
					}
			    	
			    }

			    var sum = 0;
			    for(var i = 0; i < averagesForChart.length; i++)
			    {
			    	sum += parseInt(averagesForChart[i]);
			    }



			    var weeklyAverage = sum / averagesForChart.length;

			    

			    $('#week-average').html(weeklyAverage.toFixed(2));

			    initWeekSpeedChart(averagesForChart, {{ $vehicle->high_speed }});
			});
			

	</script>