<?php
include 'db_connect.php';
// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_GET['id']); // 'i' specifies that the parameter is an integer
$stmt->execute();
$qry = $stmt->get_result()->fetch_array();

foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_user.php';
?>