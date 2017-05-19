<html>
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src = "script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") {
        alert("UserName must be filled out");
        return false;
    }
}
</script>



</head>
<body>

<a href="index.html"><button class="button2">Go Back</button></a>

<div class = "background">
<div class = "form">
<div id="output"></div>
<form name = "myForm" id="myForm" action = "config.php" onsubmit="return validateForm()" method = "post">

                  <label>UserName  :</label><input type = "text" name = "username" class = "box" id="name" /><br /><br />

                  <label>Password  :</label><input type = "password" name = "password" class = "box" id="password" required/><br/><br />

                  <label>Email  :</label><input type = "email" name = "email" class = "box" id="email" required /><br/><br />

                  <input type = "submit" value = " Submit " class = "button2"/><br />
</form>
</div>

<script type='text/javascript'>
    $( document ).ready(function() {
    console.log( "working!" );
    $("#myForm").submit(function(event) {
      event.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
      var password = $('#password').val();
          url = "config.php?email=" +email+"&password=" +password+"&name="+name;
          $.ajax({
                    type: "GET",
                    url: url,
                    data: '',
                    success: function(data) {
                    	var result = $.trim(data);
                        if (result == false) {
                          var newWindow = window.open("","_self");
                          newWindow.location.href = "/welcome.php";
                         }
                         else
                         {
                        $('#output').html(data);
                    }
                    }, 
                   error: function (data) {
                callbackfn("Error getting the data");
            }
    });

        });
  });
</script>
  
 </body>
</html> 