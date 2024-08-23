<?php include "./server.php"; ?>
<?php 
// ตรวจสอบว่ามีค่าจากฟอร์มหรือไม่
if (isset($_POST['option']) && isset($_POST['saveAddress']) && isset($_POST['saveAmount'])) {
    $selected_option = $_POST['option'];
    $textbox_value = $_POST['saveAddress'];
    $saveAmount = $_POST['saveAmount'];

    // คำสั่ง SQL เพื่อบันทึกข้อมูล
    $stmt = $conn->prepare("INSERT INTO `withdraw` (coin, address, 	amount	) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $selected_option, $textbox_value, $saveAmount);

    if ($stmt->execute()) {
        //echo "Data saved successfully.";
        header("Location: ./../../New/homepage.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // ปิดการเชื่อมต่อ
    $stmt->close();
} 


$conn->close();

?>