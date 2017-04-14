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

if(isset($_GET['type'])){

    $name = $_GET['name'];

    $username = $_GET['username'];

    $mobno = $_GET['mobno'];

    $email = $_GET['email'];

    $password = $_GET['password'];

    $IFSC = $_GET['IFSC'];
    
    $accno = $_GET['accno'];
    
    $sql = "INSERT INTO admin (name, username, mobno  , email, password, IFSC,accno) VALUES ($name, $username, $mobno  , $email, $password, $IFSC,$accno)";



    if ($conn->query($sql) === TRUE) {

        echo "You have been registered successfully!";

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }
}
?>

