<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_server";


    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }else{

    }

$sql = "SELECT * FROM messages ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='message'>" . $row["message"] . "</div>";
    }
} else {
    echo "No messages";
}

$conn->close();
?>
