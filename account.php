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


$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input

    // Retrieve user data from the database
    $sql = "SELECT name, phone, joined, shield_progress FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); // Fetch the user data

        // Assign user values to variables
        $user_name = $user['name'];
        $user_phone = $user['phone'];
        $user_joined = $user['joined'];
        $user_shield_progress = $user['shield_progress'];
    } else {
        echo "<p>User not found!</p>";
        exit();
    }

    $stmt->close();
} else {
    echo "<p>Invalid user ID.</p>";
    exit();
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
    <title>My Account - Hindu Intellectual</title>

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


<div class="account_section">
    <div class="account_section_space">
        <div class="user_profile">
            <img src="./assets/images/hindu_header.png" alt="">
            <div class="user_detailing">
                <?php
                
                echo'<h1 class="laila-medium">हिन्दू '.$user_name.'</h1>
                <p class="laila-medium">User ID: SITARAM'.$id.'</p>
                <p class="laila-medium" >Member since: '.$user_joined.'</p>';

                ?>
            </div>
        </div>

        <div class="track_journey">
            
            
            <?php 

                    $conn = new mysqli($host, $username, $password, $database);
                    
                    // Check database connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    
                    
                    
                    // Check if the user_id cookie is set
                    if (isset($_COOKIE['user_id'])) {
                        
                        $user_id = $_COOKIE['user_id'];
                        $sql = "SELECT shield_progress FROM users WHERE id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();
                        $stmt->bind_result($shield_progress);
                        $stmt->fetch();
                        $stmt->close();
                        // if user belong to this page
                        if($user_id == $_GET['id']){
                            // get matched, page belpngs to user
                            // check if it is enrolled or not
                            
                                if ($shield_progress == 0) {
                                    // echo 'not enrolled show btn to enrol';
                                    // user logged in, get matched, not enrolled
                                    
                                    
                                    $sql_result = "SELECT attempt_id, contest_id, result 
                                            FROM pariksha_submission 
                                            WHERE user_id = ? 
                                            ORDER BY attempt_id DESC";
                                    
                                    $stmt_result = $conn->prepare($sql_result); // Prepare the statement to prevent SQL injection
                                    $stmt_result->bind_param("i", $user_id); // Bind the user_id parameter
                                    $stmt_result->execute();
                                    $result_result = $stmt_result->get_result(); // Execute and get the result
                                    
                                    // Check if there are rows to display
                                    if ($result_result->num_rows > 0) {
                                        echo "<table border='1'>
                                                <tr>
                                                    <th>Attempt ID</th>
                                                    <th>Contest ID</th>
                                                    <th>Result</th>
                                                </tr>";
                                        // Fetch each row and display the data
                                        while ($row_result = $result_result->fetch_assoc()) {
                                            echo "<tr>
                                                    <td>" . htmlspecialchars($row_result['attempt_id']) . "</td>
                                                    <td>" . htmlspecialchars($row_result['contest_id']) . "</td>
                                                    <td>" . htmlspecialchars($row_result['result']) . "</td>
                                                  </tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "No results found.";
                                    }
                                    
                                    
                                    echo '<h1 class="laila-bold" >Sanatan Shield Journey</h1>
                                            <a href="https://hinduintellectual.com/sanatan-shield.php" class="laila-medium acc_login_btn" >Enrol Sanatan Shield</a>
                                                <div class="days_to_track">';
                                        
                                         $count = 1;
    
                                        for($i = 1; $i <= $shield_progress; $i++){
                                            echo '<a href="https://hinduintellectual.com/sanatan-shield/chapter-'.$count.'.php" class="day_card_checked" >'.$count.'</a>';
                                            $count++;
                                        }
                        
                                        for($i = 1; $i <= (90 - $shield_progress); $i++){
                                            echo '<a class="day_card_unchecked" >'.$count.'</a>';
                                            $count++;
                                        }
                                } elseif ($shield_progress > 0) {
                                    // user logged in, get matched, and enrolled
                                    
                                    
                                    $sql_result = "SELECT attempt_id, contest_id, result 
                                            FROM pariksha_submission 
                                            WHERE user_id = ? 
                                            ORDER BY attempt_id DESC";
                                    
                                    $stmt_result = $conn->prepare($sql_result); // Prepare the statement to prevent SQL injection
                                    $stmt_result->bind_param("i", $user_id); // Bind the user_id parameter
                                    $stmt_result->execute();
                                    $result_result = $stmt_result->get_result(); // Execute and get the result
                                    
                                    // Check if there are rows to display
                                    if ($result_result->num_rows > 0) {
                                        echo "<table border='1'>
                                                <tr>
                                                    <th>Attempt ID</th>
                                                    <th>Contest Number</th>
                                                    <th>Marks</th>
                                                </tr>";
                                        // Fetch each row and display the data
                                        while ($row_result = $result_result->fetch_assoc()) {
                                            echo "<tr>
                                                    <td>" . htmlspecialchars($row_result['attempt_id']) . "</td>
                                                    <td>" . htmlspecialchars($row_result['contest_id']) . "</td>
                                                    <td>" . htmlspecialchars($row_result['result']) . "</td>
                                                  </tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "No results found.";
                                    }
                                    
                                    
                                    echo '<h1 class="laila-bold" >Sanatan Shield Journey</h1>
                                            <p class="laila-regular">पाठ सुरु करने के लिए नीचे दिए गए पाठों पर क्लिक करें (Click on the lessons given below to start)</p>
                                            <div class="days_to_track">';
                                    
                                     $count = 1;

                                    for($i = 1; $i <= $shield_progress; $i++){
                                        echo '<a href="https://hinduintellectual.com/sanatan-shield/chapter-'.$count.'.php" class="day_card_checked" >'.$count.'</a>';
                                        $count++;
                                    }
                    
                                    for($i = 1; $i <= (90 - $shield_progress); $i++){
                                        echo '<a class="day_card_unchecked" >'.$count.'</a>';
                                        $count++;
                                    }
                                } else {
                                    echo 'error, please send us this page on sachinwhocodes@outlook.com';
                                }
                            
                        } else{
                            // user logged in, but page doesn't belongs to user
                            
                            echo' <h1 class="laila-bold" >Sanatan Shield Journey</h1>
                                 <div class="days_to_track">';
                            
                            $count = 1;

                            for($i = 1; $i <= $user_shield_progress; $i++){
                                echo '<a class="day_card_checked" >'.$count.'</a>';
                                $count++;
                            }
            
                            for($i = 1; $i <= (60 - $user_shield_progress); $i++){
                                echo '<a class="day_card_unchecked" >'.$count.'</a>';
                                $count++;
                            }
                        }
                        
                    } else {
                        // user not logged in, and page doesn't belongs to user
                            
                            echo' <h1 class="laila-bold" >Sanatan Shield Journey</h1>
                                <a href="https://hinduintellectual.com/login.php" class="laila-medium acc_login_btn" >Login/Register</a>
                                 <div class="days_to_track">';
                            
                            $count = 1;

                            for($i = 1; $i <= $user_shield_progress; $i++){
                                echo '<a class="day_card_checked" >'.$count.'</a>';
                                $count++;
                            }
            
                            for($i = 1; $i <= (60 - $user_shield_progress); $i++){
                                echo '<a class="day_card_unchecked" >'.$count.'</a>';
                                $count++;
                            }
                    }
                    
                    $conn->close();
                    
                ?>
            
                

            </div>
        </div>
    </div>
    <a class="logout_btn laila-medium" href="https://hinduintellectual.com/logout.php">logout</a>
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