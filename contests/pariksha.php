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



// Check if all required cookies are set
if (isset($_COOKIE['user_id'], $_COOKIE['user_name'], $_COOKIE['user_phone'])) {
    // Save cookie values into variables
    $userId = $_COOKIE['user_id'];
    $userName = $_COOKIE['user_name'];
    $userPhone = $_COOKIE['user_phone'];

} else {
    // Redirect to a new URL if any cookie is not set
    $redirectUrl = "https://hinduintellectual.com/login.php"; // Change to your desired URL
    echo "<script>
            alert('You are not logged in. Redirecting to login...');
            window.location.href = '$redirectUrl';
          </script>";
    exit;
}

$contest_id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariksha - Hindu Intellectual Contest</title>

    <!-- font css -->
     <link rel="stylesheet" href="../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/contests_pariksha.css">

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
            <a href="https://hinduintellectual.com/" class="laila-medium min_top_text">Home</a>
            <p>|</p>
            <a href="https://hinduintellectual.com/donate.php" class="laila-medium min_top_text">Donate</a>
        </div>
    </div>



<?php
// Database connection
$host = "localhost";
$username = "u683255285_hinduwhocodes";
$password = "WhatToDo@9";
$database = "u683255285_hindu_int";



$conn_sub = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn_sub->connect_error) {
    die("Connection failed: " . $conn_sub->connect_error);
}

// Set timezone for accurate time
date_default_timezone_set("Asia/Kolkata"); // Indian Standard Time (IST)
$current_datetime = date("Y-m-d H:i:s");

