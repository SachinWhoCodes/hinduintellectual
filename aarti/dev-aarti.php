<?php
// Database connection credentials
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "hi";


$host = "localhost";
$username = "u683255285_hinduwhocodes";
$password = "WhatToDo@9";
$dbname = "u683255285_hindu_int";

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
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>
<body>
    <div class="top_of_nav">
        <div class="top_of_nav_left">
            <p class="laila-medium min_top_text">HI : For The Hindu, By The Hindu</p>
        </div>
        <div class="top_of_nav_left">
            <!-- <p class="laila-medium min_top_text">Donate</p> -->
            <a href="donate.php" class="laila-medium min_top_text">Donate</a>
        </div>
    </div>

    <div class="navigation_bar">
        <div class="inner_nav">
            <div class="left_nav">
                <img src="../assets/home_page_images/logo_hindu.png" alt="">
            </div>
            <div class="nav_right_phone">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn_phone">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>
                <button id="openNav" class="nav_btn_phone">
                    <img src="../assets/home_page_images/menu.png" alt="">
                    <p class="laila-medium">Menu</p>
                </button>
            </div>
            <div class="right_nav">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>

                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="../assets/home_page_images/ramayan.png" alt="">
                    <p class="laila-medium">Ramcharitmanas</p>
                </a>


                <a href="https://hinduintellectual.com/contests.php" class="nav_btn">
                    <img src="../assets/home_page_images/temple.png" alt="">
                    <p class="laila-medium">Contests</p>
                </a>


                <a href="https://hinduintellectual.com/festivals.php" class="nav_btn">
                    <img src="../assets/home_page_images/festival.png" alt="">
                    <p class="laila-medium">Festivals</p>
                </a>


                <a href="https://hinduintellectual.com/chalisha.php" class="nav_btn">
                    <img src="../assets/home_page_images/chalisha.png" alt="">
                    <p class="laila-medium">Chalisha</p>
                </a>


                <a href="https://hinduintellectual.com/bhajan.php" class="nav_btn">
                    <img src="../assets/home_page_images/bhajan.png" alt="">
                    <p class="laila-medium">Bhajan</p>
                </a>


                <a href="https://hinduintellectual.com/aarti.php" class="nav_btn">
                    <img src="../assets/home_page_images/arti.png" alt="">
                    <p class="laila-medium">Aarti</p>
                </a>

                <a href="https://hinduintellectual.com/mantra.php" class="nav_btn">
                    <img src="../assets/home_page_images/mantra.png" alt="">
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
            <li><a href="https://hinduintellectual.com/festivals.php">Festivals</a></li>
            <li><a href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
            <li><a href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
            <li><a href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
            <li><a href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
        </ul>
    </div>

    <!-- question data form -->

    <div class="question_form">
        <div class="question_form_space">


<?php

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $ques_text = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $cover_image = $_FILES['cover_image'];

    $allowed_image_types = ['image/png', 'image/jpeg'];
    if (!in_array($cover_image['type'], $allowed_image_types)) {
        die("Error: Only PNG or JPG images are allowed.");
    }


    // Get the next available ID
    $query_one = "SELECT MAX(id) + 1 AS next_id FROM arti_data";
    $result_one = $conn->query($query_one);
    $row_one = $result_one->fetch_assoc();
    $next_id = $row_one['next_id'] ?? 1;

    $image_extension = pathinfo($cover_image['name'], PATHINFO_EXTENSION);
    $new_image_name = "$next_id.$image_extension";
    $image_path = "resource/$new_image_name";
    


    // Generate the base link
    $base_link = preg_replace('/[^a-zA-Z0-9\s]/', '', $ques_text);
