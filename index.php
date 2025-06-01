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
    <?php include("includes/head.php"); ?>
</head>
<body>
    
    <?php include 'includes/gtag_body.php' ?>
    
    <?php include 'includes/header_top_home.php' ?>
    
   <?php include 'includes/header.php' ?>

    <?php include 'includes/story.php' ?>


    <!-- main header from here -->
     <div class="header_main">
        <div class="header_space">
            <div class="header_space_left">
                <div class="search_panel">
                    <h1 class="laila-bold">सनातन पृश्नावली</h1>
                    <div class="search_panel_box">
                        <form action="search.php" method="GET" class="search_panel_box_form">
                            <input class="search_text_field laila-medium" name="search" type="text" placeholder="सनातन धर्म से संबंधित प्रश्न ...">
                            <button class="search_btn laila-medium" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="phone_menu">
                    <a href="" class="nav_btn_phone_menu">
                        <img src="./assets/home_page_images/ramayan.png" alt="">
                        <p class="laila-medium">Ramcharitmanas</p>
                    </a>
    
    
                    <a href="contests.php" class="nav_btn_phone_menu">
                        <img src="./assets/home_page_images/temple.png" alt="">
                        <p class="laila-medium">Contests</p>
                    </a>
    
    
                    <a href="festivals.php" class="nav_btn_phone_menu">
                        <img src="./assets/home_page_images/festival.png" alt="">
                        <p class="laila-medium">Festivals</p>
                    </a>
    
    
                    <a href="chalisha.php" class="nav_btn_phone_menu">
                        <img src="./assets/home_page_images/chalisha.png" alt="">
                        <p class="laila-medium">Chalisha</p>
                    </a>
    
    
                    <a href="bhajan.php" class="nav_btn_phone_menu">
                        <img src="./assets/home_page_images/bhajan.png" alt="">
                        <p class="laila-medium">Bhajan</p>
                    </a>
    
    
                    <a href="aarti.php" class="nav_btn_phone_menu">
                        <img src="./assets/home_page_images/arti.png" alt="">
                        <p class="laila-medium">Aarti</p>
                    </a>
    
                    <a href="mantra.php" class="nav_btn_phone_menu">
                        <img src="./assets/home_page_images/mantra.png" alt="">
                        <p class="laila-medium">Mantra</p>
                    </a>
    
                </div>

                <?php 

                    $conn = new mysqli($host, $username, $password, $database);
                    
                    // Check database connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    
                    
                    
                    // Check if the user_id cookie is set
                    if (isset($_COOKIE['user_id'])) {
                        $user_id = $_COOKIE['user_id'];
                    
                        // Fetch the shield_progress for the given user_id
                        $sql = "SELECT shield_progress FROM users WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();
                        $stmt->bind_result($shield_progress);
                        $stmt->fetch();
                        $stmt->close();
                    
                        // Check the value of shield_progress
                        if ($shield_progress == 0) {
                            echo '<div class="category_panel">
                                        <a href="account.php?id='.$user_id.'" class="category_btn">
                                            <img src="./assets/home_page_images/daily.png" alt="">
                                            <p class="laila-medium">Your Account</p>
                                        </a>
                    
                                        <a href="sanatan-shield.php" class="category_btn">
                                            <img src="./assets/home_page_images/daily.png" alt="">
                                            <p class="laila-medium">Enrol Sanatan Shield</p>
                                        </a>
                    
                                    </div>
                                    <div class="shield_bucket">
                                        <div class="shild_mug">
                                            <h1 class="laila-bold" >सनातन धर्म<br>के संरक्षक बनो</h1>
                                            <a class="laila-regular" href="sanatan-shield.php">शुरुआत करें (Get Started)</a>
                                        </div>
                                    </div>';
                        } elseif ($shield_progress > 0) {
                            echo '<div class="category_panel">
                                        <a href="account.php?id='.$user_id.'" class="category_btn">
                                            <img src="./assets/home_page_images/daily.png" alt="">
                                            <p class="laila-medium">Your Account</p>
                                        </a>
                    
                                        <a href="sanatan-shield/chapter-'.$shield_progress.'.php" class="category_btn">
                                            <img src="./assets/home_page_images/daily.png" alt="">
                                            <p class="laila-medium">Resume Chapter '.$shield_progress.'</p>
                                        </a>
                    
                                    </div>
                                    <div class="shield_bucket">
                                        <div class="shild_mug">
                                            <h1 class="laila-bold" >सनातन धर्म<br>के संरक्षक बनो</h1>
                                            <a class="laila-regular" href="sanatan-shield.php">शुरुआत करें (Get Started)</a>
                                        </div>
                                    </div>';
                        } else {
                            echo '<div class="enrol_button_shield">
                                    <a class="laila-medium" href="login.php">श्री गणेश करें</a>
                                    <p class="laila-light" >It\'s totally free! You don\'t have to pay anything. error</p>
                                </div>';
                        }
                    } else {
                        echo '<div class="category_panel">
                                        <a href="login.php" class="category_btn">
                                            <img src="./assets/home_page_images/daily.png" alt="">
                                            <p class="laila-medium">Login</p>
                                        </a>
                    
                                        <a href="register.php" class="category_btn">
                                            <img src="./assets/home_page_images/daily.png" alt="">
                                            <p class="laila-medium">Register</p>
                                        </a>
                    
                                    </div>
                                    <div class="shield_bucket">
                                        <div class="shild_mug">
                                            <h1 class="laila-bold" >सनातन धर्म<br>के संरक्षक बनो</h1>
                                            <a class="laila-regular" href="sanatan-shield.php">शुरुआत करें (Get Started)</a>
                                        </div>
                                    </div>';
                    }
                    
                    $conn->close();
                    
                ?>
            </div>
            <div class="header_space_right">
                <div class="fact_card">
                    <h1 class="laila-bold">दैनिक सनातन तथ्य</h1>
                    <div class="text_of_fact">

                    <?php
    // Create a connection
    $conn_one = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn_one->connect_error) {
        die("Connection failed: " . $conn_one->connect_error);
    }

    // SQL query to retrieve 1 random entry
    $sql_one = "SELECT * FROM hindu_facts ORDER BY RAND() LIMIT 1";

    // Execute the query
    $result_one = $conn_one->query($sql_one);

    // Check if the query executed successfully
    if (!$result_one) {
        die("Query failed: " . $conn_one->error);
    }

    // Check if any rows were returned
    if ($result_one->num_rows > 0) {
        // Display the rows directly using a while loop
        while ($row = $result_one->fetch_assoc()) {
            echo '<p class="laila-medium">' . htmlspecialchars($row["text"]) . '</p>';
        }
    } else {
        // Fallback message
        echo '<p class="laila-medium">' . htmlspecialchars('हिन्दू धर्म रेखीय समय की बजाय चक्राकार समय में विश्वास करता है.') . '</p>';
    }

    // Close the connection
    $conn_one->close();
