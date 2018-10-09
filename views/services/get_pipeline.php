<?php include("config.php"); 
$agent_id = $_GET['agent_id'];
$sql = "SELECT * FROM rapid_crm_pipelines where agent_id=$agent_id order by name asc" ;
$result = $conn->query($sql);
$pipelines = array();
$i =0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$pipelines[$i]['id'] = $row["id"];
    	$pipelines[$i]['name'] = $row["name"];
    	$pipelines[$i]['created'] = $row["created"];
    	$pipelines[$i]['agent_id']= $row["agent_id"];
    	$pipelines[$i]['isDefault'] =  $row["isDefault"];
    	$i++;
    }
} else {
   $pipelines;
}
echo json_encode($pipelines) ;
?>