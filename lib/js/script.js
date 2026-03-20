// ========================================
// التأثيرات والحركات
// ========================================

$(document).ready(function() {
    
    // شريط التنقل - تغيير الخلفية عند السكرول
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
    
    // القائمة المتنقلة (Hamburger Menu)
    $('#hamburger').click(function() {
        $(this).toggleClass('active');
        $('#navMenu').toggleClass('active');
    });
    
    // إغلاق القائمة عند النقر على رابط
    $('.nav-link').click(function() {
        $('#hamburger').removeClass('active');
        $('#navMenu').removeClass('active');
    });
    
    // ==================== التمرير السلس للروابط (المعدل) ==================== //
    $('a[href*="#"]').on('click', function(e) {
        var href = $(this).attr('href');
        
        // إذا كان الرابط يحتوي على index.php# (روابط الانتقال للصفحة الرئيسية)
        if (href.indexOf('index.php#') !== -1) {
            // نترك الرابط يعمل بشكل طبيعي (يذهب للصفحة الرئيسية)
            return;
        }
        
        // إذا كان الرابط يبدأ بـ # فقط (مثل #services, #about)
        if (href.indexOf('#') === 0 && href.length > 1) {
            e.preventDefault();
            var target = $(href);
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        }
    });
    
    // ظهور العناصر عند السكرول
    function checkVisibility() {
        $('.animate__animated').each(function() {
            var elementTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();
            
            if (elementTop < windowBottom - 100) {
                var delay = $(this).data('delay');
                if (delay) {
                    $(this).css('animation-delay', delay);
                }
                $(this).addClass('animate__fadeInUp');
            }
        });
    }
    
    // تشغيل فحص الظهور عند تحميل الصفحة وعند السكرول
    checkVisibility();
    $(window).scroll(checkVisibility);
    
    // إرسال النموذج
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        alert('تم إرسال رسالتك بنجاح! سنتواصل معك قريباً');
        this.reset();
    });
    
    // إضافة تأثير hover للبطاقات
    $('.service-card, .vm-card, .advantage-item, .testimonial-card').hover(
        function() {
            $(this).css('transform', 'translateY(-10px)');
        },
        function() {
            $(this).css('transform', 'translateY(0)');
        }
    );
    
    // تحميل الصفحة
    $(window).on('load', function() {
        $('.loader').fadeOut();
        $('body').css('overflow', 'auto');
    });
    
});

// ========================================
// تأثيرات إضافية للفقاعات
// ========================================

// إضافة فقاعات جديدة بشكل عشوائي
function addBubble() {
    var bubble = $('<div class="bubble"></div>');
    var size = Math.random() * 100 + 50;
    var position = Math.random() * 100;
    var duration = Math.random() * 10 + 8;
    
    bubble.css({
        width: size + 'px',
        height: size + 'px',
        left: position + '%',
        animationDuration: duration + 's',
        bottom: '-100px'
    });
    
    $('.bubble-container').append(bubble);
    
    setTimeout(function() {
        bubble.remove();
    }, duration * 1000);
}

// إضافة فقاعات جديدة كل 3 ثواني
setInterval(addBubble, 3000);
// ========================================
// المارد الخاص - جميع التأثيرات والحركات
// ========================================

// ==================== إنشاء الجسيمات المتحركة ==================== //
function createParticles() {
    const particlesContainer = document.querySelector('.particles-container');
    if (!particlesContainer) return;
    
    const particleCount = 50;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        const size = Math.random() * 4 + 2;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        particle.style.left = Math.random() * 100 + '%';
        
        const duration = Math.random() * 10 + 5;
        particle.style.animationDuration = duration + 's';
        
        const delay = Math.random() * 5;
        particle.style.animationDelay = delay + 's';
        
        const colors = ['rgba(108, 92, 231, 0.3)', 'rgba(0, 206, 201, 0.3)', 'rgba(253, 121, 168, 0.3)'];
        particle.style.background = colors[Math.floor(Math.random() * colors.length)];
        
        particlesContainer.appendChild(particle);
    }
}

