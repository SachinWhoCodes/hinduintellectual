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
        $pageTitle = "Hindu Aartis Collection | Ganesh, Lakshmi, Durga Aarti & More";
        $pageDescription = "Discover the divine Aartis of various Hindu deities like Ganesh, Lakshmi, Durga, Shiva and others in our sacred Sanatan Aarti collection.";
        $pageUrl = "https://www.hinduintellectual.com/aarti.php";
        $pageImage = "https://www.hinduintellectual.com/assets/home_page_images/arti.png";
        
        
        include("includes/head.php");
    ?>
    
    <link rel="stylesheet" href="./assets/css/library.css">
    <link rel="stylesheet" href="./assets/css/category-intro.css">
</head>

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
            <h2 class="laila-bold">Search Aarti Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input value="'.$search_first.'" name="search" class="laila-medium" type="text" placeholder="Search For Aarti">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
             <a href="https://hinduintellectual.com/aarti.php" class="category_btn_l laila-lite">All Chalisha</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Jagdish" class="category_btn_l laila-lite">Om Jai Jagdish Hare</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Shiv" class="category_btn_l laila-lite">Shiv Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Ram" class="category_btn_l laila-lite">Ram Stuti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Hanuman" class="category_btn_l laila-lite">Hanuman Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Lakshmi" class="category_btn_l laila-lite">Lakshmi Mata Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Ambe" class="category_btn_l laila-lite">Ambe Mata Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Ganesh" class="category_btn_l laila-lite">Ganesh Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Bihari" class="category_btn_l laila-lite">Banke Bihari Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Kaali" class="category_btn_l laila-lite">Kali Mata Aarti</a>
        </div>
    </div>
</div>
    ';
} else {
    echo'
    <div class="search_area">
    <div class="search_area_space">
        <div class="search_box">
            <h2 class="laila-bold">Search Aarti Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input  name="search" class="laila-medium" type="text" placeholder="Search for Aarti">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
             <a href="https://hinduintellectual.com/aarti.php" class="category_btn_l laila-lite">All Chalisha</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Jagdish" class="category_btn_l laila-lite">Om Jai Jagdish Hare</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Shiv" class="category_btn_l laila-lite">Shiv Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Ram" class="category_btn_l laila-lite">Ram Stuti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Hanuman" class="category_btn_l laila-lite">Hanuman Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Lakshmi" class="category_btn_l laila-lite">Lakshmi Mata Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Ambe" class="category_btn_l laila-lite">Ambe Mata Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Ganesh" class="category_btn_l laila-lite">Ganesh Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Bihari" class="category_btn_l laila-lite">Banke Bihari Aarti</a>
            <a href="https://hinduintellectual.com/aarti.php?search=Kaali" class="category_btn_l laila-lite">Kali Mata Aarti</a>
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
    $query = "SELECT * FROM arti_data WHERE title_txt LIKE '%$search%' ORDER BY id DESC";
} else {
    // Default query to retrieve recent entries
    $query = "SELECT * FROM arti_data ORDER BY id";

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
        $image_path = "aarti/resource/$id.png"; // Assuming image is saved as {id}.png

        // Display image
        if (file_exists($image_path)) {
            echo '
            <a href="aarti/'.$link.'" class="li_content_card">
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
      <h1 class="laila-bold">Explore Hindu Aartis – Ganesh, Durga, Lakshmi, Shiva & More</h1>
      <p class="laila-medium">Explore the sacred world of Hindu Aartis at Hindu Intellectual — a divine collection of spiritual hymns sung in devotion to Gods and Goddesses like Ganesh, Durga, Lakshmi, Shiva, and Hanuman. Perfect for daily puja, festive rituals, and spiritual reflection, these Aartis awaken divine blessings and inner peace.</p>
    </section>
    
    <section class="faq-section laila-bold" itemscope itemtype="https://schema.org/FAQPage">
      <h2>Frequently Asked Questions on Aarti</h2>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">What is an Aarti in Hinduism?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Aarti is a devotional song sung in praise of a deity during puja or worship, typically accompanied by lighting lamps.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">How often should I perform Aarti?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Many devotees perform Aarti daily in the morning or evening, especially during puja or festivals.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Can I read or sing Aarti in English or Hindi?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Yes, Hindu Intellectual provides Aartis in Hindi, Sanskrit, and English transliterations.</p>
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