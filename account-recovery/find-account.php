<?php
session_start();
// Database connection credentials
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "hi";


$host = "localhost";
$username = "u683255285_hinduwhocodes";
$password = "WhatToDo@9";
$database = "u683255285_hindu_int";

// if(isset($_GET['from'])){
//     $from_url = "https://www.hinduintellectual.com/" + $_GET['from'];
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Account - Hindu Intellectual</title>

    <!-- font css -->
     <link rel="stylesheet" href="../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/onboard.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="top_of_nav">
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">HI : For The Hindu, By The Hindu</p>
        </div>
        <div class="top_of_nav_left">
            <!-- <p class="laila-medium min_top_text">Donate</p> -->
            <a href="https://hinduintellectual.com/" class="laila-medium min_top_text">Home</a>
            <p>|</p>
            <a href="donate.php" class="laila-medium min_top_text">Donate</a>
        </div>
    </div>

    <div class="navigation_bar">
        <div class="inner_nav">
            <div class="left_nav">
                <img src="../assets/home_page_images/logo_hindu.png" alt="">
            </div>
            <div class="nav_right_phone">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn_phone">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>
                <button id="openNav" class="nav_btn_phone">
                    <img src="../assets/home_page_images/menu.png" alt="">
                    <p class="laila-medium">Menu</p>
                </button>
            </div>
            <div class="right_nav">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>

               <a href="https://hinduintellectual.com/sanatan-shield.php" class="nav_btn">
                    <img src="../assets/images/hindu_header.png" alt="">
                    <p class="laila-medium">Sanatan Shield</p>
                </a>


                <a href="https://hinduintellectual.com/contests.php" class="nav_btn">
                    <img src="../assets/home_page_images/temple.png" alt="">
                    <p class="laila-medium">Contests</p>
                </a>


                <a href="https://hinduintellectual.com/festivals.php" class="nav_btn">
                    <img src="../assets/home_page_images/festival.png" alt="">
                    <p class="laila-medium">Festivals</p>
                </a>


                <a href="https://hinduintellectual.com/chalisha.php" class="nav_btn">
                    <img src="../assets/home_page_images/chalisha.png" alt="">
                    <p class="laila-medium">Chalisha</p>
                </a>


                <a href="https://hinduintellectual.com/bhajan.php" class="nav_btn">
                    <img src="../assets/home_page_images/bhajan.png" alt="">
                    <p class="laila-medium">Bhajan</p>
                </a>


                <a href="https://hinduintellectual.com/aarti.php" class="nav_btn">
                    <img src="../assets/home_page_images/arti.png" alt="">
                    <p class="laila-medium">Aarti</p>
                </a>

                <a href="https://hinduintellectual.com/mantra.php" class="nav_btn">
                    <img src="../assets/home_page_images/mantra.png" alt="">
                    <p class="laila-medium">Mantra</p>
                </a>
                
            </div>
        </div>
    </div>



    <div id="navbar_updated" class="hidden">
    <button id="closeNav" class="close-btn">&times; Close</button>
        <ul>
            <li><a href="https://hinduintellectual.com/index.php">Home</a></li>
            <li><a href="https://hinduintellectual.com/library.php">Library</a></li>
            <li><a href="https://hinduintellectual.com/contests.php">Contests</a></li>
            <li><a href="https://hinduintellectual.com/ramcharitmanas.php">Ramcharitmanas</a></li>
            <li><a href="https://hinduintellectual.com/festivals.php">Festivals</a></li>
            <li><a href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
            <li><a href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
            <li><a href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
            <li><a href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
        </ul>
    </div>



<div class="login_box">
    <div class="login_space">
        <div class="login_heading">
            <h1 class="laila-bold" >Find Your Account</h1>
            <a  class="laila-regular go_back_home" href="https://hinduintellectual.com/">X</a>
        </div>


<?php
// Database connection


