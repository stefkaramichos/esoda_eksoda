<?php
    

    $sql = "INSERT INTO analytics (esoda, eksoda, date, sinolo) VALUES ($esoda, $eksoda, '$date' , $sinolo)";
    $result = mysqli_query($connection, $sql);
   if(!$result){
    die("failed!" . mysqli_error($result));
   }

?>