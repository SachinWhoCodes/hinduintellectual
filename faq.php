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
    <title>FAQ - Hindu Intellectual</title>

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



<!--add text here-->

<main>
    <article>
        <div class="text_section">
            <div class="heading_text_center">
                Frequently Asked Questions (FAQ)
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    1. What is Hindu Intellectual?
                </div>
                <div class="desc_text">
                    Hindu Intellectual is a platform dedicated to spreading knowledge, awareness, and Hindu cultural values through educational content, discussions, and community-driven initiatives.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    2. How can I donate to Hindu Intellectual?
                </div>
                <div class="desc_text">
                    You can donate securely through our website using various payment methods, including UPI, credit/debit cards, and bank transfers. Visit our donation page for more details.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    3. Are donations refundable?
                </div>
                <div class="desc_text">
                    Donations are generally non-refundable. However, in case of accidental or duplicate transactions, we review refund requests on a case-by-case basis. Please refer to our Refund Policy for details.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    4. How can I volunteer or contribute to Hindu Intellectual?
                </div>
                <div class="desc_text">
                    We welcome volunteers who want to contribute through writing, research, social media engagement, and community activities. Please contact us for more information on how you can help.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    5. How is my donation used?
                </div>
                <div class="desc_text">
                    Your donation helps us create and distribute educational content, support research, maintain our platform, and organize community initiatives. Transparency reports will be available for donors.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    6. How do I contact Hindu Intellectual?
                </div>
                <div class="desc_text">
                    You can reach us via email at support@hinduintellectual.com or call us at +91 9691600315.
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