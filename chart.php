<?php
session_start();
$uid = $_SESSION['userID'];
// echo $uid;
if (isset($uid)) {
?>

<!DOCTYPE html>
<html>
<head>
  <title>Analytics</title>
  <link rel="stylesheet" type="text/css" href="CSS/style.css"/>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Styles -->
<style>
#chartdiv {
  width   : 100%;
  height    : 730px;
  font-size : 11px;
}	

#chartdiv1 {
  width   : 100%;
  height    : 730px;
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

#chartdiv5 {
  width   : 100%;
  height    : 258px;
  font-size : 11px;
}



</style>

<!-- Resources -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>



<!-- Chart code -->
<script>
var chart = AmCharts.makeChart( "chartdiv", {
   "type": "serial",
  "dataLoader": {
    "url": "Analytics_Data/data.php",
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
    "labelRotation": 90,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }
} );
</script>

<script>
var chart = AmCharts.makeChart( "chartdiv1", {
   "type": "serial",
  "dataLoader": {
    "url": "Analytics_Data/watch.php",
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
  "categoryField": "title",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "labelRotation": 90,
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
    "url": "Analytics_Data/user.php",
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
    "valueField": "diff"
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
    "url": "Analytics_Data/date.php",
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

<!-- HTML -->
<div class="nav">
    <div class="col-sm-2 abc"><a href="http://www.innoraft.com/" class="left" style="background: none;"><img src="Images/logo.png"></a></div>
    <div class="col-sm-10">
        <div class="col-sm-2 xyz"><a href="welcome.php" class="a">HOME</a></div>
        <div class="col-sm-2 xyz"><a href="input.php" class="a">SEARCH</a></div>
        <div class="col-sm-2 xyz"><a href="showplaylist.php" class="a">PLAYLIST</a></div>
        <div class="col-sm-2 xyz"><a href="User_Data/publicplaylist.php" class="a">TIMELINE</a></div>
        <div class="col-sm-2 xyz"><a href="chart.php" class="a">ANALYTICS</a></div>
        <div class="col-sm-2 xyz"><a href="logout.php" class="a"><i class="fa fa-sign-out" aria-hidden="true"></i>SIGN OUT</a></div>
      </div>
</div>

<h2 style="margin-top: 94px;">Most Popular Video</h2>
<div id="chartdiv"></div>
<h2>Most Watch Video</h2>
<div id="chartdiv1"></div>
<h2>Most Active User Of The Day</h2>
<div id ="chartdiv2"></div>
<h2>Most Active Day</h2>
<div id = "chartdiv3"></div>


</head>
<body>

</body>
</html>	
<?php

}

else

{
  {  
$server = $_SERVER['SERVER_NAME'];
header('Location: http://'.$server.'/logout.php');
}
}

?>	
