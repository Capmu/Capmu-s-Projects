<?php

# Create a new database ---------------------------------------------------
$db = new Mysqli('localhost','root','','CRUDII');
#$db->connect('localhost','root','','CRUDII');
#--------------------------------------------------------------------------

if(!$db){
    echo "success";
}

?>