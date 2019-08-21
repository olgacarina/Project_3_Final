<?php session_start(); 
$id = $_SERVER['QUERY_STRING'];

$d = file_get_contents('data.json');
$d = json_decode($d, true);
print_r($d);
echo '<br>';

unset($d[$id]);
    
//print_r($d);

$d = json_encode($d);
file_put_contents('data.json', $d);


if($_SESSION['id'] == $id){
    session_destroy();
    header('location:login.php');
} else {
    header('location:result.php');  
};
?>
