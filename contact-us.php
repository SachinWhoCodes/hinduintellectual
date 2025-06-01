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
    <title>Contact us - Hindu Intellectual</title>

    <!-- font css -->
     <link rel="stylesheet" href="./assets/css/fonts.css">
     <link rel="stylesheet" href="./assets/css/text_box.css">
     

    <!-- main css -->
     <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/onboard.css">

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


<!--add text here-->

<main>
    <article>

        <div class="text_section">
            <div class="heading_text_center">
                Contact Us
            </div>
            <div class="text_box_txt">
                <div class="desc_text">
                    We’d love to hear from you! Whether you have questions, suggestions, or need any assistance, feel free to reach out. Hindu Intellectual is dedicated to fostering meaningful discussions and providing authentic knowledge about Hinduism.
                </div>
            </div>
    
            <div class="heading_text_center">
                Get in Touch
            </div>
    
            <div class="text_box_txt">
                <div class="topic_text_left">
                    Email
                </div>
                <div class="desc_text">
                    For general inquiries, collaborations, or support, email us at:<br>
                    <strong>support@hinduintellectual.com</strong>
                </div>
            </div>
    
            <div class="text_box_txt">
                <div class="topic_text_left">
                    Phone
                </div>
                <div class="desc_text">
                    You can also reach us via phone:<br>
                    <strong>+91 9691600315</strong>
                </div>
            </div>
    
            <div class="text_box_txt">
                <div class="topic_text_left">
                    Social Media
                </div>
                <div class="desc_text">
                    Stay connected and engage with us on our social media platforms:<br>
                    <strong>Facebook:</strong> <a href="#">facebook.com/hinduintellectual</a><br>
                    <strong>Twitter:</strong> <a href="#">twitter.com/hinduintellect</a><br>
                    <strong>Instagram:</strong> <a href="#">instagram.com/hinduintellectual</a>
                </div>
            </div>
    
            <div class="text_box_txt">
                <div class="topic_text_left">
                    Visit Us
                </div>
                <div class="desc_text">
                    If you’d like to meet us in person or visit our office, here’s our address:<br>
                    <strong>Hindu Intellectual Office</strong><br>
                    Devipuram Colony, Gwalior by pass, Shivpuri, Madhya Pradesh - 473551
                </div>
            </div>
    
            
        </div>
    
      
    </article>
  </main>




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