	
<?php

include '../databaseconfig.php';


if ( $db2->connect_errno ) {
  die( "Failed to connect to MySQL: (" . $db2->connect_errno . ") " . $db2->connect_error );
}

// Fetch the data
$query = "SELECT date, COUNT(*) as c from analytics GROUP BY date ORDER BY c DESC LIMIT 5;"; 
$result = $db2->query( $query );

// All good?
if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . $db2->error . "n";
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
mysqli_close($db2);

?>

