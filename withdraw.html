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
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>History</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="./../New/homepage.php" class="logo">
                    <img src="./information/images/logo.png" alt="">
                    <style>
                        img {
                            width: 30px;
                            height: 30px;
                            margin: 10px;
                        }
                    </style>

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
        <nav>
        <h1><span>WITHDRAW</span> HISTORY</h1>
            <table class="table">
                <thead style="text-align: center";>
                    <tr>
                        <th scope="col" class="table-primary">COIN</th>
                        <th scope="col" class="table-secondary">ADDRESS</th>
                        <th scope="col" class="table-success">AMOUNT</th>
                    </tr>
                </thead>
              
                <tbody style="text-align: center";>
                    <?php
                    $sql ="SELECT * FROM withdraw WHERE (coin,address,amount) IN (SELECT coin, address, amount FROM withdraw)";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo    "<td class=table-success>" .$row["coin"] . "</td>";
                        echo    "<td class=table-danger>" .$row["address"] . "</td>";
                        echo    "<td class=table-success> " . $row["amount"] . " $</td>";

                        echo"</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </nav>

        <body>
            <script src="Analytics.js"></script>
        </body>

    </html>