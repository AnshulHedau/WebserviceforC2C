<?php



//Login details

$servername = "mysql3.gear.host";

$username = "adminanshul";

$password = "@123456";

$dbname = "softwaredb";



//Create connection

$conn = new mysqli("$servername", $username, $password, $dbname);



//Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 



echo "Connected successfully";

$sql = "DROP TABLE doner";



$conn->query($sql);

//Create table query

$sql = "CREATE TABLE admin (name VARCHAR(40) NOT NULL,username VARCHAR(40) NOT NULL, mobno VARCHAR(10) NOT NULL, email VARCHAR(40) NOT NULL ,Password VARCHAR(40) NOT NULL, IFSC VARCHAR(11) NOT NULL , accno VARCHAR(40) NOT NULL, PRIMARY KEY (UserName))";



if ($conn->query($sql) === TRUE) {

    echo "Table admin created successfully!";} 

else {

    echo "Error creating table: " . $conn->error;

}



//Getting all data from server
?>