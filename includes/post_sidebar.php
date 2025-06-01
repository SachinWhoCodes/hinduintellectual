<div class="q_feed_right">
    <div class="more_questions">
        <div class="heading_more">
            <h1 class="laila-bold">रोचक प्रश्न</h1>
        </div>
        <div class="more_posts">

        <?php
        // Database connection credentials
        $host = "localhost";
        $username = "u683255285_hinduwhocodes";
        $password = "WhatToDo@9";
        $database = "u683255285_hindu_int";

        // Create a connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve 8 random entries
        $sql = "SELECT * FROM question_data ORDER BY id DESC LIMIT 5";

        // Execute the query
        $result_one = $conn->query($sql);

        // Check if any rows were returned
        if ($result_one->num_rows > 0) {
            // Display the rows directly using a while loop
            while ($row = $result_one->fetch_assoc()) {
                echo '
                <a class="laila-medium" href='.$row["link"].'>'.$row["question_text"].'</a>
                ';
            }
        } else {
            echo "No entries found.";
        }

        ?>

        </div>
    </div>
</div>