// ==================== تأثير متابعة الماوس للأشكال ==================== //
function initMouseFollow() {
    const shapes = document.querySelectorAll('.shape');
    if (shapes.length > 0) {
        document.addEventListener('mousemove', function(e) {
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            shapes.forEach((shape, index) => {
                const speed = 20 + (index * 10);
                const x = (mouseX - 0.5) * speed;
                const y = (mouseY - 0.5) * speed;
                shape.style.transform = `translate(${x}px, ${y}px) rotate(${x}deg)`;
            });
        });
    }
}

// ==================== إضافة فقاعات جديدة ==================== //
function addBubble() {
    const bubbleContainer = document.querySelector('.bubble-container');
    if (!bubbleContainer) return;
    
    const bubble = document.createElement('div');
    bubble.classList.add('bubble');
    
    const size = Math.random() * 80 + 40;
    const position = Math.random() * 100;
    const duration = Math.random() * 10 + 8;
    const delay = Math.random() * 5;
    
    bubble.style.width = size + 'px';
    bubble.style.height = size + 'px';
    bubble.style.left = position + '%';
    bubble.style.animationDuration = duration + 's';
    bubble.style.animationDelay = delay + 's';
    
    bubbleContainer.appendChild(bubble);
    
    setTimeout(() => {
        bubble.remove();
    }, duration * 1000);
}

// ==================== jQuery التأثيرات ==================== //
$(document).ready(function() {
    
    // شريط التنقل - تغيير الخلفية عند السكرول
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
    
    // القائمة المتنقلة (Hamburger Menu)
    $('#hamburger').click(function() {
        $(this).toggleClass('active');
        $('#navMenu').toggleClass('active');
    });
    
    // إغلاق القائمة عند النقر على رابط
    $('.nav-link').click(function() {
        $('#hamburger').removeClass('active');
        $('#navMenu').removeClass('active');
    });
    
    // ==================== التمرير السلس للروابط (المعدل) ==================== //
    $('a[href*="#"]').on('click', function(e) {
        var href = $(this).attr('href');
        
        // إذا كان الرابط يحتوي على index.php# (روابط الانتقال للصفحة الرئيسية)
        if (href && href.indexOf('index.php#') !== -1) {
            // نترك الرابط يعمل بشكل طبيعي
            return;
        }
        
        // إذا كان الرابط يبدأ بـ # فقط
        if (href && href.indexOf('#') === 0 && href.length > 1) {
            e.preventDefault();
            var target = $(href);
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        }
    });
    
    // ظهور العناصر عند السكرول (Animate.css)
    function checkVisibility() {
        $('.animate__animated').each(function() {
            var elementTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();
            
            if (elementTop < windowBottom - 100) {
                var delay = $(this).data('delay');
                if (delay) {
                    $(this).css('animation-delay', delay);
                }
                $(this).addClass('animate__fadeInUp');
            }
        });
    }
    
    checkVisibility();
    $(window).scroll(checkVisibility);
    
    // نموذج الاتصال الرئيسي
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        alert('تم إرسال رسالتك بنجاح! سنتواصل معك قريباً');
        this.reset();
    });
    
    // تأثير hover للبطاقات
    $('.service-card, .vm-card, .advantage-item, .testimonial-card').hover(
        function() {
            $(this).css('transform', 'translateY(-10px)');
        },
        function() {
            $(this).css('transform', 'translateY(0)');
        }
    );
    
    // تحميل الصفحة
    $(window).on('load', function() {
        $('.loader').fadeOut();
        $('body').css('overflow', 'auto');
    });
    
});

