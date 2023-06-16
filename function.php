<?php
    function strip_post($field){
        if (isset($_POST[$field])){
            if(strlen($_POST[$field]) == 0){
                $_POST[$field] = 0;
            }
        }
        else{
            $_POST[$field] = 0;
        }
        return htmlspecialchars(stripslashes($_POST[$field]));
}

    function minas($x){
        switch($x){
            case '01':
                $minas = "Ιανουάριος";
                break;
            case '02':
                $minas = "Φεβρουάριος";
                break;
            case '03':
                $minas = "Μάρτιος";
                break;
            case '04':
                $minas = "Απρίλιος";
                break;
            case '05':
                $minas = "Μάιος";
                break;
            case '06':
                $minas = "Ιούνιος";
                break;
            case '07':
                $minas = "Ιούλιος";
                break;  
            case '08':
                $minas = "Αύγουστος";
                break;
            case '09':
                $minas = "Σεπτέμβριος";
                break;
            case '10':
                $minas = "Οκτώβριος";
                break;
            case '11':
                $minas = "Νοέμβριος";
                break;
            case '12':
                $minas = "Δεκέμβριος";
                break;    
            default:
                echo "Συμπληρώστε ένα νούμερο μεταξύ του 01 - 12";
                         
        }
        return $minas;
    }


    function esodaMina($x){
            global $connection;
            $sin_esoda = 0;
            $sin_eksoda = 0;
            $sin_mina = 0;
            $sql = "SELECT * FROM analytics";
            $result = mysqli_query($connection, $sql); ?>
                <table class= "table table-dark ">
                    <thead>
                    <tr>
                        <th colspan="5" style="text-align:center; font-size:26px;"><?= minas($x) ?></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>ΗΜΕΡΟΜΗΝΙΑ</th>
                        <th>ΕΣΟΔΑ</th>
                        <th>ΕΞΟΔΑ</th>
                        <th>ΣΥΝΟΛΟ</th>
                    </tr>
                    </thead>
            <?php while($row = mysqli_fetch_assoc($result)){
                if(substr($row['date'],5,2) == $x): ?>
                    
                    <tr>
                        <td><?= $row['id'] ;?></td>
                        <td><?= $row['date'] ;?></td>
                        <td><?= $row['esoda'] ;?></td>
                        <td><?= $row['eksoda'] ;?></td>
                        <td><?= $row['sinolo'] ;?></td>
                    </tr>
                <?php 
                    $sin_esoda += $row['esoda'];
                    $sin_eksoda += $row['eksoda'];
                    $sin_mina = $sin_esoda -$sin_eksoda;
                endif ;
            
            }?>
                <tr>
                    <td colspan="2" style="text-align:center;" >ΣΥΝΟΛΟ</td>
                    
                    <td><?= $sin_esoda ;?></td>
                    <td><?= $sin_eksoda ;?></td>
                    <td><?=  $sin_mina ;?></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;" ><?= 'Το 30% είναι: ' . 0.30*$sin_mina ?></td>
                    
                    <td colspan="3" style="text-align:center;" ><?= 'Το 70% είναι: ' . 0.70*$sin_mina ?></td>
                </tr>

            </table>

<?php 
    }
?>