$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];

    if (!empty($phone)) {
        // Sanitize input
        $phone = $conn->real_escape_string($phone);

        // Check if the phone number exists
        $query = "SELECT phone FROM users WHERE phone = '$phone'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo 'Account Found, wait a while...';
            $_SESSION['recoStat'] = 1;
             echo '<script>window.location.href = "https://hinduintellectual.com/account-recovery/match-email.php?phone='.$row['phone'].'";</script>';
        } else {
            echo "<p>Phone number does not exist.</p>";
        }
    } else {
        echo "<p>Please enter a phone number.</p>";
    }
}

$conn->close();
?>


        <form class="main_login_form" action="" method="post" >
            <div class="input_box">
                <img src="../assets/images/phone.png" alt="">
                <input name="phone" class="laila-regular" type="text" placeholder="Phone Number">
            </div>
            <p class="laila-regular terms_noti">By loggin in, you are agree with our <a href="#">T&C</a> and <a href="#">Privacy Policy</a></p>
            <button class="laila-regular" type="submit">Continue</button>
        </form>
        <?php
        
            if(isset($_GET['from'])){
                $from = $_GET['from'];
                // echo '<script>window.location.href = "'.$from_url.'";</script>';
                echo '<p class="laila-regular another_one">Don\'t Have An Account? <a href="https://hinduintellectual.com/register.php?from='.$from.'">Register</a></p>';
            } else{
                echo '<p class="laila-regular another_one">Don\'t Have An Account? <a href="https://hinduintellectual.com/register.php">Register</a></p>';
            }
        
        ?>
        <!--<p class="laila-regular another_one">Don't Have An Account? <a href="https://hinduintellectual.com/register.php">Register</a></p>-->
    </div>
</div>



<div class="footer">
        <div class="footer_space">
            <div class="footer_details_box">
                <img src="./assets/home_page_images/logo_hindu.png" alt="">
                <p class="laila-medium">HinduIntellectual: Explore 700+ shastras, Ramcharitmanas, bhajans, aartis, mantras, festivals, contests, and spiritual insights. A platform for Hindus to connect, learn, and celebrate Sanatan Dharma.</p>
            </div>

            <div class="footer_link_box">
                <h3 class="laila-bold">Useful Links</h3>
                <ul>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/search.php">Sanatan Search</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/library.php">HI- Library</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/festivals.php">Festival</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/contests.php">Contests</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
                </ul>
            </div>

            <!-- <div class="footer_link_box">
                <h3 class="laila-bold">Additional Features</h3>
                <ul>
                    <li><a class="laila-regular" href="#">Sanatan Search</a></li>
                    <li><a class="laila-regular" href="#">HI- Library</a></li>
                    <li><a class="laila-regular" href="#">Contests</a></li>
                    <li><a class="laila-regular" href="#">Chalisha</a></li>
                    <li><a class="laila-regular" href="#">Bhajan</a></li>
                    <li><a class="laila-regular" href="#">Mantra</a></li>
                    <li><a class="laila-regular" href="#">Aarti</a></li>
                </ul>
            </div> -->
            

            <div class="footer_link_box">
                <h3 class="laila-bold">About HI</h3>
                <ul>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/about-us.php">About Us</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/contact-us.php">Contact Us</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/privacy-policy.php">Privacy Policy</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/terms-and-conditions.php">Terms & Conditions</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/disclaimer.php">Disclaimer</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/faq.php">FAQ</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/donate.php">Donate</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/sitemap.xml">Sitemap</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="laila-regular">Copyright 2025 HinduIntellectual. All Rights Reserved</p>
        </div>
    </div>



</body>

<script>
    document.addEventListener("scroll", () => {
    const navbar = document.querySelector(".inner_nav");
    if (window.scrollY >= 70) {
        navbar.classList.add("scrolled");
    } else if(window.scrollY <= 40) {
        navbar.classList.remove("scrolled");
    }
});



</script>
<script src="./assets/js/navbar.js"></script>
</html>