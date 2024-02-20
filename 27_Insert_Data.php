<?php

//connecting to the database
$servername ="localhost";
$username ="root";
$password ="";
$database ="dbafsana";

// Create a connection

$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

$name = "Suman";
$destination ="Russia";

// Sql query to be executed

$sql ="INSERT INTO `phptrip` ( `name`, `dest`) VALUES ( '$name', '$destination')";
$result = mysqli_query($conn,$sql);

// Add a new trip to the trip table in the database

if($result){
    echo "The record has been inserted successfully!<br>";
}
else{
   echo "The record has not been inserted  successfully" . mysqli_error($conn);
}


?>