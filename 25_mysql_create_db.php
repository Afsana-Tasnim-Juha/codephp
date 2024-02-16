<?php



//connecting to the database
$servername ="localhost";
$username ="root";
$password ="";

// Create a connection

$conn = mysqli_connect($servername,$username,$password);

// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

// Create a db

$sql ="CREATE DATABASE dbJuha5";
$result = mysqli_query($conn,$sql);

// Check for the db creation success
// Die if connection was not successful
if($result){
     echo "The db was created successfully<br>";
}
else{
    echo "db was not created  successfully" . mysqli_error($conn);
}

echo "the result is";
echo var_dump($result);
echo "<br>";

 
 
 ?>