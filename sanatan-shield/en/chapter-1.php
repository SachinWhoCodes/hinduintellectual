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


$conn = new mysqli($host, $username, $password, $database);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// Check if the user_id cookie is set
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];

    // Fetch the shield_progress for the given user_id
    $sql = "SELECT shield_progress FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($shield_progress);
    $stmt->fetch();
    $stmt->close();

    // Check the value of shield_progress
    if ($shield_progress < 1) {
        echo '<script>window.location.href = "https://hinduintellectual.com/account.php?id='.$user_id.'";</script>';
    }
} else {
    echo '<script>window.location.href = "https://hinduintellectual.com/login.php";</script>';
}

$conn->close();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1 : Sanatan Shield</title>

    <!-- font css -->
     <link rel="stylesheet" href="../../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../../assets/css/style.css">
     <link rel="stylesheet" href="../../assets/css/lesson.css">

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
            <a href="donate.php" class="laila-medium min_top_text">Donate</a>
        </div>
    </div>

    <div class="top_img_banner">
        <img src="../../assets/images/lesson1.png" alt="">
    </div>


<?php

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user_id from POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];

    // Fetch current shield_progress
    $sql = "SELECT shield_progress FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($shield_progress);
    $stmt->fetch();
    $stmt->close();

    // If shield_progress is 1, increment it by 1
    if ($shield_progress == 1) {
        $shield_progress += 1;

        // Update shield_progress in the database
        $sql = "UPDATE users SET shield_progress = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $shield_progress, $user_id);

        if ($stmt->execute()) {
            echo "Shield progress updated successfully!";
        } else {
            echo "Error updating shield progress: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Shield progress is not 1.";
    }
} else {
    // echo "Invalid request.";
}

$conn->close();
?>

    

    <div class="lesson_content">
        <div class="lesson_content_space">
            <div class="language_bar">
                <a class="deactive_language laila-medium" href="https://hinduintellectual.com/sanatan-shield/chapter-1.php">हिंदी</a>
                <a class="active_language laila-medium">English</a>
            </div>
            <div class="lesson_title">
                <div class="title_mark"></div>
                <h1 class="laila-medium">Who is the founder of Sanatan Dharma? Who founded Sanatan Dharma?</h1>
            </div>
            <p class="laila-regular normal_text italic_text">
            Jai Shri Ram! Hindu <?php echo$_COOKIE["user_name"]; ?>. To comprehend and convey the eternal and infinite essence of Sanatan Dharma, let us present it in an even more spiritual, logical, and refined manner. The nature of Sanatan Dharma is distinct and vast compared to other religions and sects. While other religions and sects originated through the efforts of a founder, Sanatan Dharma has no founder. Its existence is intrinsically linked with the creation of the universe itself.
            </p>
            <p class="laila-regular normal_text">
            In other faiths, their founders were born, established their religions, guided their followers, and then departed from the world. However, the foundation of Sanatan Dharma does not rest upon any individual or a specific era. When our revered Shri Ram and Shri Krishna incarnated, Sanatan Dharma was already in existence. Their advent was for the re-establishment of Dharma and the welfare of humanity.
            </p>
            <p class="laila-regular normal_text">
            The roots of Sanatan Dharma lie in the very beginning of creation. When Brahmaji created the universe, he instituted principles of life and conduct, known as Dharma, to maintain balance and order. These principles were carried forward through Manu Maharaj and Mata Shatarupa. This Dharma is a collection of eternal rules meant for the welfare of humanity and the equilibrium of creation. Dharma signifies those eternal principles that uphold the universe.
            </p>
            <p class="laila-regular normal_text">
            The sages (rishis) and seers, through their penance and divine knowledge, understood and preserved these eternal principles. They simplified this divine knowledge (Brahma Jnana) into scriptures to suit humanity's needs. The sole purpose of these scriptures was the pursuit of truth and the welfare of humanity. Over time, the propagation of Dharma was carried out by sages, saints, and divine incarnations to guide humanity on the righteous path.
            </p>
            <p class="laila-regular normal_text">
            The sages (rishis) and seers, through their penance and divine knowledge, understood and preserved these eternal principles. They simplified this divine knowledge (Brahma Jnana) into scriptures to suit humanity's needs. The sole purpose of these scriptures was the pursuit of truth and the welfare of humanity. Over time, the propagation of Dharma was carried out by sages, saints, and divine incarnations to guide humanity on the righteous path.
            </p>
            <p class="laila-regular normal_text">
            When some individuals opposed these eternal principles or altered them according to their own beliefs, they established new sects and ideologies. However, the unchanging truth is that Sanatan Dharma has no founder. It is not bound by the thoughts of any single individual, nor is it confined to any era or boundaries. It is eternal, existing before creation and enduring until its end. The truth of Sanatan Dharma is that it is the path that connects humanity to the Supreme Being. It is not merely a collection of principles but the fundamental nature of existence. The knowledge, love, compassion, and message of coexistence embedded in it make it eternal. हिन्दू <?php echo $_COOKIE["user_name"]; ?> जी, Sanatan Dharma is not just a religion but the very foundation of life. Understanding it and walking its path leads to truth and bliss."Sanatan alone is the truth." Jai Shri Ram!
            </p>
            <p class="laila-regular normal_text">
            Sanatan Dharma is the foundation that has given the world invaluable gifts like yoga, meditation, Ayurveda, Vedanta, and non-violence. It is not just a part of history, but your legacy. Know it, understand it, and be proud that you are part of a religion that is not dependent on any boundary, time, or person.
            </p>
        </div>
    </div>

</div>


<?php
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user_id from POST request
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];

    // Fetch current shield_progress
    $sql = "SELECT shield_progress FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($shield_progress);
    $stmt->fetch();
    $stmt->close();

    // If shield_progress is 1, increment it by 1
    if ($shield_progress > 1) {
        echo'<div class="bottom_navigation">
                <a class="laila-regular" href="https://hinduintellectual.com/account.php?id='.$user_id.'">Back</a>
                <div class="mid_space"></div>
                <a href="https://hinduintellectual.com/sanatan-shield/en/chapter-2.php" class="laila-regular" >Next Chapter</a>
            </div>';
    } else {
        echo '<div class="bottom_navigation">
                <a class="laila-regular" href="https://hinduintellectual.com/account.php?id='.$user_id.'">Back</a>
                <div class="mid_space"></div>
                <form action="" class="next_btn_form" method="post" >
                    <button type="submit" class="laila-regular" >Unlock Next Chapter</button>
                </form>
            </div>';
    }
} else {
    echo "Invalid request 1.";
}

$conn->close();
?>



<!-- <div class="bottom_navigation">
    <a class="laila-regular" href="#">Back</a>
    <div class="mid_space"></div>
    <form action="" class="next_btn_form" method="post" >
        <button type="submit" class="laila-regular" >Unlock Next Chapter</button>
    </form>
</div> -->




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



// Set a timer to make the form visible after 2 minutes
        setTimeout(() => {
            const form = document.querySelector('.next_btn_form');
            if (form) {
                form.style.display = 'flex'; // Make the form visible
            }
        }, 120000); // 120,000 milliseconds = 2 minutes


</script>

</html>