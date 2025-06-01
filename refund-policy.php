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
    <title>Refund Policy - Hindu Intellectual</title>

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
                Refund Policy
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    At Hindu Intellectual, we value the trust of our donors. This Refund Policy explains our stance on donation refunds.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    Donation Refunds
                </div>
                <div class="desc_text">
                    - Donations made to Hindu Intellectual are generally non-refundable.<br>
                    - However, in cases of accidental donations or duplicate transactions, refunds may be issued upon request within 7 days.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    How to Request a Refund
                </div>
                <div class="desc_text">
                    - To request a refund, contact us at support@hinduintellectual.com with transaction details.<br>
                    - We will review refund requests on a case-by-case basis and process eligible refunds within 14 business days.
                </div>
            </div>
            
            <div class="text_box_txt">
                <div class="topic_text_left">
                    Changes to Refund Policy
                </div>
                <div class="desc_text">
                    - Hindu Intellectual reserves the right to update this Refund Policy at any time.
                </div>
            </div>
            
            <div class="heading_text_center">
                Contact Us
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    For any refund-related inquiries, contact us at:<br>
                    <strong>Email:</strong> support@hinduintellectual.com<br>
                    <strong>Phone:</strong> +91 9691600315
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