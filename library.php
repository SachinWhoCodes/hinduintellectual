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
    <meta name="description" content="Explore the HinduIntellectual Library with 700+ Sanatan Dharma shastras, Ramcharitmanas insights, chalisha, bhajans, mantras, aartis, and more. Dive into spiritual wisdom today!">
    <meta name="keywords" content="Sanatan Dharma Library, Hindu Shastras, Chalisha, Bhajans, Aartis, Mantras, Ramcharitmanas, Hindu Spiritual Texts, Sanatan Knowledge">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.hinduintellectual.com/library.php">
    <meta property="og:title" content="HinduIntellectual Library: 700+ Shastras, Bhajans & More">
    <meta property="og:description" content="Discover the HinduIntellectual Library, featuring 700+ Sanatan Dharma shastras, chalisha, bhajans, mantras, and aartis. Dive into eternal Hindu wisdom today!">
    <meta property="og:image" content="https://www.hinduintellectual.com/assets/main-feature.jpg">
    <meta property="og:url" content="https://www.hinduintellectual.com/library.php">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HinduIntellectual Library: 700+ Shastras, Bhajans & More">
    <meta name="twitter:description" content="Explore 700+ Hindu shastras, chalisha, bhajans, mantras, and aartis in the HinduIntellectual Library. Dive into Sanatan Dharma wisdom now!">
    <meta name="twitter:image" content="https://www.hinduintellectual.com/assets/main-feature.jpg">
    <title>HinduIntellectual Library: 700+ Shastras, Chalisha, Bhajans, Mantras & Aartis</title>

    <!-- font css -->
     <link rel="stylesheet" href="./assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/library.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
    
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "HinduIntellectual Library",
      "url": "https://www.hinduintellectual.com/library.php",
      "description": "The HinduIntellectual Library offers access to 700+ Hindu shastras, Ramcharitmanas insights, chalisha, bhajans, mantras, aartis, and spiritual wisdom.",
      "hasPart": [
        {
          "@type": "CreativeWork",
          "name": "Hindu Shastras",
          "about": "Collection of 700+ Sanatan Dharma texts."
        },
        {
          "@type": "CreativeWork",
          "name": "Ramcharitmanas Insights",
          "about": "Deep dives into the teachings of the Ramcharitmanas."
        },
        {
          "@type": "CreativeWork",
          "name": "Bhajans, Aartis, and Mantras",
          "about": "A curated collection of devotional songs and sacred chants."
        }
      ],
      "author": {
        "@type": "Organization",
        "name": "HinduIntellectual"
      },
      "about": {
        "@type": "Thing",
        "name": "Sanatan Dharma"
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






<!-- search area -->
<?php
$search_first = isset($_GET['search']) ? $_GET['search'] : '';


if (!empty($search_first)) {
    echo '
    <div class="search_area">
    <div class="search_area_space">
        <div class="search_box">
            <h2 class="laila-bold">Search HI Library</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input value="'.$search_first.'" name="search" class="laila-medium" type="text" placeholder="Search for Shastra, Ved, Puran">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
            <a href="search=ramayana" class="category_btn_l laila-lite">Ramayana</a>
            <a href="#" class="category_btn_l laila-lite">Gita</a>
            <a href="#" class="category_btn_l laila-lite">Ved</a>
            <a href="#" class="category_btn_l laila-lite">Puran (18)</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
        </div>
    </div>
</div>
    ';
} else {
    echo'
    <div class="search_area">
    <div class="search_area_space">
        <div class="search_box">
            <h2 class="laila-bold">Search HI Library</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input  name="search" class="laila-medium" type="text" placeholder="Search for Shastra, Ved, Puran">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
            <a href="search=ramayana" class="category_btn_l laila-lite">Ramayan</a>
            <a href="#" class="category_btn_l laila-lite">Gita</a>
            <a href="#" class="category_btn_l laila-lite">Ved</a>
            <a href="#" class="category_btn_l laila-lite">Puran (18)</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
            <a href="#" class="category_btn_l laila-lite">Mahabharat</a>
            <a href="#" class="category_btn_l laila-lite">Upa Puran</a>
        </div>
    </div>
</div>
    ';
}


?>
<!-- search area ends -->





<!-- library feed box -->

     <?php
// Database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

$query = "";

if (!empty($search)) {
    // SQL query to search for related queries
    $query = "SELECT * FROM library WHERE title LIKE '%$search%' OR category LIKE '%$search%' ORDER BY id DESC";
} else {
    // Default query to retrieve recent entries
    $query = "SELECT * FROM library ORDER BY RAND() LIMIT 18";

}



// Retrieve data from the `library` table
// $query = "SELECT * FROM library ORDER BY id DESC LIMIT 18";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<div class="li_user_feed">
        <div class="li_user_feed_space">';
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = htmlspecialchars($row['title']);
        $category = htmlspecialchars($row['category']);
        $link = htmlspecialchars($row['link']);

        // Image and PDF paths
        $image_path = "library/resource/$id.png"; // Assuming image is saved as {id}.png
        $pdf_path = "$id.pdf";   // Assuming PDF is saved as {id}.pdf

        // Display image
        if (file_exists($image_path)) {
            echo '
            <a href="library/'.$link.'" class="li_content_card">
                <img src="./'.$image_path.'" alt="">
                <div class="li_content_card_text">
                    <p>'.$category.'</p>
                    <h2 class="laila-bold li_content_heading" >'.$title.'</h2>
                </div>
            </a>
            ';
        } else {
            echo "<p>No image available.</p>";
        }

        // Display PDF in a frame
        // if (file_exists($pdf_path)) {
        //     echo "<iframe src='$pdf_path' width='600' height='400'></iframe>";
        // } else {
        //     echo "<p>No PDF available.</p>";
        // }

    }
    echo '</div>
     </div>';
} else {
    echo '<div class="not_found_text">
            <p class="laila-bold">कोई परिणाम नहीं मिला<br>(No results found)</p>
        </div>';
}

// Close the database connection
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