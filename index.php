<?php $hotac_options = hotac_get_theme_options(); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="الموقع الرسمي للشركة القابضة للسياحة والفنادق (HOTAC) - إحدى شركات وزارة قطاع الأعمال العام في مصر">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Bar Start -->
    <div class="top-bar py-2 px-3 d-none d-lg-block">
        <div class="container-fluid max-w-7xl">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center gap-4">
                        <span><i class="fa fa-phone-alt text-warning me-2"></i> <?php echo esc_html($hotac_options['phone']); ?></span>
                        <span><i class="fa fa-envelope text-warning me-2"></i> <?php echo esc_html($hotac_options['email']); ?></span>
                        <span><i class="fa fa-building text-warning me-2"></i> إحدى شركات وزارة قطاع الأعمال العام</span>
                    </div>
                </div>
                <div class="col-md-4 text-start">
                    <div class="d-inline-flex align-items-center gap-2">
                        <?php if ($hotac_options['facebook_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['facebook_url']); ?>" title="فيسبوك" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
                        <?php if ($hotac_options['youtube_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['youtube_url']); ?>" title="يوتيوب" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a><?php endif; ?>
                        <?php if ($hotac_options['x_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['x_url']); ?>" title="X" rel="noopener noreferrer"><i class="fab fa-x-twitter"></i></a><?php endif; ?>
                        <?php if ($hotac_options['linkedin_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['linkedin_url']); ?>" title="لينكد إن" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
                        <span class="text-white-50 mx-2">|</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-custom" id="hotacNavbar">
        <div class="container-fluid px-lg-4">
            <a href="<?php echo esc_url(home_url('/#home')); ?>" class="navbar-brand-box">
                <img src="<?php echo esc_url($hotac_options['logo_url']); ?>" alt="HOTAC Logo">
                <div>
                    <h4 class="m-0 font-bold" style="font-size: 1.2rem; letter-spacing: 0.5px;">HOTAC</h4>
                    <!--<span class="small text-warning fw-semibold" style="font-size: 0.78rem;">الشركة القابضة للسياحة والفنادق</span>-->
                </div>
            </a>
            
            <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="فتح القائمة">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse px-3" id="navbarCollapse">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container' => false,
                    'menu_class' => 'navbar-nav hotac-main-navigation ms-auto p-3 p-lg-0 align-items-lg-center',
                    'fallback_cb' => 'hotac_primary_menu_fallback',
                    'depth' => 0,
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="<?php echo esc_url(home_url('/#assets')); ?>" class="btn btn-gold py-2 px-3 text-nowrap" style="font-size: 0.88rem;">
                        <i class="fa fa-handshake ms-1"></i> بوابة الاستثمار
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section id="home" class="hero-section">
        <div id="hotacHeroSlider" class="carousel slide carousel-fade hero-slider" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false" aria-label="صور الشركة">
            <div class="carousel-inner">
                <?php
                $hero_images = array(
                    $hotac_options['hero_image_1'],
                    $hotac_options['hero_image_2'],
                    $hotac_options['hero_image_3'],
                );
                $hero_images = array_values(array_filter($hero_images));
                foreach ($hero_images as $index => $hero_image) :
                ?>
                    <div class="carousel-item<?php echo 0 === $index ? ' active' : ''; ?>">
                        <img class="hero-slide-image" src="<?php echo esc_url($hero_image); ?>" alt="" aria-hidden="true">
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (count($hero_images) > 1) : ?>
                <div class="carousel-indicators">
                    <?php foreach ($hero_images as $index => $hero_image) : ?>
                        <button
                            type="button"
                            data-bs-target="#hotacHeroSlider"
                            data-bs-slide-to="<?php echo esc_attr($index); ?>"
                            class="<?php echo 0 === $index ? 'active' : ''; ?>"
                            aria-label="<?php echo esc_attr(sprintf('الصورة %d', $index + 1)); ?>"
                            <?php echo 0 === $index ? 'aria-current="true"' : ''; ?>
                        ></button>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container py-5">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-9 col-md-11">
                    <span class="hero-badge mb-3"><i class="fa fa-star ms-1"></i> صرح الاستثمار السياحي والفندقي الأكبر في مصر</span>
                    <h1 class="hero-title mb-4">ريادة الفندقة والخدمات السياحية وتطوير التراث المصري الأصيل</h1>
                    <p class="fs-5 text-light mb-5 leading-relaxed" style="max-width: 800px; font-weight: 400; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                        تقوم الشركة القابضة للسياحة والفنادق (HOTAC) بتعزيز القيمة المضافة للأصول الفندقية والسياحية، مع إدارة وتطوير أعرق المعالم والفنادق المصرية التاريخية بالتعاون مع أرقى شركات الإدارة العالمية.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#about" class="btn btn-gold fs-6"><i class="fa fa-compass ms-2"></i> اكتشف القابضة</a>
                        <a href="#assets" class="btn btn-outline-light-custom fs-6"><i class="fa fa-chart-pie ms-2"></i> الفرص الاستثمارية</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Section 1: About HOTAC (قسم الشركة القابضة) -->
    <section id="about" class="py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-frame">
                        <img class="img-fluid w-100" src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1000&q=80" alt="الفنادق المصرية التراثية" style="min-height: 440px; object-fit: cover;">
                        <div class="experience-badge">
                            <h3 class="m-0 text-warning font-bold fs-2">+30</h3>
                            <span class="small fw-bold">عاماً من الريادة والاستثمار</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="section-badge">عن الشركة القابضة</span>
                    <h2 class="section-heading">الشركة القابضة للسياحة والفنادق (HOTAC)</h2>
                    <p class="text-muted leading-relaxed mb-3" style="font-size: 1.05rem;">
                        الشركة القابضة للسياحة والفنادق هي شركة قابضة مساهمة مصرية تأسست طبقاً لأحكام قانون شركات قطاع الأعمال العام رقم 203 لسنة 1991 وتعد إحدى ركائز الاستثمار التابعة لوزارة قطاع الأعمال العام.
                    </p>
                    <p class="text-muted leading-relaxed mb-4">
                        يقوم غرض الشركة — وفقاً لنظامها الأساسي — على المشاركة في تنمية الاقتصاد القومي من خلال إدارة وتطوير محفظة استثمارية فريدة تضم 9 شركات تابعة تتنوع أنشطتها بين الفنادق التراثية والحديثة، البرامج السياحية والنقل، العروض الثقافية (الصوت والضوء)، التعمير والتنمية العقارية، والتجارة الداخلية.
                    </p>
                    
                    <div class="row g-3 pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3" style="background: var(--light-bg);">
                                <i class="fa fa-award fa-2x text-warning"></i>
                                <div>
                                    <h6 class="mb-1 font-bold">شراكات عالمية</h6>
                                    <p class="m-0 text-muted small">ماريوت، ريتز، أكور وشتاينبرجر</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3 p-3 rounded-3" style="background: var(--light-bg);">
                                <i class="fa fa-landmark fa-2x text-warning"></i>
                                <div>
                                    <h6 class="mb-1 font-bold">أصول تاريخية</h6>
                                    <p class="m-0 text-muted small">حماية وتطوير أعرق الفنادق</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 1 End -->

    <!-- Section 2: Vision & Mission & Strategic Objectives (قسم رؤيتنا ورسالتنا والأهداف) -->
    <section id="vision-mission" class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5 max-w-2xl mx-auto">
                <span class="section-badge">التوجه الاستراتيجي</span>
                <h2 class="section-heading text-center">رؤيتنا ورسالتنا وأهدافنا</h2>
                <p class="text-muted">نضع خريطة عمل متكاملة للارتقاء بقطاع السياحة والفنادق وتعظيم الموارد القومية</p>
            </div>
            
            <!-- Vision & Mission Cards Grid -->
            <div class="row g-4 mb-5">
                <!-- Our Vision -->
                <div class="col-lg-6">
                    <div class="vm-card">
                        <div class="vm-icon-box">
                            <i class="fa fa-eye"></i>
                        </div>
                        <h3 class="font-bold text-navy mb-3">رؤيتنا (Our Vision)</h3>
                        <p class="text-muted leading-relaxed fs-5 m-0">
                            "أن نكون المجموعة القابضة الرائدة إقليمياً والدولية في إدارة وتطوير الاستثمار الفندقي والسياحي والتراثي، وتقديم نموذج مصري عالمي يجمع بين عراقة التراث التاريخي وأحدث معايير الضيافة والخدمات المستدامة."
                        </p>
                    </div>
                </div>

                <!-- Our Mission -->
                <div class="col-lg-6">
                    <div class="vm-card">
                        <div class="vm-icon-box" style="background: rgba(19, 64, 116, 0.12); color: var(--secondary-navy);">
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <h3 class="font-bold text-navy mb-3">رسالتنا (Our Mission)</h3>
                        <p class="text-muted leading-relaxed fs-5 m-0">
                            "تعظيم العائد على أصول الدولة السياحية والعقارية، وتطوير المنشآت الفندقية والتاريخية بالشراكة مع كبرى الكيانات المحلية والعالمية، وتأهيل الكوادر البشرية الوطنية لتقديم خدمات استثنائية تدعم الاقتصاد القومي."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Core Values Sub-section -->
            <div class="mb-5">
                <h4 class="font-bold text-navy text-center mb-4"><i class="fa fa-gem text-warning ms-2"></i> قيمنا الجوهرية (Core Values)</h4>
                <div class="row g-3">
                    <div class="col-md-3 col-6">
                        <div class="value-card">
                            <i class="fa fa-leaf value-icon"></i>
                            <h6 class="font-bold mb-2">الاستدامة</h6>
                            <p class="text-muted small m-0">الحفاظ على البيئة والأصول للأجيال القادمة</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="value-card">
                            <i class="fa fa-monument value-icon"></i>
                            <h6 class="font-bold mb-2">الأصالة والتراث</h6>
                            <p class="text-muted small m-0">صون الهوية التاريخية والمعمارية المصرية</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="value-card">
                            <i class="fa fa-star value-icon"></i>
                            <h6 class="font-bold mb-2">الجودة الشاملة</h6>
                            <p class="text-muted small m-0">تطبيق أعلى المعايير الفندقية الدولية</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="value-card">
                            <i class="fa fa-handshake-angle value-icon"></i>
                            <h6 class="font-bold mb-2">الشفافية والحوكمة</h6>
                            <p class="text-muted small m-0">الالتزام بالنزاهة والعدالة والاستثمار الشفاف</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategic Objectives Grid -->
            <h4 class="font-bold text-navy text-center mb-4"><i class="fa fa-tasks text-warning ms-2"></i> الأهداف الاستراتيجية الأربعة</h4>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="asset-card text-center p-4">
                        <div class="subsidiary-icon-wrap mx-auto">
                            <i class="fa fa-concierge-bell"></i>
                        </div>
                        <h5 class="font-bold mb-3">منتج سياحي متميز</h5>
                        <p class="text-muted small">تقديم خدمات ضيافة تضاهي المعايير العالمية وتوفر تجربة استثنائية لضيوف وزوار مصر من مختلف أنحاء العالم.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="asset-card text-center p-4">
                        <div class="subsidiary-icon-wrap mx-auto">
                            <i class="fa fa-hammer"></i>
                        </div>
                        <h5 class="font-bold mb-3">إعادة تأهيل الأصول</h5>
                        <p class="text-muted small">التطوير المستمر للمنشآت الفندقية والسياحية وتحديث البنية التحتية مع الحفاظ على الهوية المعمارية والتاريخية.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="asset-card text-center p-4">
                        <div class="subsidiary-icon-wrap mx-auto">
                            <i class="fa fa-handshake"></i>
                        </div>
                        <h5 class="font-bold mb-3">إدارة فندقية محترفة</h5>
                        <p class="text-muted small">جذب كبرى شركات الإدارة الفندقية العالمية لضمان أعلى مستويات الكفاءة والربحية والإشغالات الفندقية.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="asset-card text-center p-4">
                        <div class="subsidiary-icon-wrap mx-auto">
                            <i class="fa fa-user-graduate"></i>
                        </div>
                        <h5 class="font-bold mb-3">تنمية العنصر البشري</h5>
                        <p class="text-muted small">الاهتمام بالتدريب المستمر للكوادر البشرية والفندقية وتطوير الكليات والمعاهد الفندقية التابعة للوصول للكفاءة العالية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 2 End -->

    <!-- Section 3: Leadership Speech & Stats Grid Start -->
    <section id="leadership" class="py-5">
        <div class="container py-4">
            <div class="row g-4 align-items-stretch">
                
                <!-- RIGHT COLUMN: Blue Box with Speech and Leader Photos -->
                <div class="col-lg-7">
                    <div class="leadership-blue-box h-100 d-flex flex-column justify-content-between">
                        <i class="fa fa-quote-right leadership-quote-icon"></i>
                        <div>
                            <span class="badge bg-warning text-dark font-bold px-3 py-2 mb-3">رؤية القيادة والتطوير</span>
                            <h3 class="text-white font-bold mb-3 fs-2">كلمة إدارة الشركة القابضة</h3>
                            <p class="text-white-50 leading-relaxed mb-4 fs-5">
                                "نرحب بجميع زوار موقع الشركة القابضة للسياحة والفنادق. نلتزم بمواصلة مسيرة التطوير والتحديث لكافة الأصول المملوكة للقابضة وشركاتها التابعة، والعمل على فتح آفاق جديدة للاستثمار الشفاف والشراكة الاستراتيجية مع القطاع الخاص للارتقاء بمكانة مصر السياحية عالمياً."
                            </p>
                        </div>

                        <!-- Leaders Photos & Names Grid -->
                        <div class="pt-4 border-top border-white-10">
                            <div class="row g-4">
                                <!-- Leader 1: Chairman -->
                                <div class="col-sm-6 text-center text-sm-start">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="leader-avatar-frame flex-shrink-0">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-white font-bold mb-1">أ. ماجد المنشاوي</h5>
                                            <span class="text-warning small font-bold d-block">رئيس مجلس الإدارة</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Leader 2: Managing Director -->
                                <div class="col-sm-6 text-center text-sm-start">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="leader-avatar-frame flex-shrink-0">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-white font-bold mb-1">أ. عمرو عطية</h5>
                                            <span class="text-warning small font-bold d-block">العضو المنتدب التنفيذي</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- LEFT COLUMN: The 4 Grid Statistic Cards -->
                <div class="col-lg-5">
                    <div class="row g-3 h-100">
                        
                        <!-- Stat Card 1 -->
                        <div class="col-6">
                            <div class="stat-card-custom">
                                <div class="stat-icon-wrapper bg-primary bg-opacity-10 text-primary">
                                    <i class="fa fa-hotel"></i>
                                </div>
                                <h2 class="text-navy font-bold mb-1 display-6">+25</h2>
                                <p class="text-muted small m-0 font-bold">فندقاً ومنشأة تاريخية وحديثة</p>
                            </div>
                        </div>

                        <!-- Stat Card 2 -->
                        <div class="col-6">
                            <div class="stat-card-custom">
                                <div class="stat-icon-wrapper bg-warning bg-opacity-10 text-warning">
                                    <i class="fa fa-building"></i>
                                </div>
                                <h2 class="text-navy font-bold mb-1 display-6">9</h2>
                                <p class="text-muted small m-0 font-bold">شركات تابعة مساهمة</p>
                            </div>
                        </div>

                        <!-- Stat Card 3 -->
                        <div class="col-6">
                            <div class="stat-card-custom">
                                <div class="stat-icon-wrapper bg-success bg-opacity-10 text-success">
                                    <i class="fa fa-handshake"></i>
                                </div>
                                <h2 class="text-navy font-bold mb-1 display-6">+15</h2>
                                <p class="text-muted small m-0 font-bold">شراكة استثمارية دولية ومحلية</p>
                            </div>
                        </div>

                        <!-- Stat Card 4 -->
                        <div class="col-6">
                            <div class="stat-card-custom">
                                <div class="stat-icon-wrapper bg-danger bg-opacity-10 text-danger">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h2 class="text-navy font-bold mb-1 display-6">+10k</h2>
                                <p class="text-muted small m-0 font-bold">كادر بشري وفندقي مدرب</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section 3 End -->

    <!-- Section 4: Company Assets Showcase Start -->
    <section id="assets" class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-badge">محفظة الأصول الفريدة</span>
                <h2 class="section-heading text-center">أبرز أصول وفنادق القابضة</h2>
                <p class="text-muted">نمتلك نخبة من أرقى الفنادق التاريخية والعصرية والأصول الاستثمارية بجمهورية مصر العربية</p>
            </div>

            <div class="row g-4">
                <!-- Asset Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="asset-card">
                        <div class="asset-img-box">
                            <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?auto=format&fit=crop&w=800&q=80" alt="فنادق تاريخية">
                            <span class="asset-tag">فنادق تاريخية</span>
                        </div>
                        <div class="asset-body">
                            <h5 class="font-bold mb-2">فنادق التراث العريق</h5>
                            <p class="text-muted small mb-4">تضم فنادق مثل ماريوت القاهرة (قصر الجزيرة)، مينا هاوس، ونتر بالاس بالأقصر، وكتاراكت بأسوان ذات التاريخ المجيد.</p>
                            <a href="#assets" class="btn btn-sm btn-gold mt-auto align-self-start">التفاصيل والفرص <i class="fa fa-arrow-left ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Asset Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="asset-card">
                        <div class="asset-img-box">
                            <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=800&q=80" alt="فنادق حديثة منتجعات">
                            <span class="asset-tag">منتجعات حديثة</span>
                        </div>
                        <div class="asset-body">
                            <h5 class="font-bold mb-2">المنتجعات والفنادق الساحلية</h5>
                            <p class="text-muted small mb-4">فنادق ومنتجعات موزعة على البحر الأحمر، جنوب سيناء، والغردقة وشرم الشيخ ومرسى علم ومرسى مطروح والمعمورة.</p>
                            <a href="#assets" class="btn btn-sm btn-gold mt-auto align-self-start">التفاصيل والفرص <i class="fa fa-arrow-left ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Asset Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="asset-card">
                        <div class="asset-img-box">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="أراضي وعقارات">
                            <span class="asset-tag">تنمية عقارية</span>
                        </div>
                        <div class="asset-body">
                            <h5 class="font-bold mb-2">الأراضي والمشروعات العقارية</h5>
                            <p class="text-muted small mb-4">مساحات وأراضٍ متميزة مخصصة للاستثمار والتطوير الفندقي والعقاري في أهم المواقع الحيوية في كافة المحافظات.</p>
                            <a href="#assets" class="btn btn-sm btn-gold mt-auto align-self-start">التفاصيل والفرص <i class="fa fa-arrow-left ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 4 End -->

    <!-- Section 5: Subsidiaries Grid Start -->
    <section id="subsidiaries" class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-badge">منظومة القابضة</span>
                <h2 class="section-heading text-center">الشركات التابعة للقابضة</h2>
                <p class="text-muted">تضم الشركة القابضة 9 شركات مساهمة تابعة تعمل في قطاعات متنوعة ومتكاملة</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-hotel"></i>
                        </div>
                        <h5 class="font-bold mb-2">شركة إيجوث (EGOTH)</h5>
                        <p class="text-muted small">الشركة المصرية للأجهزة السياحية والفندقية، تمتلك أعرق الفنادق المصرية التاريخية والحديثة والمعاهد الفندقية.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-plane-departure"></i>
                        </div>
                        <h5 class="font-bold mb-2">شركة مصر للسياحة</h5>
                        <p class="text-muted small">أعرق شركة سياحة في الشرق الأوسط تقدم خدمات البرامج السياحية، النقل السياحي، والفنادق والمطاعم العائمة.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-building-columns"></i>
                        </div>
                        <h5 class="font-bold mb-2">شركة مصر للفنادق</h5>
                        <p class="text-muted small">تمتلك مجموعة متميزة من الفنادق مثل النيل ريتز كارلتون ودهب سويس إن وغيرها من الفنادق الراقية.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-umbrella-beach"></i>
                        </div>
                        <h5 class="font-bold mb-2">المعمورة للتعمير والتنمية</h5>
                        <p class="text-muted small">متخصصة في التنمية السياحية والعقارية وإدارة وتطوير منطقة المعمورة الشاطئية بالإسكندرية.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-lightbulb"></i>
                        </div>
                        <h5 class="font-bold mb-2">مصر للصوت والضوء والسينما</h5>
                        <p class="text-muted small">تنظيم العروض الصوتية والضوئية بالمناطق الأثرية (الأهرامات، الكرنك، فيلة، أبو سمبل) والإنتاج السينمائي.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-bag-shopping"></i>
                        </div>
                        <h5 class="font-bold mb-2">صيدناوي وشيكوريل</h5>
                        <p class="text-muted small">شركة بيوت الأزياء الراقية، تمتلك سلسلة من الفروع التجارية ذات الأصول العقارية المتميزة بجمهورية مصر العربية.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-store"></i>
                        </div>
                        <h5 class="font-bold mb-2">بيع المصنوعات المصرية</h5>
                        <p class="text-muted small">شركة تجارية تاريخية تمتلك شبكة واسعة من الفروع التجارية والمنافذ بمختلف المحافظات.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-boxes-stacked"></i>
                        </div>
                        <h5 class="font-bold mb-2">الشركة التجارية للأخشاب</h5>
                        <p class="text-muted small">متخصصة في الاستيراد والتجارة في مستلزمات الأخشاب والتجهيزات والمستودعات التجارية.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="subsidiary-card">
                        <div class="subsidiary-icon-wrap">
                            <i class="fa fa-shop"></i>
                        </div>
                        <h5 class="font-bold mb-2">شركة عمر أفندي</h5>
                        <p class="text-muted small">إحدى أعرق السلاسل التجارية في مصر التي خضعت للتطوير وإعادة الهيكلة والتحديث.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 5 End -->

    <!-- Section 6: Contact Us Start -->
    <section id="contact" class="py-5 bg-light">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-5">
                    <span class="section-badge">تواصل معنا</span>
                    <h2 class="section-heading">يسعدنا استقبال استفساراتكم</h2>
                    <p class="text-muted mb-4">يسعد فريق التواصل بالقابضة الإجابة على كافة التساؤلات المتعلقة بالاستثمار والشراكات والخدمات الفندقية.</p>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="btn-gold rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt fs-5"></i>
                        </div>
                        <div>
                            <h6 class="font-bold mb-1">المقر الرئيسي</h6>
                            <p class="text-muted small m-0">4 شارع امريكا اللاتينية - جاردن سيتي - القاهرة - مصر</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="btn-gold rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt fs-5"></i>
                        </div>
                        <div>
                            <h6 class="font-bold mb-1">أرقام الهاتف</h6>
                            <p class="text-muted small m-0"><?php echo esc_html($hotac_options['phone']); ?></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3">
                        <div class="btn-gold rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope fs-5"></i>
                        </div>
                        <div>
                            <h6 class="font-bold mb-1">البريد الإلكتروني</h6>
                            <p class="text-muted small m-0"><?php echo esc_html($hotac_options['email']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                        <h4 class="font-bold mb-4">أرسل رسالة مباشرة</h4>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label font-bold small">الاسم بالكامل</label>
                                    <input type="text" class="form-control form-control-custom" placeholder="أدخل اسمك الكترونياً" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-bold small">البريد الإلكتروني</label>
                                    <input type="email" class="form-control form-control-custom" placeholder="name@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-bold small">رقم الهاتف</label>
                                    <input type="tel" class="form-control form-control-custom" placeholder="010XXXXXXXX">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label font-bold small">نوع الاستفسار</label>
                                    <select class="form-select form-control-custom">
                                        <option selected>فرص استثمارية</option>
                                        <option>حجز واستعلام فندقي</option>
                                        <option>الشركات التابعة</option>
                                        <option>عام</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label font-bold small">نص الرسالة</label>
                                    <textarea class="form-control form-control-custom" rows="4" style="height: auto;" placeholder="اكتب تفاصيل رسالتك هنا..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-gold w-100 py-3 font-bold"><i class="fa fa-paper-plane ms-2"></i> إرسال الرسالة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 6 End -->

    <!-- Footer Start -->
    <footer class="footer-bg pt-5 pb-3">
        <div class="container py-4">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="<?php echo esc_url($hotac_options['logo_url']); ?>" alt="HOTAC Logo" style="height: 50px;">
                        <div>
                            <h5 class="text-white font-bold m-0">HOTAC</h5>
                            <span class="text-warning small">الشركة القابضة للسياحة والفنادق</span>
                        </div>
                    </div>
                    <p class="small text-light leading-relaxed mb-4" style="opacity: 0.85;">
                        إحدى شركات وزارة قطاع الأعمال العام الرائدة في تطوير وإدارة الأصول الفندقية والسياحية والتراثية والتجارية في جمهورية مصر العربية.
                    </p>
                    <div class="d-flex align-items-center gap-2">
                        <?php if ($hotac_options['facebook_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['facebook_url']); ?>" aria-label="فيسبوك" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
                        <?php if ($hotac_options['youtube_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['youtube_url']); ?>" aria-label="يوتيوب" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a><?php endif; ?>
                        <?php if ($hotac_options['x_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['x_url']); ?>" aria-label="X" rel="noopener noreferrer"><i class="fab fa-x-twitter"></i></a><?php endif; ?>
                        <?php if ($hotac_options['linkedin_url']) : ?><a class="social-btn" href="<?php echo esc_url($hotac_options['linkedin_url']); ?>" aria-label="لينكد إن" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-heading">روابط سريعة</h5>
                    <a href="#about" class="footer-link"><i class="fa fa-angle-left text-warning"></i> عن الشركة</a>
                    <a href="#vision-mission" class="footer-link"><i class="fa fa-angle-left text-warning"></i> رؤيتنا ورسالتنا</a>
                    <a href="#assets" class="footer-link"><i class="fa fa-angle-left text-warning"></i> أصول الشركة</a>
                    <a href="#subsidiaries" class="footer-link"><i class="fa fa-angle-left text-warning"></i> الشركات التابعة</a>
                    <a href="#contact" class="footer-link"><i class="fa fa-angle-left text-warning"></i> اتصل بنا</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">الشركات التابعة</h5>
                    <a href="#subsidiaries" class="footer-link"><i class="fa fa-angle-left text-warning"></i> شركة إيجوث (EGOTH)</a>
                    <a href="#subsidiaries" class="footer-link"><i class="fa fa-angle-left text-warning"></i> شركة مصر للسياحة</a>
                    <a href="#subsidiaries" class="footer-link"><i class="fa fa-angle-left text-warning"></i> شركة مصر للفنادق</a>
                    <a href="#subsidiaries" class="footer-link"><i class="fa fa-angle-left text-warning"></i> شركة المعمورة للتعمير</a>
                    <a href="#subsidiaries" class="footer-link"><i class="fa fa-angle-left text-warning"></i> شركة مصر للصوت والضوء</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">النشرة البريدية</h5>
                    <p class="small text-light mb-3" style="opacity: 0.85;">اشترك للحصول على آخر الأخبار وتحديثات الفرص الاستثمارية.</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-sm border-0 px-3" placeholder="بريدك الإلكتروني" required>
                            <button class="btn btn-gold btn-sm" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
                    <span class="small text-white-50"><i class="fa fa-lock ms-1 text-warning"></i> نلتزم بحماية خصوصية بياناتك</span>
                </div>
            </div>

            <hr style="border-color: rgba(255,255,255,0.1);">

            <div class="row align-items-center pt-2">
                <div class="col-md-7 text-center text-md-start mb-3 mb-md-0">
                    <p class="small m-0 text-light" style="opacity: 0.8;">&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> جميع الحقوق محفوظة - الشركة القابضة للسياحة والفنادق (HOTAC)</p>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <div class="d-inline-flex gap-3 small">
                        <a href="#" class="text-light text-decoration-none" style="opacity: 0.8;">سياسة الخصوصية</a>
                        <span class="text-white-50">|</span>
                        <a href="#" class="text-light text-decoration-none" style="opacity: 0.8;">شروط الاستخدام</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

<?php wp_footer(); ?>
</body>
</html>