// ==================== JavaScript العادي - التأثيرات الإضافية ==================== //
document.addEventListener('DOMContentLoaded', function() {
    
    // إنشاء الجسيمات
    createParticles();
    
    // تفعيل تأثير متابعة الماوس
    initMouseFollow();
    
    // ==================== Hamburger Menu (نسخة احتياطية) ==================== //
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });
        
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
        
        document.addEventListener('click', (e) => {
            if (navMenu.classList.contains('active') && 
                !navMenu.contains(e.target) && 
                !hamburger.contains(e.target)) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }
    
    // ==================== Navbar Scroll Effect ==================== //
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // ==================== Intersection Observer للعناصر ==================== //
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    const animatedElements = document.querySelectorAll('.service-card, .vm-card, .advantage-item, .testimonial-card, .stat-item, .info-card');
    animatedElements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'all 0.6s ease-out';
        element.style.transitionDelay = `${index * 0.1}s`;
        observer.observe(element);
    });
    
    // ==================== CTA Button ==================== //
    const ctaButton = document.querySelector('.btn-primary:not(.btn-block)');
    
    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            const servicesSection = document.getElementById('services');
            if (servicesSection) {
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = servicesSection.offsetTop - navbarHeight;
                window.scrollTo({ top: targetPosition, behavior: 'smooth' });
            }
        });
    }
    
    // ==================== Ripple Effect ==================== //
    function addRipple(event) {
        const button = event.currentTarget;
        const ripple = document.createElement('span');
        
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');
        
        button.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
    }
    
    const buttons = document.querySelectorAll('.btn, button');
    buttons.forEach(button => {
        button.addEventListener('click', addRipple);
    });
    
    if (!document.querySelector('#ripple-style')) {
        const rippleStyle = document.createElement('style');
        rippleStyle.id = 'ripple-style';
        rippleStyle.textContent = `
            .btn, button {
                position: relative;
                overflow: hidden;
            }
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.7);
                transform: scale(0);
                animation: ripple-animation 0.6s ease-out;
                pointer-events: none;
            }
            @keyframes ripple-animation {
                0% { transform: scale(0); opacity: 0.5; }
                100% { transform: scale(4); opacity: 0; }
            }
        `;
        document.head.appendChild(rippleStyle);
    }
    
    // ==================== Counter for Stats ==================== //
    const countUp = (element, target, duration = 2000) => {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target + (element.textContent.includes('+') ? '+' : '');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start) + (element.textContent.includes('+') ? '+' : '');
            }
        }, 16);
    };
    
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statNumber = entry.target.querySelector('.stat-number');
                if (statNumber) {
                    const text = statNumber.textContent;
                    const number = parseInt(text);
                    if (!isNaN(number)) {
                        countUp(statNumber, number);
                    }
                }
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    document.querySelectorAll('.stat-item').forEach(stat => {
        statsObserver.observe(stat);
    });
    
    // ==================== Parallax Effect for Bubbles ==================== //
    const bubbles = document.querySelectorAll('.bubble');
    
    window.addEventListener('scroll', () => {
        const scrollPosition = window.pageYOffset;
        bubbles.forEach((bubble, index) => {
            const speed = 0.3 + (index * 0.05);
            bubble.style.transform = `translateY(${scrollPosition * speed}px)`;
        });
    });
    
    // ==================== Active Navigation Link ==================== //
    function setActiveNavLink() {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');
        
        window.addEventListener('scroll', () => {
            let current = '';
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - navbarHeight - 100;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    }
    
    setActiveNavLink();
    
    // ==================== FAQ Accordion ==================== //
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', () => {
                question.classList.toggle('active');
            });
        }
    });
    
    // ==================== Accounting Form ==================== //
    const accountingForm = document.getElementById('accountingForm');
    if (accountingForm) {
        accountingForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('تم استلام طلب الاستشارة بنجاح! سنتواصل معك قريباً');
            accountingForm.reset();
        });
    }
    
    // ==================== Logo Form ==================== //
    const logoForm = document.getElementById('logoForm');
    if (logoForm) {
        logoForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('تم استلام طلب التصميم بنجاح! سنتواصل معك قريباً');
            logoForm.reset();
        });
    }
    
    // ==================== فقاعات جديدة ==================== //
    if (document.querySelector('.bubble-container')) {
        setInterval(addBubble, 4000);
    }
    
    // ==================== Preloader ==================== //
    window.addEventListener('load', () => {
        document.body.style.overflow = '';
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease';
        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });
    
    // ==================== Log Success ==================== //
    console.log('✓ المارد الخاص - تم تحميل جميع التأثيرات بنجاح');
    
});

