<?php include("./server.php"); ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="homepage.css">
    <title>Trading | AsmrProg</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <img src="./information/images/logo.png" alt="">
            <style>
                img {
                    width: 30px;
                    height: 30px;
                    margin: 10px;
                }
            </style>
            <div class="logo-name"><span>Asmr</span>Prog</div>
        </a>
        <ul class="side-menu">
            <li><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li onclick="showForm('./information/Analytics/Analytics.php')"><a href="#"><i class='bx bx-analyse'></i>Analytics</a></li>
            <script>
                function showForm(url) {
                    window.location.href = url;
                }
            </script>

            <li><a href="./Saleshistory.php"><i class='bx bx-message-square-dots'></i>Sales history</a></li>
            <li><a href="./withdraw.php"><i class='bx bx-group'></i>Withdrawal history</a></li>
            <li><a href="KCY.html"><i class='bx bx-cog'></i>KYC</a></li>
            <li><a href="index_service.php"><i class='bx bxs-message-square-dots'></i>Service</a></li>

        </ul>
        <ul class="side-menu">
            <li>
                <a href="login.php" class="logout">
                    <i class='bx bx-log-out-circle'></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>

            <a href="#" class="profile">
                <img src="./information/images/logo.png">
                <!--User profile-->
            </a>
        </nav>

        <!-- End of Navbar -->




        <main>
            <!-- Insights -->
            <ul class="insights">
                <li><i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h3>
                        <?php
                          // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                          $sql = "SELECT SUM(random_number) AS total_amount FROM `random_profit`";
                          
                          // รันคำสั่ง SQL
                            $result = $conn->query($sql);

                            // ตรวจสอบว่ามีผลลัพธ์หรือไม่
                            if ($result->num_rows > 0) {
                                // ดึงผลลัพธ์ออกมา
                                $row = $result->fetch_assoc();
                                echo "<p>" .$row["total_amount"] . "<span>$</span>";
                            } else {
                                echo "No results found.";
                            }

                        ?>

                        </h3>
                    </span>
                </li>

                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h3>
                            <a href="#" class="buttonget" id="buttonget">DEPOSIT</a>
                            <p style="font-size: 10px;">Send crypto to your Account</p>
                        </h3>
                    </span>
                </li>
                <div class="popup">
                    <div class="popupcontent">
                        <img src="./img/cancel-close-removebg-preview.png" class="closeget">
                        <h1>Deposit</h1>
                        <br>
                        <h3><a href="#" class="Cionall"><span class="cionDeposit" id="cionDeposit">USD</span></a>
                            <a href="#" class="Cionall"><span class="cionDepositbtc" id="cionDepositbtc">BTC</span></a>
                            <a href="#" class="Cionall"><span class="cionDepositETH" id="cionDepositETH">ETH</span></a>
                            <a href="#" class="Cionall"><span class="cionDepositUSDT" id="cionDepositUSDT">USDT</span></a>


                            <div class="pupupcionDepositUSDT">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" class="closeUSDT">
                                    <h3>Choose Network</h3>
                                    <br>

                                    <!--Create kan sarng box Choose Network Tomorrow-->
                                    <div class="grid-container">
                                        <a href="#" class="btnUSDTTRON" id="btnUSDTTRON">
                                            <div class="grid-item">
                                                <h5>Tron (TRC20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.01 USDT</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupUSDTTRON">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeUSDTTRON">
                                                <h4>Deposit USDT</h4><br>
                                                <img src="./img/USDT-1.jpeg" alt="" class="imgqrUSDTTRCcoin">
                                                <br><br>
                                                <p class="textUSDTTRCcoin">Network</p>
                                                <h4 style="font-size: 20px;">Tron (TRC20)</h4>
                                                <p class="textUSDTTRCcoin">* Contract Information***jLj6t</p>
                                                <br>
                                                <p class="textUSDTTRCcoin">Deposit Address</p>
                                                <span><input type="text" value="TMM17mZ8nctJyh5vyqwyYjGL8ZYjrMuwmq" id="mytextcopyUSDTTRCcoin" class="textcopyUSDTTRCcoin"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionUSDTTRCcoin()" class="iconcopyUSDTTRCcoin"></span>
                                                <script>
                                                    function myFuntionUSDTTRCcoin() {
                                                        var copyTextUSDTTRCcoin = document.getElementById("mytextcopyUSDTTRCcoin");
                                                        copyTextUSDTTRCcoin.select();
                                                        copyTextUSDTTRCcoin.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextUSDTTRCcoin.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnUSDTTRON").addEventListener("click", function() {
                                                document.querySelector(".popupUSDTTRON").style.display = "flex";
                                            })
                                            document.querySelector(".closeUSDTTRON").addEventListener("click", function() {
                                                document.querySelector(".popupUSDTTRON").style.display = "none";
                                            })
                                        </script>




                                        <a href="#" class="btnUSDTETH" id="btnUSDTETH">
                                            <div class="grid-item">
                                                <h5>Ethereum (ERC20)</h5>
                                                <p class="Choosenetwork">1 bundle</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 USDT</p>
                                                <p class="Choosenetwork">Est.arrival = 3 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupUSDTETH">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeUSDTETH">
                                                <h4>Deposit USDT</h4><br>
                                                <img src="./img/USDT-ETH2.jpeg" alt="" class="imgqrUSDTEthreum">
                                                <br><br>
                                                <p class="textUSDTEthreum">Network</p>
                                                <h4 style="font-size: 20px;">Ethereum (ERC20)</h4>
                                                <p class="textUSDTEthreum">* Contract Information***31EC7</p>
                                                <br>
                                                <p class="textUSDTEthreum">Deposit Address</p>
                                                <span><input type="text" value="0xec8d1d76494ff7f7bee45b7038c512ad6af5156b" id="mytextcopyUSDTEthreum" class="textcopyUSDTEthreum"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionUSDTEthreum()" class="iconcopyUSDTEthreum"></span>
                                                <script>
                                                    function myFuntionUSDTEthreum() {
                                                        var copyTextUSDTEthreum = document.getElementById("mytextcopyUSDTEthreum");
                                                        copyTextUSDTEthreum.select();
                                                        copyTextUSDTEthreum.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextUSDTEthreum.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnUSDTETH").addEventListener("click", function() {
                                                document.querySelector(".popupUSDTETH").style.display = "flex";
                                            })
                                            document.querySelector(".closeUSDTETH").addEventListener("click", function() {
                                                document.querySelector(".popupUSDTETH").style.display = "none";
                                            })
                                        </script>



                                        <a href="#" class="btnusdtSOLANA" id="btnusdtSOLANA">
                                            <div class="grid-item">
                                                <h5>Solana</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 USDT</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupusdtSOLANA">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeusdtSOLANA">
                                                <h4>Deposit USDT</h4><br>
                                                <img src="./img/USDT-SOLANA3.jpeg" alt="" class="imgqrUSDTSOLANAcoin">
                                                <br><br>
                                                <p class="textUSDTSOLANAcoin">Network</p>
                                                <h4 style="font-size: 20px;">SOLANA</h4>
                                                <p class="textUSDTSOLANAcoin">* Contract Information***nwNYB</p>
                                                <br>
                                                <p class="textUSDTSOLANAcoin">Deposit Address</p>
                                                <span><input type="text" value="Bn9Wj6mJkuzPK2tBLyGgYMocUAvKQ3nhs9tdmKNnSU4x" id="mytextcopyUSDTSOLANAcoin" class="textcopyUSDTSOLANAcoin"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionUSDTSOLANAcoin()" class="iconcopyUSDTSOLANAcoin"></span>
                                                <script>
                                                    function myFuntionUSDTSOLANAcoin() {
                                                        var copyTextUSDTSOLANAcoin = document.getElementById("mytextcopyUSDTSOLANAcoin");
                                                        copyTextUSDTSOLANAcoin.select();
                                                        copyTextUSDTSOLANAcoin.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextUSDTSOLANAcoin.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnusdtSOLANA").addEventListener("click", function() {
                                                document.querySelector(".popupusdtSOLANA").style.display = "flex";
                                            })
                                            document.querySelector(".closeusdtSOLANA").addEventListener("click", function() {
                                                document.querySelector(".popupusdtSOLANA").style.display = "none";
                                            })
                                        </script>



                                        <a href="#" class="btnusdtBNB" id="btnusdtBNB">
                                            <div class="grid-item">
                                                <h5>BNB Beacon Chain (BEP2)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.01 USDT</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupusdtBNB">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeusdtBNB">
                                                <h4>Deposit USDT</h4><br>
                                                <img src="./img/USDT-BNBB4.jpeg" alt="" class="imgqrUSDTBNBBcoin">
                                                <br><br>
                                                <p class="textUSDTBNBBcoin">Network</p>
                                                <h4 style="font-size: 20px;">BNB Beacon Chain (BEP2)</h4>
                                                <p class="textUSDTBNBBcoin">* Contract Information***T-6D8</p>
                                                <br>
                                                <p class="textUSDTBNBBcoin">Deposit Address</p>
                                                <span><input type="text" value="bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9" id="mytextcopyUSDTBNBBcoin" class="textcopyUSDTBNBBcoin"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionUSDTBNBBcoin()" class="iconcopyUSDTBNBBcoin"></span>
                                                <script>
                                                    function myFuntionUSDTBNBBcoin() {
                                                        var copyTextUSDTBNBBcoin = document.getElementById("mytextcopyUSDTBNBBcoin");
                                                        copyTextUSDTBNBBcoin.select();
                                                        copyTextUSDTBNBBcoin.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextUSDTBNBBcoin.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnusdtBNB").addEventListener("click", function() {
                                                document.querySelector(".popupusdtBNB").style.display = "flex";
                                            })
                                            document.querySelector(".closeusdtBNB").addEventListener("click", function() {
                                                document.querySelector(".popupusdtBNB").style.display = "none";
                                            })
                                        </script>




                                        <a href="#" class="btnusdtBNBSmart" id="btnusdtBNBSmart">
                                            <div class="grid-item">
                                                <h5>BNB Smart Chain (BEP20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.01 USDT</p>
                                                <p class="Choosenetwork">Est.arrival = 3 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupusdtBNBSmart">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeusdtBNBSmart">
                                                <h4>Deposit USDT</h4><br>
                                                <img src="./img/USDT-BNB-SC5.jpeg" alt="" class="imgqrUSDTBNBSChaincoin">
                                                <br><br>
                                                <p class="textUSDTBNBSChaincoin">Network</p>
                                                <h4 style="font-size: 20px;">BNB Smart Chain (BEP20)</h4>
                                                <p class="textUSDTBNBSChaincoin">* Contract Information***97955</p>
                                                <br>
                                                <p class="textUSDTBNBSChaincoin">Deposit Address</p>
                                                <span><input type="text" value="0xec8d1d76494ff7f7bee45b7038c512ad6af5156b" id="mytextcopyUSDTBNBSChaincoin" class="textcopyUSDTBNBSChaincoin"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionUSDTBNBSChaincoin()" class="iconcopyUSDTBNBSChaincoin"></span>
                                                <script>
                                                    function myFuntionUSDTBNBSChaincoin() {
                                                        var copyTextUSDTBNBSChaincoin = document.getElementById("mytextcopyUSDTBNBSChaincoin");
                                                        copyTextUSDTBNBSChaincoin.select();
                                                        copyTextUSDTBNBSChaincoin.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextUSDTBNBSChaincoin.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnusdtBNBSmart").addEventListener("click", function() {
                                                document.querySelector(".popupusdtBNBSmart").style.display = "flex";
                                            })
                                            document.querySelector(".closeusdtBNBSmart").addEventListener("click", function() {
                                                document.querySelector(".popupusdtBNBSmart").style.display = "none";
                                            })
                                        </script>



                                        <style>
                                            body {
                                                font-family: Arial, sans-serif;
                                                display: flex;
                                                align-items: center;
                                                height: 100vh;
                                                margin: 0;
                                                /*background-color: #f0f0f0;*/
                                            }
                                            
                                            .grid-container .Choosenetwork {
                                                font-size: 10px;
                                            }
                                            
                                            .grid-container {
                                                display: grid;
                                                gap: 10px;
                                                padding: 10px;
                                                /* background-color: #fff;
                                            border: 1px solid #ddd;*/
                                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                                cursor: pointer;
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-container .grid-item:hover {
                                                background: linear-gradient(45deg, #af4220, #402ee0);
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-item {
                                                background-color: rgba(92, 90, 95, 0.6);
                                                color: rgb(0, 0, 0);
                                                padding: 20px;
                                                font-size: 1.5em;
                                                /*text-align: center;*/
                                                border-radius: 10px;
                                                border: 1px solid #969393;
                                            }
                                        </style>
                                    </div>
                                    <!--End choose Network-->
                                </div>
                            </div>
                            <script>
                                document.getElementById("cionDepositUSDT").addEventListener("click", function() {
                                    document.querySelector(".pupupcionDepositUSDT").style.display = "flex";
                                })
                                document.querySelector(".closeUSDT").addEventListener("click", function() {
                                    document.querySelector(".pupupcionDepositUSDT").style.display = "none";
                                })
                            </script>


                            <div class="pupupcionDepositETH">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" class="closeETH">
                                    <h3>Choose Network</h3>
                                    <br>

                                    <!--Create kan sarng box Choose Network Tomorrow-->
                                    <div class="grid-container">
                                        <a href="#" class="btnETHERC" id="btnETHERC">
                                            <div class="grid-item">
                                                <h5>Ethereum (ERC20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 ETH</p>
                                                <p class="Choosenetwork">Est.arrival = mins</p>
                                            </div>
                                        </a>
                                        <div class="popupETHERC">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeETHERC">
                                                <h4>Deposit ETH</h4>
                                                <img src="./img/ETH.jpeg" alt="" class="imgqrETHERC">
                                                <br>
                                                <p class="textETHERC">Network</p>
                                                <h4 style="font-size: 20px;">Ethereum (ERC20)</h4>
                                                <br>
                                                <p class="textETHERC">Deposit Address</p>
                                                <span><input type="text" value="0xec8d1d76494ff7f7bee45b7038c512ad6af5156b" id="mytextcopyETHERC" class="textcopyETHERC"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionETHERC()" class="iconcopyETHERC"></span>
                                                <script>
                                                    function myFuntionETHERC() {
                                                        var copyTextETHERC = document.getElementById("mytextcopyETHERC");
                                                        copyTextETHERC.select();
                                                        copyTextETHERC.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextETHERC.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnETHERC").addEventListener("click", function() {
                                                document.querySelector(".popupETHERC").style.display = "flex";
                                            })
                                            document.querySelector(".closeETHERC").addEventListener("click", function() {
                                                document.querySelector(".popupETHERC").style.display = "none";
                                            })
                                        </script>




                                        <a href="#" class="btnBNBBEP" id="btnBNBBEP">
                                            <div class="grid-item">
                                                <h5>BNB Beacon Chain (BEP2)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00001 ETH</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupBNBBEP">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeBNBBEP">
                                                <h4>Deposit ETH</h4>
                                                <img src="./img/ETH-BNBB.jpeg" alt="" class="imgqrETHBNBB">
                                                <br>
                                                <p class="textETHBNBB">Network</p>
                                                <h4 style="font-size: 20px;">BNB Beacon Chain (BEP2)</h4>
                                                <p class="textETHBNBB">* Contract Information***H-1C9</p>
                                                <p class="textETHBNBB">Deposit Address</p>
                                                <span><input type="text" value="bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9" id="mytextcopyETHBNBB" class="textcopyETHBNBB"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionETHBNBB()" class="iconcopyETHBNBB"></span>
                                                <script>
                                                    function myFuntionETHBNBB() {
                                                        var copyTextETHBNBB = document.getElementById("mytextcopyETHBNBB");
                                                        copyTextETHBNBB.select();
                                                        copyTextETHBNBB.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextETHBNBB.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnBNBBEP").addEventListener("click", function() {
                                                document.querySelector(".popupBNBBEP").style.display = "flex";
                                            })
                                            document.querySelector(".closeBNBBEP").addEventListener("click", function() {
                                                document.querySelector(".popupBNBBEP").style.display = "none";
                                            })
                                        </script>



                                        <a href="#" class="btnBNBChain" id="btnBNBChain">
                                            <div class="grid-item">
                                                <h5>BNB Smart Chain (BEP20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 ETH</p>
                                                <p class="Choosenetwork">Est.arrival = 1 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupBNBChain">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeBNBChain">
                                                <h4>Deposit ETH</h4>
                                                <img src="./img/ETH-BNBSC.jpeg" alt="" class="imgqrETHBNBSCCHAIN">
                                                <br>
                                                <p class="textETHBNBSCCHAIN">Network</p>
                                                <h4 style="font-size: 20px;">BNB Smart Chain (BEP20)</h4>
                                                <p class="textETHBNBSCCHAIN">* Contract Information***933f8</p>
                                                <p class="textETHBNBSCCHAIN">Deposit Address</p>
                                                <span><input type="text" value="0xec8d1d76494ff7f7bee45b7038c512ad6af5156b" id="mytextcopyETHBNBSCCHAIN" class="textcopyETHBNBSCCHAIN"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionETHBNBSCCHAIN()" class="iconcopyETHBNBSCCHAIN"></span>
                                                <script>
                                                    function myFuntionETHBNBSCCHAIN() {
                                                        var copyTextETHBNBSCCHAIN = document.getElementById("mytextcopyETHBNBSCCHAIN");
                                                        copyTextETHBNBSCCHAIN.select();
                                                        copyTextETHBNBSCCHAIN.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextETHBNBSCCHAIN.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnBNBChain").addEventListener("click", function() {
                                                document.querySelector(".popupBNBChain").style.display = "flex";
                                            })
                                            document.querySelector(".closeBNBChain").addEventListener("click", function() {
                                                document.querySelector(".popupBNBChain").style.display = "none";
                                            })
                                        </script>




                                        <style>
                                            body {
                                                font-family: Arial, sans-serif;
                                                display: flex;
                                                align-items: center;
                                                height: 100vh;
                                                margin: 0;
                                                /*background-color: #f0f0f0;*/
                                            }
                                            
                                            .grid-container .Choosenetwork {
                                                font-size: 10px;
                                            }
                                            
                                            .grid-container {
                                                display: grid;
                                                gap: 10px;
                                                padding: 10px;
                                                /* background-color: #fff;
                                            border: 1px solid #ddd;*/
                                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                                cursor: pointer;
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-container .grid-item:hover {
                                                background: linear-gradient(45deg, #af4220, #402ee0);
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-item {
                                                background-color: rgba(92, 90, 95, 0.6);
                                                color: rgb(0, 0, 0);
                                                padding: 20px;
                                                font-size: 1.5em;
                                                /*text-align: center;*/
                                                border-radius: 10px;
                                                border: 1px solid #969393;
                                            }
                                        </style>
                                    </div>
                                    <!--End choose Network-->
                                </div>
                            </div>
                            <script>
                                document.getElementById("cionDepositETH").addEventListener("click", function() {
                                    document.querySelector(".pupupcionDepositETH").style.display = "flex";
                                })
                                document.querySelector(".closeETH").addEventListener("click", function() {
                                    document.querySelector(".pupupcionDepositETH").style.display = "none";
                                })
                            </script>





                            <div class="pupupcionDepositbtc">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closebtc">
                                    <h3>Choose Network</h3>
                                    <br>
                                    <!--Create kan sarng box Choose Network Tomorrow-->
                                    <div class="grid-container">
                                        <a href="#" class="btnBTCDEV" id="btnBTCDEV">
                                            <div class="grid-item">
                                                <h5>BTC (SegWit)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 BTC</p>
                                            </div>
                                        </a>
                                        <div class="popupBTCDEV">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeBTCDEV">
                                                <h4>Deposit USD</h4><br>
                                                <img src="./img/BTC-Segwit.jpeg" alt="" class="imgqrBTCSegwit">
                                                <br><br>
                                                <p class="textBTCSegwit">Network</p>
                                                <h4 style="font-size: 20px;">BTC(Segwit)</h4>
                                                <br>
                                                <p class="textBTCSegwit">Deposit Address</p>
                                                <span><input type="text" value="bc1q3r62jjp4lxhu8x2wf9vjwmqcx60ye9kc6fgmts" id="mytextcopyBTCSegwit" class="textcopyBTCSegwit"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionBTCSegwit()" class="iconcopyBTCSegwit"></span>
                                                <script>
                                                    function myFuntionBTCSegwit() {
                                                        var copyTextBTCSegwit = document.getElementById("mytextcopyBTCSegwit");
                                                        copyTextBTCSegwit.select();
                                                        copyTextBTCSegwit.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextBTCSegwit.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <script>
                                            document.getElementById("btnBTCDEV").addEventListener("click", function() {
                                                document.querySelector(".popupBTCDEV").style.display = "flex";
                                            })
                                            document.querySelector(".closeBTCDEV").addEventListener("click", function() {
                                                document.querySelector(".popupBTCDEV").style.display = "none";
                                            })
                                        </script>




                                        <a href="#" class="btnbitcoin" id="btnbitcoin">
                                            <div class="grid-item">
                                                <h5>Bitcoin</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 BTC</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupbitcoin">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closebitcoin">
                                                <h4>Deposit USD</h4><br>
                                                <img src="./img/BTC-BITCOIN.jpeg" alt="" class="imgqrBTCBITCOIN">
                                                <br><br>
                                                <p class="textBTCBITCOIN">Network</p>
                                                <h4 style="font-size: 20px;">BTC(Segwit)</h4>
                                                <br>
                                                <p class="textBTCBITCOIN">Deposit Address</p>
                                                <span><input type="text" value="16DbyyP1vtgwMupKgG46hUYog5e2gh3u8f" id="mytextcopyBTCBITCOIN" class="textcopyBTCBITCOIN"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionBTCBITCOIN()" class="iconcopyBTCBITCOIN"></span>
                                                <script>
                                                    function myFuntionBTCBITCOIN() {
                                                        var copyTextBTCBITCOIN = document.getElementById("mytextcopyBTCBITCOIN");
                                                        copyTextBTCBITCOIN.select();
                                                        copyTextBTCBITCOIN.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextBTCBITCOIN.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <script>
                                            document.getElementById("btnbitcoin").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoin").style.display = "flex";
                                            })
                                            document.querySelector(".closebitcoin").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoin").style.display = "none";
                                            })
                                        </script>


                                        <!--<a href="#" class="btnETHbtn" id="btnETHbtn">
                                            <div class="grid-item">
                                                <h5>Ethereum (ERC20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 BTC</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupbitcoinETH">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closebitcoinETH">
                                                <input type="text" placeholder="username">
                                                <input type="password" placeholder="password">
                                                <a href="#" class="button">Login</a>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnETHbtn").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoinETH").style.display = "flex";
                                            })
                                            document.querySelector(".closebitcoinETH").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoinETH").style.display = "none";
                                            })
                                        </script> -->



                                        <a href="#" class="btnBNBB" id="btnBNBB">
                                            <div class="grid-item">
                                                <h5>BNB Beacon Chain (BEP2)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00001 BTC</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupbitcoinBNBB">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closebitcoinBNBB">
                                                <h4>Deposit USD</h4>
                                                <img src="./img/BTC-BNBB.jpeg" alt="" class="imgqrBTCBNBBEACONCHAIN">
                                                <br>
                                                <p class="textBTCBNBBEACONCHAIN">Network</p>
                                                <h4 style="font-size: 20px;">BNB Beacon Chain (BEP2)</h4>
                                                <p class="textBTCBNBBEACONCHAIN">* Contract Information***B-1DE</p>
                                                <br>
                                                <p class="textBTCBNBBEACONCHAIN">Deposit Address</p>
                                                <span><input type="text" value="bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9" id="mytextcopyBTCBNBBEACONCHAIN" class="textcopyBTCBNBBEACONCHAIN"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionBTCBNBBEACONCHAIN()" class="iconcopyBTCBNBBEACONCHAIN"></span>
                                                <script>
                                                    function myFuntionBTCBNBBEACONCHAIN() {
                                                        var copyTextBTCBNBBEACONCHAIN = document.getElementById("mytextcopyBTCBNBBEACONCHAIN");
                                                        copyTextBTCBNBBEACONCHAIN.select();
                                                        copyTextBTCBNBBEACONCHAIN.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextBTCBNBBEACONCHAIN.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnBNBB").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoinBNBB").style.display = "flex";
                                            })
                                            document.querySelector(".closebitcoinBNBB").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoinBNBB").style.display = "none";
                                            })
                                        </script>


                                        <a href="#" class="btnBNBsmart" id="btnBNBsmart">
                                            <div class="grid-item">
                                                <h5>BNB Smart Chain (BEP20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 BTC</p>
                                                <p class="Choosenetwork">Est.arrival = 1 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupbitcoinBNBsmart">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closebitcoinBNBsmart">
                                                <h4>Deposit USD</h4>
                                                <img src="./img/BTC-BNBSMARTCHAIN.jpeg" alt="" class="imgqrBTCBNBSmartChain">
                                                <br>
                                                <p class="textBTCBNBSmartChain">Network</p>
                                                <h4 style="font-size: 20px;">BNB Smart Chain (BEP20)</h4>
                                                <p class="textBTCBNBSmartChain">* Contract Information***ea9c</p>
                                                <br>
                                                <p class="textBTCBNBSmartChain">Deposit Address</p>
                                                <span><input type="text" value="0xec8d1d76494ff7f7bee45b7038c512ad6af5156b" id="mytextcopyBTCBNBSmartChain" class="textcopyBTCBNBSmartChain"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionBTCBNBSmartChain()" class="iconcopyBTCBNBSmartChain"></span>
                                                <script>
                                                    function myFuntionBTCBNBSmartChain() {
                                                        var copyTextBTCBNBSmartChain = document.getElementById("mytextcopyBTCBNBSmartChain");
                                                        copyTextBTCBNBSmartChain.select();
                                                        copyTextBTCBNBSmartChain.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextBTCBNBSmartChain.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnBNBsmart").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoinBNBsmart").style.display = "flex";
                                            })
                                            document.querySelector(".closebitcoinBNBsmart").addEventListener("click", function() {
                                                document.querySelector(".popupbitcoinBNBsmart").style.display = "none";
                                            })
                                        </script>




                                        <style>
                                            body {
                                                font-family: Arial, sans-serif;
                                                display: flex;
                                                align-items: center;
                                                height: 100vh;
                                                margin: 0;
                                                /*background-color: #f0f0f0;*/
                                            }
                                            
                                            .grid-container .Choosenetwork {
                                                font-size: 10px;
                                            }
                                            
                                            .grid-container {
                                                display: grid;
                                                gap: 10px;
                                                padding: 10px;
                                                /* background-color: #fff;
                                            border: 1px solid #ddd;*/
                                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                                cursor: pointer;
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-container .grid-item:hover {
                                                background: linear-gradient(45deg, #af4220, #402ee0);
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-item {
                                                background-color: rgba(92, 90, 95, 0.6);
                                                color: rgb(0, 0, 0);
                                                padding: 20px;
                                                font-size: 1.5em;
                                                /*text-align: center;*/
                                                border-radius: 10px;
                                                border: 1px solid #969393;
                                            }
                                        </style>
                                    </div>
                                    <!--End choose Network-->
                                </div>
                            </div>

                            <script>
                                document.getElementById("cionDepositbtc").addEventListener("click", function() {
                                    document.querySelector(".pupupcionDepositbtc").style.display = "flex";
                                })
                                document.querySelector(".closebtc").addEventListener("click", function() {
                                    document.querySelector(".pupupcionDepositbtc").style.display = "none";
                                })
                            </script>







                            <div class="popupDeposit">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeDeposit">
                                    <h3>Choose Network</h3>
                                    <br>

                                    <!--Create kan sarng box Choose Network Tomorrow-->
                                    <div class="grid-container">
                                        <a href="#" class="btnTRON" id="btnTRON">
                                            <div class="grid-item">
                                                <h5>Tron (TRC20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.01 USD</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupTRON">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="" class="closeTRON">
                                                <h4>Deposit USD</h4><br>
                                                <img src="./img/USDT-TRON.jpeg" alt="" class="imgqr">
                                                <br><br>
                                                <p class="texttron">Network</p>
                                                <h4 style="font-size: 20px;">Tron (TRC20)</h4>
                                                <p class="texttron">* Contract Information***jLi6t</p>
                                                <br>
                                                <p class="texttron">Deposit Address</p>
                                                <span><input type="text" value="TMM17mZ8nctJyh5vyqwyYjGL8ZYjrMuwmq" id="mytextcopy" class="textcopy"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntion()" class="iconcopy"></span>
                                                <script>
                                                    function myFuntion() {
                                                        var copyText = document.getElementById("mytextcopy");
                                                        copyText.select();
                                                        copyText.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyText.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <script>
                                            document.getElementById("btnTRON").addEventListener("click", function() {
                                                document.querySelector(".popupTRON").style.display = "flex";
                                            })
                                            document.querySelector(".closeTRON").addEventListener("click", function() {
                                                document.querySelector(".popupTRON").style.display = "none";
                                            })
                                        </script>




                                        <a href="#" class="btnETH" id="btnETH">
                                            <div class="grid-item">
                                                <h5>Ethereum (ERC20)</h5>
                                                <p class="Choosenetwork">1 bundle</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 USD</p>
                                                <p class="Choosenetwork">Est.arrival = 3 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupETH">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeETHCION">
                                                <h4>Deposit USD</h4><br>
                                                <img src="./img/USDT-ETH.jpeg" alt="" class="imgqreth">
                                                <br><br>
                                                <p class="texteth">Network</p>
                                                <h4 style="font-size: 20px;">Ethereum (ERC20)</h4>
                                                <p class="texteth">* Contract Information***31ec7</p>
                                                <br>
                                                <p class="texteth">Deposit Address</p>
                                                <span><input type="text" value="0xec8d1d76494ff7f7bee45b7038c512ad6af5156b" id="mytextcopyeth" class="textcopyeth"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntioneth()" class="iconcopyeth"></span>
                                                <script>
                                                    function myFuntioneth() {
                                                        var copyTexteth = document.getElementById("mytextcopyeth");
                                                        copyTexteth.select();
                                                        copyTexteth.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTexteth.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <script>
                                            document.getElementById("btnETH").addEventListener("click", function() {
                                                document.querySelector(".popupETH").style.display = "flex";
                                            })
                                            document.querySelector(".closeETHCION").addEventListener("click", function() {
                                                document.querySelector(".popupETH").style.display = "none";
                                            })
                                        </script>





                                        <a href="#" class="btnSOLANA" id="btnSOLANA">
                                            <div class="grid-item">
                                                <h5>Solana</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.00000001 USD</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupSOLANA">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeSOLANA">
                                                <h4>Deposit USD</h4><br>
                                                <img src="./img/USDT-SOLANA.jpeg" alt="" class="imgqrSOLANAsolana">
                                                <br><br>
                                                <p class="textSOLANAsolana">Network</p>
                                                <h4 style="font-size: 20px;">Solana</h4>
                                                <p class="textSOLANAsolana">* Contract Information***nwNYB</p>
                                                <br>
                                                <p class="textSOLANAsolana">Deposit Address</p>
                                                <span><input type="text" value="Bn9Wj6mJkuzPK2tBLyGgYMocUAvKQ3nhs9tdmKNnSU4x" id="mytextcopySOLANAsolana" class="textcopySOLANAsolana"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionSOLANAsolana()" class="iconcopySOLANAsolana"></span>
                                                <script>
                                                    function myFuntionSOLANAsolana() {
                                                        var copyTextSOLANAsolana = document.getElementById("mytextcopySOLANAsolana");
                                                        copyTextSOLANAsolana.select();
                                                        copyTextSOLANAsolana.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextSOLANAsolana.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <script>
                                            document.getElementById("btnSOLANA").addEventListener("click", function() {
                                                document.querySelector(".popupSOLANA").style.display = "flex";
                                            })
                                            document.querySelector(".closeSOLANA").addEventListener("click", function() {
                                                document.querySelector(".popupSOLANA").style.display = "none";
                                            })
                                        </script>




                                        <a href="#" class="btnBNB" id="btnBNB">
                                            <div class="grid-item">
                                                <h5>BNB Beacon Chain (BEP2)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.01 USD</p>
                                                <p class="Choosenetwork">Est.arrival = 2 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupBNB">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeBNB">
                                                <h4>Deposit USD</h4><br>
                                                <img src="./img/USDT-BNBBeaconChain.jpeg" alt="" class="imgqrBNBBeaconChain">
                                                <br><br>
                                                <p class="textBNBBeaconChain">Network</p>
                                                <h4 style="font-size: 20px;">BNB Beacon Chain (BEP2)</h4>
                                                <p class="textBNBBeaconChain">* Contract Information***T-6D8</p>
                                                <br>
                                                <p class="textBNBBeaconChain">Deposit Address</p>
                                                <span><input type="text" value="bnb165q9dz39mqh789zuuuqwkv22plut6f4nzy9jc9" id="mytextcopyBNBBeaconChain" class="textcopyBNBBeaconChain"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionBNBBeaconChain()" class="iconcopyBNBBeaconChain"></span>
                                                <script>
                                                    function myFuntionBNBBeaconChain() {
                                                        var copyTextBNBBeaconChain = document.getElementById("mytextcopyBNBBeaconChain");
                                                        copyTextBNBBeaconChain.select();
                                                        copyTextBNBBeaconChain.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextBNBBeaconChain.value);
                                                    }
                                                </script>

                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnBNB").addEventListener("click", function() {
                                                document.querySelector(".popupBNB").style.display = "flex";
                                            })
                                            document.querySelector(".closeBNB").addEventListener("click", function() {
                                                document.querySelector(".popupBNB").style.display = "none";
                                            })
                                        </script>




                                        <a href="#" class="btnBNBSC" id="btnBNBSC">
                                            <div class="grid-item">
                                                <h5>BNB Smart Chain (BEP20)</h5>
                                                <p class="Choosenetwork">1 block confirmation/s</p>
                                                <p class="Choosenetwork">Min. deposit>0.01 USD</p>
                                                <p class="Choosenetwork">Est.arrival = 3 mins</p>
                                            </div>
                                        </a>
                                        <div class="popupBNBSC">
                                            <div class="popupcontent">
                                                <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closeBNBSC">
                                                <h4>Deposit USD</h4><br>
                                                <img src="./img/USDT-BNB-Smart-chai.jpeg" alt="" class="imgqrBNBSartchain">
                                                <br><br>
                                                <p class="textBNBSartchain">Network</p>
                                                <h4 style="font-size: 20px;">BNB Smart Chain (BEP20)</h4>
                                                <p class="textBNBSartchain">* Contract Information***97955</p>
                                                <br>
                                                <p class="textBNBSartchain">Deposit Address</p>
                                                <span><input type="text" value="0xec8d1d76494ff7f7bee45b7038c512ad6af5156b" id="mytextcopyBNBSartchain" class="textcopyBNBSartchain"></input><img src="https://cdn-icons-png.flaticon.com/512/1621/1621635.png" alt="" onclick="myFuntionBNBSartchain()" class="iconcopyBNBSartchain"></span>
                                                <script>
                                                    function myFuntionBNBSartchain() {
                                                        var copyTextBNBSartchain = document.getElementById("mytextcopyBNBSartchain");
                                                        copyTextBNBSartchain.select();
                                                        copyTextBNBSartchain.setSelectionRange(0, 99999)
                                                        document.execCommand("copy");
                                                        alert("Copied the text: " + copyTextBNBSartchain.value);
                                                    }
                                                </script>

                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById("btnBNBSC").addEventListener("click", function() {
                                                document.querySelector(".popupBNBSC").style.display = "flex";
                                            })
                                            document.querySelector(".closeBNBSC").addEventListener("click", function() {
                                                document.querySelector(".popupBNBSC").style.display = "none";
                                            })
                                        </script>





                                        <style>
                                            body {
                                                font-family: Arial, sans-serif;
                                                display: flex;
                                                align-items: center;
                                                height: 100vh;
                                                margin: 0;
                                                /*background-color: #f0f0f0;*/
                                            }
                                            
                                            .grid-container .Choosenetwork {
                                                font-size: 10px;
                                            }
                                            
                                            .grid-container {
                                                display: grid;
                                                gap: 10px;
                                                padding: 10px;
                                                /* background-color: #fff;
                                            border: 1px solid #ddd;*/
                                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                                                cursor: pointer;
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-container .grid-item:hover {
                                                background: linear-gradient(45deg, #af4220, #402ee0);
                                                transform: scale(1.08);
                                                transition: 3s;
                                            }
                                            
                                            .grid-item {
                                                background-color: rgba(92, 90, 95, 0.6);
                                                color: rgb(0, 0, 0);
                                                padding: 20px;
                                                font-size: 1.5em;
                                                /*text-align: center;*/
                                                border-radius: 10px;
                                                border: 1px solid #969393;
                                            }
                                        </style>
                                    </div>
                                    <!--End choose Network-->
                                </div>
                            </div>

                            <script>
                                document.getElementById("cionDeposit").addEventListener("click", function() {
                                    document.querySelector(".popupDeposit").style.display = "flex";
                                })
                                document.querySelector(".closeDeposit").addEventListener("click", function() {
                                    document.querySelector(".popupDeposit").style.display = "none";
                                })
                            </script>









                            <br>

                            <div class="cryptocion" style="padding: 10px;">
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/2529/2529396.png" alt=""></span>USD</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/991/991959.png" alt=""></span>BTC</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/10464/10464500.png" alt=""></span>ETH</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/14764/14764187.png" alt=""></span>USDT</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/10464/10464511.png" alt=""></span>BNB</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/6401/6401729.png" alt=""></span>SOL</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/2794/2794226.png" alt=""></span>DOGE</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/10464/10464583.png" alt=""></span>SHIB</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/565/565665.png" alt=""></span>DOT</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/5988/5988026.png" alt=""></span>XRP</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/6435/6435391.png" alt=""></span>NOT</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/15208/15208069.png" alt=""></span>NEAR</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/16177/16177406.png" alt=""></span>WAR</h3>
                                <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/15208/15208311.png" alt=""></span>ORDI</h3sp>
                                    <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/14657/14657864.png" alt=""></span>BOME</h3>
                                    <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/16136/16136603.png" alt=""></span>OMNI</h3>
                                    <h3 class="cioncrypto"><span><img class="imgicon" src="https://image.shutterstock.com/image-vector/round-convenient-icon-like-easy-260nw-2178023117.jpg" alt=""></span>JASMY</h3>
                                    <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/5592/5592793.png" alt=""></span>FLOKI</h3>
                                    <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/4614/4614353.png" alt=""></span>BB</h3>
                                    <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/9930/9930118.png" alt=""></span>BONK</h3>
                                    <h3 class="cioncrypto"><span><img class="imgicon" src="https://cdn-icons-png.flaticon.com/128/4016/4016908.png" alt=""></span>PEPE</h3>
                            </div>
                            <style>
                                .cioncrypto {
                                    cursor: pointer;
                                    justify-content: space-between;
                                }
                                
                                .cryptocion .imgicon {
                                    width: 30px;
                                    height: 30px;
                                    padding: 5px;
                                    margin: 1px;
                                    cursor: pointer;
                                }
                            </style>
                    </div>
                </div>
                <script>
                    document.getElementById("buttonget").addEventListener("click", function() {
                        document.querySelector(".popup").style.display = "flex";
                    })
                    document.querySelector(".closeget").addEventListener("click", function() {
                        document.querySelector(".popup").style.display = "none";
                    })
                </script>


                <li><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <h3>    
                            <a href="#" class="button" id="button">WITHDRAW</a>
                        </h3>
                    </span>
                </li>
                <div class="popup1">
                    <div class="popupcontent">
                        <img src="./img/cancel-close-removebg-preview.png" alt="user" class="close">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright">
                                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                            </div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                {
                                    "colorTheme": "light",
                                    "dateRange": "12M",
                                    "showChart": true,
                                    "locale": "en",
                                    "largeChartUrl": "",
                                    "isTransparent": false,
                                    "showSymbolLogo": true,
                                    "showFloatingTooltip": false,
                                    "width": "915",
                                    "height": "500",
                                    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                    "gridLineColor": "rgba(240, 243, 250, 0)",
                                    "scaleFontColor": "rgba(19, 23, 34, 1)",
                                    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                    "tabs": [{
                                        "title": "Indices",
                                        "symbols": [{
                                            "s": "FOREXCOM:SPXUSD",
                                            "d": "S&P 500 Index"
                                        }, {
                                            "s": "FOREXCOM:NSXUSD",
                                            "d": "US 100 Cash CFD"
                                        }, {
                                            "s": "FOREXCOM:DJI",
                                            "d": "Dow Jones Industrial Average Index"
                                        }, {
                                            "s": "INDEX:NKY",
                                            "d": "Nikkei 225"
                                        }, {
                                            "s": "INDEX:DEU40",
                                            "d": "DAX Index"
                                        }, {
                                            "s": "FOREXCOM:UKXGBP",
                                            "d": "FTSE 100 Index"
                                        }],
                                        "originalTitle": "Indices"
                                    }, {
                                        "title": "Futures",
                                        "symbols": [{
                                            "s": "CME_MINI:ES1!",
                                            "d": "S&P 500"
                                        }, {
                                            "s": "CME:6E1!",
                                            "d": "Euro"
                                        }, {
                                            "s": "COMEX:GC1!",
                                            "d": "Gold"
                                        }, {
                                            "s": "NYMEX:CL1!",
                                            "d": "WTI Crude Oil"
                                        }, {
                                            "s": "NYMEX:NG1!",
                                            "d": "Gas"
                                        }, {
                                            "s": "CBOT:ZC1!",
                                            "d": "Corn"
                                        }],
                                        "originalTitle": "Futures"
                                    }, {
                                        "title": "Bonds",
                                        "symbols": [{
                                            "s": "CBOT:ZB1!",
                                            "d": "T-Bond"
                                        }, {
                                            "s": "CBOT:UB1!",
                                            "d": "Ultra T-Bond"
                                        }, {
                                            "s": "EUREX:FGBL1!",
                                            "d": "Euro Bund"
                                        }, {
                                            "s": "EUREX:FBTP1!",
                                            "d": "Euro BTP"
                                        }, {
                                            "s": "EUREX:FGBM1!",
                                            "d": "Euro BOBL"
                                        }],
                                        "originalTitle": "Bonds"
                                    }, {
                                        "title": "Forex",
                                        "symbols": [{
                                            "s": "FX:EURUSD",
                                            "d": "EUR to USD"
                                        }, {
                                            "s": "FX:GBPUSD",
                                            "d": "GBP to USD"
                                        }, {
                                            "s": "FX:USDJPY",
                                            "d": "USD to JPY"
                                        }, {
                                            "s": "FX:USDCHF",
                                            "d": "USD to CHF"
                                        }, {
                                            "s": "FX:AUDUSD",
                                            "d": "AUD to USD"
                                        }, {
                                            "s": "FX:USDCAD",
                                            "d": "USD to CAD"
                                        }],
                                        "originalTitle": "Forex"
                                    }]
                                }
                            </script>
                            <input type="text" placeholder="WALLET COIN" disabled="disabled" class="walletcoin">
                        </div><br><br>

                        <!-- TradingView Widget END -->
                        <div class="grid-container1">
                            <div class="grid-item1">COIN</div>
                            <div class="grid-item1">BALANCE</div>
                            <div class="grid-item1">WITHDRAW</div>
                            <div class="grid-item1"><span><img class="cryptocoin" src="https://cdn-icons-png.flaticon.com/128/15208/15208231.png"></span>USDT</div>
                            <div class="grid-item1">
                                <?php 
                                    
                                    // เขียนคำสั่ง SQL เพื่อดึงข้อมูลตัวเลขจากฐานข้อมูล


                          // สร้างคำสั่ง SQL เพื่อดึงข้อมูล
                          $sql = "SELECT SUM(random_number) AS total_amount FROM `random_profit`";
                          
                          // รันคำสั่ง SQL
                            $result = $conn->query($sql);

                            // ตรวจสอบว่ามีผลลัพธ์หรือไม่
                            if ($result->num_rows > 0) {
                                // ดึงผลลัพธ์ออกมา
                               while ($row = $result->fetch_assoc()){
                                $decimal_value =  number_format($row["total_amount"], 4); // 2 คือจำนวนหลักทศนิยม
                                echo "<p> Available funds : " . $decimal_value ."<span>$</span>";
                               }
                               
                            } else {
                                echo "No results found.";
                            }

                                ?>
                            </div>
                            <div class="grid-item1"><img class="cryptocoinwithdraw" src="https://cdn-icons-png.flaticon.com/128/3678/3678679.png" alt="" class="btnBTCWithDraw1" id="btnBTCWithDraw1"></div>



                        <form action="saveWithdraw.php" method="post" >
                            <div class="popuppopupBTCWithDraw1">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closepopupBTCWithDraw1">
                                    <h1>Withdraw</h1>
                                    <p class="text_box">COIN</p>
                                    <div>
                                        <style>
                                            
                                            select { 
                                                width: 80%;
                                                height: 40px;
                                                text-align:center;
                                                justify-content: center;
                                            }
                                        </style>
                                        <select id="options" name="option">
                                            <option value="USDT">
                                                <span class="option-text">USDT</span>
                                            </option>
                                            <option value="BTC">
                                                <span class="option-text">BTC</span>
                                            </option>
                                            <option value="ETH">
                                                <span class="option-text">ETH</span>
                                            </option>
                                            <option value="USD">
                                                <span class="option-text">USD</span>
                                            </option>
                                            <option value="BNB">
                                                <span class="option-text">BNB</span>
                                            </option>
                                            <option value="SOL">
                                                <span class="option-text">SOL</span>
                                            </option>
                                            <option value="TRX">
                                                <span class="option-text">TRX</span>
                                            </option>
                                            <option value="DOEG">
                                                <span class="option-text">DOEG</span>
                                            </option>
                                            <option value="LTC">
                                                <span class="option-text">LTC</span>
                                            </option>
                                            <option value="DGB">
                                                <span class="option-text">DGB</span>
                                            </option>
                                            <option value="WIF">
                                                <span class="option-text">WIF</span>
                                            </option>
                                            <option value="NOT">
                                                <span class="option-text">NOT</span>
                                            </option>
                                            <option value="FLOKI">
                                                <span class="option-text">FLOKI</span>
                                            </option>
                                            <option value="SHIB">
                                                <span class="option-text">SHIB</span>
                                            </option>
                                        </select>
                                    </div>
                                    <?php 
    // เขียนคำสั่ง SQL เพื่อดึงข้อมูลตัวเลขจากฐานข้อมูล
    $sql = "SELECT SUM(random_number) AS total_amount FROM `random_profit`";
$result = $conn->query($sql);

// ตรวจสอบว่ามีผลลัพธ์หรือไม่
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // ดึงข้อมูลแถวแรกจากผลลัพธ์
    $number_value = $row["total_amount"]; // นำค่ามาเก็บในตัวแปร
} else {
    $number_value = ""; // ถ้าไม่มีผลลัพธ์ ให้ตั้งค่าตัวแปรเป็นค่าว่าง
}
                                        ?>
                                    <p class="text_box">Address</p>
                                    <input type="text" class="sBtn-text1" name="saveAddress">
                                    <p class="text_box">AMOUNT</p>
                                    <input type="text" class="sBtn-text2" value="<?php echo htmlspecialchars($number_value); ?>" name="saveAmount">



                                    <p style="font-size: 12px;">TYPE OF WITHDRAW</p>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="color: aliceblue;">
                                          Normal Withdraw (5 Minutes)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2" style="color: aliceblue;">
                                         Priority Withdraw (10 Minutes)
                                        </label>
                                    </div>
                                    <button type="submit" value=">PlaceWithdraw" class="btnwithdraw">Place Withdraw</button>
                                </div>
                            </div>
                        </form>






                            <script>
                                document.getElementById("btnBTCWithDraw1").addEventListener("click", function() {
                                    document.querySelector(".popuppopupBTCWithDraw1").style.display = "flex";
                                })
                                document.querySelector(".closepopupBTCWithDraw1").addEventListener("click", function() {
                                    document.querySelector(".popuppopupBTCWithDraw1").style.display = "none";
                                })
                            </script>



                         
                            <div class="popuppopupETHWithDraw">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closepopupETHWithDraw">
                                    <h1>Withdraw</h1>
                                    <p class="text_box">COIN</p>
                                    <div>
                                       
                                        
                                    </div>
                                    <p class="text_box">Address</p>
                                    <input type="text" class="sBtn-text1">
                                    <p class="text_box">AMOUNT</p>
                                    <input type="text" class="sBtn-text2">
                                    <p style="font-size: 12px;">TYPE OF WITHDRAW</p>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="color: aliceblue;">
                                          Normal Withdraw (5 Minutes)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2" style="color: aliceblue;">
                                         Priority Withdraw (10 Minutes)
                                        </label>
                                    </div>
                                    <button class="btnwithdraw">Place Withdraw</button>



                                </div>
                            </div>
                            <script>
                                document.getElementById("btnETHWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupETHWithDraw").style.display = "flex";
                                })
                                document.querySelector(".closepopupETHWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupETHWithDraw").style.display = "none";
                                })
                            </script>


                           
                            <div class="popuppopupTronWithDraw">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closepopupTronWithDraw">
                                    <h1>Withdraw</h1>
                                    <p class="text_box">COIN</p>
                                    <div class="select-menu">
                                        <div class="select-btn">
                                            <span class="sBtn-text">Select your option</span>
                                            <i class="bx bx-chevron-down"></i>
                                        </div>

                                    
                                    </div>
                                    <p class="text_box">Address</p>
                                    <input type="text" class="sBtn-text1">
                                    <p class="text_box">AMOUNT</p>
                                    <input type="text" class="sBtn-text2">
                                    <p style="font-size: 12px;">TYPE OF WITHDRAW</p>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="color: aliceblue;">
                                          Normal Withdraw (5 Minutes)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2" style="color: aliceblue;">
                                         Priority Withdraw (10 Minutes)
                                        </label>
                                    </div>
                                    <button class="btnwithdraw">Place Withdraw</button>



                                </div>
                            </div>
                            <script>
                                document.getElementById("btnTronWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupTronWithDraw").style.display = "flex";
                                })
                                document.querySelector(".closepopupTronWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupTronWithDraw").style.display = "none";
                                })
                            </script>



                          
                            <div class="popuppopupUSDTWithDraw">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closepopupUSDTWithDraw">
                                    <h1>Withdraw</h1>
                                    <p class="text_box">COIN</p>
                                    <div class="select-menu1">
                                        <div class="select-btn1">
                                            <span class="sBtn-text5">Select your option</span>
                                            <i class="bx bx-chevron-down"></i>
                                        </div>

                                      
                                    </div>
                                    <p class="text_box">Address</p>
                                    <input type="text" class="sBtn-text1">
                                    <p class="text_box">AMOUNT</p>
                                    <input type="text" class="sBtn-text2">
                                    <p style="font-size: 12px;">TYPE OF WITHDRAW</p>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="color: aliceblue;">
                                          Normal Withdraw (5 Minutes)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2" style="color: aliceblue;">
                                         Priority Withdraw (10 Minutes)
                                        </label>
                                    </div>
                                    <button class="btnwithdraw">Place Withdraw</button>



                                </div>
                            </div>
                            <script>
                                document.getElementById("btnUSDTWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupUSDTWithDraw").style.display = "flex";
                                })
                                document.querySelector(".closepopupUSDTWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupUSDTWithDraw").style.display = "none";
                                })
                            </script>


                          
                            <div class="popuppopupSOLANAWithDraw">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closepopupSOLANAWithDraw">
                                    <h1>Withdraw</h1>
                                    <p class="text_box">COIN</p>
                                    <div class="select-menu1">
                                        <div class="select-btn1">
                                            <span class="sBtn-text5">Select your option</span>
                                            <i class="bx bx-chevron-down"></i>
                                        </div>

                                       
                                    </div>
                                    <p class="text_box">Address</p>
                                    <input type="text" class="sBtn-text1">
                                    <p class="text_box">AMOUNT</p>
                                    <input type="text" class="sBtn-text2">
                                    <p style="font-size: 12px;">TYPE OF WITHDRAW</p>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="color: aliceblue;">
                                          Normal Withdraw (5 Minutes)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2" style="color: aliceblue;">
                                         Priority Withdraw (10 Minutes)
                                        </label>
                                    </div>
                                    <button class="btnwithdraw">Place Withdraw</button>

                                </div>
                            </div>
                            <script>
                                document.getElementById("btnSOLANAWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupSOLANAWithDraw").style.display = "flex";
                                })
                                document.querySelector(".closepopupSOLANAWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupSOLANAWithDraw").style.display = "none";
                                })
                            </script>


                        
                            <div class="popuppopupBNBWithDraw">
                                <div class="popupcontent">
                                    <img src="./img/cancel-close-removebg-preview.png" alt="user" class="closepopupBNBWithDraw">
                                    <h1>Withdraw</h1>
                                    <p class="text_box">COIN</p>
                                    <div class="select-menu1">
                                        <div class="select-btn1">
                                            <span class="sBtn-text5">Select your option</span>
                                            <i class="bx bx-chevron-down"></i>
                                        </div>

                                        
                                    </div>
                                    <p class="text_box">Address</p>
                                    <input type="text" class="sBtn-text1">
                                    <p class="text_box">AMOUNT</p>
                                    <input type="text" class="sBtn-text2">
                                    <p style="font-size: 12px;">TYPE OF WITHDRAW</p>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" style="color: aliceblue;">
                                          Normal Withdraw (5 Minutes)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2" style="color: aliceblue;">
                                         Priority Withdraw (10 Minutes)
                                        </label>
                                    </div>
                                    <button class="btnwithdraw">Place Withdraw</button>

                                </div>
                            </div>
                            <script>
                                document.getElementById("btnBNBWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupBNBWithDraw").style.display = "flex";
                                })
                                document.querySelector(".closepopupBNBWithDraw").addEventListener("click", function() {
                                    document.querySelector(".popuppopupBNBWithDraw").style.display = "none";
                                })
                            </script>



                        </div>
                        <style>
                            /* styles.css */
                            
                            body {
                                font-family: Arial, sans-serif;
                                display: flex;
                                height: 100vh;
                                margin: 0;
                                background-color: #f0f0f0;
                            }
                            
                            .grid-container1 {
                                display: grid;
                                grid-template-columns: repeat(3, 1fr);
                                gap: 10px;
                                padding: 10px;
                                background-color: rgb(190, 187, 187);
                                border: 1px solid #ddd;
                                border-radius: 5px;
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                            }
                            
                            .grid-container1 .grid-item1 .cryptocoinwithdraw {
                                width: 40px;
                                height: 40px;
                            }
                            
                            .grid-container1 .grid-item1 .cryptocoin {
                                width: 35px;
                                height: 35px;
                            }
                            
                            .grid-item1 {
                                /*background-color: #007BFF;*/
                                color: rgb(59, 59, 59);
                                padding: 20px;
                                font-size: 1.5em;
                                border-radius: 5px;
                            }
                        </style>
                    </div>
                </div>

                <script>
                    document.getElementById("button").addEventListener("click", function() {
                        document.querySelector(".popup1").style.display = "flex";
                    })
                    document.querySelector(".close").addEventListener("click", function() {
                        document.querySelector(".popup1").style.display = "none";
                    })
                </script>

            </ul>
            <!-- End of Insights -->






            <br>
            <br>

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright">
                    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                </div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                    {
                        "width": "100%",
                        "height": "800",
                        "symbol": "BINANCE:BTCUSDT",
                        "timezone": "Etc/UTC",
                        "theme": "dark",
                        "style": "1",
                        "locale": "en",
                        "range": "YTD",
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



            <br>
            <br>
            <!-- Reminders -->
            <div class="reminders">
                <div class="header">
                    <i class='bx bx-note'></i>

                    <i class='bx bx-filter'></i>
                </div>
            </div>
            <!-- End of Reminders-->
            <br>



            <!-- -->



            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Cryptocurrency Market</h3>
                    </div>
                    <table>
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright">
                                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                            </div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                {
                                    "symbols": [{
                                        "proName": "FOREXCOM:SPXUSD",
                                        "title": "S&P 500 Index"
                                    }, {
                                        "proName": "FOREXCOM:NSXUSD",
                                        "title": "US 100 Cash CFD"
                                    }, {
                                        "proName": "FX_IDC:EURUSD",
                                        "title": "EUR to USD"
                                    }, {
                                        "proName": "BITSTAMP:BTCUSD",
                                        "title": "Bitcoin"
                                    }, {
                                        "proName": "BITSTAMP:ETHUSD",
                                        "title": "Ethereum"
                                    }],
                                    "showSymbolLogo": true,
                                    "isTransparent": false,
                                    "displayMode": "adaptive",
                                    "colorTheme": "dark",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright">
                                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                            </div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                {
                                    "width": "100%",
                                    "height": 550,
                                    "defaultColumn": "overview",
                                    "screener_type": "crypto_mkt",
                                    "displayCurrency": "USD",
                                    "colorTheme": "light",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->

                    </table>
                </div>



                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Technical Analysis</h3>


                    </div>

                    <!-- End of Reminders-->
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright">
                            <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                        </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                            {
                                "interval": "1m",
                                "width": "100%",
                                "isTransparent": false,
                                "height": "450",
                                "symbol": "NASDAQ:AAPL",
                                "showIntervalTabs": true,
                                "displayMode": "single",
                                "locale": "en",
                                "colorTheme": "light"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright">
                            <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
                        </div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                            {
                                "feedMode": "all_symbols",
                                "isTransparent": false,
                                "displayMode": "compact",
                                "width": "100%",
                                "height": 550,
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                </div>

        </main>

        </div>

        <script src="homepage.js"></script>
</body>

</html>