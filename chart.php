<!DOCTYPE html>
<html>
<head>
  <title>Analytics</title>
      <link rel="stylesheet" type="text/css" href="CSS/style.css"/>

<!-- Styles -->
<style>
#chartdiv {
  width   : 100%;
  height    : 565px;
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
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>



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

<!-- HTML -->
<div class = "navbar">
<button class = "button"><a href = "logout.php" class = "a"><i class="fa fa-sign-out" aria-hidden="true"></i>
SIGN OUT</button></a></button>
<a href="chart.php" class="a"><button class="button">ANALYTICS</button></a>
<a href="input.php" class="a"><button class="button">SEARCH</button></a>
<a href="showplaylist.php" class="a"><button class="button">PLAYLIST</button></a>
<a href="welcome.php" class="a"><button class="button">HOME</button></a>
<a href = "#" class = "left"><img src="Images/logo.png"></a>
</div>

<h2 style="margin-top: 94px;">Most Popular Song</h2>
<div id="chartdiv"></div>
<h2>Most Active User</h2>
<div id ="chartdiv2"></div>
<h2>Most Active Day</h2>
<div id = "chartdiv3"></div>
<h2>Most Active Time Of the Day</h2>
<!-- <div id="chartdiv5"></div> -->
<form action="time.php" name="form" method="POST" id="form">
 <fieldset>
          <legend>User Inputs</legend>
          <p>
             <label>From :</label>
             <input type="time" name="from" id="from" >
                    <p>
             <label>To :</label>
               <input type="time" name="to" id="to">
          </p>

          <label>ON</label>
            <input type="date" name="date" id="date" placeholder="YYYY-MM-DD"><br>

            <input type="submit" id="submit"  name="submitButton" value="Submit" class="button2">


</fieldset>
</form>

    <script type='text/javascript'>
    $( document ).ready(function() {
    console.log( "working!" );
    $("#form").submit(function(event) {
      var from = $('#from').val();
      console.log(from);
      var to = $('#to').val();
      console.log(to);
      var date = $('#date').val();
      console.log(date);
      event.preventDefault();
          url = "session.php?from=" +from+"&to=" +to+"&date=" +date;
          console.log(url);
          $.ajax({
                    type: "GET",
                    url: url,
                    data: '',
                    success: function(data) {
                        // alert(data);
                        $('#output').html(data);
                        graph();
                    }, 
                   error: function (data) {
                callbackfn("Error getting the data");
            }
    });

        });
  });
</script>

<!-- <div id="chartdiv4"></div> -->
<div id="output"></div>



</head>
<body>

</body>
</html>		
