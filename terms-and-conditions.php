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
    <title>Terms and conditions - Hindu Intellectual</title>

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
                Terms and Conditions
            </div>
            <div class="text_box_txt">
                <div class="desc_text">
                    Welcome to Hindu Intellectual! These Terms and Conditions outline the rules and regulations for using our website. By accessing this site, you accept these terms. If you disagree with any part of these terms, please do not use our website.
                </div>
            </div>
    
            <div class="heading_text_center">
                Use of the Website
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    <ul>
                        <li>You agree to use this website only for lawful purposes and in a manner that does not infringe on the rights of others.</li>
                        <li>You must not engage in activities that disrupt or harm the website, including hacking, data mining, or distributing malicious software.</li>
                        <li>Unauthorized use of this website may result in legal action.</li>
                    </ul>
                </div>
            </div>
    
            <div class="heading_text_center">
                Intellectual Property Rights
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    All content on this website, including text, graphics, logos, and images, is the property of Hindu Intellectual unless otherwise stated. You may not reproduce, distribute, or modify any content without written permission.
                </div>
            </div>
    
            <div class="heading_text_center">
                User-Generated Content
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    If you submit content (comments, articles, or media), you grant us a non-exclusive, royalty-free license to use, reproduce, and distribute your content. We reserve the right to remove any content that violates our policies or is deemed inappropriate.
                </div>
            </div>
    
            <div class="heading_text_center">
                Disclaimer and Limitation of Liability
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    <ul>
                        <li>The content on this website is for informational purposes only. We do not guarantee accuracy, completeness, or reliability.</li>
                        <li>Hindu Intellectual will not be liable for any direct, indirect, or consequential damages resulting from the use of this website.</li>
                    </ul>
                </div>
            </div>
    
            <div class="heading_text_center">
                External Links
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    Our website may contain links to third-party websites. We are not responsible for the content, policies, or practices of any external sites.
                </div>
            </div>
    
            <div class="heading_text_center">
                Modifications to Terms
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    We reserve the right to modify these Terms and Conditions at any time. Any changes will be posted on this page, and continued use of the website signifies your acceptance of the updated terms.
                </div>
            </div>
    
            <div class="heading_text_center">
                Governing Law
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    These terms are governed by the laws of India. Any disputes shall be resolved in the appropriate courts within India.
                </div>
            </div>
    
            <div class="heading_text_center">
                Contact Us
            </div>
    
            <div class="text_box_txt">
                <div class="desc_text">
                    If you have any questions about these Terms and Conditions, please contact us at:<br>
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