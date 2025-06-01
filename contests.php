<?php
// Database connection credentials
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "hi";



// Database connection
$host = "localhost";
$username = "u683255285_hinduwhocodes";
$password = "WhatToDo@9";
$database = "u683255285_hindu_int";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Set timezone for accurate time
date_default_timezone_set("Asia/Kolkata"); // Indian Standard Time (IST)
// Get the current date
$currentDate = new DateTime();
$currentDay = (int)$currentDate->format('d');
$currentMonth = (int)$currentDate->format('m');
$currentYear = (int)$currentDate->format('Y');

// Helper function to check if a contest exists for a specific date
function contestExists($pdo, $contestDate) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM contest_data WHERE date = :date");
    $stmt->execute(['date' => $contestDate]);
    return $stmt->fetchColumn() > 0;
}

// Helper function to create a contest
function createContest($pdo, $contestDate, $id) {
    // Generate random data for the contest
    $totalMembers = rand(30, 69);
    $maxMembers = 180;
    $questions = [];

    // Retrieve 2 random questions from the question_data table
    $stmt = $pdo->query("SELECT id FROM question_data ORDER BY RAND() LIMIT 3");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $questions[] = $row['id'];
    }

    // Convert questions array to JSON
    $questionsJson = json_encode($questions);

    // Insert the contest into the database
    $stmt = $pdo->prepare("
        INSERT INTO contest_data 
        (contest_name, date, questions, total_member, max_members, reward_one, reward_two, reward_three) 
        VALUES (:contest_name, :date, :questions, :total_member, :max_members, :reward_one, :reward_two, :reward_three)
    ");
    $stmt->execute([
        'contest_name' => "Hindu Intellectual Contest #$id",
        'date' => $contestDate,
        'questions' => $questionsJson,
        'total_member' => $totalMembers,
        'max_members' => $maxMembers,
        'reward_one' => "#1 Name on Main Page",
        'reward_two' => "#2 Name on Main Page",
        'reward_three' => "#3 Name on Main Page"
    ]);
}

// Determine next contest dates
$contest15 = (new DateTime())->setDate($currentYear, $currentMonth, 15)->format('Y-m-d');
$contest25 = (new DateTime())->setDate($currentYear, $currentMonth, 25)->format('Y-m-d');
$nextMonth15 = (new DateTime())->setDate($currentYear, $currentMonth + 1, 15)->format('Y-m-d');

// Check the current date and create contests accordingly
if ($currentDay < 15) {
    // Check for the 15th of the current month
    if (!contestExists($pdo, $contest15)) {
        $id = $pdo->query("SELECT COALESCE(MAX(id), 0) + 1 FROM contest_data")->fetchColumn();
        createContest($pdo, $contest15, $id);
    }

    // Check for the 25th of the current month
    if (!contestExists($pdo, $contest25)) {
        $id = $pdo->query("SELECT COALESCE(MAX(id), 0) + 1 FROM contest_data")->fetchColumn();
        createContest($pdo, $contest25, $id);
    }
} else {
    // Check for the 25th of the current month
    if (!contestExists($pdo, $contest25)) {
        $id = $pdo->query("SELECT COALESCE(MAX(id), 0) + 1 FROM contest_data")->fetchColumn();
        createContest($pdo, $contest25, $id);
    }

    // Check for the 15th of the next month
    if (!contestExists($pdo, $nextMonth15)) {
        $id = $pdo->query("SELECT COALESCE(MAX(id), 0) + 1 FROM contest_data")->fetchColumn();
        createContest($pdo, $nextMonth15, $id);
    }
}

// echo "Contest checks and updates completed successfully.";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $pageTitle = "Hindu Dharma Contests | Online Quiz, Competitions & Knowledge Tests";
        $pageDescription = "Participate in online contests related to Sanatan Dharma, Ramayan, Mahabharat, and Hindu festivals. Test your knowledge and win rewards!";
        $pageUrl = "https://www.hinduintellectual.com/contests.php";
        $pageImage = "https://www.hinduintellectual.com/assets/home_page_images/temple.png";
        
        
        
        include("includes/head.php");
    ?>
    
    <link rel="stylesheet" href="./assets/css/contests.css">

</head>
<body>
    <?php include 'includes/gtag_body.php' ?>
    
    <?php include 'includes/header_top_common.php' ?>
    
   <?php include 'includes/header.php' ?>

    <?php include 'includes/story.php' ?>


    <div class="contest_box">
    <h1 class="laila-bold up_heading">Upcoming Contests</h1>
        <div class="contest_box_space">
            
        
        <?php
// Database connection
// $host = "localhost";
// $username = "u683255285_hinduwhocodes";
// $password = "WhatToDo@9";
// $database = "u683255285_hindu_int";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Set timezone to Indian Standard Time
date_default_timezone_set('Asia/Kolkata');

// Get the current date in IST
$currentDate = date('Y-m-d');

// Query to retrieve entries with dates greater than or equal to the current date
$query = "SELECT * FROM contest_data WHERE date >= :currentDate ORDER BY date ASC";

