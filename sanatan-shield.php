<?php
// Database connection credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "hi";


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
     <link rel="stylesheet" href="./assets/css/shield.css">

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
    <?php include 'includes/gtag_body.php' ?>
    
    <?php include 'includes/header_top_common.php' ?>
    
   <?php include 'includes/header.php' ?>

    <?php include 'includes/story.php' ?>





<div class="shield_header">
    <div class="shield_header_space">
        <div class="shield_left">
            <div class="shield_heading_text">
                <div class="circle_for_text"></div>
                <h1 class="laila-bold">SANATAN SHIELD.</h1>
            </div>
            <p class="laila-medium hindi_desc_shield">हर सनातनी हिन्दू को अपने धर्म के प्रति इतना प्रबल और सशक्त होना चाहिए कि वह किसी भी विधर्मी के सवालों का जवाब तर्क और प्रमाण के साथ दे सके। यह हमारा कर्तव्य और धर्म है। आज ही संकल्प लें कि आने वाले 90 दिनों तक प्रतिदिन मात्र 5 मिनट का समय देंगे और अपने धर्म पर उठने वाले सवालों का उत्तर देने में सक्षम बनेंगे। अपना धर्म जानें, समझें और अपने विश्वास को अडिग बनाएं।</p>
            <p class="laila-regular eng_desc_shield">Every Sanatani Hindu should be so strong and knowledgeable about their faith that they can answer any question posed by others with logic and evidence. This is our duty and responsibility. Take a pledge today to dedicate just 5 minutes daily for the next 90 days to become capable of responding to questions raised against our Dharma. Understand, learn, and fortify your faith in Sanatana Dharma.</p>

<?php 

$conn = new mysqli($host, $username, $password, $database);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// Check if the user_id cookie is set
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Update shield_progress to 1 for the given user_id
        $sql = "UPDATE users SET shield_progress = 1 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);

        if ($stmt->execute()) {
            echo "Shield progress updated to 1 successfully!";
        } else {
            echo "Error updating shield progress: " . $stmt->error;
        }

        $stmt->close();

    }


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
        echo '<form action="" method="post" class="enrol_button_shield">
                <button class="laila-medium" type="submit">श्री गणेश करें</button>
                <p class="laila-light" >It\'s totally free! You don\'t have to pay anything.</p>
            </form>';
    } elseif ($shield_progress > 0) {
        echo '<div class="enrol_button_shield">
                <a class="laila-medium" href="https://hinduintellectual.com/account.php?id='.$_COOKIE['user_id'].'">जारी रखें</a>
                <p class="laila-light" >You are already registered, continue your chapters.</p>
            </div>';
    } else {
        echo '<div class="enrol_button_shield">
                <a class="laila-medium" href="https://hinduintellectual.com/login.php">श्री गणेश करें</a>
                <p class="laila-light" >It\'s totally free! You don\'t have to pay anything. error</p>
            </div>';
    }
} else {
    echo '<div class="enrol_button_shield">
                <a class="laila-medium" href="https://hinduintellectual.com/login.php">श्री गणेश करें</a>
                <p class="laila-light" >It\'s totally free! You don\'t have to pay anything.</p>
            </div>';
}

$conn->close();

?>

        </div>
        <div class="shield_right">
            <img src="./assets/images/hindu_header.png" alt="">
        </div>
    </div>
</div>



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