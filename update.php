<div class="well container">
   
    <h2 class="text-center">ΕΝΗΜΕΡΩΣΗ</h2> <br>
<main class="well-lg container">
    <form action="" method="POST">   
        <div class="well well-lg container" style="width:60%">
            <label for="id">Εισάγετε το id που θέλετε να ενημερώσετε:</label><br>
            <input type="number" class="form-control" name="up_id" id="">
        </div>
       
        <div class="well well-lg container"  style="width:60%; ">
            <div class="col-5">
                <label for="esoda">Έσοδα:</label>
                <input type="number" name="up_esoda">
            </div>
            <div class="col-5">
                <label for="eksoda">Έξοδα:</label>
                <input type="number" name="up_eksoda">
            </div>
        
        </div>
        
        
        <div class=" text-left container  " style="width:60%;">
            <button type="submit" name="upadate" class="btn btn-primary">Ενημέρωση</button>
        </div>
    </form> 
</main>
</div>

<?php
    $up_id = strip_post('up_id');
    $sql1 = "UPDATE analytics SET esoda = $up_esoda WHERE id = $up_id";
    $result1= mysqli_query($connection, $sql1);
    $sql2 = "UPDATE analytics SET eksoda = $up_eksoda WHERE id = $up_id";
    $result2 = mysqli_query($connection, $sql2);
   
?>