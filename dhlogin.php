<?php session_start(); 

$d = file_get_contents('data.json');
$d = json_decode($d, true);

$em = $_POST['em'];

$x = array_search($em, array_column($d, 'em'));


if($x > -1){
    $x = array_keys($d)[$x];
    //print_r($x);
    $_SESSION['id'] = $x;
    $_SESSION['name'] = $d[$x]['fn'];
    header('location:result.php');  
} else {
    header('location:login.php');  
};

?>