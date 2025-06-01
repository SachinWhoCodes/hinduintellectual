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
            <h1 class="laila-bold" >Register</h1>
            <a  class="laila-regular go_back_home" href="https://hinduintellectual.com/">X</a>
        </div>
<?php
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if phone number already exists
    $sql = "SELECT phone FROM users WHERE phone = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Phone number already registered.";
    } else {
        // Encrypt the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Save data
        $joined = date('Y-m-d H:i:s'); // Current datetime
        $shield_progress = 0;

        // Insert query
        $sql = "INSERT INTO users (name, phone, email, password, joined, shield_progress) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $name, $phone, $email, $hashed_password, $joined, $shield_progress);

        if ($stmt->execute()) {
            
            if(isset($_GET['from'])){
                $from = $_GET['from'];
                echo "<p>Registration successful! <a href='https://hinduintellectual.com/login.php?from='.$from.'' >Click Here To Login</a></p>";
                // exit();
            } else{
                echo "<p>Registration successful! <a href='https://hinduintellectual.com/login.php' >Click Here To Login</a></p>";
                // exit();
            }
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>

        <form class="main_login_form" action="" method="post">
            <div class="input_box">
                <img src="./assets/images/employee-card.png" alt="">
                <input name="name" class="laila-regular" type="text" placeholder="Full Name" required>
            </div>
            <div class="input_box">
                <img src="./assets/images/phone.png" alt="">
                <input name="phone" class="laila-regular" type="text" placeholder="Phone Number" required>
            </div>
            <div class="input_box">
                <img src="./assets/images/mail.png" alt="">
                <input name="email" class="laila-regular" type="text" placeholder="Your Email" required>
            </div>
            <div class="input_box">
                <img src="./assets/images/password.png" alt="">
                <input name="password" class="laila-regular" type="password" placeholder="Create New Password" required>
            </div>
            <p class="laila-regular terms_noti">By registering, you are agree with our <a href="#">T&C</a> and <a href="#">Privacy Policy</a></p>
            <button class="laila-regular" type="submit">Register</button>
        </form>
        <p class="laila-regular another_one">Already Have An Account? <a href="https://hinduintellectual.com/login.php">Login</a></p>
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