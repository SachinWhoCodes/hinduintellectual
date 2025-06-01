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
    <?php
        $pageTitle = "Hindu Festivals Explained | Dates, Significance & Rituals";
        $pageDescription = "Discover the meaning, stories and dates of major Hindu festivals like Diwali, Holi, Navratri, Raksha Bandhan and more. Celebrate with full devotion.";
        $pageUrl = "https://www.hinduintellectual.com/festivals.php";
        $pageImage = "https://www.hinduintellectual.com/assets/home_page_images/festival.png";
        
        
        include("includes/head.php");
    ?>
    
    <link rel="stylesheet" href="./assets/css/festival.css">

</head>

<body>
    <?php include 'includes/gtag_body.php' ?>
    
    <?php include 'includes/header_top_common.php' ?>
    
   <?php include 'includes/header.php' ?>

    <?php include 'includes/story.php' ?>


<div class="festive_feed">
    <h1 class="festive_heading laila-bold">
        Upcoming Hindu Festivals
    </h1>
    <div class="festive_feed_space">


<?php

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Get the current date in YYYY-MM-DD format
$current_date = date("Y-m-d");

// SQL query to retrieve festival data with current or future dates, ordered by date (ascending)
$sql = "SELECT * FROM festival_data WHERE date >= '$current_date' ORDER BY date ASC";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows to display
if ($result->num_rows > 0) {
    // Loop through the results and display the festival data
    while ($row = $result->fetch_assoc()) {
        // Format date to dd-mm-yyyy
        $formatted_date = date("d-m-Y", strtotime($row['date']));
        echo'
        
        <div class="festival_card">
            <div class="festival_card_top">
                <div class="festival_card_top_left">
                    <p class="laila-medium">'. $formatted_date .'</p>
                </div>
                <h2 class="festive_top_heading laila-medium">'. $row['title'] .'</h2>
            </div>
            <div class="festive_card_reason laila-lite">
                <p class="laila-regular">'. $row['about'] .'</p>
            </div>
            
        </div>

        ';
    }
} else {
    echo "<p>No upcoming festivals available.</p>";
}

$conn->close();
?>



        

        <!-- default card -->


        <div class="festival_card">
            <div class="festival_card_top">
                <div class="festival_card_top_left">
                    <p class="laila-medium">Upcoming</p>
                </div>
                <h2 class="festive_top_heading laila-medium">
                    More festivals will be listed soon...
                </h2>
            </div>
            <div class="festive_card_reason laila-lite">
                <p class="laila-regular">जल्द ही और भी त्योहारों की सूची यहां उपलब्ध होगी। हमारा उद्देश्य है कि सभी महत्वपूर्ण त्योहारों और उनसे जुड़ी जानकारियों को आप तक पहुंचाएं। प्रत्येक त्योहार के पीछे की संस्कृति, परंपरा, और उत्सव के महत्व को समझाने के लिए विशेष जानकारी साझा की जाएगी। कृपया जुड़े रहें और नए अपडेट्स का इंतजार करें।<br><br>
                More festivals will be listed here soon. Our aim is to provide information about all significant festivals and their details. Special insights will be shared to explain the culture, traditions, and significance behind each festival. Stay connected and look forward to the upcoming updates!
            </p>
            </div>
            
        </div>


    </div>
</div>


<div class="category-intro-outer-box">
    <section class="category-intro-desc">
      <h1 class="laila-bold">Celebrate Hindu Festivals – Rituals, Dates & Stories</h1>
      <p class="laila-medium">Celebrate the vibrant Hindu festivals like Diwali, Holi, Navratri, Raksha Bandhan, and Janmashtami with meaning, rituals, and historical context. Learn how to perform pujas, chants, and traditions for each auspicious occasion.</p>
    </section>
    
    <section class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <h2 class="laila-bold">Frequently Asked Questions on Festivals</h2>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">What is the spiritual significance of Hindu festivals?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Each festival marks a divine event, seasonal transition, or cultural celebration, rooted in dharma and spiritual growth.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Where can I find festival dates and puja guides?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Hindu Intellectual provides detailed festival calendars, puja vidhi, mantras, and more.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Are fasting rules explained for each festival?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Yes, each festival page includes vrat (fasting) rules, food suggestions, and timings.</p>
        </div>
      </div>
    </section>

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