// ==================== تحسين أداء السكرول ==================== //
let ticking = false;
// ==================== منع النقر بزر الماوس الأيمن على جميع عناصر المعرض ==================== //
document.addEventListener('contextmenu', function(e) {
    // منع القائمة إذا كان المستخدم يحاول النقر على صورة
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
        return false;
    }
    // منع القائمة إذا كان العنصر الأب يحتوي على صورة
    if (e.target.closest('img')) {
        e.preventDefault();
        return false;
    }
    // منع القائمة على عناصر المعرض والهيرو
    if (e.target.closest('.portfolio-item') || 
        e.target.closest('.portfolio-image') || 
        e.target.closest('.hero-image') ||
        e.target.closest('.hero-logo')) {
        e.preventDefault();
        return false;
    }
    // منع القائمة على الـ Lightbox
    if (e.target.closest('.lightbox') || e.target.id === 'lightbox-img') {
        e.preventDefault();
        return false;
    }
});

// منع سحب الصور
document.addEventListener('dragstart', function(e) {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
        return false;
    }
});

// جعل جميع الصور غير قابلة للسحب
document.querySelectorAll('img').forEach(img => {
    img.setAttribute('draggable', 'false');
    img.style.userSelect = 'none';
    img.style.webkitUserSelect = 'none';
});

// ==================== حماية Lightbox عند الفتح ==================== //
function protectLightboxImage() {
    const lightboxImg = document.getElementById('lightbox-img');
    if (lightboxImg) {
        lightboxImg.setAttribute('draggable', 'false');
        lightboxImg.style.userSelect = 'none';
        lightboxImg.style.webkitUserSelect = 'none';
        lightboxImg.style.pointerEvents = 'none';
    }
}

// مراقبة فتح الـ Lightbox
const lightboxElement = document.getElementById('lightbox');
if (lightboxElement) {
    // مراقبة تغيير style الـ Lightbox
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                if (lightboxElement.style.display === 'block') {
                    setTimeout(protectLightboxImage, 50);
                }
            }
        });
    });
    observer.observe(lightboxElement, { attributes: true });
    
    // عند النقر على أي صورة في المعرض
    document.querySelectorAll('.portfolio-item').forEach(item => {
        item.addEventListener('click', function() {
            setTimeout(protectLightboxImage, 100);
        });
    });
}

