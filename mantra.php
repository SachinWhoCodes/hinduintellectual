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
        $pageTitle = "Powerful Hindu Mantras | Chant Mahamrityunjaya, Gayatri & More";
        $pageDescription = "Find sacred Hindu mantras like Mahamrityunjaya, Gayatri, Hanuman, Saraswati, Lakshmi, and others for peace, health, and spiritual growth.";
        $pageUrl = "https://www.hinduintellectual.com/mantra.php";
        $pageImage = "https://www.hinduintellectual.com/assets/home_page_images/mantra.png";
        
        
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
            <h2 class="laila-bold">Search Mantra Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input value="'.$search_first.'" name="search" class="laila-medium" type="text" placeholder="Search For Mantra">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
            <a href="search=ramayana" class="category_btn_l laila-lite">Hanuman Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Shiv Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Durga Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">ShriRam Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Lakshmi Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Santoshi Mata Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Shitla Mata Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Bhairav Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Vishnu Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Gayatri Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Saraswati Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Krishna Chalisha</a>
        </div>
    </div>
</div>
    ';
} else {
    echo'
    <div class="search_area">
    <div class="search_area_space">
        <div class="search_box">
            <h2 class="laila-bold">Search Mantra Sangrah</h2>
            <form action="" method="get">
                <div class="form_action_box">
                    <input  name="search" class="laila-medium" type="text" placeholder="Search for Mantra">
                    <button class="laila-medium search_butt" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="category_box">
            <a href="#" class="category_btn_l laila-lite">Shiv Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Durga Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">ShriRam Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Lakshmi Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Santoshi Mata Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Shitla Mata Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Bhairav Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Vishnu Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Gayatri Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Saraswati Chalisha</a>
            <a href="#" class="category_btn_l laila-lite">Krishna Chalisha</a>
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
    $query = "SELECT * FROM mantra_data WHERE title_txt LIKE '%$search%' ORDER BY id DESC";
} else {
    // Default query to retrieve recent entries
    $query = "SELECT * FROM mantra_data ORDER BY id";

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
        $image_path = "mantra/resource/$id.png"; // Assuming image is saved as {id}.png

        // Display image
        if (file_exists($image_path)) {
            echo '
            <a href="mantra/'.$link.'" class="li_content_card">
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
      <h1 class="laila-bold">Powerful Hindu Mantras – Shiv, Gayatri, Hanuman & More</h1>
      <p class="laila-medium">Unlock the power of sacred mantras like Om Namah Shivaya, Gayatri Mantra, Hanuman Mantra, and Durga Kavach. Chanting these Vedic mantras brings peace, health, spiritual awakening, and divine connection.</p>
    </section>
    
    <section class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <h2 class="laila-bold">Frequently Asked Questions on Mantras</h2>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">What is the purpose of chanting mantras?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Mantras are sacred syllables or verses that help focus the mind, attract positive energy, and connect with the divine.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">How many times should I chant a mantra?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Common practice includes chanting 108 times using a japa mala, but even a few repetitions with focus are beneficial.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Can I listen to mantras if I don’t know how to chant?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Absolutely, listening to mantras is also spiritually uplifting and effective.</p>
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