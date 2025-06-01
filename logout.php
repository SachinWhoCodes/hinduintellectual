<?php
// Delete cookies by setting their expiration time in the past
setcookie("user_id", "", time() - 3600, "/", ".hinduintellectual.com", true, true);
setcookie("user_name", "", time() - 3600, "/", ".hinduintellectual.com", true, true);
setcookie("user_phone", "", time() - 3600, "/", ".hinduintellectual.com", true, true);
setcookie("user_joined", "", time() - 3600, "/", ".hinduintellectual.com", true, true);

// Optionally, print a confirmation message
echo "You have been logged out!";
echo '<script>window.location.href = "https://hinduintellectual.com";</script>';
?>