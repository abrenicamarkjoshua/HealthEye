
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<label>mag ccheck si user ng mga fields kung anong gusto nyang makitang report bago mag view report.</br> Vice versa na po ung ibang display ng charts hehe. slamat sir</label>
<form class="form-horizontal">
<div class="control-group"> 
<label class="control-label"><input class="input-large span5" type="checkbox"/> Report: </label> 
<div class="controls">
<select class="input-large span6"name='d_report' id='age'>
<option value='Monthly'>Monthly</option>
<option value='Yearly'>Yearly</option>
</select>
                                </div> 
                              </div>
							  <div class="control-group"> 
<label class="control-label"><input class="input-large span5" type="checkbox"/>Month: </label> 
<div class="controls">
<select class="input-large span6"name='d_month' id='age'>
<option value='January'>January</option>
<option value='Febuary'>Febnuary</option>
<option value='March'>March</option>
<option value='April'>April</option>
<option value='May'>May</option>
<option value='June'>June</option>
<option value='July'>July</option>
<option value='August'>August</option>
<option value='September'>September</option>
<option value='October'>October</option>
<option value='November'>November</option>
<option value='December'>December</option>

</select>
                                </div> 
                              </div> 
 <div class="control-group"> 
<label class="control-label"><input class="input-large span5" type="checkbox"/> Disease Name: </label> 
<div class="controls">
<select class="input-large span6"name='d_name' id='name'>
<?php $querycheck= mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_diseases"); 
 while($row = mysqli_fetch_assoc($querycheck)){ 
 $dn = $row['disease_name'];  
 $dd = $row['disease_description'];  
 $dco = $row['disease_id'];  
 $dca = $row['disease_category'];
echo "<option value='$dco'>[$dco] $dn</option>";}?></select>
                                </div> 
                              </div><div class="control-group"> 
<label class="control-label"><input class="input-large span5" type="checkbox"/> Gender: </label> 
<div class="controls">
<select class="input-large span6"name='d_gender' id='age'>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
</select>
                                </div> 
                              </div>
  <div class="control-group"> 
<label class="control-label"><input class="input-large span5" type="checkbox"/> Barangay: </label> 
<div class="controls">
<select class="input-large span6"name='d_age[]' id='age'>
<option value='Burol'>Burol</option>
<option value='Langkaan I'>Langkaan I</option>
<option value='Langkaan II - Sitio Kubuhan'>Langkaan II - Sitio Kubuhan</option>
<option value='Langkaan II - Proper'>Langkaan II - Proper</option>
<option value='Paliparan III - Mabuhay City'>Paliparan III - Mabuhay City</option>
<option value='Paliparan III - Site'>Paliparan III - Site</option>
<option value='Sabang'>Sabang</option>
<option value='Salawag - Golden City'>Salawag - Golden City</option>
<option value='Salawag - Armstrong'>Salawag - Armstrong</option>
<option value='Salawag - San Marino'>Salawag -San Marino</option>
<option value='Salawag - Proper'>Salawag - Proper</option>
<option value='Salitran I'>Salitran I</option>
<option value='Salitran II'>Salitran II</option>
<option value='Salitran III'>Salitran III</option>
<option value='Salitran IV - Andreaville'>Salitran IV - Andreaville</option>
<option value='Sampaloc I'>Sampaloc I</option>
<option value='Sampaloc II'>Sampaloc II</option>
<option value='Sampaloc III'>Sampaloc III</option>
<option value='Sampaloc IV - Bautista East'>Sampaloc IV - Bautista East</option>
<option value='Sampaloc IV - Bautista West'>Sampaloc IV - Bautista West</option>
<option value='Sampaloc IV - Bahay Pangarap'>Sampaloc IV - Bahay Pangarap</option>
<option value='Sampaloc IV - Talisayan'>Sampaloc IV - Talisayan</option>
<option value='Sampaloc V'>Sampaloc V</option>
<option value='San Jose'>San Jose</option>
<option value='San Agustin I'>San Agustin I</option>
<option value='San Agustin II'>San Agustin II</option>
<option value='San Agustin III'>San Agustin III</option>
<option value='Zone I'>Zone I</option>
<option value='Zone I - A'>Zone I - A</option>
<option value='Zone II'>Zone II</option>
<option value='Zone III'>Zone III</option>
<option value='Zone IV'>Zone IV</option>
</select>
                                </div> 
                              </div>
							 <div class="control-group"> 
<label class="control-label"><input class="input-large span5" type="checkbox"/> Age Range: </label> 
<div class="controls">
<select class="input-large span6"name='d_age[]' id='age'>
<option value='Under 1'>Under 1</option>
<option value='1-4'>1-4</option>
<option value='5-9'>5-9</option>
<option value='10-14'>10-14</option>
<option value='15-19'>15-19</option>
<option value='20-24'>20-24</option>
<option value='25-29'>25-29</option>
<option value='30-34'>30-34</option>
<option value='35-39'>35-39</option>
<option value='40-44'>40-44</option>
<option value='45-49'>45-49</option>
<option value='50-54'>50-54</option>
<option value='55-59'>55-59</option>
<option value='60-64'>60-64</option>
<option value='65-69'>65-69</option>
<option value='70 and above'>70 and above</option>
</select>
                                </div> 
                              </div> 
