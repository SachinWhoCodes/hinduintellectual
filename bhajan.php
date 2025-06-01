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
        $pageTitle = "Devotional Hindu Bhajans | Listen & Read Bhakti Songs of Ram, Krishna, Shiva";
        $pageDescription = "Explore soulful bhakti bhajans of Shri Ram, Krishna, Shiva, Hanuman and more. Read lyrics and listen to popular devotional bhajans in Hindi.";
        $pageUrl = "https://www.hinduintellectual.com/bhajan.php";
        $pageImage = "https://www.hinduintellectual.com/assets/home_page_images/bhajan.png";
        
        
        include("includes/head.php");
    ?>
    
    <link rel="stylesheet" href="./assets/css/library.css">
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
            <h2 class="laila-bold">Search bhajan Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input value="'.$search_first.'" name="search" class="laila-medium" type="text" placeholder="Search For bhajan">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
            <a href="search=ramayana" class="category_btn_l laila-lite">Hanuman bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Shiv bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Durga bhajan</a>
            <a href="#" class="category_btn_l laila-lite">ShriRam bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Lakshmi bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Santoshi Mata bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Shitla Mata bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Bhairav bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Vishnu bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Gayatri bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Saraswati bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Krishna bhajan</a>
        </div>
    </div>
</div>
    ';
} else {
    echo'
    <div class="search_area">
    <div class="search_area_space">
        <div class="search_box">
            <h2 class="laila-bold">Search bhajan Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input  name="search" class="laila-medium" type="text" placeholder="Search for bhajan">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
            <a href="#" class="category_btn_l laila-lite">Shiv bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Durga bhajan</a>
            <a href="#" class="category_btn_l laila-lite">ShriRam bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Lakshmi bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Santoshi Mata bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Shitla Mata bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Bhairav bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Vishnu bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Gayatri bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Saraswati bhajan</a>
            <a href="#" class="category_btn_l laila-lite">Krishna bhajan</a>
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
    $query = "SELECT * FROM bhajan_data WHERE title_txt LIKE '%$search%' ORDER BY id";
} else {
    // Default query to retrieve recent entries
    $query = "SELECT * FROM bhajan_data ORDER BY RAND() LIMIT 20";

}



// Retrieve data from the `library` table
// $query = "SELECT * FROM library ORDER BY id DESC LIMIT 18";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<div class="li_user_feed">
        <div class="li_user_feed_space">';
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = htmlspecialchars($row['title_txt']);
        $link = htmlspecialchars($row['link']);

        // Image and PDF paths
        $image_path = "bhajan/resource/$id.png"; // Assuming image is saved as {id}.png

        // Display image
        if (file_exists($image_path)) {
            echo '
            <a href="bhajan/'.$link.'" class="li_content_card">
             <img src="./'.$image_path.'" alt="">
                <div class="li_content_card_text">
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


<div class="category-intro-outer-box">
    <section class="category-intro-desc">
      <h1 class="laila-bold">Heartfelt Hindu Bhajans for Divine Connection</h1>
      <p class="laila-medium">Discover heart-touching Hindu Bhajans dedicated to deities like Krishna, Ram, Hanuman, and Shiva. These devotional songs invoke deep spiritual emotions and are ideal for meditation, kirtan, and spiritual gatherings.</p>
    </section>
    
    <section class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <h2 class="laila-bold">Frequently Asked Questions on Bhajans</h2>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">What is a Bhajan?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">A Bhajan is a devotional song expressing love and reverence for a Hindu deity.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Are Bhajans only sung in temples?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">No, Bhajans can be sung at home, in satsangs, and during festivals or meditation sessions.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Where can I find lyrics of Bhajans?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">You can find a wide collection of bhajan lyrics on Hindu Intellectual categorized by deity.</p>
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