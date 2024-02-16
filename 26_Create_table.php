<?php



//connecting to the database
$servername ="localhost";
$username ="root";
$password ="";
$database ="dbjuha";

// Create a connection

$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

// Create a table in the db

$sql = "CREATE TABLE `phpjuha`.`mytable` (`sno` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL )";
$result = mysqli_query($conn,$sql);

// Check for the table creation success
// Die if connection was not successful
if($result){
     echo "The table was created successfully<br>";
}
else{
    echo "table was not created  successfully" . mysqli_error($conn);
}


 
 
 ?>