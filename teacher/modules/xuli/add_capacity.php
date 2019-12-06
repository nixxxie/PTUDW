<?php
include("../../../login/config.php");
$name=$_POST["name_capacity"];
$type=$_POST["type_capacity"];
$note=$_POST["note"];

 
    $sql = "INSERT INTO ablity_dictionary(ablity_name,ablity_type,ablity_note) VALUES('$name','$type','$note')";
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
     //   header('location: ../layout_enterprise.php?xem=chitiet&id='.$id_request);
    } 
    else {
        echo('sai');
    }

?>