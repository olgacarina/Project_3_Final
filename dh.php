<?php session_start(); 

//print_r( $_POST );
//echo '<br>'.$_POST["fn"];
//echo '<br>';

//print_r( $_FILES['ph'] );
//echo '<br>'.$_POST["em"];

$d = file_get_contents('data.json');
$d = json_decode($d, true);


//echo '<br>';
//print_r( $d );
//echo '<br>';
$x = count($d);
++$x;
//echo $x;

$t = $_FILES['gw1']['tmp_name'];
//echo $t . '<br>';
$i = 'users/'.$x.'.jpg';

//echo $i .'<br>';
//echo '<br>';
//echo $i;

move_uploaded_file( $t, $i );

//array_unshift($d, $_POST);
$d[$x] = $_POST;
$d[$x]['gw1'] = $i;

//echo '<br>';
//print_r($d);

$d = json_encode($d);
file_put_contents('data.json', $d);

$_SESSION['id'] = $x;
$_SESSION['name'] = $_POST['fn'];
//echo $_SESSION['name'];

header('location:result.php');


?>