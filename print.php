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
echo"Yes";
$sql = "SELECT * FROM admin";



    $result = mysqli_query($conn ,$sql);

    $array = [];

    

    while($row = $result->fetch_assoc()){

        $array[] = $row;

    }

    

    header('Content-Type:Application/json');

    echo json_encode($array);

    mysqli_free_result($result);


//Getting all data from server
?>