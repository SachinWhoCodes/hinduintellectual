<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Hindu Intellectual" />
  <meta name="language" content="hi-IN" />
  

  <!-- Title & Meta Description -->
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_desc; ?>" />

  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo $page_url; ?>" />

  <!-- Open Graph Meta Tags -->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php echo $page_title; ?>" />
  <meta property="og:description" content="<?php echo $page_desc; ?>" />
  <meta property="og:image" content="https://www.hinduintellectual.com/images/dharma-og.jpg" />
  <meta property="og:url" content="<?php echo $page_url; ?>" />
  <meta property="og:site_name" content="Hindu Intellectual" />
  <meta property="og:locale" content="en_IN" />
  <meta property="og:locale:alternate" content="hi_IN" />
  <meta property="article:published_time" content="<?php echo $published; ?>" />
  <meta property="article:modified_time" content="<?php echo $modified; ?>" />
  <meta property="article:author" content="Hindu Intellectual" />
  <meta property="article:section" content="Hindu Philosophy" />
  <meta property="article:tag" content="dharma, धर्म, hinduism, हिन्दू धर्म" />

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo $page_title; ?>" />
  <meta name="twitter:description" content="<?php echo $page_desc; ?>" />
  <meta name="twitter:image" content="https://www.hinduintellectual.com/images/dharma-og.jpg" />
  <meta name="twitter:site" content="@HinduIntellectual" />
  <meta name="twitter:creator" content="@HinduIntellectual" />

  <!-- Hreflang for Language/Region Targeting -->
  <link rel="alternate" hreflang="en-in" href="<?php echo $page_url; ?>" />
  <link rel="alternate" hreflang="x-default" href="<?php echo $page_url; ?>" />

  <!-- JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "<?php echo $page_url; ?>"
    },
    "headline": "<?php echo $page_title; ?>",
    "description": "<?php echo $page_desc; ?>",
    "author": {
      "@type": "Person",
      "name": "Hindu Intellectual"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Hindu Intellectual",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.hinduintellectual.com/logo.png"
      }
    },
    "datePublished": "<?php echo $published; ?>",
    "dateModified": "<?php echo $modified; ?>",
    "inLanguage": "hi-IN"
  }
  </script>
  
    <?php include("../includes/gtag_head.php") ?>

    <!-- font css -->
     <link rel="stylesheet" href="../assets/css/fonts.css">

    <!-- main css -->
     <link rel="stylesheet" href="../assets/css/style.css">
     <link rel="stylesheet" href="../assets/css/question.css">

    <!-- laila font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="icon" href="/favicon.ico" type="image/x-icon">