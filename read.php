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



//echo "Connected successfully";

if(!isset($_GET['login']) && isset($_GET['username']) && isset($_GET['password'])){

    $sql = "SELECT Password FROM admin WHERE username = " . $_GET['username'];

    

    $result = mysqli_query($conn ,$sql);

    $row = mysqli_fetch_assoc($result);

    header('Content-Type:Application/json');

    
    //echo $row['password'];
    //echo $_GET['password'];
    //if($row['password'] == str_replace("\"", "", $_GET['password'])){
    if(strcmp($row['password'] == $_GET['password'])==0){
        echo $row['password'];
        echo 'Success';

    }

    else{
        echo $row['password'];

        echo 'Fail';

    }

    mysqli_free_result($result);

}
?>
