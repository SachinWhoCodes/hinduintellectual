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

// if(isset($_GET['from'])){
//     $from_url = "https://www.hinduintellectual.com/" + $_GET['from'];
// }


$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Retrieve user by phone
    $sql = "SELECT id, name, phone, password, joined, shield_progress FROM users WHERE phone = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user details in session variables
            setcookie("user_id", $user['id'], time() + (86400 * 30), "/", ".hinduintellectual.com", true, true);
            setcookie("user_name", $user['name'], time() + (86400 * 30), "/", ".hinduintellectual.com", true, true);
            setcookie("user_phone", $user['phone'], time() + (86400 * 30), "/", ".hinduintellectual.com", true, true);
            setcookie("user_joined", $user['joined'], time() + (86400 * 30), "/", ".hinduintellectual.com", true, true);

            echo "Login successful!";

            // Redirect to profile or dashboard page
            if(isset($_GET['from'])){
                $from_url = "https://www.hinduintellectual.com/" . $_GET['from'];
                echo '<script>window.location.href = "'.$from_url.'";</script>';
                exit();
            } else{
                echo '<script>window.location.href = "https://hinduintellectual.com/account.php?id='.$user['id'].'";</script>';
                exit();
            }
            
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Phone number not registered.";
    }

    $stmt->close();
}

$conn->close();

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




<div class="login_box">
    <div class="login_space">
        <div class="login_heading">
            <h1 class="laila-bold" >Login</h1>
            <a  class="laila-regular go_back_home" href="https://hinduintellectual.com/">X</a>
        </div>




        <form class="main_login_form" action="" method="post" >
            <div class="input_box">
                <img src="./assets/images/phone.png" alt="">
                <input name="phone" class="laila-regular" type="text" placeholder="Phone Number" required>
            </div>
            <div class="input_box">
                <img src="./assets/images/password.png" alt="">
                <input name="password" class="laila-regular" type="password" placeholder="Password" required>
            </div>
            <p class="laila-regular terms_noti">By loggin in, you are agree with our <a href="#">T&C</a> and <a href="#">Privacy Policy</a></p>
            <button class="laila-regular" type="submit">Login</button>
        </form>
        <?php
        
            if(isset($_GET['from'])){
                $from = $_GET['from'];
                // echo '<script>window.location.href = "'.$from_url.'";</script>';
                echo '<p class="laila-regular another_one">Don\'t Have An Account? <a href="https://hinduintellectual.com/register.php?from='.$from.'">Register</a></p>';
            } else{
                echo '<p class="laila-regular another_one">Don\'t Have An Account? <a href="https://hinduintellectual.com/register.php">Register</a></p>';
            }
        
        ?>
        <p class="laila-regular another_one"><a href="https://hinduintellectual.com/account-recovery/find-account.php">Forgot Password?</a></p>
        <!--<p class="laila-regular another_one">Don't Have An Account? <a href="https://hinduintellectual.com/register.php">Register</a></p>-->
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