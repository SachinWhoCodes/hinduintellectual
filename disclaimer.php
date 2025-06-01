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
    <title>Disclaimer - Hindu Intellectual</title>

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
                Disclaimer
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    The information provided by Hindu Intellectual on this website is for general informational purposes only. All content is published in good faith and for the purpose of spreading awareness and knowledge.
                </div>
            </div>
            
            <div class="heading_text_center">
                No Guarantees or Warranties
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    While we strive to provide accurate and up-to-date information, Hindu Intellectual makes no warranties or representations of any kind regarding the completeness, accuracy, reliability, or suitability of any information on this site.
                </div>
            </div>
            
            <div class="heading_text_center">
                External Links Disclaimer
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    Our website may contain links to third-party websites. These links are provided for convenience only, and we do not endorse or take responsibility for the content, privacy policies, or practices of any external websites.
                </div>
            </div>
            
            <div class="heading_text_center">
                Donations and Financial Disclaimer
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    All donations made to Hindu Intellectual are voluntary and non-refundable unless otherwise stated in our refund policy. We do not guarantee any financial returns or benefits to donors.
                </div>
            </div>
            
            <div class="heading_text_center">
                Limitation of Liability
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    Hindu Intellectual shall not be held responsible for any loss or damage arising from the use of this website, including but not limited to indirect, incidental, or consequential damages.
                </div>
            </div>
            
            <div class="heading_text_center">
                Changes to This Disclaimer
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    Hindu Intellectual reserves the right to modify this disclaimer at any time. Updates will be posted on this page.
                </div>
            </div>
            
            <div class="heading_text_center">
                Contact Us
            </div>
            
            <div class="text_box_txt">
                <div class="desc_text">
                    If you have any questions about this disclaimer, please contact us at:<br>
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