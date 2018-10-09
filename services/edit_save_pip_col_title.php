<?php include("config.php"); 
$sql = 'UPDATE `rapid_crm_pipelines` SET `name`="'.$_POST['name'].'" WHERE `id` = "'.$_POST['id'].'"' ;
$result = $conn->query($sql);
if($result) {
    echo $_POST['name'];
} else { 
    echo "0";
}
?>