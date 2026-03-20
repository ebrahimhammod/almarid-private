<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    
    <!-- SEO الأساسي -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'المارد الخاص - تصميم وتطوير المواقع الإلكترونية والحلول البرمجية'; ?></title>
    <meta name="description" content="المارد الخاص: خبراء في تصميم وتطوير المواقع الإلكترونية، الحلول البرمجية المتكاملة، الاستشارات المحاسبية الدقيقة، وتصاميم الشعارات والهوية البصرية. نقدم خدماتنا بمعايير عالمية.">    
    <meta name="keywords" content="المارد الخاص, تطوير مواقع, تصميم شعارات, استشارات محاسبية, تطبيقات ويندوز, برمجة, هوية بصرية, استشارات قانونية, نظام صيدلي, نظام محاسبة, اليمن, السعودية">
    <meta name="author" content="المارد الخاص">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="Arabic">
    
    <!-- Open Graph / Facebook / LinkedIn / Telegram / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . basename($_SERVER['PHP_SELF']); ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'المارد الخاص - تصميم وتطوير المواقع الإلكترونية والحلول البرمجية'; ?>">
    <meta property="og:description" content="المارد الخاص: خبراء في تصميم وتطوير المواقع الإلكترونية، الحلول البرمجية المتكاملة، الاستشارات المحاسبية الدقيقة، وتصاميم الشعارات والهوية البصرية. خدماتنا بمعايير عالمية.">
    <meta property="og:image" content="<?php echo SITE_URL; ?>images/icon-512x512.png">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:image:alt" content="شعار المارد الخاص - تصميم مواقع وحلول برمجية واستشارات محاسبية">
    <meta property="og:locale" content="ar_AR">
    <meta property="og:site_name" content="المارد الخاص">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo SITE_URL . basename($_SERVER['PHP_SELF']); ?>">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'المارد الخاص - تصميم وتطوير المواقع الإلكترونية والحلول البرمجية'; ?>">
    <meta name="twitter:description" content="المارد الخاص: خبراء في تصميم وتطوير المواقع الإلكترونية، الحلول البرمجية، الاستشارات المحاسبية، وتصاميم الشعارات.">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>images/icon-512x512.png">
    <meta name="twitter:image:alt" content="شعار المارد الخاص">
    
    <!-- Favicon متعدد الأحجام باستخدام الصور الموجودة -->
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo BASE_URL; ?>images/icon-512x512.png">
    <link rel="icon" type="image/png" sizes="128x128" href="<?php echo BASE_URL; ?>images/icon-128x128.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL; ?>images/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL; ?>images/icon-152x152.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo SITE_URL . basename($_SERVER['PHP_SELF']); ?>">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Main Style -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>lib/css/style.css">
    
    <!-- Schema.org markup for Google+ -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "المارد الخاص",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>images/icon-512x512.png",
        "description": "المارد الخاص: شركة رائدة في تصميم وتطوير المواقع الإلكترونية، الحلول البرمجية المتكاملة، الاستشارات المحاسبية الدقيقة، وتصاميم الشعارات والهوية البصرية.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "اليمن",
            "addressCountry": "YE"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+967775888836",
            "contactType": "customer service",
            "availableLanguage": "Arabic"
        },
        "sameAs": [
            "https://www.facebook.com/ebrahim.hmwd3",
            "https://www.instagram.com/almaridprivate",
            "https://wa.me/967775888836"
        ]
    }
    </script>
</head>
<body>
<body>
    <!-- Bubble Animation Background -->
    <div class="bubble-container">
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>
        <div class="bubble bubble-4"></div>
        <div class="bubble bubble-5"></div>
        <div class="bubble bubble-6"></div>
        <div class="bubble bubble-7"></div>
        <div class="bubble bubble-8"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo BASE_URL; ?>home">
                    <img src="<?php echo BASE_URL; ?>images/logo-512.png" alt="المارد الخاص" class="logo-img">
                    <span class="logo-text">المارد <span class="highlight">الخاص</span></span>
                </a>
            </div>
            
            <!-- Hamburger Menu Button -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navigation Menu -->
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="<?php echo BASE_URL; ?>home" class="nav-link active">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL; ?>home#services" class="nav-link">خدماتنا</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL; ?>home#about" class="nav-link">عن الشركة</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL; ?>home#contact" class="nav-link">تواصل معنا</a>
                </li>
            </ul>
        </div>
    </nav>