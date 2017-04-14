<?php



//Login details

$servername = "mysql4.gear.host";

$username = "bloodbank";

$password = "Wk602y_N66F_";

$dbname = "bloodbank";



//Create connection

$conn = new mysqli("$servername", $username, $password, $dbname);



//Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 



echo "Connected successfully";



//Create table query

$sql = "CREATE TABLE blogs (title VARCHAR(40) NOT NULL,author VARCHAR(40) NOT NULL, hashtags VARCHAR(10) NOT NULL, paymentType VARCHAR(40) NOT NULL ,price INT(3) , description VARCHAR(40) NOT NULL , body VARCHAR(80) NOT NULL,viewers INT(5),date VARCHAR(10),time VARCHAR(10), PRIMARY KEY (title))";



if ($conn->query($sql) === TRUE) {

    echo "Table blogs created successfully!";} 

else {

    echo "Error creating table: " . $conn->error;

}



?>