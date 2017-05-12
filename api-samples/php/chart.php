<!DOCTYPE html>
<html>
<head>
  <title>Analytics</title>

<!-- Styles -->
<style>
#chartdiv {
  width   : 100%;
  height    : 258px;
  font-size : 11px;
}	

#chartdiv2 {
  width   : 100%;
  height    : 258px;
  font-size : 11px;
} 


#chartdiv3 {
  width   : 100%;
  height    : 258px;
  font-size : 11px;
} 

#chartdiv4 {
  width   : 100%;
  height    : 258px;
  font-size : 11px;
} 


</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css"/>

<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>



<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chartdiv", {
   "type": "serial",
  "dataLoader": {
    "url": "data.php",
    "format": "json"
  },


  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "count"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "title",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }
} );
</script>

<script>
var chart = AmCharts.makeChart( "chartdiv2", {
   "type": "serial",
  "dataLoader": {
    "url": "user.php",
    "format": "json"
  },


  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "c"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "Username",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }
} );
</script>

<script>
var chart = AmCharts.makeChart( "chartdiv3", {
   "type": "serial",
  "dataLoader": {
    "url": "date.php",
    "format": "json"
  },


  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "c"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "date",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }
} );
</script>

<script>
var chart = AmCharts.makeChart( "chartdiv4", {
   "type": "serial",
  "dataLoader": {
    "url": "time.php",
    "format": "json"
  },


  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "c"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "time",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }
} );
</script>


<!-- HTML -->
<h2>Most Popular Song</h2>
<div id="chartdiv"></div>
<h2>Most Active User</h2>
<div id ="chartdiv2"></div>
<h2>Most Active Day</h2>
<div id = "chartdiv3"></div>
<h2>Most Active Time Of the Day</h2>
<div id="chartdiv4"></div>



</head>
<body>

</body>
</html>			