$base_link = str_replace(' ', '-', $base_link); 

    // Check if the link already exists
    $check_sql = "SELECT id, link FROM arti_data WHERE link LIKE '$base_link%'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // If link exists, get the highest ID
        $latest_id_sql = "SELECT MAX(id) AS latest_id FROM arti_data";
        $latest_id_result = $conn->query($latest_id_sql);

        if ($latest_id_result->num_rows > 0) {
            $row = $latest_id_result->fetch_assoc();
            $latest_id = $row['latest_id'] + 1; // Get the next ID
            $link = $base_link . $latest_id;    // Append ID to the link
        } else {
            $link = $base_link . "1"; // Default to 1 if no IDs exist
        }
    } else {
        // If link does not exist, append default "24"
        $link = $base_link;
    }

    $link = $link.".php";

    $link = $conn->real_escape_string($link);

    // Insert the data into the database
    $sql = "INSERT INTO arti_data (title_txt, content_txt, link) 
            VALUES ('$ques_text', '$content','$link')";

    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($cover_image['tmp_name'], $image_path);
        echo "Data submitted successfully!";

        // Name of the new PHP file
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
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore {$ques_text} with complete lyrics, meaning, and significance. Chant this soulful Aarti to invoke divine blessings and spiritual peace.">
    <meta name="keywords" content="{$ques_text}, Aarti Lyrics, Devotional Aarti, Hindu Worship, Spiritual Hymns, God Worship, Aarti Meaning, Divine Blessings">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.hinduintellectual.com/aarti/{$newFileName}">
    <meta property="og:title" content="{$ques_text} : Lyrics, Meaning, and Devotional Significance">
    <meta property="og:description" content="Discover the sacred {$ques_text}. Read the complete lyrics, understand its meaning, and chant this hymn to connect with divine energy.">
    <meta property="og:image" content="https://www.hinduintellectual.com/aarti/resource/{$next_id}.png">
    <meta property="og:url" content="https://www.hinduintellectual.com/aarti/{$newFileName}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{$ques_text} : Lyrics, Meaning, and Devotional Significance">
    <meta name="twitter:description" content="Read the complete {$ques_text}, its meaning, and learn its devotional importance. Invoke divine blessings with this soulful hymn.">
    <meta name="twitter:image" content="https://www.hinduintellectual.com/aarti/resource/{$next_id}.png">
    <title>{$ques_text}: Lyrics in Hindi, Meaning, and Devotional Significance | HinduIntellectual</title>
    
    

    <!-- font css -->
     <link rel="stylesheet" href="../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/question.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CreativeWork",
      "name": "{$ques_text}",
      "url": "https://www.hinduintellectual.com/aarti/{$newFileName}",
      "description": "{$ques_text} with complete lyrics, meaning, and devotional significance. Chant this sacred hymn to connect with divine energy and invoke blessings.",
      "author": {
        "@type": "Organization",
        "name": "HinduIntellectual"
      },
      "contentLocation": {
        "@type": "Place",
        "name": "Online"
      },
      "mainEntityOfPage": "https://www.hinduintellectual.com/aarti/$newFileName",
      "image": "https://www.hinduintellectual.com/aarti/resource/{$next_id}.png"
    }
    </script>
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
                <img src="../assets/home_page_images/logo_hindu.png" alt="">
            </div>
            <div class="nav_right_phone">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn_phone">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>
                <button id="openNav" class="nav_btn_phone">
                    <img src="../assets/home_page_images/menu.png" alt="">
                    <p class="laila-medium">Menu</p>
                </button>
            </div>
            <div class="right_nav">
                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="../assets/home_page_images/librabry.png" alt="">
                    <p class="laila-medium">HI-Library</p>
                </a>

                <a href="https://hinduintellectual.com/library.php" class="nav_btn">
                    <img src="../assets/home_page_images/ramayan.png" alt="">
                    <p class="laila-medium">Ramcharitmanas</p>
                </a>


                <a href="https://hinduintellectual.com/contests.php" class="nav_btn">
                    <img src="../assets/home_page_images/temple.png" alt="">
                    <p class="laila-medium">Contests</p>
                </a>


                <a href="https://hinduintellectual.com/festivals.php" class="nav_btn">
                    <img src="../assets/home_page_images/festival.png" alt="">
                    <p class="laila-medium">Festivals</p>
                </a>


                <a href="https://hinduintellectual.com/chalisha.php" class="nav_btn">
                    <img src="../assets/home_page_images/chalisha.png" alt="">
                    <p class="laila-medium">Chalisha</p>
                </a>


                <a href="https://hinduintellectual.com/bhajan.php" class="nav_btn">
                    <img src="../assets/home_page_images/bhajan.png" alt="">
                    <p class="laila-medium">Bhajan</p>
                </a>


                <a href="https://hinduintellectual.com/aarti.php" class="nav_btn">
                    <img src="../assets/home_page_images/arti.png" alt="">
                    <p class="laila-medium">Aarti</p>
                </a>

                <a href="https://hinduintellectual.com/mantra.php" class="nav_btn">
                    <img src="../assets/home_page_images/mantra.png" alt="">
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
            <li><a href="https://hinduintellectual.com/festivals.php">Festivals</a></li>
            <li><a href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
            <li><a href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
            <li><a href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
            <li><a href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
        </ul>
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
            <a href="https://hinduintellectual.com/update.php?id='.\$row['id'].'" class="scroll_feed_btn">
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




    <div class="question_feed">
        <div class="question_feed_space">
            <div class="q_feed_left">
                <div class="question_text">
                    <h1 class="laila-bold">{$ques_text}</h1>
                </div>
                <div class="laila-medium answer_text">
                    {$content}
                </div>
            </div>
            <div class="q_feed_right">
                <div class="more_questions">
                    <div class="heading_more">
                        <h1 class="laila-bold">Recently Added</h1>
                    </div>
                    <div class="more_posts">

        <?php


        // Create a connection
        \$conn = new mysqli(\$host, \$username, \$password, \$database);

        // Check the connection
        if (\$conn->connect_error) {
            die("Connection failed: " . \$conn->connect_error);
        }

        // SQL query to retrieve 8 random entries
        \$sql = "SELECT * FROM arti_data ORDER BY id DESC LIMIT 5";

        // Execute the query
        \$result_one = \$conn->query(\$sql);

        // Check if any rows were returned
        if (\$result_one->num_rows > 0) {
            // Display the rows directly using a while loop
            while (\$row = \$result_one->fetch_assoc()) {
                echo '
                <a class="laila-medium" href='.\$row["link"].'>'.\$row["title_txt"].'</a>
                ';
            }
        } else {
            echo "No entries found.";
        }

        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- feed box -->

    <div class="user_feed">
        <div class="user_feed_space">
            <!-- box_content -->