try {
    $stmt = $pdo->prepare($query);
    $stmt->execute(['currentDate' => $currentDate]);

    // Fetch the results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($results)) {
        foreach ($results as $row) {
            
            echo '<div class="contest_card">
                <div class="contest_heading_top">
                    <h1 class="laila-medium">'.$row['contest_name'].'</h1>
                    <p class="laila-regular">'.date('M d, Y', strtotime($row['date'])).' | First Slot: 7AM-12PM | Second Slot: 1PM-11PM</p>
                </div>
                <div class="contest_about">
                    <p class="laila-regular">हमारे प्रतियोगिताओं में भाग लें और तर्क व ज्ञान के माध्यम से सनातन धर्म की गहराई को जानें। अपने विचार प्रस्तुत करें, आकर्षक पुरस्कार जीतें, और एक प्रबुद्ध हिंदू समाज के निर्माण में योगदान दें!</p>
                    <p class="laila-regular">Join our contests to deepen your understanding of Sanatana Dharma through logic and intellect. Showcase your insights, win exciting rewards, and help build a more enlightened Hindu community!</p>
                </div>
                <div class="winnig_details">
                    <p class="laila-medium">Top 3 participants will be rewarded;-<br><br>
                    First Prize --> '.$row['reward_one'].'.<br>
                    Second Prize --> '.$row['reward_two'].'.<br>
                    Third prizes --> '.$row['reward_three'].'.</p>
                </div>
                <div class="registration_details">
                    <div class="contest_last_date">
                        <p class="laila-medium">Last Date To Register:</p>
                        <p class="laila-regular">'.date('M d, Y', strtotime($row['date'])).'</p>
                    </div>
                    <div class="contest_total_entry">
                        <p class="laila-medium">Total Registrations:</p>
                        <p class="laila-regular">'.$row['total_member'].'/'.$row['max_members'].'</p>
                    </div>
                </div>
                ';
                
            echo '<!--share btn-->
                <div class="share_btn_div">
                    <button onclick="shareOnSocial("facebook")"><img src="./assets/images/facebook.png"></button>
                    <button onclick="shareOnSocial("twitter")"><img src="./assets/images/twitter.png"></button>
                    <button onclick="shareOnSocial("linkedin")"><img src="./assets/images/linkedin.png"></button>
                    <button onclick="shareOnSocial("whatsapp")"><img src="./assets/images/whatsapp.png"></button>
                    <button id="shareBtn"><img src="./assets/images/share.png"></button>
                </div>
     <!--share btn ends-->';
            
            if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_name'])){
                echo '<a class="laila-medium regi_btn_contest" href="https://hinduintellectual.com/contests/pariksha.php?id='.$row['id'].'">Quick Enter The HI Contest</a>';
            } else{
                echo '<a class="laila-medium regi_btn_contest" href="https://hinduintellectual.com/login.php?from=contests.php">Login to Enter</a>';
            }
            
            
            
            echo '</div>';
          
        }
        

    } else {
        echo "<p>No upcoming contests found.</p>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

        
        
        <!--<div class="contest_card">-->
        <!--        <div class="contest_heading_top">-->
        <!--            <h1 class="laila-medium">Sunderkand Proficiency Competition</h1>-->
        <!--            <p class="laila-regular">Jan 25, 2025</p>-->
        <!--        </div>-->
        <!--        <div class="contest_about">-->
        <!--            <p class="laila-regular">सुंदरकांड की दिव्य दुनिया में कदम रखें! यह प्रतियोगिता आपके ज्ञान को प्रदर्शित करने, आध्यात्मिक ज्ञान बढ़ाने और हमारी समृद्ध सांस्कृतिक धरोहर से जुड़ने का अवसर है। रामचरितमानस की गहराई को समझें और रोमांचक पुरस्कार जीतें। इस ज्ञानवर्धक और उत्सवपूर्ण यात्रा का हिस्सा बनने के लिए आज ही शामिल हों!</p>-->
        <!--            <p class="laila-regular">Step into the divine world of Sunderkand! This contest is your chance to showcase your knowledge, explore spiritual wisdom, and connect with our rich cultural heritage.</p>-->
        <!--        </div>-->
        <!--        <div class="winnig_details">-->
        <!--            <p class="laila-medium">Top 3 participants will get the Hardcopy of Shri Sunderkand delivered at their doorstep.</p>-->
        <!--        </div>-->
        <!--        <div class="registration_details">-->
        <!--            <div class="contest_last_date">-->
        <!--                <p class="laila-medium">Last Date To Register:</p>-->
        <!--                <p class="laila-regular">Jan 24, 2025</p>-->
        <!--            </div>-->
        <!--            <div class="contest_total_entry">-->
        <!--                <p class="laila-medium">Total Registrations:</p>-->
        <!--                <p class="laila-regular">Not Started</p>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <a class="laila-medium regi_btn_contest" href="#">Entry Starts From 15-01-2025</a>-->
        <!--    </div>-->


          

        </div>
    </div>
    

<div class="category-intro-outer-box">
    <section class="category-intro-desc">
      <h1 class="laila-bold">Join Hindu Dharma Contests – Quizzes, Shloka, and More</h1>
      <p class="laila-medium">Participate in engaging Hindu Dharma contests including quizzes, shloka recitation, shastra challenges, and knowledge-based competitions. Test and enhance your spiritual knowledge with exciting rewards and community recognition.</p>
    </section>
    
    <section class="faq-section" itemscope itemtype="https://schema.org/FAQPage">
      <h2 class="laila-bold">Frequently Asked Questions on Contests</h2>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">What are Hindu Dharma contests?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">They are online competitions testing knowledge on Hindu scriptures, culture, and traditions.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Who can participate in these contests?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Anyone with interest in Sanatan Dharma, regardless of age or background.</p>
        </div>
      </div>
    
      <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="laila-semi-bold" itemprop="name">Are there rewards for contest winners?</h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="laila-medium" itemprop="text">Yes, winners often receive certificates, prizes, and recognition on our platform.</p>
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