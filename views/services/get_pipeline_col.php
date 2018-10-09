<?php include("config.php"); 
$pipeline_id = $_GET['pipeline_id'];
$sql = "SELECT `cl`.`id`,`cl`.`column_name`,`cl`.`column_color`,`cl`.`pipeline_id`,`pip`.`name` FROM `rapid_crm_pipeline_columns` AS `cl` LEFT JOIN `rapid_crm_pipelines` AS `pip` ON `cl`.pipeline_id = `pip`.id where `cl`.`pipeline_id` = $pipeline_id ORDER BY `sort_order` ASC" ; 
$result = $conn->query($sql);
$pipelines_col = array();
$i =0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$pipelines_col['pipeline_name'] = $row["name"];
    	$pipelines_col['data'][$i]['id'] = $row["id"];
    	$pipelines_col['data'][$i]['column_name'] = $row["column_name"];
    	$pipelines_col['data'][$i]['column_color'] = $row["column_color"];
    	$pipelines_col['data'][$i]['pipeline_id']= $row["pipeline_id"];
    	$i++;
    }
} else {
   $pipelines_col;
}
//echo '<pre>'; print_r($pipelines_col);
echo json_encode($pipelines_col) ;
?>