<!-- Section to display 8 random questions -->
        <?php

        // Check the connection
        if (\$conn->connect_error) {
            die("Connection failed: " . \$conn->connect_error);
        }

        // SQL query to retrieve 8 random entries
        \$sql = "SELECT * FROM arti_data ORDER BY RAND() LIMIT 8";

        // Execute the query
        \$result = \$conn->query(\$sql);

        // Check if any rows were returned
        if (\$result->num_rows > 0) {
            // Display the rows directly using a while loop
            while (\$row = \$result->fetch_assoc()) {
                echo '
                <a href='.\$row["link"].' class="content_card">
                    <img src="resource/'.\$row["id"].'.png" alt="">
                    <div class="content_card_text">
                        <p>'.\$row["created_at"].'</p>
                        <h2 class="laila-bold content_heading" >'.\$row["title_txt"].'</h2>
                    </div>
                </a>
                ';
            }
        } else {
            echo "No entries found.";
        }

        // Close the connection
        \$conn->close();
        ?>

            
        </div>
     </div>
     
     
     <div class="footer">
        <div class="footer_space">
            <div class="footer_details_box">
                <img src="../assets/home_page_images/logo_hindu.png" alt="">
                <p class="laila-medium">HinduIntellectual: Explore 700+ shastras, Ramcharitmanas, bhajans, aartis, mantras, festivals, contests, and spiritual insights. A platform for Hindus to connect, learn, and celebrate Sanatan Dharma.</p>
            </div>

            <div class="footer_link_box">
                <h3 class="laila-bold">Useful Links</h3>
                <ul>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/search.php">Sanatan Search</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/library.php">HI- Library</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/festivals.php">Festival</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/contests.php">Contests</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/chalisha.php">Chalisha</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/bhajan.php">Bhajan</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/mantra.php">Mantra</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/aarti.php">Aarti</a></li>
                </ul>
            </div>

            <!-- <div class="footer_link_box">
                <h3 class="laila-bold">Additional Features</h3>
                <ul>
                    <li><a class="laila-regular" href="#">Sanatan Search</a></li>
                    <li><a class="laila-regular" href="#">HI- Library</a></li>
                    <li><a class="laila-regular" href="#">Contests</a></li>
                    <li><a class="laila-regular" href="#">Chalisha</a></li>
                    <li><a class="laila-regular" href="#">Bhajan</a></li>
                    <li><a class="laila-regular" href="#">Mantra</a></li>
                    <li><a class="laila-regular" href="#">Aarti</a></li>
                </ul>
            </div> -->
            

            <div class="footer_link_box">
                <h3 class="laila-bold">About HI</h3>
                <ul>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/about-us.php">About Us</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/contact-us.php">Contact Us</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/privacy-policy.php">Privacy Policy</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/terms-and-conditions.php">Terms & Conditions</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/donate.php">Donate</a></li>
                    <li><a class="laila-regular" href="https://hinduintellectual.com/sitemap.php">Sitemap</a></li>
                    <!-- <li><a class="laila-regular" href="#">Aarti</a></li> -->
                </ul>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="laila-regular">Copyright 2025 HinduIntellectual. All Rights Reserved</p>
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
<script src="../assets/js/navbar.js"></script>
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
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>





    <form class="post_form_data" action="" method="post" enctype="multipart/form-data">
        <input class="input_text_q" type="text" placeholder="enter the title"  name="title">
        <input type="file" name="cover_image" accept=".png,.jpg,.jpeg" required>
        <label for="content">Enter Answer:</label>
        <textarea class="ans_text" name="content" id="content" rows="20"></textarea>
        <script>
            // Initialize CKEditor 5
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        </script>
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