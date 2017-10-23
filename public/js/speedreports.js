/**
Template Name: Ubold Dashboard
Author: CoderThemes
Email: coderthemes@gmail.com
File: Chartjs
*/

var ChartJs = function() {};


$.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs;

var respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

    ctx.canvas.height = 300;


        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
}
   


function initMonthlyChart(data, high_speed)
{
     
        //creating lineChart
        var lineChart = {
            labels: getLastDays(30),
            datasets: [
                {
                    label: "Avg. Speed (Km/h)",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#5d9cec",
                    borderColor: "#5d9cec",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#5d9cec",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#5d9cec",
                    pointHoverBorderColor: "#eef0f2",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: data
                }
            ]
        };

        var lineOpts = {
            scales: {
                yAxes: [{
                    ticks: {
                        max: high_speed,
                        min: 0,
                        stepSize: 20
                    }
                }]
            },
            responsive: true,
            maintainAspectRatio: false
        };

        this.respChart($("#monthly-chart"),'Line',lineChart, lineOpts);
}


function initDailySpeedChart(labels, data, high_speed)
{
     
        //creating lineChart
        var lineChart = {
            labels: labels,
            datasets: [
                {
                    label: "Speed (Km/h)",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#85465b",
                    borderColor: "#85465b",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#85465b",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#85465b",
                    pointHoverBorderColor: "#eef0f2",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: data
                }
            ]
        };

        var lineOpts = {
            scales: {
                yAxes: [{
                    ticks: {
                        max: high_speed,
                        min: 0,
                        stepSize: 20
                    }
                }]
            },
            responsive: true,
            maintainAspectRatio: false
        };

        this.respChart($("#dailySpeedChart"),'Line',lineChart, lineOpts);
}


function initSpeedingComparison(data)
{
     //donut chart
        var donutChart = {
            labels: [
                "High Speed (%)",
                "Normal Speed (%)",
                "Low Speed (%)"
            ],
            datasets: [
                {
                    data: data,
                    backgroundColor: [
                        "#0059b3",
                        "#5fbeaa",
                        "#ff9900"
                    ],
                    hoverBackgroundColor: [
                        "#0059b3",
                        "#5fbeaa",
                        "#ff9900"
                    ],
                    hoverBorderColor: "#fff"
                }]
        };

       
        this.respChart($("#speed-comparison"),'Doughnut',donutChart);
}


function initWeekSpeedChart(data, high_speed)
{

        //barchart
        var barChart = {
            labels: getLastDays(7),
            datasets: [
                {
                    label: "Avg. Speed (Km/h)",
                    backgroundColor: "rgba(95, 190, 170, 0.3)",
                    borderColor: "#5fbeaa",
                    borderWidth: 1,
                    hoverBackgroundColor: "rgba(95, 190, 170, 0.6)",
                    hoverBorderColor: "#5fbeaa",
                    data: data
                }
            ]
        };

        var barOpts = {
            scales: {
                yAxes: [{
                    ticks: {
                        max: high_speed,
                        min: 0,
                        stepSize: 20
                    }
                }]
            },
            responsive: true,
            maintainAspectRatio: false
        };
        this.respChart($("#weekSpeedChart"),'Bar',barChart, barOpts);
}


















