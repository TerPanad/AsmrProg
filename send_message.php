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
    }

if(isset($_POST['message'])) {
    $message = htmlspecialchars($_POST['message']);
    $sql = "INSERT INTO messages (message) VALUES ('$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
