<?php include "./server.php"; ?>

<?php
// ตรวจสอบว่ามีค่าจากฟอร์มหรือไม่
if (isset($_POST['price'])) {
    $price = $_POST['price'];

    // คำสั่ง SQL เพื่อบันทึกข้อมูล
    $stmt = $conn->prepare("INSERT INTO btc_prices (price) VALUES (?)");
    $stmt->bind_param("d", $price); // d สำหรับ double (ทศนิยม)

    if ($stmt->execute()) {
        echo "Price saved successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // ปิดการเชื่อมต่อ
    $stmt->close();
} else {
    echo "No price received.";
}

$conn->close();
?>
