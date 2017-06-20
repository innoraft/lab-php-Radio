<html>
<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="CSS/style.css"/>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src = "script.js"></script>



<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
}
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


</head>
<body>

<a href="index.html"><button class="button2">Go Back</button></a>



<div class = "background">
<div class = "form">
<div id="output"></div>
<form name = "myForm" id="myForm" action = "Includes/login.php" onsubmit= "return validateForm()" method = "post">
                  <label>Email     :</label><input type = "text" name = "email" class = "box" id="email" /><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" id="password" required/><br/><br />
                  <input type = "submit" name="submit" value = " Submit " class = "button2"/><br />
</form>
</div>
</div>

    <script type='text/javascript'>
    $( document ).ready(function() {
    console.log( "working!" );
    $("#myForm").submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();
      var password = $('#password').val();
          url = "Includes/login.php?email=" +email+"&password=" +password;
          $.ajax({
                    type: "GET",
                    url: url,
                    data: '',
                    success: function(data) {
                    	var result = $.trim(data);
                        if (result == false) {
                        	// window.location('/welcome.php','_self');
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