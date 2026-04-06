<?php
// تحديد الخدمة المطلوبة
$service = isset($_GET['service']) ? $_GET['service'] : 'web';

// عنوان الصفحة حسب الخدمة
if ($service == 'web') {
    $pageTitle = 'تطوير المواقع - المارد الخاص';
} elseif ($service == 'windows') {
    $pageTitle = 'تطبيقات ويندوز - المارد الخاص';
} else {
    $pageTitle = 'تفاصيل الخدمة - المارد الخاص';
}

include_once "init.php";
?>

<section class="service-details">
    <div class="container">
        <?php if ($service == 'web'): ?>
        <!-- قسم تطوير المواقع -->
        <div class="service-header">
            <div class="service-header-bg">
                <div class="particles-container"></div>
                <div class="floating-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                    <div class="shape shape-4"></div>
                </div>
            </div>
            <div class="service-header-content">
                <span class="service-badge animate__animated animate__fadeInUp">
                    <i class="fas fa-code"></i> خدماتنا
                </span>
                <h1 class="service-title animate__animated animate__fadeInUp">
                    تطوير <span class="highlight">المواقع الإلكترونية</span>
                </h1>
                <div class="title-decoration">
                    <span></span>
                    <i class="fas fa-globe"></i>
                    <span></span>
                </div>
                <p class="service-description animate__animated animate__fadeInUp">
                    نقدم حلول متكاملة تصميم وتطوير المواقع إلكترونية الاحترافية تعكس هوية علامتك التجارية
                </p>
                <div class="service-stats animate__animated animate__fadeInUp">
                    <div class="stat">
                        <span class="stat-number">+42</span>
                        <span class="stat-label">موقع تم تصميمها</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">+42</span>
                        <span class="stat-label">عميل سعيد</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">رضا العملاء</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- مشاريعنا السابقة -->
        <div class="projects-section">
            <h2 class="section-title">بعض مشاريعنا <span class="highlight">السابقة</span></h2>
            <div class="projects-grid">
                <!-- المشروع 1: SMART OCR -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/smart-ocr.webp" alt="SMART OCR">
                    </div>
                    <div class="project-info">
                        <h3>SMART OCR</h3>
                        <p>خدمة استخراج النصوص من الصور وملفات PDF بجودة عالية، مع دعم اللغة العربية والعديد من اللغات
                            الأخرى.</p>
                        <div class="project-tech">
                            <span>OCR</span>
                            <span>AI</span>
                            <span>Python</span>
                            <span>JavaScript</span>
                        </div>
                        <a href="http://smart-ocr.com" target="_blank" class="project-link">
                            زيارة الموقع <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- المشروع 2: Lightspeed YE -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/lightspeed.webp" alt="Lightspeed YE">
                    </div>
                    <div class="project-info">
                        <h3>Lightspeed YE</h3>
                        <p>شركة متخصصة في خدمات البناء والتشييد وأنظمة الأمن والطاقة، تقدم حلول متكاملة منذ عام 2010.
                        </p>
                        <div class="project-tech">
                            <span>Corporate</span>
                            <span>Construction</span>
                            <span>Security</span>
                        </div>
                        <a href="https://lightspeed-ye.com" target="_blank" class="project-link">
                            زيارة الموقع <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- المشروع 3: Together Socotra -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/together-tosocotra.webp" alt="Together Socotra">
                    </div>
                    <div class="project-info">
                        <h3>معاً إلى سقطرى</h3>
                        <p>شركة سفريات وسياحية متخصصة في تنظيم رحلات إلى جزيرة سقطرى، تقدم تجارب سفر فريدة ومغامرات لا
                            تنسى.</p>
                        <div class="project-tech">
                            <span>Travel</span>
                            <span>Tourism</span>
                            <span>Booking</span>
                        </div>
                        <a href="https://together-tosocotra.com" target="_blank" class="project-link">
                            زيارة الموقع <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>

                <!-- المشروع 4: Solutions FOOB -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/solutions-foob.webp" alt="Solutions FOOB">
                    </div>
                    <div class="project-info">
                        <h3>شركة حلول</h3>
                        <p>شركة خدمات متكاملة في اليمن، تقدم حلول مبتكرة في التسويق الإلكتروني، السفر، التصميم الداخلي،
                            والسمارت هوم.</p>
                        <div class="project-tech">
                            <span>Marketing</span>
                            <span>Smart Home</span>
                            <span>E-commerce</span>
                        </div>
                        <a href="https://solutions-foob.com" target="_blank" class="project-link">
                            زيارة الموقع <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
                 <!-- المشروع 4: ساعات mywatch -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/mywatch_header_only.webp" alt="ساعات mywatch - متجر ساعات فاخرة">
                    </div>
                    <div class="project-info">
                        <h3>متجر ساعات mywatch</h3>
                        <p>متجر إلكتروني متخصص في بيع الساعات الفاخرة، يقدم تشكيلة مميزة من أرقى الماركات العالمية مثل
                            رولكس، أوميغا، كارتييه وبريتلينغ مع خدمة شحن مجاني وضمان شامل.</p>
                        <div class="project-tech">
                            <span>متجر إلكتروني</span>
                            <span>ساعات فاخرة</span>
                            <span>تجارة إلكترونية</span>

                        </div>
                        <a href="http://www.mywatch.free.nf/?i=1" target="_blank" class="project-link">
                            زيارة الموقع <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php elseif ($service == 'windows'): ?>
        <!-- قسم تطبيقات ويندوز -->
        <div class="service-header">
            <div class="service-header-bg">
                <div class="particles-container"></div>
                <div class="floating-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                    <div class="shape shape-4"></div>
                </div>
            </div>
            <div class="service-header-content">
                <span class="service-badge animate__animated animate__fadeInUp">
                    <i class="fas fa-code"></i> خدماتنا
                </span>
                <h1 class="service-title animate__animated animate__fadeInUp">
                    تطبيقات <span class="highlight">ويندوز</span>
                </h1>
                <div class="title-decoration">
                    <span></span>
                    <i class="fas fa-globe"></i>
                    <span></span>
                </div>
                <p class="service-description animate__animated animate__fadeInUp">
                    نصمم ونطور تطبيقات ويندوز احترافية تلبي احتياجات عملك الخاصة
                </p>
                <div class="service-stats animate__animated animate__fadeInUp">
                    <div class="stat">
                        <span class="stat-number">+10</span>
                        <span class="stat-label">موقع تم تطويره</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">+10</span>
                        <span class="stat-label">عميل سعيد</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">%100</span>
                        <span class="stat-label">رضا العملاء</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="windows-services">
            <div class="section-header">
                <span class="section-tag animate__animated animate__fadeInUp font_o">
                    <i class="fas fa-window-maximize"></i> أنظمة سطح المكتب
                </span>
                <h2 class="section-title animate__animated animate__fadeInUp">
                    حلول <span class="highlight">متكاملة</span> لسطح المكتب
                </h2>
                <p class="section-subtitle animate__animated animate__fadeInUp">
                    أنظمة احترافية تلبي احتياجات مختلف القطاعات
                </p>
            </div>

            <div class="windows-grid">
                <!-- نظام الصيدلية -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.1s">
                    <div class="windows-icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <h3>نظام إدارة الصيدلية</h3>
                    <p>إدارة كاملة للصيدليات: إدارة الأدوية، تواريخ الصلاحية، الموردين، الفواتير، وتقارير المبيعات</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> إدارة الأدوية والمخزون</li>
                        <li><i class="fas fa-check-circle"></i> تنبيهات انتهاء الصلاحية</li>
                        <li><i class="fas fa-check-circle"></i> فواتير المبيعات والشراء</li>
                        <li><i class="fas fa-check-circle"></i> تقارير أرباح وخسائر</li>
                    </ul>
                </div>

                <!-- نظام التاجر (بيع بالجملة) -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.2s">
                    <div class="windows-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>نظام إدارة التاجر</h3>
                    <p>نظام متكامل لإدارة أعمال تجار الجملة: إدارة العملاء، الموردين، الفواتير، والمستحقات</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> إدارة العملاء والموردين</li>
                        <li><i class="fas fa-check-circle"></i> فواتير البيع بالجملة</li>
                        <li><i class="fas fa-check-circle"></i> نظام الأقساط والمستحقات</li>
                        <li><i class="fas fa-check-circle"></i> تقارير المبيعات اليومية</li>
                    </ul>
                </div>

                <!-- نظام معرض السيارات -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.3s">
                    <div class="windows-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>نظام إدارة معرض السيارات</h3>
                    <p>نظام شامل لإدارة معارض السيارات: إدارة المركبات، العملاء، المبيعات، والصيانة</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> إدارة السيارات المعروضة</li>
                        <li><i class="fas fa-check-circle"></i> عقود البيع والشراء</li>
                        <li><i class="fas fa-check-circle"></i> نظام التقسيط والتمويل</li>
                        <li><i class="fas fa-check-circle"></i> سجل الصيانة والخدمات</li>
                    </ul>
                </div>

                <!-- نظام الواردات والصادرات -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.4s">
                    <div class="windows-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>نظام إدارة الواردات والصادرات</h3>
                    <p>نظام متخصص لإدارة عمليات الاستيراد والتصدير، الشحنات، الجمارك، والعملات</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> تتبع الشحنات والواردات</li>
                        <li><i class="fas fa-check-circle"></i> إدارة المستندات الجمركية</li>
                        <li><i class="fas fa-check-circle"></i> حسابات العملات والتحويلات</li>
                        <li><i class="fas fa-check-circle"></i> تقارير الموردين والعملاء</li>
                    </ul>
                </div>

                <!-- نظام السكرتارية -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.5s">
                    <div class="windows-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>نظام إدارة السكرتارية</h3>
                    <p>نظام متكامل لإدارة المكاتب: إدارة المواعيد، المراسلات، المهام، والملفات</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> إدارة المواعيد والاجتماعات</li>
                        <li><i class="fas fa-check-circle"></i> أرشفة المراسلات والملفات</li>
                        <li><i class="fas fa-check-circle"></i> متابعة المهام والإنجاز</li>
                        <li><i class="fas fa-check-circle"></i> تقارير الأداء اليومية</li>
                    </ul>
                </div>

                <!-- برامج المحاسبة -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.6s">
                    <div class="windows-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>برامج المحاسبة</h3>
                    <p>برامج محاسبية متكاملة لإدارة الحسابات، الفواتير، والمخزون مع تقارير دقيقة</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> دفتر الأستاذ العام</li>
                        <li><i class="fas fa-check-circle"></i> حسابات العملاء والموردين</li>
                        <li><i class="fas fa-check-circle"></i> قيود اليومية والميزانية</li>
                        <li><i class="fas fa-check-circle"></i> تقارير مالية متكاملة</li>
                    </ul>
                </div>

                <!-- نظام إدارة الموارد البشرية -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.7s">
                    <div class="windows-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>نظام إدارة الموارد البشرية</h3>
                    <p>إدارة الموظفين، الحضور والانصراف، الرواتب، والإجازات بشكل احترافي</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> ملفات الموظفين</li>
                        <li><i class="fas fa-check-circle"></i> نظام الحضور والانصراف</li>
                        <li><i class="fas fa-check-circle"></i> إدارة الرواتب والمكافآت</li>
                        <li><i class="fas fa-check-circle"></i> تقارير الإجازات والغياب</li>
                    </ul>
                </div>

                <!-- أنظمة نقاط البيع (POS) -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.8s">
                    <div class="windows-icon">
                        <i class="fas fa-cart-shopping"></i>
                    </div>
                    <h3>أنظمة نقاط البيع (POS)</h3>
                    <p>أنظمة متكاملة لإدارة المبيعات والمخزون في المحلات التجارية</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> واجهة بيع سريعة</li>
                        <li><i class="fas fa-check-circle"></i> إدارة المخزون</li>
                        <li><i class="fas fa-check-circle"></i> تقارير المبيعات اليومية</li>
                        <li><i class="fas fa-check-circle"></i> نظام العملاء والخصومات</li>
                    </ul>
                </div>

                <!-- برامج تحليل البيانات -->
                <div class="windows-card animate__animated animate__fadeInUp" data-delay="0.9s">
                    <div class="windows-icon">
                        <i class="fas fa-chart-simple"></i>
                    </div>
                    <h3>برامج تحليل البيانات</h3>
                    <p>تطبيقات متخصصة في تحليل البيانات وإعداد التقارير الإحصائية المتقدمة</p>
                    <ul class="windows-features">
                        <li><i class="fas fa-check-circle"></i> تحليل بيانات المبيعات</li>
                        <li><i class="fas fa-check-circle"></i> رسوم بيانية متقدمة</li>
                        <li><i class="fas fa-check-circle"></i> تقارير ذكاء الأعمال</li>
                        <li><i class="fas fa-check-circle"></i> تنبؤات وتحليلات</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- زر العودة -->
        <div class="back-button">
            <a href="index.php" class="btn btn-outline font_black">
                <i class="fas fa-arrow-right"></i> العودة للخدمات
            </a>
        </div>
    </div>
</section>

<?php include_once $tpl . 'footer.php'; ?>
