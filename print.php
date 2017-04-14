<?php


<?php



//Login details

$servername = "mysql4.gear.host";

$username = "bloodbank";

$password = "Wk602y_N66F_";

$dbname = "bloodbank";



//Create connection

$conn = new mysqli("$servername", $username, $password, $dbname);



//Check connection

//if ($conn->connect_error) {

//    die("Connection failed: " . $conn->connect_error);

//} 



//echo "Connected successfully";



//Create table query
echo "Yes";
$sql = "CREATE TABLE admin (name VARCHAR(40) NOT NULL,username VARCHAR(40) NOT NULL, mobno VARCHAR(10) NOT NULL, email VARCHAR(40) NOT NULL ,Password VARCHAR(40) NOT NULL, IFSC VARCHAR(11), accno VARCHAR(40), PRIMARY KEY (UserName))";



if ($conn->query($sql) === TRUE) {

    echo "Table BloodBank created successfully!";} 

else {

   echo "Error creating table: " . $conn->error;

}



//Getting all data from server

//Sample URL call is : http://localhost/PHP_Tutorial/web_service.php?admin


  /*  $sql = "SELECT * FROM admin";
    echo "Helo";

    $result = mysqli_query($conn ,$sql);

    $array = [];

    

    while($row = $result->fetch_assoc()){

        $array[] = $row;

    }

    

    header('Content-Type:Application/json');

    echo json_encode($array);

    mysqli_free_result($result);*/

?>