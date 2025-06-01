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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hindu Intellectual - HI of Sanatan Dharm</title>

    <!-- font css -->
     <link rel="stylesheet" href="../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/book.css">
     <link rel="stylesheet" href="../assets/css/library.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="top_of_nav">
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">08 दिसम्बर, 2024 रविवार - मार्गशीर्ष शुक्ल पक्ष सप्तमी</p>
        </div>
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">Login | Register</p>
        </div>
    </div>

    <div class="navigation_bar">
        <div class="inner_nav">
            <div class="left_nav">
                <img src="./assets/home_page_images/logo_hindu.png" alt="">
            </div>
            <div class="nav_right_phone">
                <a href="" class="nav_btn_phone">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">e-पुस्तकालय</p>
                </a>
            </div>
            <div class="right_nav">
                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>

                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/ramayan.png" alt="">
                    <p class="laila-medium">Ramcharitmanas</p>
                </a>


                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/temple.png" alt="">
                    <p class="laila-medium">Mandir</p>
                </a>


                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/festival.png" alt="">
                    <p class="laila-medium">Festival</p>
                </a>


                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/chalisha.png" alt="">
                    <p class="laila-medium">Chalisha</p>
                </a>


                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/bhajan.png" alt="">
                    <p class="laila-medium">Bhajan</p>
                </a>


                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/arti.png" alt="">
                    <p class="laila-medium">Aarti</p>
                </a>

                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/mantra.png" alt="">
                    <p class="laila-medium">Mantra</p>
                </a>

                <a href="" class="nav_btn">
                    <img src="../assets/home_page_images/daily.png" alt="">
                    <p class="laila-medium">Daily Streak</p>
                </a>
                
            </div>
        </div>
    </div>



    <!-- scroll feed here -->

    <div class="scroll_feed">
        <div class="scroll_feed_space">
        <?php

// Establish connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$query = "SELECT * FROM updates ORDER BY id DESC LIMIT 20";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        // Assuming uploaded images are stored in the `uploads` folder
        $imagePath = "../assets/update_images/" . $row['id'] . ".png";
        if (!file_exists($imagePath)) {
            $imagePath = "../assets/update_images/" . $row['id'] . ".jpg"; // Check for JPG fallback
        }

        echo "<td>";
        if (file_exists($imagePath)) {
            echo'
            <a href="http://localhost/HinduIntellectual/update.php?id='.$row['id'].'" class="scroll_feed_btn">
                <img src="'. htmlspecialchars($imagePath) .'" alt="">
                <p class="laila-medium">'. htmlspecialchars($row['title']) .'</p>
            </a>
            ';
        } else {
            echo "No image available.";
        }

    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
        </div>
    </div>

     <!-- library feed box -->



    <!-- book box -->

    <div class="book_box">
        <div class="book_box_space">
            <div class="book_box_left">
                <img src="./resource/1.png" alt="">
            </div>
            <div class="book_box_right">
                <p class="laila-lite cate_txt">Category</p>
                <h2 class="laila-bold">This is the tiel of the book mere ram</h2>
                <p class="desc_of_book laila-medium">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, consequatur? Sapiente quod cupiditate ipsam dolorem quo nam cum eveniet velit expedita sint, iusto cumque, adipisci rerum, quasi explicabo dolore quibusdam sed distinctio natus ab porro exercitationem eius aut! Consectetur nisi delectus mollitia necessitatibus id repudiandae assumenda vero natus sequi possimus?<br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae deserunt nulla, distinctio laudantium perferendis illo facilis! Facere veritatis veniam porro ducimus commodi incidunt et, excepturi eligendi ex deleniti maxime adipisci eum fuga nihil eius corporis doloremque sapiente aspernatur perspiciatis molestias natus nobis nostrum. Deleniti tenetur facere excepturi fugit velit ipsa!
                </p>
                <a class="laila-medium dl_btn" href="#">Open PDF</a>
            </div>
        </div>
    </div>




     <?php
// Database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the `library` table
$query = "SELECT * FROM library";
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
        $image_path = "resource/$id.png"; // Assuming image is saved as {id}.png
        $pdf_path = "$id.pdf";   // Assuming PDF is saved as {id}.pdf

        // Display image
        if (file_exists($image_path)) {
            echo '
            <a href="'.$link.'" class="li_content_card">
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
    echo "<p>No records found.</p>";
}

// Close the database connection
$conn->close();
?>



        
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