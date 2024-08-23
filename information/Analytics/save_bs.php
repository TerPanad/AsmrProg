<?php include "./../../server.php"; ?>
<?php 
    //print_r($_POST); 
    //$multi = $_POST['multi'];
    //$setloss = $_POST['setloss'];
  //  $setprofit = $_POST['setprofit'];
   // $loss = $_POST['loss'];
    //$profit = $_POST['profit'];


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //รับข้อมูลจาก from
        $multi = $_POST['multi'];// รับค่าจากฟอร์ม
        $setloss = $_POST['setloss'];// รับค่าจากฟอร์ม
        $setprofit = $_POST['setprofit'];// รับค่าจากฟอร์ม
        $loss = $_POST['loss'];// รับค่าจากฟอร์ม
    }

// สมมุติว่าเงื่อนไขคือค่าต้องมากกว่า 50 ถึงจะถือว่าถูกต้อง
if ( $multi > 50) {
    // เงื่อนไขถูกต้อง บันทึกในตารางหนึ่ง
    $sql =  "INSERT INTO buy  (multiplier, setloss, setprofit, loss) VALUES (?, ?, ?, ?)";  
} else {
    // เงื่อนไขผิดพลาด บันทึกในอีกตารางหนึ่ง
    $sql =  "INSERT INTO buy (multiplier, setloss, setprofit, loss) VALUES (?, ?, ?, ?)";  
}

// เตรียมคำสั่ง SQL
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $multi, $setloss, $setprofit, $loss);

// ตรวจสอบการดำเนินการ
if ($stmt->execute()) {
    header("location: Analytics.php");
} else {
    echo "เกิดข้อผิดพลาด: " . $stmt->error;
}
    
// ปิดการเชื่อมต่อ
$stmt->close();
$conn->close();

?>













         // ตรวจสอบเงื่อนไขก่อนทำการ INSERT
         //if($multi > 0 && $loss > 0 ) {
             // เงื่อนไขถูกต้อง ทำการ INSERT ข้อมูลลงในฐานข้อมูล
            // mysqli_query($conn, "INSERT INTO buy  (multiplier, loss) VALUES ('$multi', '$loss')");  
              // ตรวจสอบผลลัพธ์การบันทึกข้อมูล
            //  if(mysqli_affected_rows($conn) > 0) {
             //   header("Location: Analytics.php"); 
                //$conn->close();

             }
            
       // } elseif($multi > 1 && $loss > 1)   {
            // เงื่อนไขถูกต้อง ทำการ INSERT ข้อมูลลงในฐานข้อมูล
       // mysqli_query($conn, "INSERT INTO buy (setloss, setprofit) VALUES (
     //       '$setloss', '$setprofit')");
         // ตรวจสอบผลลัพธ์การบันทึกข้อมูล
         //if(mysqli_affected_rows($conn) > 0) {
          // header("Location: Analytics.php"); 
        // }     
    // }
//}





    //mysqli_query($conn, "INSERT INTO buy (multiplier, setloss, setprofit, loss) VALUES (
                        //'$multi', '$setloss', '$setprofit', '$loss')");


 ?>