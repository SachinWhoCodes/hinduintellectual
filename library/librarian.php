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
     <link rel="stylesheet" href="../assets/css/post.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="top_of_nav">
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">HI : For The Hindu, By The Hindu</p>
        </div>
        <div class="top_of_nav_left">
            <!-- <p class="laila-medium min_top_text">Donate</p> -->
            <a href="https://hinduintellectual.com/donate.php" class="laila-medium min_top_text">Donate</a>
        </div>
    </div>

    <div class="navigation_bar">
        <div class="inner_nav">
            <div class="left_nav">
                <img src="./assets/home_page_images/logo_hindu.png" alt="">
            </div>
            <div class="nav_right_phone">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn_phone">
                    <img src="./assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>
                <button id="openNav" class="nav_btn_phone">
                    <img src="./assets/home_page_images/menu.png" alt="">
                    <p class="laila-medium">Menu</p>
                </button>
            </div>
            <div class="right_nav">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="./assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>

                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="./assets/home_page_images/ramayan.png" alt="">
                    <p class="laila-medium">Ramcharitmanas</p>
                </a>


                <a href="https://hinduintellectual.com/contests.php" class="nav_btn">
                    <img src="./assets/home_page_images/temple.png" alt="">
                    <p class="laila-medium">Contests</p>
                </a>


                <a href="https://hinduintellectual.com/festivals.php" class="nav_btn">
                    <img src="./assets/home_page_images/festival.png" alt="">
                    <p class="laila-medium">Festivals</p>
                </a>


                <a href="https://hinduintellectual.com/chalisha.php" class="nav_btn">
                    <img src="./assets/home_page_images/chalisha.png" alt="">
                    <p class="laila-medium">Chalisha</p>
                </a>


                <a href="https://hinduintellectual.com/bhajan.php" class="nav_btn">
                    <img src="./assets/home_page_images/bhajan.png" alt="">
                    <p class="laila-medium">Bhajan</p>
                </a>


                <a href="https://hinduintellectual.com/aarti.php" class="nav_btn">
                    <img src="./assets/home_page_images/arti.png" alt="">
                    <p class="laila-medium">Aarti</p>
                </a>

                <a href="https://hinduintellectual.com/mantra.php" class="nav_btn">
                    <img src="./assets/home_page_images/mantra.png" alt="">
                    <p class="laila-medium">Mantra</p>
                </a>
                
            </div>
        </div>
    </div>



    <div id="navbar_updated" class="hidden">
    <button id="closeNav" class="close-btn">&times; Close</button>
        <ul>
            <li><a href="https://hinduintellectual.com/index.php">Home</a></li>
            <li><a href="https://hinduintellectual.com/library.php">Library</a></li>
            <li><a href="https://hinduintellectual.com/contests.php">Contests</a></li>
            <li><a href="https://hinduintellectual.com/ramcharitmanas.php">Ramcharitmanas</a></li>
            <li><a href="https://hinduintellectual.com/festival.php">Festivals</a></li>
            <li><a href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
            <li><a href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
            <li><a href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
            <li><a href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
        </ul>
    </div>

    <!-- question data form -->

    <div class="question_form">
        <div class="question_form_space">
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Text Form</title>
    <!-- Include CKEditor library -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>