?>

                    </div>
                </div>

                <div class="ramshalaka_space">
                    <img class="ram_chart_img" src="./assets/home_page_images/ramshalaka.png" alt="">
                    <div class="ramshalaka_text_content">
                        <h3 class="laila-medium" >श्री बागेश्वर धाम</h3>
                        <h1 class="laila-bold" >संकल्प दर्शन दीर्घा (ऑनलाइन)</h1>
                        <a class="laila-medium ramshalaka_btn" href="https://www.hinduintellectual.com/sankalp/">प्रवेश करें</a>
                    </div>
                </div>
            </div>
        </div>
     </div>




     <!-- feed box -->

     <div class="user_feed">
        <div class="user_feed_space">
            <!-- box_content -->



            <?php


        // Create a connection
        $conn = new mysqli($host, $username, $password, $database);


        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve 8 random entries
        $sql = "SELECT * FROM question_data ORDER BY RAND() LIMIT 20";

        // Execute the query
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Display the rows directly using a while loop
            while ($row = $result->fetch_assoc()) {
                echo '
                <a href="/gyan/'.$row["link"].'" class="content_card">
                    <img src="./assets/home_page_images/fact_background.jpg" alt="">
                    <div class="content_card_text">
                        <p>👁 '.$row["views"].'</p>
                        <h2 class="laila-bold content_heading" >'.$row["question_text"].'</h2>
                        <div class="card_space_blaoc"></div>
                        <div class="card_bottom_line"></div>
                    </div>
                </a>
                ';
            }
        } else {
            echo "No entries found.";
        }

        // Close the connection
        $conn->close();
        ?>



            
        </div>
     </div>
     
     
     
     
     <!--share btn-->
                <div class="share_btn_div">
                    <button onclick="shareOnSocial('facebook')"><img src="./assets/images/facebook.png"></button>
                    <button onclick="shareOnSocial('twitter')"><img src="./assets/images/twitter.png"></button>
                    <button onclick="shareOnSocial('linkedin')"><img src="./assets/images/linkedin.png"></button>
                    <button onclick="shareOnSocial('whatsapp')"><img src="./assets/images/whatsapp.png"></button>
                    <button id="shareBtn"><img src="./assets/images/share.png"></button>
                </div>
     <!--share btn ends-->
     
     
     
     
     <?php include 'includes/footer.php' ?>
     
     
     
     
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