if ($userId && $contest_id) {
    // Prepare the SQL query
    $sql_check = "SELECT * FROM pariksha_submission WHERE user_id = ? AND contest_id = ?";

    // Prepare and bind
    if ($stmt = $conn_sub->prepare($sql_check)) {
        $stmt->bind_param("ii", $userId, $contest_id);

        // Execute query
        $stmt->execute();

        // Store the result
        $result = $stmt->get_result();

        // Check if the record exists
        if ($result->num_rows > 0) {
            echo '<div class="submission_confirmation">
                            <div class="submission_confirmation_heads">
                                <p>Your Answers have been submitted successfully</p>
                                <p>आपके उत्तर सफलतापूर्वक सबमिट कर दिए गए हैं</p>
                            </div>
                            <p>To check your result, go to My Account.</p>
                            <p>अपना रिजल्ट देखने के लिए My Account पर जाएं।</p>
                            <a href="https://hinduintellectual.com/account.php?id='.$userId.'">My Account</a>
                         </div>';
        } else {
            // start
            
            // Check if form data is submitted
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo'hi';
                 // Contest ID
                $q_one = $_POST['q_one'];          // Question 1 ID
                $a_one = $conn_sub->real_escape_string($_POST['a_one']); // Answer 1
                
                $q_two = $_POST['q_two'];          // Question 2 ID
                $a_two = $conn_sub->real_escape_string($_POST['a_two']); // Answer 2
            
                $q_three = $_POST['q_three'];      // Question 3 ID
                $a_three = $conn_sub->real_escape_string($_POST['a_three']); // Answer 3
            
                // Insert data into the table
                $sql = "INSERT INTO pariksha_submission 
                        (contest_id, user_id, q_one, a_one, q_two, a_two, q_three, a_three, date_time, result) 
                        VALUES 
                        ('$contest_id', '$userId', '$q_one', '$a_one', '$q_two', '$a_two', '$q_three', '$a_three', '$current_datetime', 0)";
            
                if ($conn_sub->query($sql) === TRUE) {
                    echo '<div class="submission_confirmation">
                            <div class="submission_confirmation_heads">
                                <p>Your Answers have been submitted successfully</p>
                                <p>आपके उत्तर सफलतापूर्वक सबमिट कर दिए गए हैं</p>
                            </div>
                            <p>To check your result, go to My Account.</p>
                            <p>अपना रिजल्ट देखने के लिए My Account पर जाएं।</p>
                            <a href="https://hinduintellectual.com/account.php?id='.$userId.'">My Account</a>
                         </div>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn_sub->error;
                }
            } else{
                // start
                        try {
                        $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    } catch (PDOException $e) {
                        die("Database connection failed: " . $e->getMessage());
                    }
                    
                    // Set timezone to Indian Standard Time
                    date_default_timezone_set('Asia/Kolkata');
                    
                    // Retrieve ID from URL
                    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
                    
                    if ($id > 0) {
                        try {
                            // Fetch the contest row for the given ID
                            $stmt = $pdo->prepare("SELECT * FROM contest_data WHERE id = :id");
                            $stmt->execute(['id' => $id]);
                            $contest = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                            if ($contest) {
                                // Get the current date and time
                                $currentDate = date('Y-m-d');
                                $currentTime = date('H:i');
                    
                                // Check if the current date matches the contest date
                                if ($contest['date'] === $currentDate) {
                                    // Check if the current time is within the specified time ranges
                                    $morningStart = "07:00";
                                    $morningEnd = "12:00";
                                    $eveningStart = "13:00";
                                    $eveningEnd = "23:00";
                    
                                    if (($currentTime >= $morningStart && $currentTime <= $morningEnd) ||
                                        ($currentTime >= $eveningStart && $currentTime <= $eveningEnd)) {
                                        
                                        echo '
                                        
                                        <div class="details_block">
                                            <div class="contest_name_details">
                                                <h1 class="laila-medium" >'.$contest["contest_name"].'</h1>
                                                <p class="laila-regular" >जय श्री राम</p>
                                            </div>
                                            <div class="details_block_right">
                                                <div class="mini_line"></div>
                                                <div class="contest_user_details">
                                                    <h1 class="laila-medium" >Name: हिन्दू '.$userName.'</h1>
                                                    <p class="laila-regular" >User ID: SITARAM'.$userId.'</p>
                                                </div>
                                                <div class="timer_block">
                                                    <h1 class="laila-medium">No Time Limit</h1>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        ';
                                        // id="timerDisplay"
                                        // <p class="laila-regular" >Time left</p>
                                        
                                        // Display contest details
                                        // echo "<h2>Contest Details</h2>";
                                        // echo "<table border='1'>
                                        //         <tr><th>ID</th><td>{$contest['id']}</td></tr>
                                        //         <tr><th>Contest Name</th><td>{$contest['contest_name']}</td></tr>
                                        //         <tr><th>Date</th><td>{$contest['date']}</td></tr>
                                        //         <tr><th>Total Members</th><td>{$contest['total_member']}</td></tr>
                                        //         <tr><th>Max Members</th><td>{$contest['max_members']}</td></tr>
                                        //         <tr><th>Reward One</th><td>{$contest['reward_one']}</td></tr>
                                        //         <tr><th>Reward Two</th><td>{$contest['reward_two']}</td></tr>
                                        //         <tr><th>Reward Three</th><td>{$contest['reward_three']}</td></tr>
                                        //       </table>";
                    
                                        // Decode the questions JSON field
                                        $questionIds = json_decode($contest['questions'], true);
                    
                                        if (!empty($questionIds) && is_array($questionIds)) {
                                            // Fetch questions from question_data table
                                            $placeholders = implode(',', array_fill(0, count($questionIds), '?'));
                                            $stmt = $pdo->prepare("SELECT question_text, id FROM question_data WHERE id IN ($placeholders)");
                                            $stmt->execute($questionIds);
                                            $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                                            // Display questions and answers
                                            if ($questions) {
                                                
                                                echo'
                                                
                                                <div class="pariksha_block">
                                                    <div class="pariksha_space">
                                                        <div class="instruction_panel">
                                                            <h2 class="laila-medium" >निर्देश</h2>
                                                            <ul class="set_list_inst">
                                                                <li><p>कुल 3 वर्णनात्मक प्रश्न दिए गए हैं। प्रत्येक प्रश्न का उत्तर लिखित रूप में देना है।</p></li>
                                                                <li><p>प्रत्येक प्रश्न को ध्यान से पढ़ें और विस्तार से उत्तर लिखें।</p></li>
                                                                <li><p>अगर आपका उत्तर हमारे पास उपलब्ध उत्तर से बेहतर है, तो इसे सनातन सर्च पैनल पर प्रकाशित किया जाएगा।</p></li>
                                                                <li><p>इसलिए उत्तर लिखते समय विचारशील और तार्किक भाषा का प्रयोग करें।</p></li>
                                                                <li><p>सभी उत्तर लिखने के बाद सबमिट बटन पर क्लिक करें।</p></li>
                                                                <li><p>उत्तर न देने की स्थिति में भी परीक्षा सबमिट करना अनिवार्य है ताकि आप हमारे उत्तर देख सकें।</p></li>
                                                                <li><p>यह आपकी प्रतिभा को प्रदर्शित करने और सनातन धर्म से जुड़े महत्वपूर्ण विषयों पर विचार साझा करने का अवसर है।</p></li>
                                                            </ul>
                                                        </div>
                                                
                                                        <div class="best_wishes">
                                                            <h1>शुभकामनाएं!</h1>
                                                        </div>
                                                
                                                        <form action="" id="timerForm" method="post" class="contest_form">
                                                
                                                ';
                                                
                                                echo '
                                                    
                                                    <div class="question_box_form_part">
                                                        <div class="question_text_contest">
                                                        <h1>प्रश्न: '.$questions[0]["question_text"].'</h1>
                                                        </div>
                                                        <div class="input_box_contest">
                                                            <input type="hidden" type="text" name="q_one" value="'.$questions[0]["id"].'">
                                                            <textarea name="a_one" id="" placeholder="'.$questions[0]["id"].' enter your answer"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    ';
                                                    
                                                    
                                                echo '<div class="question_box_form_part">
                                                        <div class="question_text_contest">
                                                        <h1>प्रश्न: '.$questions[1]["question_text"].'</h1>
                                                        </div>
                                                        <div class="input_box_contest">
                                                            <input type="hidden" type="text" name="q_two" value="'.$questions[1]["id"].'">
                                                            <textarea name="a_two" id="" placeholder="'.$questions[1]["id"].' enter your answer"></textarea>
                                                        </div>
                                                    </div>';
                                                    
                                                    
                                                echo '<div class="question_box_form_part">
                                                        <div class="question_text_contest">
                                                        <h1>प्रश्न: '.$questions[2]["question_text"].'</h1>
                                                        </div>
                                                        <div class="input_box_contest">
                                                            <input type="hidden" type="text" name="q_three" value="'.$questions[2]["id"].'">
                                                            <textarea name="a_three" id="" placeholder="'.$questions[2]["id"].' enter your answer"></textarea>
                                                        </div>
                                                    </div>';
                                                        
                                                // foreach ($questions as $q) {
                                                    
                                                //     echo '
                                                    
                                                //     <div class="question_box_form_part">
                                                //         <div class="question_text_contest">
                                                //             <h1>प्रश्न: '.$q['question_text'].'</h1>
                                                //         </div>
                                                //         <div class="input_box_contest">
                                                //             <textarea name="'.$q['id'].'" id="" placeholder="enter your answer"></textarea>
                                                //         </div>
                                                //     </div>
                                                    
                                                //     ';
                                                    
                                                    
                                                    
                                                // }
                                                echo '
                                                
                                                        <button class="submit_btn" type="submit">सबमिट</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                                ';
                                            } else {
                                                echo "<p>No questions found for this contest.</p>";
                                            }
                                        } else {
                                            echo "<p>No question IDs are associated with this contest.</p>";
                                        }
                                    } else {
                                        // echo "<p>The contest can only be accessed between 8-9 AM or 9-10 PM.</p>";
                                        echo '<div class="submission_confirmation">
                                                <div class="submission_confirmation_heads">
                                                    <p>The contest can only be accessed between 7 AM - 12 PM or 1 PM - 11 PM.</p>
                                                    <p>प्रतियोगिता में केवल सुबह 7 बजे से दोपहर 12 बजे या दोपहर 1 बजे से रात 11 बजे के बीच ही प्रवेश किया जा सकता है।</p>
                                                </div>
                                                <p>Refresh this page when current time is as per contest timing.</p>
                                                <p>प्रतियोगिता के समय के अनुसार समय आने पर इस पेज को रिफ्रेश करें</p>
                                                <a href="https://hinduintellectual.com/contests/pariksha.php?id='.$_GET["id"].'">Refresh</a>
                                             </div>';
                                    }
                                } else {
                                    // echo "<p>Today's date does not match the contest date.</p>";
                                    echo '<div class="submission_confirmation">
                                                <div class="submission_confirmation_heads">
                                                    <p>Current date does not match the contest date.</p>
                                                    <p>आज की तारीख प्रतियोगिता की तारीख से मेल नहीं खाती</p>
                                                </div>
                                                <p>Contest Date is '.$contest['date'].'</p>
                                                <p>प्रतियोगिता की तारीख है  '.$contest['date'].'</p>
                                                <a href="https://hinduintellectual.com/contests.php">Back To Contests</a>
                                             </div>';
                                }
                            } else {
                                echo "<p>No contest found with the given ID.</p>";
                                echo "<script>
                                alert('You are not logged in. Redirecting to login...');
                                window.location.href = 'https://hinduintellectual.com/contests.php';
                              </script>";
                            }
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                    } else {
                        echo "<p>Invalid ID provided in the URL.</p>";
                        echo "<script>
                                alert('You are not logged in. Redirecting to login...');
                                window.location.href = 'https://hinduintellectual.com/contests.php';
                              </script>";
                    }
                // end
            }
            // end
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error in SQL query.";
    }
} else {
    echo "<script>
            window.location.href = 'https://hinduintellectual.com/contests.php';
          </script>";
    exit;
}



// Close connection
$conn_sub->close();


?>



    
<!--<div class="details_block">-->
<!--    <div class="contest_name_details">-->
<!--        <h1 class="laila-medium" >Hindu Intellectual Contest #2</h1>-->
<!--        <p class="laila-regular" >Attempt ID: 424</p>-->
<!--    </div>-->
<!--    <div class="details_block_right">-->
<!--        <div class="mini_line"></div>-->
<!--        <div class="contest_user_details">-->
<!--            <h1 class="laila-medium" >Name: Sachin Verma</h1>-->
<!--            <p class="laila-regular" >User ID: SITARAM144</p>-->
<!--        </div>-->
<!--        <div class="timer_block">-->
<!--            <h1 class="laila-medium" id="timerDisplay">11:45</h1>-->
<!--            <p class="laila-regular" >Time left</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--<div class="pariksha_block">-->
<!--    <div class="pariksha_space">-->
<!--        <div class="instruction_panel">-->
<!--            <h2 class="laila-medium" >निर्देश</h2>-->
<!--            <ul class="set_list_inst">-->
<!--                <li><p>कुल 3 वर्णनात्मक प्रश्न दिए गए हैं। प्रत्येक प्रश्न का उत्तर लिखित रूप में देना है।</p></li>-->
<!--                <li><p>प्रत्येक प्रश्न को ध्यान से पढ़ें और विस्तार से उत्तर लिखें।</p></li>-->
<!--                <li><p>अगर आपका उत्तर हमारे पास उपलब्ध उत्तर से बेहतर है, तो इसे सनातन सर्च पैनल पर प्रकाशित किया जाएगा।</p></li>-->
<!--                <li><p>इसलिए उत्तर लिखते समय विचारशील और तार्किक भाषा का प्रयोग करें।</p></li>-->
<!--                <li><p>सभी उत्तर लिखने के बाद सबमिट बटन पर क्लिक करें।</p></li>-->
<!--                <li><p>उत्तर न देने की स्थिति में भी परीक्षा सबमिट करना अनिवार्य है ताकि आप हमारे उत्तर देख सकें।</p></li>-->
<!--                <li><p>यह आपकी प्रतिभा को प्रदर्शित करने और सनातन धर्म से जुड़े महत्वपूर्ण विषयों पर विचार साझा करने का अवसर है।</p></li>-->
<!--            </ul>-->
<!--        </div>-->

<!--        <div class="best_wishes">-->
<!--            <h1>शुभकामनाएं!</h1>-->
<!--        </div>-->

<!--        <form action="" id="timerForm" method="post" class="contest_form">-->
<!--        <div class="question_box_form_part">-->
<!--            <div class="question_text_contest">-->
<!--                <h1>प्रश्न: Lorem ipsum dolor sit amet.</h1>-->
<!--            </div>-->
<!--            <div class="input_box_contest">-->
<!--                <textarea name="" id="" placeholder="enter your answer"></textarea>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="question_box_form_part">-->
<!--            <div class="question_text_contest">-->
<!--                <h1>प्रश्न: Lorem ipsum dolor sit amet.</h1>-->
<!--            </div>-->
<!--            <div class="input_box_contest">-->
<!--                <textarea name="" id="" placeholder="enter your answer"></textarea>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="question_box_form_part">-->
<!--            <div class="question_text_contest">-->
<!--                <h1>प्रश्न: Lorem ipsum dolor sit amet.</h1>-->
<!--            </div>-->
<!--            <div class="input_box_contest">-->
<!--                <textarea name="" id="" placeholder="enter your answer"></textarea>-->
<!--            </div>-->
<!--        </div>-->


<!--        <button class="submit_btn" type="submit">सबमिट</button>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->

</body>

<script>
        // Function to set a cookie
        function setCookie(name, value, minutes) {
            const date = new Date();
            date.setTime(date.getTime() + (minutes * 60 * 1000)); // Convert minutes to milliseconds
            document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
        }

        // Function to get a cookie value by name
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
            return null;
        }

        // Timer functionality
        function startTimer(durationInSeconds) {
            const timerDisplay = document.getElementById('timerDisplay');
            let timeLeft = durationInSeconds;

            const interval = setInterval(() => {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;

                // Update the timer display
                timerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                if (timeLeft <= 0) {
                    clearInterval(interval);
                    // Auto-submit the form when time is up
                    document.getElementById('timerForm').submit();
                }

                timeLeft--;
            }, 1000);
        }

        // On page load, manage the cookie and start the timer
        document.addEventListener('DOMContentLoaded', () => {
            const cookieName = 'startTime';
            const currentTime = Math.floor(Date.now() / 1000); // Current time in seconds

            let startTime = getCookie(cookieName);
            if (!startTime) {
                // Set a new cookie if it doesn't exist
                setCookie(cookieName, currentTime, 60); // Expire in 60 minutes
                startTime = currentTime;
            }

            const elapsedTime = currentTime - startTime;
            const timeLeft = 3600 - elapsedTime; // 3600 seconds = 60 minutes

            if (timeLeft > 0) {
                startTimer(timeLeft);
            } else {
                // Time has already expired, auto-submit the form
                document.getElementById('timerForm').submit();
            }
        });
    </script>

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