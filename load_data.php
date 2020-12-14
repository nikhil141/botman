<?php
include_once("db_connect.php");
$perPage = 8;
$page = 0;
if (isset($_POST['page'])) { 
	$page  = $_POST['page']; 
} else { 
	$page=1; 
};  
$startFrom = ($page-1) * $perPage;  
$sqlQuery = "SELECT us.id, us.name , vs.visits,vs.status
	FROM users us join visits vs on vs.id = us.id ORDER BY us.id asc LIMIT $startFrom, $perPage";  
	//echo $sqlQuery;
$result = mysqli_query($conn, $sqlQuery); 
$paginationHtml = '';
while ($row = mysqli_fetch_assoc($result)) {  
	$paginationHtml.='<tr>';  
	$paginationHtml.='<td>'.$row["id"].'</td>';
	$paginationHtml.='<td>'.$row["name"].'</td>';
        $paginationHtml.='<td>'.$row["visits"].'</td>';
        $paginationHtml.='<td>'.$row["status"].'</td>';
	$paginationHtml.='<td><button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning update"><i class="fas fa-edit"></i>Edit</button></td>';
        $paginationHtml.='</tr>';  
} 
$jsonData = array(
	"html"	=> $paginationHtml,	
);
echo json_encode($jsonData); 
?>

