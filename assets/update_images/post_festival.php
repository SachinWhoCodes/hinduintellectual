<?php
// Database connection credentials
$host = "localhost";
$username = "u683255285_hinduwhocodes";
$password = "WhatToDo@9";
$database = "u683255285_hindu_int";

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch and sanitize input
    $title = $_POST['title'];
    $date = $_POST['date']; // Expected in YYYY-MM-DD format
    $about = $_POST['about']; // CKEditor content (may include HTML)

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO festival_data (date, title, about) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $date, $title, $about);

    if ($stmt->execute()) {
        $successMessage = "New festival added successfully!";
    } else {
        $errorMessage = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hindu Intellectual - HI of Sanatan Dharm</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/post.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>
<body>
    <div class="top_of_nav">
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">08 दिसम्बर, 2024 रविवार - मार्गशीर्ष शुक्ल पक्ष सप्तमी</p>
        </div>
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">Login | Register</p>
        </div>
    </div>

    <div class="navigation_bar">
        <div class="inner_nav">
            <div class="left_nav">
                <img src="../home_page_images/logo_hindu.png" alt="Logo">
            </div>
            <div class="nav_right_phone">
                <a href="#" class="nav_btn_phone">
                    <img src="../home_page_images/librabry.png" alt="Library">
                    <p class="laila-medium">e-पुस्तकालय</p>
                </a>
            </div>
            <div class="right_nav">
                <!-- Add your navigation buttons here -->
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="question_form">
        <div class="question_form_space">
            <form class="post_form_data" action="" method="post">
                <input class="input_text_q" type="text" placeholder="Enter the title" name="title" required>
                <input type="date" id="date" name="date" required>
                <label for="content">Enter Details:</label>
                <textarea class="ans_text" name="about" id="content" rows="20" required></textarea>
                <br>
                <button class="sbt_btn" type="submit">Submit</button>
            </form>
            
            
        </div>
    </div>

    <!-- Scroll Behavior -->
    <script>
        document.addEventListener("scroll", () => {
            const navbar = document.querySelector(".inner_nav");
            if (window.scrollY >= 70) {
                navbar.classList.add("scrolled");
            } else if (window.scrollY <= 40) {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>
