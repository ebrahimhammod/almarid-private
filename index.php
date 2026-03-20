<?php
$pageTitle = 'المارد الخاص - حلول برمجية واستشارات محاسبية احترافية';
include_once "init.php";
?>

<!-- Hero Section مع تأثيرات متحركة -->
<section class="hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text animate__animated animate__fadeInUp">
                <span class="hero-badge">مرحباً بك في</span>
                <h1 class="hero-title">
                    المارد<span class="highlight"> الخاص</span>
                </h1>
                <p class="hero-subtitle">حلول برمجية واستشارات محاسبية بمعايير عالمية</p>
                <p class="hero-description">
                    نقدم خدمات متكاملة في تطوير المواقع الإلكترونية، تصميم الشعارات،
                    تطبيقات ويندوز، والاستشارات المحاسبية والقانونية بأعلى جودة
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo BASE_URL; ?>services" class="btn btn-primary">
                        <i class="fas fa-rocket"></i> استكشف خدماتنا
                    </a>
                    <a href="<?php echo BASE_URL; ?>contact" class="btn btn-outline font_black">
                        <i class="fas fa-headset"></i> تواصل معنا
                    </a>
                </div>
            </div>
            <div class="hero-image animate__animated animate__fadeInRight">
                <div class="floating-shape"></div>
                <div class="floating-shape-2"></div>
                <img src="<?php echo BASE_URL; ?>images/logo-512.png" alt="المارد الخاص" class="hero-logo"
                    draggable="false">
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
    <?php include_once 'services.php'; ?>
</section>

<?php include_once 'about.php'; ?>

<!-- Contact Section محسّن -->
<section class="contact" id="contact">
    <div class="container">
        <div class="section-header">
            <span class="section-tag animate__animated animate__fadeInUp font_o">تواصل معنا</span>
            <h2 class="section-title">كن على <span class="highlight">تواصل</span> دائم معنا</h2>
            <p class="section-subtitle">نحن هنا للرد على استفساراتكم على مدار الساعة</p>
        </div>
        <div class="contact-wrapper">
            <div class="contact-info">
                <div class="info-card animate__animated animate__fadeInUp" data-delay="0.1s">
                    <div class="info-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="info-content">
                        <h4>واتساب</h4>
                        <a href="https://wa.me/967775888836" target="_blank">+967 775 888 836</a>
                    </div>
                </div>
                <div class="info-card animate__animated animate__fadeInUp" data-delay="0.2s">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-content">
                        <h4>اتصل بنا</h4>
                        <a href="tel:00967774520026">+967 774 520 026</a>
                    </div>
                </div>
                <div class="info-card animate__animated animate__fadeInUp" data-delay="0.3s">
                    <div class="info-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="info-content">
                        <h4>قسم المحاسبين</h4>
                        <a href="tel:00967770555688">+967 770 555 688</a>
                    </div>
                </div>
                <div class="info-card animate__animated animate__fadeInUp" data-delay="0.4s">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4>البريد الإلكتروني</h4>
                        <a href="mailto:info@almarid.com">info@almarid.com</a>
                    </div>
                </div>
                <div class="info-card animate__animated animate__fadeInUp" data-delay="0.5s">
                    <div class="info-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="info-content">
                        <h4>مناطق التواجد</h4>
                        <p>السعودية | سلطنة عمان | أمريكا | بريطانيا</p>
                    </div>
                </div>
            </div>
            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <input type="text" id="fullName" placeholder="الاسم الكامل" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group">
                    <input type="email" id="email" placeholder="البريد الإلكتروني" required>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" placeholder="رقم الهاتف (اختياري)">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="form-group">
                    <select id="subject" required>
                        <option value="">اختر الموضوع</option>
                        <option value="استفسار عن خدمة">📞 استفسار عن خدمة</option>
                        <option value="طلب عرض سعر">💰 طلب عرض سعر</option>
                        <option value="تصميم موقع">🌐 تصميم موقع إلكتروني</option>
                        <option value="تصميم نظام سطح المكتب">🖥️ تصميم نظام سطح المكتب</option>
                        <option value="استشارة محاسبية">📊 استشارة محاسبية</option>
                        <option value="طلب تصميم شعار">🎨 تصميم شعار وهوية بصرية</option>
                        <option value="تطوير موقع">⚡ تطوير وتحديث موقع</option>
                        <option value="شكوى أو اقتراح">📝 شكوى أو اقتراح</option>
                        <option value="دعم فني">🛠️ دعم فني وصيانة</option>
                        <option value="طلب وظيفة">👔 طلب وظيفة أو تعاون</option>
                    </select>
                    <i class="fas fa-tag"></i>
                </div>
                <div class="form-group">
                    <textarea id="message" placeholder="رسالتك" rows="5" required></textarea>
                    <i class="fas fa-pencil-alt"></i>
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="submitBtn">
                    <i class="fab fa-whatsapp"></i> إرسال عبر واتساب
                </button>
            </form>
        </div>
    </div>
</section>

<?php include_once $tpl . 'footer.php'; ?>