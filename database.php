<?php 
$conn =  mysqli_connect("hostname", "username", "password", "dtabase");


if(!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}


$sql = "SELECT * FROM table_name";
$result = mysqli_query($conn, $sql); 

if(mysqli_num_rows($result) > 0) {
    while($row =  mysqli_fetch_assoc($result)) {
        echo "Name :" . $row["name"] . "<br>";
    }
} else {
    echo "No records found!";
}

mysqli_close($conn); 


?>