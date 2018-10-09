<?php include("config.php"); 
$date= date("Y-m-d h:i:s");
$sql = "INSERT INTO `rapid_crm_pipelines`( `name`, `agent_id`, `created`) VALUES ('".$_POST['name']."','".$_POST['agent_id']."','".$date."')";
$result = $conn->query($sql);
echo mysqli_insert_id($conn); 
?>