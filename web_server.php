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

//$sql = "CREATE TABLE admin (name VARCHAR(40) NOT NULL,username VARCHAR(40) NOT NULL, mobno VARCHAR(10) NOT NULL, email VARCHAR(40) NOT NULL ,Password VARCHAR(40) NOT NULL, IFSC VARCHAR(11) NOT NULL , accno VARCHAR(40) NOT NULL, PRIMARY KEY (UserName))";



//if ($conn->query($sql) === TRUE) {

//    echo "Table BloodBank created successfully!";} 

//else {

//    echo "Error creating table: " . $conn->error;

//}



//Getting all data from server

//Sample URL call is : http://localhost/PHP_Tutorial/web_service.php?admin

if(isset($_GET['admin'])){

    $sql = "SELECT * FROM admin";



    $result = mysqli_query($conn ,$sql);

    $array = [];

    

    while($row = $result->fetch_assoc()){

        $array[] = $row;

    }

    

    header('Content-Type:Application/json');

    echo json_encode($array);

    mysqli_free_result($result);

}



//Inserting data

//Sample URL call is : http://localhost/PHP_Tutorial/web_service.php?type="insert"&name="Mohan1999"&password="123"&name="Mohan Patel"&bloodtype="O%2B"&location="Vellore"&allergies="None"

elseif(isset($_GET['type'])){

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



//Validating the user according to the Username

//Sample URL call is : http://localhost/PHP_Tutorial/web_service.php?username="Dheeraj1998"&password="Dheeraj%401998"

elseif(!isset($_GET['login']) && isset($_GET['username']) && isset($_GET['password'])){

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



//Selecting all people with a particular bloodtype

//Sample URL call is : http://localhost/PHP_Tutorial/web_service.php?bloodtype="B%2B"

/*elseif(isset($_GET['bloodtype'])){

    $sql = "SELECT * FROM BloodBank WHERE BloodType = " . $_GET['bloodtype'];



    $result = mysqli_query($conn ,$sql);

    $array = [];

    

    while($row = $result->fetch_assoc()){

        $array[] = $row;

    }

    

    header('Content-Type:Application/json');

    echo json_encode($array);

    mysqli_free_result($result);

}
*/


//Getting the details of a user by validating his username and password

//Sample URL call is: http://localhost/PHP_Tutorial/web_service.php?login=''&username='Dheeraj'&password='123'

/*elseif(!isset($_GET['modify']) && isset($_GET['login']) && isset($_GET['username']) && isset($_GET['password'])){

    $sql = "SELECT * FROM BloodBank WHERE UserName = " . $_GET['username'] . " AND Password = " . $_GET['password'];



    $result = mysqli_query($conn ,$sql);

    $row = $result->fetch_assoc();

    

    header('Content-Type:Application/json');

    echo json_encode($row);

    mysqli_free_result($result);

}



//Modifying the details of a user by validating his username and password

//Sample URL call is: http://dheerajprojects.gear.host/web_server.php?modify=''&username='Dheeraj1998'&mpass='123'&maller='Cold'&mblood='A%2B'&mname="Dheeraj"&mloc="Jamnagar"

elseif(isset($_GET['modify']) && isset($_GET['username'])){

    $sql = "UPDATE BloodBank SET Password = " . $_GET['mpass'] . ", Name = " . $_GET['mname'] . ", Location = " . $_GET['mloc'] . ", Allergies = " . $_GET['maller'] . ", BloodType = " . $_GET['mblood'] . " WHERE UserName = " . $_GET['username'];

    

    if ($conn->query($sql) === TRUE) {

        echo "Details have been modified!";

    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;

    }

}



else{

    echo "Hi! No parameters have been passed :)";

}
*/

$conn->close();

?>