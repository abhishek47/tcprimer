<script type="text/javascript">

			 var speedings = firebase.database().ref('users/' + $('#uniqid').val() + '/locations');

			 var days = [];
			 var dates = [];
			 var speedsForDay = [];
			 last30Day = moment().subtract(30, 'days').startOf('day');
			 last1Day = moment().subtract(1, 'days').endOf('day');

			 console.log(last1Day.format('YYYY-MM-DD H:mm:ss'));

			speedings.orderByChild("created_at").startAt(last30Day.format('YYYY-MM-DD HH:mm:ss')).endAt(last1Day.format('YYYY-MM-DD HH:mm:ss')).once("value", function(snapshot) {

			    var speedCount = snapshot.numChildren();

			    var total = [];
			    var averages = { };




			    snapshot.forEach(function(speedSnapshot) {
			    	dates.push(moment(speedSnapshot.val().created_at).format('YYYY-MM-DD'));
			        days.push(moment(speedSnapshot.val().created_at).format('YYYY-MM-DD H:mm:ss'));
			    });

			    dates = $.unique(dates);
			    days = $.unique(days);



			    for(var i = 0; i < days.length; i++)
			    {
			    	speedsForDay.push(groupByDay(snapshot, 'created_at', days[i]));
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



			    for(var i = 0; i < days.length; i++)
			    {
			    	averages[dates[i]] = total[i]/speedsForDay[i].length;
			    }


			   


			    
			    last30days = getLastDays(30);




			    var averagesForChart = [];
			    for(var i = 0; i < last30days.length; i++)
			    {
			    	
					averagesForChart[i] = averages[last30days[i]];

					if(averagesForChart[i] == null)
					{
						averagesForChart[i] = 0;
					}
			    	
			    }

			    var sum = 0;
			    for(var i = 0; i < averagesForChart.length; i++)
			    {
			    	sum += averagesForChart[i];
			    }



			    var monthlyAverage = sum / averagesForChart.length;

			    

			    $('#month-average').html(monthlyAverage.toFixed(2));

			    initMonthlyChart(averagesForChart, {{ $vehicle->high_speed }});
			});
			

	</script>