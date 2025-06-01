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



$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $link = $_POST['link'];

    // Check for file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileType = mime_content_type($fileTmpPath);

        // Allowed file types
        $allowedTypes = ['image/png', 'image/jpeg'];

        if (in_array($fileType, $allowedTypes)) {
            // Get the next ID from the "updates" table
            $query = "SELECT AUTO_INCREMENT FROM information_schema.TABLES 
                      WHERE TABLE_SCHEMA = '$database' AND TABLE_NAME = 'updates'";
            $result = $conn->query($query);

            if ($result && $row = $result->fetch_assoc()) {
                $nextId = $row['AUTO_INCREMENT'];

                // Determine file extension
                $extension = $fileType === 'image/png' ? 'png' : 'jpg';

                // Rename the file
                $newFileName = $nextId . '.' . $extension;

                // Define upload folder
                $uploadFolder = ''; // Ensure this folder exists and is writable
                $destination = $uploadFolder . $newFileName;

                // Move the uploaded file to the upload folder
                if (move_uploaded_file($fileTmpPath, $destination)) {
                    // Insert data into the "updates" table
                    $stmt = $conn->prepare("INSERT INTO updates (title, link) VALUES (?, ?)");
                    $stmt->bind_param("ss", $title, $link);

                    if ($stmt->execute()) {
                        echo "Data saved successfully, and file uploaded as $newFileName.";
                    } else {
                        echo "Failed to insert data into the database.";
                    }

                    $stmt->close();
                } else {
                    echo "Failed to move the uploaded file.";
                }
            } else {
                echo "Failed to fetch the next ID.";
            }
        } else {
            echo "Invalid file type. Only PNG and JPG files are allowed.";
        }
    } else {
        echo "File upload error.";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hindu Intellectual - HI of Sanatan Dharm</title>

    <!-- font css -->
     <link rel="stylesheet" href="../css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/updates.css">

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
            <a href="donate.php" class="laila-medium min_top_text">Donate</a>
        </div>
    </div>

    <div class="navigation_bar">
        <div class="inner_nav">
            <div class="left_nav">
                <img src="./assets/home_page_images/logo_hindu.png" alt="">
            </div>
            <div class="nav_right_phone">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn_phone">
                    <img src="./assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
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

                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="./assets/home_page_images/ramayan.png" alt="">
                    <p class="laila-medium">Ramcharitmanas</p>
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
            <li><a href="https://hinduintellectual.com/ramcharitmanas.php">Ramcharitmanas</a></li>
            <li><a href="https://hinduintellectual.com/festival.php">Festivals</a></li>
            <li><a href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
            <li><a href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
            <li><a href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
            <li><a href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
        </ul>
    </div>


    <div class="update_form">
        <div class="update_form_spaace">
            <form action="" method="POST" enctype="multipart/form-data" class="update_submission">
                <input type="text" name="title" placeholder="title">
                <input type="file" name="image">
                <input type="text" name="link" placeholder="link">
                <input type="submit">
            </form>
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
</html>