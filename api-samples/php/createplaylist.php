<html>
<head></head>
<body>

    <form action = "playconfig.php" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Playlist Name  :</label><input type = "text" name = "playlist" class = "box" /><br/><br />
                  <input type = "submit" name="submit" value = " CREATE "/><br />
    </form>
    
 </body>
</html> 

<?php
    // session_start();
    // if (!$_SESSION["user_data"]) {
    //     header("Location: form.php");
    // }
?>