<?php
include_once("db_connect.php");
$filename = "user_details.csv";
        
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");

$sqlQuery = "SELECT us.id, us.name , vs.visits,vs.status
	FROM users us join visits vs on vs.id = us.id ORDER BY us.id Asc";  
	//echo $sqlQuery;
$result = mysqli_query($conn, $sqlQuery);

$content = array();
$title = array("Name","Id","Visits","Status");

while ($row = mysqli_fetch_assoc($result)) {  
	  $content[] = $row;
}

$output = fopen('php://output', 'w');
fputcsv($output, $title);
foreach ($content as $con) {
    fputcsv($output, $con);
}

?>