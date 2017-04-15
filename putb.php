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

    $title = $_GET['title'];

    $author = $_GET['author'];

    $hashtags = $_GET['hashtags'];

    $paymentType = $_GET['paymentType'];

    $price = $_GET['price'];

    $desc = $_GET['description'];
    
    $body = $_GET['body'];

    
    $viewers = $_GET['viewers'];
    
    $date = $_GET['date'];
    
    $time = $_GET['time'];
    
    $sql = "INSERT INTO blogs (title, author, hashtags  ,paymentType, price, description ,body,viewers,date,time) VALUES ($title, $author, $hashtags  ,$paymentType, $price, $desc,$body,$viewers,$date,$time)";



    if ($conn->query($sql) === TRUE) {

        echo "You have been registered successfully!";

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }
}
?>