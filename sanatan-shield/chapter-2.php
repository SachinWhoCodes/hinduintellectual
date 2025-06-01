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
    if ($shield_progress < 2) {
        echo '<script>window.location.href = "https://hinduintellectual.com/account.php?id='.$user_id.'";</script>';
    }
} else {
    echo '<script>window.location.href = "https://hinduintellectual.com/login.php";</script>';
}

$conn->close();
                    
            


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2 : Sanatan Shield</title>

    <!-- font css -->
     <link rel="stylesheet" href="../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/lesson.css">

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




    <div class="lesson_content">
        <div class="lesson_content_space">
            <div class="lesson_title">
                <div class="title_mark"></div>
                <h1 class="laila-medium">This chapter will be available from Jan 13, 2025</h1>
            </div>
            
        </div>
    </div>

</div>






<!-- <div class="bottom_navigation">
    <a class="laila-regular" href="#">Back</a>
    <div class="mid_space"></div>
    <form action="" class="next_btn_form" method="post" >
        <button type="submit" class="laila-regular" >Unlock Next Chapter</button>
    </form>
</div> -->




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