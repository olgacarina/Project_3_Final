<?php session_start(); 

$x = $_POST['id'];
//echo $x;

$d = file_get_contents('data.json');
$d = json_decode($d, true);

//print_r( $d[$x] );

$d[$x]['fn']= $_POST['fn'];
$d[$x]['em']= $_POST['em'];
$d[$x]['ln']= $_POST['ln'];

//echo '<br>';
//print_r( $d[$x] );

$t = $_FILES['gw1']['tmp_name'];
$i = 'users/'.$x.'.jpg';

move_uploaded_file($t, $i);

$d = json_encode($d);
file_put_contents('data.json', $d);

if( $_SESSION['id'] == $x ){
    $_SESSION['name'] = $_POST['fn'];
}

header('location:result.php');

?>