<?php
// Database connection credentials
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "hi";


$host = "localhost";
$username = "u683255285_hinduwhocodes";
$password = "WhatToDo@9";
$database = "u683255285_hindu_int";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M5KW6ZDB');</script>
    <!-- End Google Tag Manager --> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hindu Intellectual - HI of Sanatan Dharm</title>

    <!-- font css -->
     <link rel="stylesheet" href="./assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/chart.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-510EWC4F5Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-510EWC4F5Z');
</script>
<body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5KW6ZDB"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
   <div class="top_of_nav">
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">HI : For the Hindus, by a Hindu</p>
        </div>
        <div class="top_of_nav_left">
            <a href="https://hinduintellectual.com/" class="laila-medium min_top_text">Home</a>
            <p>|</p>
            <!-- <p class="laila-medium min_top_text">Donate</p> -->
            <a href="donate.php" class="laila-medium min_top_text">Donate</a>
        </div>
    </div>

    <div class="navigation_bar">
        <div class="inner_nav">
            <div class="left_nav">
                <img src="./assets/home_page_images/logo_hindu.png" alt="">
            </div>
            <div class="nav_right_phone">
                <a href="https://hinduintellectual.com/sanatan-shield.php" class="nav_btn_phone">
                    <img src="./assets/images/hindu_header.png" alt="">
                    <p class="laila-medium">Sanatan Shield</p>
                </a>
                <button id="openNav" class="nav_btn_phone">
                    <img src="./assets/home_page_images/menu.png" alt="">
                    <p class="laila-medium">Menu</p>
                </button>
            </div>
            <div class="right_nav">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="./assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>

                <a href="https://hinduintellectual.com/sanatan-shield.php" class="nav_btn">
                    <img src="./assets/images/hindu_header.png" alt="">
                    <p class="laila-medium">Sanatan Shield</p>
                </a>


                <a href="https://hinduintellectual.com/contests.php" class="nav_btn">
                    <img src="./assets/home_page_images/temple.png" alt="">
                    <p class="laila-medium">Contests</p>
                </a>


                <a href="https://hinduintellectual.com/festivals.php" class="nav_btn">
                    <img src="./assets/home_page_images/festival.png" alt="">
                    <p class="laila-medium">Festivals</p>
                </a>


                <a href="https://hinduintellectual.com/chalisha.php" class="nav_btn">
                    <img src="./assets/home_page_images/chalisha.png" alt="">
                    <p class="laila-medium">Chalisha</p>
                </a>


                <a href="https://hinduintellectual.com/bhajan.php" class="nav_btn">
                    <img src="./assets/home_page_images/bhajan.png" alt="">
                    <p class="laila-medium">Bhajan</p>
                </a>


                <a href="https://hinduintellectual.com/aarti.php" class="nav_btn">
                    <img src="./assets/home_page_images/arti.png" alt="">
                    <p class="laila-medium">Aarti</p>
                </a>

                <a href="https://hinduintellectual.com/mantra.php" class="nav_btn">
                    <img src="./assets/home_page_images/mantra.png" alt="">
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
            <li><a href="https://hinduintellectual.com/sanatan-shield.php">Shanatan Shield</a></li>
            <li><a href="https://hinduintellectual.com/festivals.php">Festivals</a></li>
            <li><a href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
            <li><a href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
            <li><a href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
            <li><a href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
        </ul>
    </div>


    <!-- scroll feed here -->

    <div class="scroll_feed">
        <div class="scroll_feed_space">


<?php

