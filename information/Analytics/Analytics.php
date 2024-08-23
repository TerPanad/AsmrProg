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
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Switcher</title>
    <link rel="stylesheet" href="./Analytics.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="./../../homepage.php" class="logo">
                <img src="./../images/logo.png" alt="">
                <style>
                    img {
                        width: 30px;
                        height: 30px;
                        margin: 10px;
                    }
                </style>
                <div class="logo-name"><span>Asmr</span>Prog</div>   
            </a>
        </div>
    </nav>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Container for flexboxes */
        
        section {
            display: -webkit-flex;
            display: flex;
        }
        /* Style the navigation menu */
        
        nav {
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            background: #ccc;
            padding: 20px;
        }
        /* Style the list inside the menu */
        
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        /* Style the content */
        
        article {
            -webkit-flex: 3;
            -ms-flex: 3;
            flex: 3;
            background-color: #f1f1f1;
            padding: 10px;
        }
        /* Style the footer */
        /* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
        
        @media (max-width: 600px) {
            section {
                -webkit-flex-direction: column;
                flex-direction: column;
            }
        }
    </style>
    </head>

    <body>

    
        <section>
            <nav>
                <ul>
                    <div class="box">
                        <?php
                          // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                          $sql = "SELECT * FROM user";
                          $query = mysqli_query($conn, $sql);
                        ?>

                        <?php foreach($query as $data) ?>

                        <h4>ID : <span> <?php echo $data['username']?> </span></h4>


                        <?php
                          // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                          $sql = "SELECT SUM(random_number) AS total_amount FROM `random_profit`";
                          
                          // รันคำสั่ง SQL
                            $result = $conn->query($sql);

                            // ตรวจสอบว่ามีผลลัพธ์หรือไม่
                            if ($result->num_rows > 0) {
                                // ดึงผลลัพธ์ออกมา
                                $row = $result->fetch_assoc();
                                echo "<p> Available funds : " .$row["total_amount"],"<span>$</span>";
                            } else {
                                echo "No results found.";
                            }

                        ?>


                       

                    </div>

                </ul>


                <form action="save_bs.php" method="post">
                    

                <div class="box1">
                    <div class="dropdown">
                        <select name="language" id="language">
                            <option value="Market Price">Martket price</option>
                            <option value="Limit">Stop Limit</option>
                            <option value="Stop>Stop">Limit</option>
                            <option value="Market Price">Trailing Stop</option>
                          </select>
                    </div>


                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                        <input type="text" name="multi" class="form-control" placeholder="Enter Multiplier" aria-label="Input group example" aria-describedby="btnGroupAddon">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                        <input type="text" name="setloss" class="form-control" placeholder="Set Loss 0" aria-label="Input group example" aria-describedby="btnGroupAddon">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                        <input type="text" name="setprofit" class="form-control" placeholder="Set Profit 0" aria-label="Input group example" aria-describedby="btnGroupAddon">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                        <input type="text" name="loss" class="form-control" placeholder="Loss 0.01" aria-label="Input group example" aria-describedby="btnGroupAddon">
                        <div class="input-group-text" id="btnGroupAddon">-</div>
                    </div>


                    <!-- Show price real Time-->
                    <div class="input-group">              
                    <h5 id="stock-price1" class="stock-price" name="stock-price"></h5>   <!-- Show price real Time-->
                    <script>
                        let ws = new WebSocket('wss://stream.binance.com:9443/ws/btcusdt@trade');
                        let stockPriceElement = document.getElementById('stock-price1');
                        let lastPrice = null;
                    
                        ws.onmessage = (event) => {
                        let stockOject = JSON.parse(event.data);
                        let price = parseFloat(stockOject.p).toFixed(4);
                        stockPriceElement.innerHTML = price;
                        stockPriceElement.style.color = !lastPrice || lastPrice === price ? 'black' : price > lastPrice ? 'green' : 'red';       
                        lastPrice = price;
                        }
                    </script>
                    <!-- Show price real Time-->
                        
                    </div>

                    <div>
                        <p id='text_left'>Each sheet: <span id='text_right'>Sheet = 100</span></p>
                        <p id='text_left'>Estimated Handling Fee: <span id='text_right'>0</span></p>
                        <p id='text_left'>Estimated Margin: <span id='text_right'>Estimated Margin</span></p>
                    </div>


                    <div aria-label="Basic mixed styles example">
                       
                        <button type="submit" value="buy" class="btn1 " id="btc-price">Buy</button>

                        <button type="submit" value="sell" class="btn2 btn-success " id="btc-price">Buy</button>
                    </div>
                </div>
                </form>

            </nav>





            <article>
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright">
                        <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                    </div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                            "width": "100%",
                            "height": "100%",
                            "symbol": "BINANCE:BTCUSDT",
                            "timezone": "Etc/UTC",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "withdateranges": true,
                            "range": "3M",
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "details": true,
                            "hotlist": true,
                            "calendar": false,
                            "show_popup_button": true,
                            "popup_width": "1000",
                            "popup_height": "650",
                            "support_host": "https://www.tradingview.com"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </article>
        </section>

        <footer>
            <div class="texthead">
                <div class="row align-items-center">
                    <div class="col">
                        Position holding
                    </div>
                    <div class="col">
                        Pending Orders
                    </div>
                    <div class="col">
                        History
                    </div>
                    <?php
                          // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                          $sql = "SELECT * FROM buy";
                          
                         
                          // รันคำสั่ง SQL
                          $result = $conn->query($sql);
                          // ตรวจสอบว่ามีผลลัพธ์หรือไม่
// ตรวจสอบว่ามีผลลัพธ์หรือไม่
if ($result->num_rows > 0) {
    // ดึงผลลัพธ์ออกมา
    $row = $result->fetch_assoc();
   $row["loss"];
} else {
    echo "No results found.";
}

                        ?>

                    <div class="col">
                        Profit and Loss: <span><?php echo $row['loss']?></span>
                    </div>
                    <div class="col">
                        <span id="randomNumbers">0%</span>


<script>
// สร้างการสุ่มตัวเลขทุกๆ 1 วินาที (1000 milliseconds)
setInterval(function() {
    // สุ่มตัวเลขระหว่าง 0 ถึง 100
    const randomNumbers = Math.floor(Math.random() * 101);
    document.getElementById("randomNumbers").innerHTML = "Current Margin: " + randomNumbers + '%';
}, 1000);
</script>
                    </div>
                    <div class="col">
                        <span id="randomNumber1" >0%</span>
                    </div>
                    <script>
// สร้างการสุ่มตัวเลขทุกๆ 1 วินาที (1000 milliseconds)
setInterval(function() {
    // สุ่มตัวเลขระหว่าง 0 ถึง 100
    const randomNumber1 = Math.floor(Math.random() * 101);
    document.getElementById("randomNumber1").innerHTML = " Risk Rate: " + randomNumber1 + '%';
}, 1000);


</script>


                </div>
            </div>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">Martket Price</th>
      <th scope="col">Multiplier</th>
      <th scope="col">Set loss</th>
      <th scope="col">Set profit</th>
      <th scope="col">Loss</th>
      <th scope="col">Profit</th>
      <th scope="col">Seconds</th>
      
    </tr>


  </thead>
  <tbody>
    <tr>

                        <?php
                          // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                          $sql = "SELECT * FROM buy";
                          $query = mysqli_query($conn, $sql);
                        ?>

                        <?php foreach($query as $data) ?>

      <th scope="row" id="stock-price"></th>
      <td><?php echo $data['multiplier']?></td>
      <td><?php echo $data['setloss']?></td>
      <td><?php echo $data['setprofit']?></td>
      <td><?php echo $data['loss']?></td>    
      <script>
                        let wsS = new WebSocket('wss://stream.binance.com:9443/ws/btcusdt@trade');
                        let stockPriceElements = document.getElementById('stock-price');
                        let lastPrices = null;
                    
                        wsS.onmessage = (event) => {
                        let stockOjects = JSON.parse(event.data);
                        let prices = parseFloat(stockOjects.p).toFixed(4);
                        stockPriceElements.innerHTML = prices;
                        stockPriceElements.style.color = !lastPrices || lastPrices === prices ? 'black' : prices > lastPrices ? 'green' : 'red';       
                        lastPrices = prices;
                        }
                    </script>
    </tr>
    <tr>
      <th scope="row"  id="stock-price2" ></th>
      <td><?php echo $data['multiplier']?></td>
      <td><?php echo $data['setloss']?></td>
      <td><?php echo $data['setprofit']?></td>
      <td><?php echo $data['loss']?></td>
      <td id="randomNumber"></td>
      <td id="countdown"></td>

<script>
    let timeLeft = 60;

// ฟังก์ชันสำหรับการนับถอยหลัง
    const countdownTimer = setInterval(function() {
    document.getElementById("countdown").innerHTML = "Time remaining: " + timeLeft + " seconds";
    timeLeft--;

    // เมื่อเวลาถึง 0 วินาที
    if (timeLeft < 0) {
        clearInterval(countdownTimer);
        document.getElementById("countdown").innerHTML = "successfully!";

        // ส่งค่าตัวเลขสุ่มสุดท้ายไปยัง PHP
        sendRandomNumberToServer();
    }
    }, 1000);

// ฟังก์ชันสำหรับการสุ่มตัวเลขและส่งไปยังเซิร์ฟเวอร์
    function sendRandomNumberToServer() {

    // สุ่มตัวเลขระหว่าง 0 ถึง 100 randomDecimal = (Math.random() * 100).toFixed(2);  // สุ่มระหว่าง 0 ถึง 100 และปัดเป็นทศนิยม 2 ตำแหน่ง
    const randomNumber = Math.floor(Math.random() * 101);
    document.getElementById("randomNumber").innerHTML = "Profit: " + randomNumber;

    // ส่งข้อมูลไปยัง PHP
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save_sata_random.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log("Data sent to server successfully!");
              // หลังจากบันทึกข้อมูลสำเร็จ ให้รีโหลดหน้าเว็บ
        } else {
            console.error("Error sending data to server.");
        }
    };

    xhr.send("randomNumber=" + encodeURIComponent(randomNumber));
    }
</script> 


    <!--<script>
let timeLeft = 30;

// สร้างการนับถอยหลังทุกๆ 1 วินาที
const countdownTimer = setInterval(function() {
    document.getElementById("countdown").innerHTML = "Time remaining: " + timeLeft + " seconds";
    timeLeft--;

    // เมื่อเวลาถึง 0 วินาที ให้หยุดการนับถอยหลังและแสดงตัวเลขสุ่ม
    if (timeLeft < 0) {
        clearInterval(countdownTimer);

        // สุ่มตัวเลขระหว่าง 0 ถึง 100
        const randomNumber = Math.floor(Math.random() * 101);
        document.getElementById("randomNumber").innerHTML = "Random number: " + randomNumber;

        document.getElementById("countdown").innerHTML = "Time's up!";
    }
}, 1000);
</script>
-->
      


      <script>
                        let wsSS = new WebSocket('wss://stream.binance.com:9443/ws/btcusdt@trade');
                        let stockPriceElementsS = document.getElementById('stock-price2');
                        let lastPricesS = null;
                    
                        wsSS.onmessage = (event) => {
                        let stockOjectsS = JSON.parse(event.data);
                        let pricesS = parseFloat(stockOjectsS.p).toFixed(4);
                        stockPriceElementsS.innerHTML = pricesS;
                        stockPriceElementsS.style.color = !lastPricesS || lastPricesS === pricesS ? 'black' : pricesS > lastPricesS ? 'green' : 'red';       
                        lastPricesS = pricesS;
                        }
                    </script>
    </tr>

  </tbody>
                    
</table>
</div>

        </footer>
        <script src="Analytics.js"></script>
    </body>

</html>