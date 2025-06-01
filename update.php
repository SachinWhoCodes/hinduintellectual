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
     <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
     <link rel="stylesheet" href="./assets/css/update.css">

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
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5KW6ZDB"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- <div class="top_of_nav">
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">Hindu Intellectual</p>
        </div>
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">Back</p>
        </div>
    </div> -->
    <div class="story_background">



<?php


// Establish connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' is set in the GET request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM updates WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the row
        $row = $result->fetch_assoc();

        // Display the data
        // echo "<h2>Details for ID: " . htmlspecialchars($id) . "</h2>";
        // echo "<p><strong>Title:</strong> " . htmlspecialchars($row['title']) . "</p>";
        // echo "<p><strong>Link:</strong> <a href='" . htmlspecialchars($row['link']) . "' target='_blank'>" . htmlspecialchars($row['link']) . "</a></p>";

        // Display the image
        $imagePath = "./assets/update_images/" . $row['id'] . ".png";
        if (!file_exists($imagePath)) {
            $imagePath = "./assets/update_images/" . $row['id'] . ".jpg"; // Check for JPG fallback
        }

        if (file_exists($imagePath)) {
            echo '
            <div class="story_block">
            <img class="story_images" src="'. htmlspecialchars($imagePath) .'" alt="">
            </div>
            ';
        } else {
            echo '<div class="story_block">
            <img class="story_images" src="./assets/update_images/1.png" alt="">
        </div>';
        }
    } else {
        echo '<script>window.location.href = "https://www.hinduintellectual.com/updates.php";</script>';
    }

    $stmt->close();
} else {
    echo '<script>window.location.href = "https://www.hinduintellectual.com/updates.php";</script>';
}

$conn->close();
?>

        <!-- <div class="story_block">
            <img class="story_images" src="./assets/update_images/1.png" alt="">
        </div> -->
        <a href="https://www.hinduintellectual.com/updates.php" class="close_btn">
            <img src="./assets/update_images/close.png" alt="">
        </a>

        <?php
        $next_id = $row['id']+1;
        $back_id = $row['id']-1;
        
        echo'
        <a href="https://www.hinduintellectual.com/update.php?id='.$next_id.'" class="back_btn">
            <img src="./assets/update_images/back.png" alt="">
        </a>
        <a href="https://www.hinduintellectual.com/update.php?id='.$back_id.'" class="next_btn">
            <img src="./assets/update_images/back.png" alt="">
        </a>
        ';
        echo"
        <script>
        let startX = 0;

        document.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        document.addEventListener('touchend', (e) => {
            const endX = e.changedTouches[0].clientX;
            const diffX = startX - endX;

            // Threshold for a valid swipe (e.g., 50px)
            const threshold = 50;

            if (diffX > threshold) {
                // Swipe left detected
                window.location.href = 'https://www.hinduintellectual.com/update.php?id=".$back_id."'; // Replace with the left swipe URL
            } else if (diffX < -threshold) {
                // Swipe right detected
                window.location.href = 'https://www.hinduintellectual.com/update.php?id=".$next_id."'; // Replace with the right swipe URL
            }
        });
    </script>
        ";

        ?>
        
    </div>


    


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
</html>