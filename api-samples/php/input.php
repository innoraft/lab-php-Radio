<?php
session_start();
$uid = $_SESSION['userID'];
echo $uid;

if (isset($uid)) {
 
echo "<form action='searchandadd.php'>

<div>
    Search Videos: <input type='search' id='q' name='q' plceholder='Enter Search Term'>
  </div>
  <div>
    Max Results: <input type='number' id='maxResults' name='maxResults' min='1' max='50' step='1' value='25'>
  </div>
  <input type='submit' value='Search'>
  <br> 
  </form>";
}

else
echo "<a href='form.php'>Login To Continue</a>";

  ?>
