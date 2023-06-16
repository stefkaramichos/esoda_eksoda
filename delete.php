<div class="well container">
<h2 class="text-center">ΔΙΑΓΡΑΦΗ</h2> <br>
<main class="well-lg container">

    <form action="" method="POST">   
        <div class="well well-lg container" style="width:60%">
            <label for="id">Εισάγετε το id που θέλετε να διαγράψετε:</label><br>
            <input type="number" class="form-control" name="id" id="">
        </div>
        <div class=" text-left container  " style="width:60%;">
            <button type="submit" name="delete" class="btn btn-primary">Διαγραφή</button>
        </div>
    </form> 
</main>
</div>
<?php
    if(isset($_POST['delete'])){    
        $id = strip_post('id');
        
       
    
        
        $i = 0;
        $sql2 = "SELECT * FROM analytics WHERE id = $id";
        $result2 = mysqli_query($connection, $sql2);
        while($row = mysqli_fetch_assoc($result2)){
            if($row['id']){
                echo "<span style='color:green;'>Τα δεδομένα διαγράφτηκαν με επιτυχία</span>";
                $i++;
            }
       }
     if($i == 0){
        echo "<span style='color:red;'>Δεν βρέθηκε περιεχόμενο με id = " . $id . "</span>" ;
     }
     $sql = "DELETE FROM analytics WHERE id = $id";
     $result = mysqli_query($connection, $sql);
    
    
    
    }
    
?>
