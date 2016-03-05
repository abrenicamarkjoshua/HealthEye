<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyC82wpZoziHmncZlTrySyPjtP0wWDcQAIc"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(14.3264, 120.9361), 20);
	
      }
    }

    //]]>
    </script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<script>
$(function () {
  var chart;
  $(document).ready(function() {
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Communicable Disease Cases , 2016'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            percentageDecimals: 1
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Disease Cases',
            data: [
                ['Disease 1', 15.0],
                ['Disease 2', 13.8],
                {
                    name: 'Disease 3',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Disease 4', 8.5],
                ['Disease 5', 6.2],
                ['Disease 6', 0.7],
                ['Disease 7', 15.0],
                ['Disease 8', 15.0],
                ['Disease 9', 13.],
            ]
        }]
    });
});
$(function () {
    var barOptions = {
        chart: {
            renderTo: 'containery',
            width: 1100,
            height: 850,
            type: 'bar'
        },
		 title: {
            text: 'Communicable Disease Cases, 2016'
        },
        xAxis: {
            categories: ['Hospital 1','Hospital 2', 'Hospital 3', 'Hospital 4', 'Clinic 1', 'Clinic 1', 'Clinic 2', 'Clinic 3', 'Clinic 4', 'Iba pa', 'ewan']
        },
        series: [{
            name: 'Disease 1',
            data: [1057, 1858, 1643, 1570, 1115, 107, 31, 635, 203, 1322, 1222]
        }, {
            name: 'Disease 2',
            data: [1047, 1484, 1591, 1479, 1677, 33, 156, 947, 408, 6, 2]
        }, {
            name: 'Disease 3',
            data: [1388, 1115, 1742, 1757, 1290, 973, 914, 1054, 732, 34, 2]
        }, {
            name: 'Disease 4',
            data: [1836, 1509, 1255, 1760, 1621, 973, 914, 1054, 732, 34, 2]
        }, {
            name: 'Disease 5',
            data: [115, 162, 150, 187, 172, 973, 914, 1054, 732, 34, 2]
        }, {
            name: 'Disease 6',
            data: [1566, 1116, 1446, 1749, 1439, 973, 914, 1054, 732, 34, 2]
        }]
    };

    barChart = new Highcharts.Chart(barOptions);
    barChart.series[0].hide();
    barChart.series[0].show();
});
$(function () {
    var barOptionsx = {
        chart: {
            renderTo: 'containerx',
            width: 1100,
            height: 550,
            type: 'column'
        },
		 title: {
            text: 'Communicable Disease Cases, 2016'
        },
        xAxis: {
            categories: ['Hospital 1','Hospital 2', 'Hospital 3', 'Hospital 4', 'Clinic 1', 'Clinic 1', 'Clinic 2', 'Clinic 3', 'Clinic 4', 'Iba pa', 'ewan']
        },
        series: [{
            name: 'Disease 1',
            data: [1057, 1858, 1643, 1570, 1115, 107, 31, 635, 203, 1322, 1222]
        }, {
            name: 'Disease 2',
            data: [1047, 1484, 1591, 1479, 1677, 33, 156, 947, 408, 6, 2]
        }, {
            name: 'Disease 3',
            data: [1388, 1115, 1742, 1757, 1290, 973, 914, 1054, 732, 34, 2]
        }, {
            name: 'Disease 4',
            data: [1836, 1509, 1255, 1760, 1621, 973, 914, 1054, 732, 34, 2]
        }, {
            name: 'Disease 5',
            data: [115, 162, 150, 187, 172, 973, 914, 1054, 732, 34, 2]
        }, {
            name: 'Disease 6',
            data: [1566, 1116, 1446, 1749, 1439, 973, 914, 1054, 732, 34, 2]
        }]
    };

    barChartx = new Highcharts.Chart(barOptionsx);
    barChart.series[0].hide();
    barChart.series[0].show();
});
});


</script>

<div id="containery" style="min-width: 310px; height: 850px; margin: 0 auto"></div>
<div id="containerx" style="min-width: 310px; height: 550px; margin: 0 auto"></div>
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>