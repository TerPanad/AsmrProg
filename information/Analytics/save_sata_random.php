<?php
// เชื่อมต่อกับฐานข้อมูล
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



// รับข้อมูลจาก POST
$randomNumber = isset($_POST['randomNumber']) ? (int)$_POST['randomNumber'] : 0;

$profit = $_POST['random_number'];
// คำสั่ง SQL สำหรับการแทรกข้อมูล
$sql = "INSERT INTO random_profit (random_number) VALUES (?)";

// เตรียมคำสั่ง SQL
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $randomNumber);

// ตรวจสอบการดำเนินการ
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();
?>
