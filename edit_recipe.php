<?php
include 'db_connect.php';
include 'includes/dbconnection.php';

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM receipe WHERE recipe_id = ?");
$stmt->bind_param("i", $_GET['id']); // 'i' specifies that the parameter is an integer
$stmt->execute();
$qry = $stmt->get_result()->fetch_array();

foreach($qry as $k => $v){
	if($k == 'title')
		$k = 'stitle';
	$$k = $v;
}
include 'new_recipe.php';
?>