// Establish connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$query = "SELECT * FROM updates ORDER BY id DESC LIMIT 20";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        // Assuming uploaded images are stored in the `uploads` folder
        $imagePath = "./assets/update_images/" . $row['id'] . ".png";
        if (!file_exists($imagePath)) {
            $imagePath = "./assets/update_images/" . $row['id'] . ".jpg"; // Check for JPG fallback
        }

        echo "<td>";
        if (file_exists($imagePath)) {
            echo'
            <a href="https://www.hinduintellectual.com/update.php?id='.$row['id'].'" class="scroll_feed_btn">
                <img src="'. htmlspecialchars($imagePath) .'" alt="">
                <p class="laila-medium">'. htmlspecialchars($row['title']) .'</p>
            </a>
            ';
        } else {
            echo "No image available.";
        }

    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>

        </div>
    </div>

    <div class="title_area">
        <h3 class="laila-regular">श्रीमद गोस्वामी तुलसीदास जी कृत</h3>
        <h1 class="laila-medium">श्री रामशलाका प्रश्नावली</h1>
    </div>

    <div class="chart">
    <form action="process.php" method="POST">
        <table >
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">सु</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">प्र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">उ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">वि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">हो</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">मु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ग</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ब</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">सुसे</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">नु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">वि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">छ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">अ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">द</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">र</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">रु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">फ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">सि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">सि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">रे</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">सब</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">त्मे</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ल</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ल</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">य</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ई</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">सुज</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">सो</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">ग</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">सु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">कु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ग</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">त</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">ई</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ल</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">धा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">वे</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">नो</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">त्य</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">कु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">जो</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">रि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">अ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">कि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ही</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">रा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">य</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">पु</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">सु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">थ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">सो</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">जे</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">इ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ग</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">सं</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">क</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">रे</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">हो</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">नि</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">ति</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">त</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">इ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ह</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ब</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">ब</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">प</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">वि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">य</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">तु</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">म</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">मा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">मि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">मी</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">म्हा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">जा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">हू</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ही</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">जू</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">ता</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">रा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">रे</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">री</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">ह</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">का</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">फ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">खा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">जि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ई</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">रा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">पू</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">द</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ल</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">णि</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">को</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">मि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">ग</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ज</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">य</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">ने</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">मणि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">क</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ज</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">प</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ल</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">हि</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">रा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">रि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">ग</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">द</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">ष</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">खि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">जि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">मनि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">त</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ज</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">सि</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">मु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">कौ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">मि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ज</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">ग</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">धु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">ख</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">सु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">का</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">र</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">गु</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">क</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">भ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">अ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">घ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">नि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">म</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ल</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">व</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ती</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">रि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">भ</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">ना</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">पु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">व</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">अ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">ढा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ल</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">का</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">ए</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">तु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">नु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">व</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">थ</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">सि</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">ह</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">षु</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">म्ह</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">रा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">स</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">हि</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">र</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">त</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">न</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ष</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">जा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ा</button></td>
            </tr>
            <tr>
                <td><button class="laila-regular" type="submit" name="button_id" value="1">र</button></td>
                <td><button class="laila-regular" type="submit" name="button_id" value="2">सा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="3">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="4">ला</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="5">धो</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">ा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">री</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ज</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">इ</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">ही</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="6">षा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="7">ज</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="8">ई</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="9">रा</button></td>
                <td><button type="submit" class="laila-regular" name="button_id" value="10">रे</button></td>
            </tr>
        </table>
    </form>
    </div>



    <div class="chart_chaupayi">
        <h3 class="laila-medium">जबहिं प्रच्छक अंक पर, अंगुली को धरी देत।<br>
            ताके अगिले अंक ते, नावमाक्षर गनी लेत।।<br>
            ऊपर को ऊपर लिखे, नीचे निम्न लिखेत।<br>
            रामशलाका प्रश्न यह, यथा उचित फल देत।।</h3>

        <p class="laila-regular"><b>सार :</b> जब आप इस रामशलाका प्रश्नावली के किसी भी अंक पर अंगुली रख देते हो और उस अंक पर दिए अक्षर को लिख लेते हो, और उसके बाद उस अक्षर के बाद नवा अक्षर गिनते हो और उसे भी आगे लिख लेते हो, और फिर उस नवे अक्षर से भी आगे नवा अक्षर गिनते हो और लिखते हो, तब तक नवा अक्षर गिनते और लिखते रहना है जब तक आपने जहाँ से सुरु किया था वहां न आ जाओ, ऐसा करते करते आप जो अक्षर लिखते गए थे वे एक चौपाई का रूप ले लेंगे और उस चौपाई के भाव में ही आपके मन के पृश्न का उत्तर होगा।</p>
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
                    <li><a class="laila-regular" href="https://hinduintellectual.com/donate.php">Donate</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/sitemap.php">Sitemap</a></li>
                    <!-- <li><a class="laila-regular" href="#">Aarti</a></li> -->
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