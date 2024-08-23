<?php
// URL สำหรับดึงข้อมูลราคาจาก Binance API
$api_url = "https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT";

// ใช้ cURL เพื่อดึงข้อมูลจาก API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// แปลง JSON ที่ได้จาก API เป็น Array
$data = json_decode($response, true);

// ตรวจสอบว่าดึงข้อมูลได้สำเร็จหรือไม่
if (isset($data['price'])) {
    $btc_price = $data['price'];
} else {
    $btc_price = "Cannot retrieve price.";
}
?>