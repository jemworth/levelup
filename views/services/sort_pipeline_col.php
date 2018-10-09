<?php include("config.php"); 
$col = explode(",", $_POST["col_id_array"]);
foreach ($col as $key => $value) {
	$query = "UPDATE rapid_crm_pipeline_columns SET sort_order = '".$key."' WHERE id = '".$value."'";
	$result = $conn->query($query);
}
?>