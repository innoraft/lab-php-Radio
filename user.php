
<?php
// session_start();
// $uid = $_SESSION['userID'];
// // echo $uid;
// if (isset($uid))
// {
  
// Connect to MySQL
// $link = new mysqli( 'localhost', 'root', '123', 'userdb' );
include 'databaseconfig.php';

if ( $link->connect_errno ) {
  die( "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error );
}

// Fetch the data
$query = "
SELECT Username, count(*) as c FROM datedb GROUP BY Username ORDER BY c DESC LIMIT 5;"; 
$result = $link->query( $query );

// All good?
if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . $link->error . "n";
  $message .= 'Whole query: ' . $query;
  die( $message );
}

// Set proper HTTP response headers
header( 'Content-Type: application/json' );

$data = array();
// Print out rows
while ( $row = $result->fetch_assoc() ) {
  // echo rawurldecode($row['title']) . ' | ' . $row['count'] ;
  $data[] = $row;
}

echo json_encode($data);

// Close the connection
mysqli_close($link);

?>

