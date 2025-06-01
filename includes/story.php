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
        $imagePath = "./assets/update_images/" . $row['id'] . ".png";
        if (!file_exists($imagePath)) {
            $imagePath = "./assets/update_images/" . $row['id'] . ".jpg"; // Check for JPG fallback
        }

        echo "<td>";
        if (file_exists($imagePath)) {
            echo'
            <a href="https://www.hinduintellectual.com/update.php?id='.$row['id'].'" class="scroll_feed_btn">
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