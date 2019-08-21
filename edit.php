<?php session_start(); ?>
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
    <h3>EDIT PROFILE</h3>
    <form method="post" action="dhedit.php" enctype="multipart/form-data">
        <?php 
        $id = $_SERVER['QUERY_STRING'];
        //echo $id;
        
        $d = file_get_contents("data.json");
        $d = json_decode($d, true);
        //print_r($d[$id]);
        $n = $d[$id]['fn'];
        $b = $d[$id]['br'];
        $e = $d[$id]['em'];
        $l = $d[$id]['ln'];
        ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Name</label>
        <input class="form-control" name="fn" type="text" value="<?php echo $n;?>">
        <br>
        <label>Your Date of Birth</label>
        <input class="form-control" name="bd" type="date" value="<?php echo $b;?>">
        <br>
        <label>Email</label>
        <input class="form-control" name="em" type="email" value="<?php echo $e;?>">
        <br>
        <label>Wish Gift</label>
        <input class="form-control" name="gw1" type="file">
        <br>
          <label>Add a Link</label>
        <input class="form-control" name="ln" type="link" value="<?php echo $l;?>">
        <br>
        <input type="submit" value="Update Now" class="btn btn-outline-success my-2 my-sm-0">
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