<button type="button" class="btn btn-primary"onclick="addElement()"value="+  Add New Row">View Report</button>		
</form>					  
				<label>pag ka pindot ng view report na button mag lalabas ng po ng chart</label>			  
				<label>by default view sa baba, sguro po naka carousel na ibat ibang charts hehe</label>			  
<!-- START PIE CHART -->
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
            text: 'Morbidity of Communicable Diseases [Barangay1] (Monthly/Yearly)'
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
                ['Disease 9', 1.0],
                ['Disease 10', 1.5],
                ['Disease 11', 3.0],
                ['Disease 12', 2.5],
                ['Disease 13', 2.5],
                ['Disease 14', 1.5],
                ['Disease 15', 1.0],
                ['Disease 16', 0.5],
                ['Disease 17', 0.5],
                ['Disease 18', 2.0],
                ['Disease 19', 4.0],
                ['Disease 20', 2.0],
                ['Disease 21', 2.0],
                ['Disease 22', 2.0],
            ]
        }]
    });
});
<!-- END PIE CHART -->

<!-- START BAR CHART 1-->
$(function () {
    var barOptions = {
        chart: {
            renderTo: 'containery',
            width: 900,
            height: 850,
            type: 'bar'
        },
		 title: {
            text: 'Morbidity of Disease 1 (Monthly/Yearly)'
        },
        xAxis: {
            categories: ['Barangay 1','Barangay 2', 'Barangay 3', 'Barangay 4', 'Barangay 5', 'Barangay 6', 'Barangay 7', 'Barangay 8', 'Barangay 9', 'Barangay 10', 'Barangay 11']
        },
        series: [{
            name: 'Disease 1',
            data: [57, 58, 643, 570, 115, 107, 31, 635, 203,322, 222]
        }, {
            name: 'Disease 2',
            data: [47, 484, 591, 479, 677, 33, 156, 47, 408, 6, 2]
        }, {
            name: 'Disease 3',
            data: [88, 115, 742, 757, 290, 73, 914, 54, 732, 34, 2]
        }, {
            name: 'Disease 4',
            data: [36, 509, 255, 60, 621, 73, 14, 54, 732, 34, 2]
        }, {
            name: 'Disease 5',
            data: [115, 162, 150, 187, 172, 973, 914, 54, 32, 34, 2]
        }, {
            name: 'Disease 6',
            data: [566, 116, 446,79, 439, 73, 14, 54, 732, 34, 2]
        }, {
            name: 'Disease 7',
            data: [566, 116, 446,79, 439, 73, 14, 54, 732, 34, 2]
        }, {
            name: 'Disease 8',
            data: [566, 116, 446,79, 439, 73, 14, 54, 732, 34, 2]
        }, {
            name: 'Disease 9',
            data: [566, 116, 446,79, 439, 73, 14, 54, 732, 34, 2]
        }, {
            name: 'Disease 10',
            data: [566, 116, 446,79, 439, 73, 14, 54, 732, 34, 2],
        }]
    };

    barChart = new Highcharts.Chart(barOptions);
    barChart.series[0].hide();
    barChart.series[0].show();
});
<!-- END BAR CHART 1-->


<!-- START BAR CHART 2 -->
<!-- 
<!-- 
-->
$(function () {
    var barOptionsx = {
        chart: {
            renderTo: 'containerx',
            width: 900,
            height: 550,
            type: 'column'
        },
		 title: {
            text: 'Morbidity of Communicable Diseases Gender Based for Barangay1 (Monthly/Yearly)'
        },
        xAxis: {
           categories: ['Disease 1','Disease 2', 'Disease 3', 'Disease 4', 'Disease 5', 'Disease 6', 'Disease 7', 'Disease 8', 'Disease 9', 'Disease 10', 'Disease 11','Disease 12','Disease 13','Disease 14','Disease 15','Disease 16','Disease 17','Disease 18','Disease 19','Disease 20','Disease 21','Disease 22']
        },
        series: [ {
            name: 'Male',
            data: [15, 1, 0, 87, 12, 93, 14, 54, 32, 34, 2,6,16,23,7,12,25,64,7,22,28,35]
        }, {
            name: 'Female',
            data: [19, 62, 10, 17, 72, 3, 4, 14, 12, 34, 22,0,46,0,9,0,30,44,0,29,18,15]
        }]
    };

    barChartx = new Highcharts.Chart(barOptionsx);
    barChart.series[0].hide();
    barChart.series[0].show();
});
<!-- END BAR CHART 2-->
});


</script>

<div id="containery" style="min-width: 310px; height: 850px; margin: 0 auto"></div>
<div id="containerx" style="min-width: 310px; height: 550px; margin: 0 auto"></div>
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>