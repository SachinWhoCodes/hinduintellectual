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
     <link rel="stylesheet" href="../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/lesson.css">

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
        <img src="../assets/images/lesson1.png" alt="">
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
                <a class="active_language laila-medium">हिंदी</a>
                <a class="deactive_language laila-medium" href="https://hinduintellectual.com/sanatan-shield/en/chapter-1.php">English</a>
            </div>
            <div class="lesson_title">
                <div class="title_mark"></div>
                <h1 class="laila-medium">सनातन धर्म  का संस्थापक कौन है? किसने बनाया सनातन धर्म?</h1>
            </div>
            <p class="laila-regular normal_text italic_text">
            जय श्री राम! हिन्दू <?php echo $_COOKIE["user_name"]; ?>, सनातन धर्म की अनादि और अनंत प्रकृति को समझने और समझाने के लिए इसे और भी आध्यात्मिक, तर्कपूर्ण, तथा सूक्ष्म भाषा में प्रस्तुत करते हैं। सनातन धर्म का स्वरूप अन्य पंथों और मजहबों से भिन्न और व्यापक है। जहाँ अन्य मतों और पंथों का आरंभ किसी संस्थापक के द्वारा हुआ, वहीं सनातन धर्म का आरंभ किसी व्यक्ति-विशेष द्वारा नहीं हुआ। इसका अस्तित्व स्वयं सृष्टि के साथ जुड़ा हुआ है।
            </p>
            <p class="laila-regular normal_text">
            अन्य मतों में उनके संस्थापक जन्म लेकर धर्म की स्थापना करते हैं और अपने अनुयायियों को मार्गदर्शन देकर संसार से विदा हो जाते हैं। परंतु सनातन धर्म का आधार न किसी संस्थापक पर है, न किसी काल-विशेष पर। जब हमारे प्रभु श्रीराम और श्रीकृष्ण ने अवतार लिया, तब भी सनातन धर्म विद्यमान था। उनका आगमन धर्म की पुनःस्थापना और मानवता के कल्याण हेतु हुआ। सनातन धर्म का मूल सृष्टि के प्रारंभ में निहित है। जब ब्रह्मा जी ने सृष्टि की रचना की, तब उन्होंने लोक-व्यवहार और धर्माचरण की नीतियों का प्रवर्तन किया। ये नीतियाँ मनु महाराज और माता शतरूपा के माध्यम से आगे बढ़ीं। यह धर्म मानव मात्र के कल्याण और सृष्टि के संतुलन हेतु शाश्वत नियमों का संग्रह है। धर्म का अर्थ है – वे शाश्वत सिद्धांत, जो सृष्टि को बनाए रखते हैं।
            </p>
            <p class="laila-regular normal_text">
            ऋषि-मुनियों ने अपने तप और ब्रह्मज्ञान से इन शाश्वत सिद्धांतों को जाना और उनका संरक्षण किया। उन्होंने ब्रह्मज्ञान को मानवता की आवश्यकता के अनुसार सरल रूप में शास्त्रों में संजोया। इन शास्त्रों का उद्देश्य केवल सत्य की खोज और मानव मात्र का कल्याण रहा। समय-समय पर धर्म का प्रचार-प्रसार ऋषियों, मुनियों और अवतारों द्वारा किया गया, ताकि मानव सही मार्ग पर चल सके।
            </p>
            <p class="laila-regular normal_text">
            जब कुछ व्यक्तियों ने इन शाश्वत सिद्धांतों का विरोध किया या उन्हें अपने विचारों के अनुसार परिवर्तित किया, तो उन्होंने नए पंथों और मतों की स्थापना की। परंतु यह सत्य अटल है कि सनातन धर्म का कोई संस्थापक नहीं है। यह धर्म न तो किसी एक व्यक्ति के विचारों से बंधा है, न किसी काल या सीमाओं से। यह तो अनादि है – सृष्टि से भी पहले विद्यमान और सृष्टि के अंत तक स्थिर रहने वाला। सनातन धर्म का सत्य यही है कि यह मानव मात्र को ब्रह्म से जोड़ने का मार्ग है। यह धर्म केवल सिद्धांतों का संग्रह नहीं, बल्कि सृष्टि का मूल स्वभाव है। इसमें निहित ज्ञान, प्रेम, करुणा और सह-अस्तित्व का संदेश ही इसे शाश्वत बनाता है। हिन्दू <?php echo $_COOKIE["user_name"]; ?> जी, सनातन धर्म केवल धर्म नहीं, बल्कि जीवन का आधार है। इसे समझना और इसके मार्ग पर चलना ही सत्य और आनंद की ओर अग्रसर होना है।"सनातन ही सत्य है।" जय श्री राम! 
            </p>
            <p class="laila-regular normal_text">
            सनातन धर्म वह आधार है जिसने दुनिया को योग, ध्यान, आयुर्वेद, वेदांत, और अहिंसा जैसे अमूल्य उपहार दिए हैं। यह केवल इतिहास का हिस्सा नहीं, बल्कि आपकी लिगेसी है। इसे जानिए, समझिए, और गर्व कीजिए कि आप ऐसे धर्म का हिस्सा हैं जो किसी सीमा, समय, या व्यक्ति पर निर्भर नहीं है।
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
                <a href="https://hinduintellectual.com/sanatan-shield/chapter-2.php" class="laila-regular" >Next Chapter</a>
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