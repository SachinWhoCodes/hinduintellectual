<div class="post_footer">
    <div class="user_det">
        <p class="uttardata laila-medium">उत्तरदाता :-</p>
        <div class="profile_view">
            <img src="../assets/home_page_images/arti.png" alt="">
            <div class="profile_view_det">
                <p class="laila-medium"><?php echo $answerer_var; ?></p>
                <p class="pata_uttardata laila-light"><?php echo $ans_belongs_var; ?></p>
            </div>
        </div>
    </div>

    <div class="user_det">
        <p class="uttardata laila-medium">प्रश्नकर्ता :-</p>
        <div class="profile_view">
            <img src="../assets/home_page_images/arti.png" alt="">
            <div class="profile_view_det">
                <p class="laila-medium"><?php echo $user_asked_var; ?></p>
                <p class="pata_uttardata laila-light"><?php echo $user_from_var; ?></p>
            </div>
        </div>
    </div>
</div>
<div class="share_btn_div">
    <button onclick="shareOnSocial('facebook')"><img src=".././assets/images/facebook.png"></button>
    <button onclick="shareOnSocial('twitter')"><img src=".././assets/images/twitter.png"></button>
    <button onclick="shareOnSocial('linkedin')"><img src=".././assets/images/linkedin.png"></button>
    <button onclick="shareOnSocial('whatsapp')"><img src=".././assets/images/whatsapp.png"></button>
    <button id="shareBtn"><img src=".././assets/images/share.png"></button>
</div>