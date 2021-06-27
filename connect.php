<?php

  //set connection variables 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'secondtask';
  $db_port = 3306;

  //connection to server & database 
  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

if (!$connection)
{
die ('<p>Could not connect to the database!</p>'.mysqli_error( $connection ));
}

$f1 = $_POST['f1'];
$s1 = $_POST['s1'];
$l1 = $_POST['l1'];
$r1 = $_POST['r1'];
$b1 = $_POST['b1'];


if(isset($_POST['save'])){

    echo "<br>";

    $my_query = "";


    $my_query = "INSERT INTO directionsvalues (f1, s1, l1, r1, b1) VALUES (f, s, l, r, b)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
		echo "f";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


?>