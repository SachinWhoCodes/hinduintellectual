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
        $pageTitle = "Hindu Chalisa Collection | Hanuman Chalisa, Durga Chalisa, Shiv Chalisa & More";
        $pageDescription = "Recite and understand the meaning of sacred Hindu chalisas like Hanuman Chalisa, Durga Chalisa, Shiv Chalisa, Ganesh Chalisa and more with devotion.";
        $pageUrl = "https://www.hinduintellectual.com/chalisha.php";
        $pageImage = "https://www.hinduintellectual.com/assets/home_page_images/chalisha.png";
        
        
        include("includes/head.php");
    ?>
    
     <link rel="stylesheet" href="./assets/css/library.css">
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
            <h2 class="laila-bold">Search Chalisha Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input value="'.$search_first.'" name="search" class="laila-medium" type="text" placeholder="Search For Chalisha">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
             <a href="https://hinduintellectual.com/chalisha.php" class="category_btn_l laila-lite">All Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Saraswati" class="category_btn_l laila-lite">Saraswati Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Gayatri" class="category_btn_l laila-lite">Gayatri Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Hanuman" class="category_btn_l laila-lite">Hanuman Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Shiv" class="category_btn_l laila-lite">Shiv Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Lakshmi" class="category_btn_l laila-lite">Lakshmi Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Durga" class="category_btn_l laila-lite">Durga Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Shanidev" class="category_btn_l laila-lite">Shanidev Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Saraswati" class="category_btn_l laila-lite">Mahakali Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Kaali" class="category_btn_l laila-lite">Vishnu Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Radha" class="category_btn_l laila-lite">Radha Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Ram" class="category_btn_l laila-lite">ShriRam Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Krishna" class="category_btn_l laila-lite">Krishna Chalisha</a>
        </div>
    </div>
</div>
    ';
} else {
    echo'
    <div class="search_area">
    <div class="search_area_space">
        <div class="search_box">
            <h2 class="laila-bold">Search Chalisha Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input  name="search" class="laila-medium" type="text" placeholder="Search for Chalisha">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
            <a href="https://hinduintellectual.com/chalisha.php" class="category_btn_l laila-lite">All Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Saraswati" class="category_btn_l laila-lite">Saraswati Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Gayatri" class="category_btn_l laila-lite">Gayatri Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Hanuman" class="category_btn_l laila-lite">Hanuman Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Shiv" class="category_btn_l laila-lite">Shiv Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Lakshmi" class="category_btn_l laila-lite">Lakshmi Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Durga" class="category_btn_l laila-lite">Durga Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Shanidev" class="category_btn_l laila-lite">Shanidev Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Saraswati" class="category_btn_l laila-lite">Mahakali Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Kaali" class="category_btn_l laila-lite">Vishnu Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Radha" class="category_btn_l laila-lite">Radha Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Ram" class="category_btn_l laila-lite">ShriRam Chalisha</a>
            <a href="https://hinduintellectual.com/chalisha.php?search=Krishna" class="category_btn_l laila-lite">Krishna Chalisha</a>
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
    $query = "SELECT * FROM chalisha_data WHERE title_txt LIKE '%$search%' ORDER BY id DESC";
} else {
    // Default query to retrieve recent entries
    $query = "SELECT * FROM chalisha_data ORDER BY id";

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
        $image_path = "chalisha/resource/$id.png"; // Assuming image is saved as {id}.png

        // Display image
        if (file_exists($image_path)) {
            echo '
            <a href="chalisha/'.$link.'" class="li_content_card">
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
      <h1 class="laila-bold">Read Powerful Chalishas – Hanuman, Durga, Shiv & More</h1>
      <p class="laila-medium">Read powerful Chalishas like Hanuman Chalisa, Durga Chalisa, Shiv Chalisa, and more. Each Chalisa is a 40-verse hymn praising a deity’s divine qualities and seeking blessings for strength, protection, and wisdom.</p>
    </section>
    
    <section class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <h2 class="laila-bold">Frequently Asked Questions on Chalisha</h2>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">What is a Chalisa in Hindu tradition?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Chalisa is a 40-verse devotional hymn sung in honor of Hindu gods and goddesses.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Which Chalisa is most powerful?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Hanuman Chalisa is widely revered for its protective and strength-giving properties.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Can Chalisa be read anytime?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Yes, Chalisa can be read anytime, though morning and evening are considered most auspicious.</p>
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