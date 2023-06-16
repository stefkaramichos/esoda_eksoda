<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        div h2{
            font-weight: 200;
            text-align: center;
        }
      
        header{
            background-color: #D1D3C5;
            height:140px;
            padding-top: 50px;
        }
        main{
            background-color :rgb(31, 139, 132);
          
        }
        .col-5{
            float:left;
        }
        .mx-auto a{
            background-color: #1f8b84;
            color: white;
            margin: 16px;
            border-radius: 5px;
            border: black 2px solid;
        }
        a:active {
            color: purple;
        }
        
        
    </style>
</head>
<body>
    <header>
        <div class="div">
            <h2>Έσοδα - Έξοδα</h2>
        </div>
       
      
    </header>
    <br>
<main class="well-lg container">
    <form action="" method="POST">   
        <div class="well well-lg container" style="width:60%">
            <label for="date">Hμερομηνία:</label><br>
            <input type="date" class="form-control" name="date" id="">
        </div>
        <div class="well well-lg container"  style="width:60%; ">
            <div class="col-5">
                <label for="esoda">Έσοδα:</label>
                <input type="number" name="esoda">
            </div>
            <div class="col-5">
                <label for="eksoda">Έξοδα:</label>
                <input type="number" name="eksoda">
            </div>
        
        </div>
        <div class=" text-left container  " style="width:60%;">
            <button type="submit" name="submit" class="btn btn-primary">Υποβολή</button>
        </div>
    </form> 
</main>
<?php
    $esoda = strip_post('esoda');
    $eksoda = strip_post('eksoda');
    $date = strip_post('date');
    $sinolo = strip_post('esoda') - strip_post('eksoda');

    $up_esoda = strip_post('up_esoda');
    $up_eksoda = strip_post('up_eksoda');
    $up_date = strip_post('up_date');
    $up_sinolo = strip_post('up_esoda') - strip_post('up_eksoda');
    


    include "create.php" ;
?>
<br>
    
</body>
</html>