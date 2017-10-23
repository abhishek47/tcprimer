<script type="text/javascript">

			 var readings = firebase.database().ref('users/' + $('#uniqid').val() + '/readings');

			 var days = [];
			 var dates = [];
			 var fuelForDay = [];
			 last7Day = moment().subtract(7, 'days').startOf('day');
			 last1Day = moment().subtract(1, 'days').endOf('day');


			readings.orderByChild("created_at").startAt(last7Day.format('YYYY-MM-DD HH:mm:ss')).endAt(last1Day.format('YYYY-MM-DD HH:mm:ss')).once("value", function(snapshot) {

			    var fuelCount = snapshot.numChildren();

			    var total = [];
			    var averages = { };






			    snapshot.forEach(function(fuelSnapshot) {
			    	dates.push(moment(fuelSnapshot.val().created_at).format('YYYY-MM-DD'));
			        days.push(moment(fuelSnapshot.val().created_at).format('YYYY-MM-DD H:mm:ss'));
			    });

			    dates = $.unique(dates);




			    for(var i = 0; i < dates.length; i++)
			    {
			    	fuelForDay.push(groupByDay(snapshot, 'created_at', dates[i]));
			    }


			    for(var i = 0; i < fuelForDay.length; i++)
			    {
			    	fuelsList = fuelForDay[i];
			    	var sum = 0;


			    	if(fuelsList.length <= 1) continue;

			    	for(var j = 0; j < fuelsList.length; j++)
			    	{
		    			sum += parseInt(fuelsList[j].fuel);
			    	}

			    	total.push(sum);
			    }




			    for(var i = 0; i < dates.length; i++)
			    {
			    	averages[dates[i]] = (total[i]/fuelForDay[i].length).toFixed(2);
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

			    console.log(averagesForChart);


			    var weeklyAverage = sum / averagesForChart.length;

			    

			    $('#week-average').html(weeklyAverage.toFixed(2));

			    initWeekSpeedChart(averagesForChart, {{ $vehicle->high_speed }});
			});
			

	</script>