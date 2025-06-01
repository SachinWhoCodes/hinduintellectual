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
    <meta name="description" content="Use the Sanatan Search on HinduIntellectual to ask your spiritual queries and find accurate answers from Hindu scriptures and Sanatan Dharma resources.">
    <meta name="keywords" content="Sanatan Dharma Search, Ask Hindu Questions, Spiritual Queries, Hindu Scriptures, Sanatan Knowledge, Hindu Q&A, Search Sanatan Dharma, Sanatan Resources">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.hinduintellectual.com/search.php">
    <meta property="og:title" content="Sanatan Search: Ask and Explore Sanatan Dharma Queries">
    <meta property="og:description" content="Discover answers to your spiritual queries with the Sanatan Search on HinduIntellectual. Get insights from Hindu scriptures and Sanatan Dharma knowledge.">
    <meta property="og:image" content="https://www.hinduintellectual.com/assets/main-feature.jpg">
    <meta property="og:url" content="https://www.hinduintellectual.com/search.php">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sanatan Search: Ask and Explore Sanatan Dharma Queries">
    <meta name="twitter:description" content="Find answers to your Sanatan Dharma queries with HinduIntellectual's search feature. Accurate insights from Hindu scriptures at your fingertips.">
    <meta name="twitter:image" content="https://www.hinduintellectual.com/assets/main-feature.jpg">
    <title>Sanatan Search: Ask and Explore Sanatan Dharma Queries | HinduIntellectual</title>

    <!-- font css -->
     <link rel="stylesheet" href="./assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/search.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    
    
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SearchAction",
      "target": "https://www.hinduintellectual.com/search.php?search={search_term_string}",
      "query-input": "required name=search_term_string",
      "name": "Sanatan Search",
      "description": "Search Sanatan Dharma queries and find accurate answers from Hindu scriptures and spiritual resources.",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.hinduintellectual.com/search.php?search={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
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


    <!-- main header from here -->
     <div class="header_main">
        <div class="header_space">
            <div class="header_space_left_search">
                <div class="search_panel_search">
                    <h1 class="laila-bold">सनातन पृश्नावली</h1>
                    <div class="search_panel_box_search">
                        <form action="" method="GET" class="search_panel_box_form_search">
                            <?php

                            if(isset($_GET['search'])){
                                $query = $_GET['search'];
                                echo'<input class="search_text_field_search laila-medium" value="'.$query.'" type="text" name="search" placeholder="सनातन धर्म से संबंधित प्रश्न ...">';
                            }else{
                                echo'<input class="search_text_field_search laila-medium" type="text" name="search" placeholder="सनातन धर्म से संबंधित प्रश्न ...">';
                            }

                            ?>
                            <button class="search_btn_search laila-medium" type="submit">प्रश्न करें</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>


     <!-- <div class="ask_new_question">
        <div class="ask_new_question_space">
            <div class="ask_text_desc">
                <p  class="laila-medium ask_text_hindi">
                अगर आपका प्रश्न परिणमो में नहीं है तो अपना प्रश्न हमें पोस्ट करें, उसका उत्तर शीघ्र ही दिया जावेगा
                </p>
                <p  class="laila-medium ask_text_english">
                If your question is not in the results then post your question to us, it will be answered soon.
                </p>
            </div>
            <div class="ask_btn_section">
                <a class="laila-medium" href="#">प्रश्न भेजें (Send Question)</a>
            </div>
        </div>
     </div> -->


     




     <!-- feed box -->

     <!-- <div class="user_feed">
        <div class="user_feed_space"> -->
            <!-- box_content -->



            <?php


// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the 'search' value from the GET request
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

// Check if the search value is empty
if (!empty($search)) {
    // SQL query to search for related queries
    $sql = "SELECT * FROM question_data 
            WHERE question_text LIKE '%$search%' 
            ORDER BY created_at DESC";
            echo'
            <div class="ask_new_question">
                <div class="ask_new_question_space">
                    <div class="ask_text_desc">
                        <p  class="laila-medium ask_text_hindi">
                        अगर आपका प्रश्न परिणमो में नहीं है तो अपना प्रश्न हमें पोस्ट करें, उसका उत्तर शीघ्र ही दिया जावेगा
                        </p>
                        <p  class="laila-medium ask_text_english">
                        If your question is not in the results then post your question to us, it will be answered soon.
                        </p>
                    </div>
                    <div class="ask_btn_section">
                        <a class="laila-medium" href="https://www.hinduintellectual.com/ask-questions.php">प्रश्न भेजें (Send Question)</a>
                    </div>
                </div>
             </div>
            ';
            echo'
                <div class="user_feed">
                <div class="user_feed_space">
            ';
} else {
    // Default query to retrieve recent entries
    $sql = "SELECT * FROM question_data ORDER BY created_at DESC LIMIT 12";
    
        echo'
            <div class="user_feed">
            <div class="user_feed_space">
            ';
}

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <a href="/gyan/' . $row["link"] . '" class="content_card">
            <img src="./assets/home_page_images/fact_background.jpg" alt="">
            <div class="content_card_text">
                <p>' . $row["created_at"] . '</p>
                <h2 class="laila-bold content_heading">' . $row["question_text"] . '</h2>
            </div>
        </a>
        ';
    }

    echo'</div>
     </div>';
} else {
    echo '</div>
     </div>';
    echo '<div class="not_found_text">
    <p class="laila-bold">कोई परिणाम नहीं मिला, आप अपना प्रश्न ऊपर दिए गए विकल्प के माध्यम से हमें भेज दें, हम अवश्य उसका उत्तर आप तक पहुंचाएंगे<br>(No results found, please send your question to us through the option given above, we will definitely answer it.)</p>
</div>';
}

// Close the connection
$conn->close();
?>

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