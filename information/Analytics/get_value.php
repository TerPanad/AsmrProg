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

// ดึงค่าจากฐานข้อมูล (สมมติว่าเป็นค่าเดียว)
$sql = "SELECT decimal_value FROM decimal_table ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $dbValue = $row['decimal_value'];
} else {
    $dbValue = 0;  // ถ้าไม่มีค่าในฐานข้อมูล ให้เริ่มต้นเป็น 0
}

// ส่งค่าออกเป็น JSON
echo json_encode(['dbValue' => $dbValue]);

// ปิดการเชื่อมต่อ
$conn->close();
?>
