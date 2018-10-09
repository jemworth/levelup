<?php include("config.php"); 

$color = str_replace("#","",$_POST["pipeline_color"]);
if(!empty($_POST['pipline_col_id']) && isset($_POST['pipline_col_id'])) {
   $sql = 'UPDATE `rapid_crm_pipeline_columns` SET `column_name`="'.$_POST['name'].'",`column_color`="'.$color.'" WHERE `id` = "'.$_POST['pipline_col_id'].'"' ;
   
} else {
    $date= date("Y-m-d h:i:s");
    $sql ="INSERT INTO `rapid_crm_pipeline_columns`(`pipeline_id`, `column_name`, `column_color`,`sort_order`, `created` ) VALUES ('".$_POST['pipline_id']."','".$_POST['name']."','".$color."','0','".$date."')";
}
 
$result = $conn->query($sql);
if($result && !empty($_POST['pipline_col_id'])){
    echo "1";
} else if($result) {
    echo mysqli_insert_id($conn); 
} else { 
    echo "0";
}
?>