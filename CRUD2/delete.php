<?php 

# Connecting to MySQL DB -------------------------------
include 'db.php'; 
$id = (int)$_GET['id'];
$sql = "delete from tasks where id = '$id'";
#-------------------------------------------------------

$val = $db->query($sql);

# For the DB is connected ------------------------------
if ($val){
    header('location: index.php');
}
else {
    echo "fuck !";
}
#-------------------------------------------------------

?>