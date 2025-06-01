<?php
// Database configuration
        $host = "localhost";
        $username = "u683255285_hinduwhocodes";
        $password = "WhatToDo@9";
        $database = "u683255285_hindu_int";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    // $link_par = $_POST['ques_text'] + "24";
    $user_asked = $conn->real_escape_string($_POST['user_asked']);
    $user_from = $conn->real_escape_string($_POST['user_from']);
    $ques_text = $conn->real_escape_string($_POST['ques_text']);
    $content = $conn->real_escape_string($_POST['content']);
    $answerer = $conn->real_escape_string($_POST['answerer']);
    $ans_belongs = $conn->real_escape_string($_POST['ans_belongs']);
    

$ques_text_copy = $ques_text;
// Normalize the text to ensure proper handling of Unicode characters
// Remove all non-English characters and symbols, leaving only the English alphabet
$ques_text_copy = preg_replace('/[^a-zA-Z0-9\s]/', '', $ques_text_copy); // Keep only English letters, numbers, and spaces
$ques_text_copy = preg_replace('/\s+/', ' ', $ques_text_copy); // Replace multiple spaces with a single space
$ques_text_copy = trim($ques_text_copy); // Remove any leading or trailing spaces

// Replace spaces with hyphens
$base_link = str_replace(' ', '-', $ques_text_copy);




    // Check if the link already exists
    $check_sql = "SELECT id, link FROM question_data WHERE link LIKE '$base_link%'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // If link exists, get the highest ID
        $latest_id_sql = "SELECT MAX(id) AS latest_id FROM question_data";
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
    $sql = "INSERT INTO question_data (user_asked, user_from, question_text, answer_content, answerer, ans_belongs, link) 
            VALUES ('$user_asked', '$user_from', '$ques_text', '$content', '$answerer', '$ans_belongs', '$link')";

    if ($conn->query($sql) === TRUE) {
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

<?php 
    // Get the path to the current file
    \$file_path = __FILE__;
    
    // Get the published time (file creation time)
    \$published_time = filectime($file_path);
    
    // Get the modified time (file last modification time)
    \$modified_time = filemtime($file_path);
    
    // Format both times in ISO 8601 format with Indian time zone (IST)
    date_default_timezone_set('Asia/Kolkata');
    
    \$published = date('c', \$published_time); // e.g., 2024-06-01T10:00:00+05:30
    \$modified = date('c', \$modified_time);   // e.g., 2025-05-20T12:00:00+05:30
?>
<!DOCTYPE html>
<html>
<head>

    <?php
    
        \$page_title = {$ques_text};
        \$page_desc = "Find answers to your Sanatan Dharma queries with HinduIntellectual's search feature. Accurate insights from Hindu scriptures at your fingertips. Read the answer of {$ques_text} on Hindu Intellectual";
        \$page_img = "og_images/hindu.jpg";
        \$page_url = "https://www.hinduintellectual.com/gyan/{$newFileName}";
        \$published = {$published};
        \$modified = {$modified};
            
    ?>
    
    
    <?php include("../includes/post_page_head.php") ?>

    
</head>
<body>

    <?php include("../includes/gtag_body.php") ?>  
    
    <?php include("../includes/header_top_common.php") ?>  

    <?php include("../includes/header.php") ?>  

    <?php include("../includes/story.php") ?>  




    <div class="question_feed">
        <div class="question_feed_space">
            <div class="q_feed_left">
                <div class="question_text">
                    <h1 class="laila-bold">{$ques_text}</h1>
                </div>
                <div class="laila-medium answer_text">
                    {$content}
                </div>
                
                <?php
                    \$user_asked_var = "{$user_asked}";
                    \$user_from_var = "{$user_from}";
                    \$answerer_var = "{$answerer}";
                    \$ans_belongs_var = "{$ans_belongs}";
                ?>
                
                <?php include("../includes/post_footer.php"); ?>
                
            </div>
            
            <?php include("../includes/post_sidebar.php"); ?>
            
        </div>
    </div>


    <?php include("../includes/post_page_feed.php") ?>  
     
     <?php include("../includes/footer.php") ?>  


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
