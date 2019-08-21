<?php session_start();
if( !isset($_SESSION['id'] ) ){
 header('location:index.php');
};
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Project 3</title>
</head>

<body>
    <?php require_once('nav.php'); ?>
    <h3>RESULTS</h3>
    <div class="container">
        <div class="row">

            <?php
    $d=file_get_contents("data.json");
    $d = json_decode($d, true);
    //print_r($d);
    
            
    foreach( $d as $k => $v ){
        echo '
<div class="col-md-4">
    <div class="card">
       <img src="'.$v['gw1'].'" class="card-img-top" alt="...">
        <!--<img src="users/1.jpg" class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title">'.$v['fn'].'</h5>
            <p class="card-text">'.$v['br'].'</p>
    
            <a href="'.$v['em'].'">Contact me</a>
            <br>
            <a href="'.$v['ln'].'">Give a Gift</a>
           <br>
            <a href="edit.php?'.$k.'" class="btn btn-outline-success my-2 my-sm-0">Edit</a>
            <a href="dhdelete.php?'.$k.'" class="btn btn-outline-success my-2 my-sm-0">Delete</a>
        </div>
    </div>
</div>
        ';  
    };
?>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
