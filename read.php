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

if(!isset($_GET['login']) && isset($_GET['username']) && isset($_GET['password'])){

    $sql = "SELECT Password FROM admin WHERE username = " . $_GET['username'];

    

    $result = mysqli_query($conn ,$sql);

    $row = mysqli_fetch_assoc($result);

    header('Content-Type:Application/json');

    

    if($row['password'] == str_replace("\"", "", $_GET['password'])){

        echo 'Success';

    }

    else{

        echo 'Fail';

    }

    mysqli_free_result($result);

}
?>