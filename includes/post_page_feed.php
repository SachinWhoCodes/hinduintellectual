<!-- feed box -->

    <div class="user_feed">
        <div class="user_feed_space">
            <!-- box_content -->
<!-- Section to display 8 random questions -->
        <?php

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve 8 random entries
        $sql = "SELECT * FROM question_data ORDER BY RAND() LIMIT 8";

        // Execute the query
        $result = $conn->query($sql);

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Display the rows directly using a while loop
            while ($row = $result->fetch_assoc()) {
                echo '
                <a href='.$row["link"].' class="content_card">
                    <img src="../assets/home_page_images/fact_background.jpg" alt="">
                    <div class="content_card_text">
                        <p>'.$row["created_at"].'</p>
                        <h2 class="laila-bold content_heading" >'.$row["question_text"].'</h2>
                    </div>
                </a>
                ';
            }
        } else {
            echo "No entries found.";
        }

        // Close the connection
        $conn->close();
        ?>

            
        </div>
     </div>