<body>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Input fields
    $category = $conn->real_escape_string($_POST['category']);
    $title = $conn->real_escape_string($_POST['ques_text']);
    $description = $conn->real_escape_string($_POST['description']);
    $file = $_FILES['file'];
    $cover_image = $_FILES['cover_image'];

    // Validate and sanitize title to generate link
    $link = preg_replace('/[^a-zA-Z0-9\s]/', '', $title); // Remove invalid characters
    $link = str_replace(' ', '-', $link) . ".php"; // Replace spaces with '-' and add .php

    // Check if link already exists
    $query = "SELECT id FROM library WHERE link = '$link'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Get the next available ID
        $query = "SELECT MAX(id) + 1 AS next_id FROM library";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $next_id = $row['next_id'] ?? 1;

        // Modify the link to include the next ID
        $link = preg_replace('/\.php$/', "-$next_id.php", $link);
    }

    // File validation for PDF/DOC
    $allowed_file_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    if (!in_array($file['type'], $allowed_file_types)) {
        die("Error: Only PDF or DOC files are allowed.");
    }

    // Image validation for PNG/JPG
    $allowed_image_types = ['image/png', 'image/jpeg'];
    if (!in_array($cover_image['type'], $allowed_image_types)) {
        die("Error: Only PNG or JPG images are allowed.");
    }

    // Get the next available ID
    $query = "SELECT MAX(id) + 1 AS next_id FROM library";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $next_id = $row['next_id'] ?? 1;

    // Rename and save files
    $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $new_file_name = "$next_id.$file_extension";
    $file_path ="resource/$new_file_name";
    move_uploaded_file($file['tmp_name'], $file_path);

    $image_extension = pathinfo($cover_image['name'], PATHINFO_EXTENSION);
    $new_image_name = "$next_id.$image_extension";
    $image_path = "resource/$new_image_name";
    move_uploaded_file($cover_image['tmp_name'], $image_path);

    // Insert data into the database
    $query = "INSERT INTO library (title, category, link) VALUES ('$title', '$category', '$link')";
    if ($conn->query($query)) {
        echo "Data inserted successfully.";



        $newFileName = $link;

        // Content to write into the new PHP file
        $fileContent = <<<EOD
        


        <?php
// Database connection credentials
// \$host = "localhost";
// \$username = "root";
// \$password = "";
// \$database = "hi";


\$host = "localhost";
\$username = "u683255285_hinduwhocodes";
\$password = "WhatToDo@9";
\$database = "u683255285_hindu_int";

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
                <img src="../assets/home_page_images/logo_hindu.png" alt="">
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
\$conn = new mysqli(\$host, \$username, \$password, \$database);

// Check connection
if (\$conn->connect_error) {
    die("Connection failed: " . \$conn->connect_error);
}

// Fetch data from the database
\$query = "SELECT * FROM updates ORDER BY id DESC LIMIT 20";
\$result = \$conn->query(\$query);

if (\$result->num_rows > 0) {

    while (\$row = \$result->fetch_assoc()) {
        // Assuming uploaded images are stored in the `uploads` folder
        \$imagePath = "../assets/update_images/" . \$row['id'] . ".png";
        if (!file_exists(\$imagePath)) {
            \$imagePath = "../assets/update_images/" . \$row['id'] . ".jpg"; // Check for JPG fallback
        }

        echo "<td>";
        if (file_exists(\$imagePath)) {
            echo'
            <a href="http://localhost/HinduIntellectual/update.php?id='.\$row['id'].'" class="scroll_feed_btn">
                <img src="'. htmlspecialchars(\$imagePath) .'" alt="">
                <p class="laila-medium">'. htmlspecialchars(\$row['title']) .'</p>
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

\$conn->close();
?>
        </div>
    </div>

     <!-- library feed box -->



    <!-- book box -->

    <div class="book_box">
        <div class="book_box_space">
            <div class="book_box_left">
                <img src="{$image_path}" alt="">
            </div>
            <div class="book_box_right">
                <p class="laila-lite cate_txt">{$category}</p>
                <h2 class="laila-bold">{$title}</h2>
                <p class="desc_of_book laila-medium">{$description}</p>
                <button id="openpdf" class="laila-medium dl_btn">Open PDF</button>
            </div>
        </div>
    </div>
    
    
    
    <div class="pdf_read" id="pdf_tab">
        <div class="pdf_navigation">
            <p class="laila-medium">Hindu Intellectual Library</p>
            <button id="closepdf">Close PDF</button>
        </div>
        <iframe class="pdf_read_screen" src="{$file_path}"></iframe>
    </div>




     <?php
// Database connection
\$conn = new mysqli(\$host, \$username, \$password, \$database);
if (\$conn->connect_error) {
    die("Connection failed: " . \$conn->connect_error);
}

// Retrieve data from the `library` table
\$query = "SELECT * FROM library ORDER BY id DESC LIMIT 12";
\$result = \$conn->query(\$query);

if (\$result->num_rows > 0) {
    echo '<div class="li_user_feed">
        <div class="li_user_feed_space">';
    while (\$row = \$result->fetch_assoc()) {
        \$id = \$row['id'];
        \$title = htmlspecialchars(\$row['title']);
        \$category = htmlspecialchars(\$row['category']);
        \$link = htmlspecialchars(\$row['link']);

        // Image and PDF paths
        \$image_path = "resource/\$id.png"; // Assuming image is saved as {id}.png
        \$pdf_path = "\$id.pdf";   // Assuming PDF is saved as {id}.pdf

        // Display image
        if (file_exists(\$image_path)) {
            echo '
            <a href="'.\$link.'" class="li_content_card">
                <img src="./'.\$image_path.'" alt="">
                <div class="li_content_card_text">
                    <p>'.\$category.'</p>
                    <h2 class="laila-bold li_content_heading" >'.\$title.'</h2>
                </div>
            </a>
            ';
        } else {
            echo "<p>No image available.</p>";
        }

        // Display PDF in a frame
        // if (file_exists(\$pdf_path)) {
        //     echo "<iframe src='\$pdf_path' width='600' height='400'></iframe>";
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
\$conn->close();
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

const openPDF = document.getElementById('openpdf');
    const readView = document.getElementById('pdf_tab');
    const closePDF = document.getElementById('closepdf');

    openPDF.addEventListener('click', () => {
      readView.style.display = 'block';
    });

    closePDF.addEventListener('click', () => {
      readView.style.display = 'none';
    });

</script>
</html>
EOD;

        // Open the file for writing (create it if it doesn't exist)
        $file = fopen($newFileName, "w");

        // Check if the file was successfully opened
        if ($file) {
            // Write content to the file
            fwrite($file, $fileContent);

            // Close the file
            fclose($file);

            echo "File '$newFileName' created successfully!";
        } else {
            echo "Error: Unable to create the file.";
        }




    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>




<form class="post_form_data" action="" method="post" enctype="multipart/form-data">
    <div class="user_details">
        <input class="input_text" type="text" name="category" placeholder="Category" required>
        <input type="file" name="file" accept=".pdf,.doc,.docx" required>
        <input type="file" name="cover_image" accept=".png,.jpg,.jpeg" required>
    </div>
    <input class="input_text" type="text" placeholder="Enter Title" name="ques_text" required>
    <textarea name="description" id=""></textarea>
    <br>
    <button class="sbt_btn" type="submit">Submit</button>
</form>

</body>
</html>

        </div>
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
<script src="./assets/js/navbar.js"></script>
</html>