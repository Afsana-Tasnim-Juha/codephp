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
    echo "Connection was successful<br>";
}

$sql ="SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);

//find the number of records returned

$num = mysqli_num_rows($result);
echo $num;

// Display the rows returned by the sql query

while($row = mysqli_fetch_assoc($result)){
    echo var_dump($row);
    echo "<<br>";
}
?>