console.log('✓ حماية الصور والـ Lightbox مفعلة');
// ==================== منع النقر بزر الماوس الأيمن على جميع عناصر النهائية ==================== //
// ==================== Lightbox - عرض الصور ==================== //
document.addEventListener('DOMContentLoaded', function() {
    
    // الحصول على عناصر Lightbox
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const closeBtn = document.querySelector('.lightbox-close');
    
    // الحصول على جميع صور المعرض
    const portfolioImages = document.querySelectorAll('.portfolio-item');
    
    // إضافة حدث النقر لكل صورة
    portfolioImages.forEach(item => {
        const img = item.querySelector('img');
        const title = item.querySelector('.portfolio-overlay h4')?.innerText || '';
        const category = item.querySelector('.portfolio-overlay span')?.innerText || '';
        
        // إضافة مؤشر بأن الصورة قابلة للنقر
        item.style.cursor = 'pointer';
        
        item.addEventListener('click', function(e) {
            // منع انتشار الحدث
            e.stopPropagation();
            
            // عرض الصورة في Lightbox
            if (img && img.src) {
                lightboxImg.src = img.src;
                lightboxCaption.innerHTML = `${title} - ${category}`;
                lightbox.style.display = 'block';
                
                // منع تمرير الصفحة خلف الـ Lightbox
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    // إغلاق الـ Lightbox عند النقر على زر الإغلاق
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            lightbox.style.display = 'none';
            document.body.style.overflow = '';
        });
    }
    
    // إغلاق الـ Lightbox عند النقر خارج الصورة
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
    
    // إغلاق الـ Lightbox عند الضغط على ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && lightbox.style.display === 'block') {
            lightbox.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
    
    // ==================== منع حفظ الصور بالكامل ==================== //
    // منع النقر بزر الماوس الأيمن على الصور
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });
    });
    
    // منع سحب الصور
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('dragstart', function(e) {
            e.preventDefault();
            return false;
        });
    });
    
    // منع حفظ الصور عن طريق Ctrl+S أو Ctrl+P
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && (e.key === 's' || e.key === 'p' || e.key === 'S' || e.key === 'P')) {
            e.preventDefault();
            alert('حفظ الصور غير متاح');
            return false;
        }
    });
    
    // منع نسخ الصور
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('copy', function(e) {
            e.preventDefault();
            return false;
        });
    });
    
    // منع طباعة الصفحة
    window.addEventListener('beforeprint', function() {
        alert('طباعة الصفحة غير متاحة لحماية حقوق التصميم');
        return false;
    });
    
    // إضافة رسالة تحذيرية عند محاولة حفظ الصورة
    const originalOpen = window.open;
    window.open = function(url, name, specs) {
        if (url && (url.includes('.png') || url.includes('.jpg') || url.includes('.jpeg') || url.includes('.webp') || url.includes('.svg'))) {
            alert('حفظ الصور غير متاح لحماية حقوق الملكية الفكرية');
            return null;
        }
        return originalOpen(url, name, specs);
    };
});
// ==================== إرسال النموذج إلى واتساب ==================== //
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // جلب البيانات من النموذج
        const fullName = document.getElementById('fullName').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value.trim();
        
        // التحقق من الحقول المطلوبة
        if (!fullName || !email || !subject || !message) {
            alert('الرجاء تعبئة جميع الحقول المطلوبة');
            return;
        }
        
        // التحقق من صحة البريد الإلكتروني
        const emailPattern = /^[^\s@]+@([^\s@]+\.)+[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('الرجاء إدخال بريد إلكتروني صحيح');
            return;
        }
        
        // الحصول على التاريخ والوقت
        const now = new Date();
        const year = now.getFullYear();
        const month = now.getMonth() + 1;
        const day = now.getDate();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        
        const formattedDate = year + '/' + month + '/' + day;
        const formattedTime = hours + ':' + (minutes < 10 ? '0' + minutes : minutes);
        
        // تجهيز النصوص مع الترميز الآمن
        const safeFullName = encodeURIComponent(fullName);
        const safeEmail = encodeURIComponent(email);
        const safePhone = encodeURIComponent(phone);
        const safeSubject = encodeURIComponent(subject);
        const safeMessage = encodeURIComponent(message);
        
        // بناء رسالة واتساب (بدون أسطر فارغة زائدة - كما في مثالك)
        let finalMessage = '';
        
        finalMessage += 'موقع المارد الخاص%0A';
        finalMessage += '==========================%0A';
        finalMessage += 'الاسم الكامل: ' + safeFullName + '%0A';
        finalMessage += '==========================%0A';
        finalMessage += 'الايميل: ' + safeEmail + '%0A';
        finalMessage += '==========================%0A';
        
        if (phone) {
            finalMessage += 'رقم الهاتف: ' + safePhone + '%0A';
            finalMessage += '==========================%0A';
        }
        
        finalMessage += 'الموضوع: ' + safeSubject + '%0A';
        finalMessage += 'تفاصيل الرسالة:%0A';
        finalMessage += '--------------------------%0A';
        finalMessage += safeMessage + '%0A';
        finalMessage += '--------------------------%0A';
        finalMessage += 'التاريخ: ' + formattedDate + ' | الوقت: ' + formattedTime + '%0A';
        finalMessage += 'المرسل من: المارد الخاص';
        
        // إعداد رابط الواتساب
        const whatsappNumber = '967775888836';
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${finalMessage}`;
        
        // التعامل مع الواجهة
        const submitBtn = document.getElementById('submitBtn');
        const originalText = submitBtn.innerHTML;
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'جاري التحويل...';
        
        window.open(whatsappUrl, '_blank');
        
        setTimeout(() => {
            contactForm.reset();
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
            alert('تم تحويلك إلى واتساب! ✅\nيرجى الضغط على زر الإرسال لإكمال طلبك.');
        }, 1500);
    });
}
window.addEventListener('scroll', () => {
    if (!ticking) {
        requestAnimationFrame(() => {
            ticking = false;
        });
        ticking = true;
    }
});