<!DOCTYPE html>
<html>
<head>
  <title>Analytics</title>

<!-- Styles -->
<style>
#chartdiv {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
}	

#chartdiv2 {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
} 


</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>



<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chartdiv", {
   "type": "serial",
  "dataLoader": {
    "url": "date.php",
    "format": "json"
  },


  "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.85,
        "lineAlpha": 0.1,
        "type": "column",
        "topRadius":1,
        "valueField": "c"
    }],
    "depth3D": 40,
  "angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "Username",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":0,
        "gridAlpha":0

    },
    "export": {
      "enabled": true
     }

}, 0);
</script>



<!-- HTML -->
<h2>Most Active User </h2>
<div id="chartdiv"></div> 



</head>
<body>

</body>
</html>			