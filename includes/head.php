<?php
    $pageTitle = $pageTitle ?? "Hindu Intellectual: Ask Sanatan Dharma Queries, Explore 700+ Shastras, Bhajans & Contests";
    $pageDescription = $pageDescription ?? "Hindu Intellectual lets you ask and search Sanatan Dharma queries, explore a library of 700+ shastras, chalisha, bhajans, aartis, mantras, Ramcharitmanas insights, and participate in online contests.";
    $pageKeywords = $pageKeywords ?? "Sanatan Dharma Queries, Hindu Shastras, Ramcharitmanas, Bhajans, Mantras, Aartis, Chalisha, Hindu Library, Online Contests, Sanatan Knowledge";
    $pageUrl = $pageUrl ?? "https://www.hinduintellectual.com";
    $pageImage = $pageImage ?? "https://www.hinduintellectual.com/assets/main-feature.jpg";
?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M5KW6ZDB');</script>
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= $pageDescription ?>">
<meta name="keywords" content="<?= $pageKeywords ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $pageUrl ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= $pageTitle ?>">
<meta property="og:description" content="<?= $pageDescription ?>">
<meta property="og:image" content="<?= $pageImage ?>">
<meta property="og:url" content="<?= $pageUrl ?>">
<meta property="og:type" content="website">

<!-- Twitter Meta -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $pageTitle ?>">
<meta name="twitter:description" content="<?= $pageDescription ?>">
<meta name="twitter:image" content="<?= $pageImage ?>">

<title><?= $pageTitle ?></title>

<!-- CSS Includes -->
<link rel="stylesheet" href="/assets/css/fonts.css">
<link rel="stylesheet" href="/assets/css/style.css?id=3">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Adsense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6797678757851863" crossorigin="anonymous"></script>

<!-- Favicon -->
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<!-- Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "<?= $pageTitle ?>",
  "url": "<?= $pageUrl ?>",
  "description": "<?= $pageDescription ?>",
  "image": "<?= $pageImage ?>",
  "mainEntityOfPage": "<?= $pageUrl ?>",
  "author": {
    "@type": "Organization",
    "name": "HinduIntellectual"
  },
  "publisher": {
    "@type": "Organization",
    "name": "HinduIntellectual",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.hinduintellectual.com/assets/logo.png"
    }
  }
}
</script>
