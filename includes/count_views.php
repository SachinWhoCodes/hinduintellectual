<?php
// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate a random number within a range
function generateRandomNumber($min, $max) {
    if ($min > $max) {
        // Swap values if min is greater than max
        $temp = $min;
        $min = $max;
        $max = $temp;
    }
    return rand($min, $max);
}

// Generate random number
$minRange = 1;
$maxRange = 19;
$randomNum = generateRandomNumber($minRange, $maxRange);

// Function to get and increment views for a given question ID
function updateQuestionViews($conn, $question_id, $randomNum) {
    // Sanitize the question ID to prevent SQL injection
    $question_id = mysqli_real_escape_string($conn, $question_id);
    
    // Start a transaction to ensure atomicity
    $conn->begin_transaction();
    
    try {
        // Fetch current views
        $sql_select = "SELECT views FROM question_data WHERE id = '$question_id'";
        $result = $conn->query($sql_select);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $current_views = (int)$row['views']; // Ensure it's an integer
            
            // Increment views by the random number
            $new_views = $current_views + $randomNum;
            
            // Update the views in the database
            $sql_update = "UPDATE question_data SET views = $new_views WHERE id = '$question_id'";
            if ($conn->query($sql_update) === TRUE) {
                // Commit the transaction
                $conn->commit();
                return $new_views;
            } else {
                throw new Exception("Error updating views: " . $conn->error);
            }
        } else {
            throw new Exception("Question ID not found");
        }
    } catch (Exception $e) {
        // Rollback the transaction on error
        $conn->rollback();
        // Output the error and stop execution
        die("Error: " . $e->getMessage());
    }
}

// Example usage
$question_id = $newId_track; // Replace with the desired question ID (e.g., from your database)
$new_views = updateQuestionViews($conn, $question_id, $randomNum);

if ($new_views !== false) {
    echo "Current Views: $new_views";
}

// Close the connection
$conn->close();
?>