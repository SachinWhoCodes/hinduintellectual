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
     <link rel="stylesheet" href="./assets/css/donate.css">

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

   



<div class="doantion_back">
<h1 class="laila-bold">सुखस्य मूलं धर्म:।<br>धर्मस्य मूलं अर्थ:।।</h1>
    <div class="donation_box">
        <div class="donation_box_space">
            <div class="qr_code_box">
                <img id="any_amount" src="./assets/qr_codes/any_amount.png" alt="qr code">
                <img id="send_oneone" src="./assets/qr_codes/send_oneone.png" alt="qr code">
                <img id="send_fiveone" src="./assets/qr_codes/send_fiveone.png" alt="qr code">
                <img id="send_onezeroone" src="./assets/qr_codes/send_onezeroone.png" alt="qr code">
                <img id="send_fivezeroone" src="./assets/qr_codes/send_fivezeroone.png" alt="qr code">
            </div>
            <div class="select_amt_box">
                <h2 class="laila-medium">Select The Amount You Want To Donate</h2>
                <div class="amt_btns">
                    <button class="laila-medium" onclick="
                    
                    document.getElementById('any_amount').style.display = 'block';
                    document.getElementById('send_oneone').style.display = 'none';
                    document.getElementById('send_fiveone').style.display = 'none';
                    document.getElementById('send_onezeroone').style.display = 'none';
                    document.getElementById('send_fivezeroone').style.display = 'none';

                    ">Custom</button>
                    <button class="laila-medium" onclick="
                    
                    document.getElementById('any_amount').style.display = 'none';
                    document.getElementById('send_oneone').style.display = 'block';
                    document.getElementById('send_fiveone').style.display = 'none';
                    document.getElementById('send_onezeroone').style.display = 'none';
                    document.getElementById('send_fivezeroone').style.display = 'none';

                    ">₹11</button>
                    <button class="laila-medium" onclick="
                    
                    document.getElementById('any_amount').style.display = 'none';
                    document.getElementById('send_oneone').style.display = 'none';
                    document.getElementById('send_fiveone').style.display = 'block';
                    document.getElementById('send_onezeroone').style.display = 'none';
                    document.getElementById('send_fivezeroone').style.display = 'none';

                    ">₹51</button>
                    <button class="laila-medium" onclick="
                    
                    document.getElementById('any_amount').style.display = 'none';
                    document.getElementById('send_oneone').style.display = 'none';
                    document.getElementById('send_fiveone').style.display = 'none';
                    document.getElementById('send_onezeroone').style.display = 'block';
                    document.getElementById('send_fivezeroone').style.display = 'none';

                    ">₹101</button>
                    <button class="laila-medium" onclick="
                    
                    document.getElementById('any_amount').style.display = 'none';
                    document.getElementById('send_oneone').style.display = 'none';
                    document.getElementById('send_fiveone').style.display = 'none';
                    document.getElementById('send_onezeroone').style.display = 'none';
                    document.getElementById('send_fivezeroone').style.display = 'block';

                    ">₹501</button>
                </div>

                <p class="laila-regular">The money you donate is used to spread dharma among the youth.</p>

                <div class="upi_details">
                    <div class="upi_number">
                        <p class="laila-medium">UPI NUMBER:</p>
                        <p class="laila-regular">9691600315</p>
                        <button onclick="copyUpiNumber()">Copy UPI Number</button>
                    </div>
                    <div class="upi_id">
                        <p class="laila-medium">UPI ID:</p>
                        <p class="laila-regular">9691600315@kotak</p>
                        <button onclick="copyUpiId()">Copy UPI ID</button>
                    </div>
                </div>

                <div class="bank_details">
                    <h2 class="laila-medium">Bank Account Details</h2>
                    <p class="laila-regular">Account Holder: Sachin Verma</p>
                    <p class="laila-regular">Account Number: 5048291830</p>
                    <p class="laila-regular">IFSC Code: KKBK0005949</p>
                    <p class="laila-regular">Bank Name: Kotak Mahindra Bank</p>
                </div>
            </div>
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



        function copyUpiNumber() {
            const textToCopy = "9691600315";
            navigator.clipboard.writeText(textToCopy)
                .then(() => {
                    alert("UPI Number Copied To Clipboard");
                })
                .catch(err => {
                    console.error("Failed to copy text: ", err);
                });
        }


        function copyUpiId() {
            const textToCopy = "9691600315@kotak";
            navigator.clipboard.writeText(textToCopy)
                .then(() => {
                    alert("UPI Number Copied To Clipboard");
                })
                .catch(err => {
                    console.error("Failed to copy text: ", err);
                });
        }

</script>
<script src="./assets/js/navbar.js"></script>
</html>