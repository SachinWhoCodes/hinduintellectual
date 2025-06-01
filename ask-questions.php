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
     <link rel="stylesheet" href="./assets/css/ask.css">

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



    <h1 class="laila-bold update_heading" >अपने प्रश्न भेजें</h1>


    <?php


// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $question = $conn->real_escape_string($_POST['question']);
    $name = $conn->real_escape_string($_POST['name']);
    $from_place = $conn->real_escape_string($_POST['place']);
    $phone = $conn->real_escape_string($_POST['phone']);

    // Insert data into the table
    $sql = "INSERT INTO question_requests (question, name, from_place, phone) VALUES ('$question', '$name', '$from_place', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo '
            <div  class="notification laila-medium">
                आपका प्रश्न सफलतापूर्वक भेजा जा चुका है, जल्द ही हमारे धर्मप्रेमी आपके प्रश्न का उत्तर देंगे और अगर आपने फॉर्म में अपना व्हाट्सप्प नंबर दिया है तो उसके माध्यम से हम आपको सूचित कर देंगे, अन्यथा आप अपने प्रश्न का उत्तर कुछ समय बाद वेबसाइट पर देख सकेंगे <br><br>
                Question submitted successfully, our contributors will check it out soon and you will be notified through the whatsapp number if you have provided in the submitted form.
            </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>







    <!-- quesiton section -->

    <div class="question_form">
        <div class="question_form_space">
            <form action="" method="post">
                <div class="first_section">
                    <textarea class="laila-medium" name="question" placeholder="Your question" id=""></textarea>
                    <input class="laila-medium" type="text" name="phone" placeholder="Your Phone Number">
                </div>
                <div class="second_section">
                    <input class="laila-medium" type="text" name="name" placeholder="Your name">
                    <input class="laila-medium" type="text" name="place" placeholder="Where are you from?">
                    <input class="laila-medium submit_btn"  type="submit">
                </div>
            </form>
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