<?php include "../function.php" ;?>
<?php include "../connect.php" ;?>
<?php include "../header.php" ;?>
<div class="well container">
    <div class="col-10 mx-auto text-center">
        <a class="well-sm" href="ianouarios.php">Ιανουάριος </a><a class="well-sm" href="fevrouarios.php">Φεβρουάριος </a><a class="well-sm" href="martios.php">Μάρτιος </a><a class="well-sm" href="aprilios.php">Απρίλιος </a><a class="well-sm" href="maios.php">Μάιος </a><a class="well-sm" href="iounios.php">Ιούνιος </a>
    </div>
    <br><br><br>
    <div class="col-10 mx-auto text-center">
        <a class="well-sm" href="ioulios.php">Ιούλιος </a><a class="well-sm" href="augoustos.php">Αύγουστος </a><a class="well-sm" href="septemvrios.php">Σεπτέμβριος </a><a class="well-sm" href="oktovrios.php">Οκτώβριος </a><a class="well-sm" href="noemvrios.php">Νοέμβριος </a><a class="well-sm" href="dekemvrios.php">Δεκέμβριος </a>
    </div>
</div>
<div class="container well">
    <?php      
        esodaMina('07');
    ?>
</div>
<?php include "../delete.php" ;?>