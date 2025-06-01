document.addEventListener("DOMContentLoaded", () => {
    const openNav = document.getElementById("openNav");
    const closeNav = document.getElementById("closeNav");
    const navbar = document.getElementById("navbar_updated");

    openNav.addEventListener("click", () => {
        navbar.classList.remove("hidden");
        navbar.classList.add("visible");
    });

    closeNav.addEventListener("click", () => {
        navbar.classList.remove("visible");
        navbar.classList.add("hidden");
    });
});


    function shareOnSocial(platform) {
        var url = encodeURIComponent(window.location.href);
        var text = encodeURIComponent(document.title);
    
        var shareUrls = {
            facebook: "https://www.facebook.com/sharer/sharer.php?u=" + url,
            twitter: "https://twitter.com/intent/tweet?url=" + url + "&text=" + text,
            linkedin: "https://www.linkedin.com/sharing/share-offsite/?url=" + url,
            whatsapp: "https://api.whatsapp.com/send?text=" + text + "%20" + url
        };
    
        window.open(shareUrls[platform], "_blank");
    }
    
    
    
    document.getElementById("shareBtn").addEventListener("click", function () {
        if (navigator.share) {
            navigator.share({
                title: document.title,
                text: "Check out this amazing content!",
                url: window.location.href
            })
            .then(() => console.log("Shared successfully!"))
            .catch((error) => console.log("Error sharing:", error));
        } else {
            alert("Web Share API not supported on this browser.");
        }
    });