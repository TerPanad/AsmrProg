<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $id_card = htmlspecialchars($_POST['id']);

    // การอัปโหลดไฟล์
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["document"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // ตรวจสอบว่าไฟล์เป็นภาพหรือไม่
    $check = getimagesize($_FILES["document"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // ตรวจสอบขนาดไฟล์ (ไม่เกิน 5MB)
    if ($_FILES["document"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // อนุญาตเฉพาะไฟล์ JPG, JPEG, PNG, และ GIF
    if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png" && $fileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // ตรวจสอบว่ามีข้อผิดพลาดในการอัปโหลดหรือไม่
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
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

            // ตรวจสอบและบันทึกข้อมูลลงฐานข้อมูล
            $stmt = $conn->prepare("INSERT INTO kyc_data (full_name, email, address,  ID_card, document_path) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $full_name, $email, $address, $id_card, $target_file);

            if ($stmt->execute()) {
                header("Location: ./../KCY.html");
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
