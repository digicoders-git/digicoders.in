<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leadership & Co-Founders | DigiCoders Technologies</title>
    <meta name="description" content="Meet the visionary co-founders behind DigiCoders Technologies — Er. Gopal Singh and Er. Himanshu Kashyap. Driving digital innovation, enterprise project development, and tech education in Lucknow, India.">
    <?php include('include/headerlinks.php') ?>
    <style>
        /* Premium Scoped Leadership Page Styles */
        :root {
            --leader-primary: #006cd8;
            --leader-dark: #071e3d;
            --leader-accent: #00c6ff;
            --leader-gold: #f39c12;
            --leader-bg-light: #f8fafc;
            --leader-card-bg: #ffffff;
            --leader-text-muted: #5e6d77;
            --leader-radius: 16px;
            --leader-transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .leadership-hero {
            background: linear-gradient(135deg, #04152e 0%, #00458e 50%, #006cd8 100%);
            position: relative;
            padding: 70px 0 80px;
            color: #ffffff;
            overflow: hidden;
        }

        .leadership-hero::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -15%;
            width: 550px;
            height: 550px;
            background: radial-gradient(circle, rgba(0, 198, 255, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .leadership-hero::after {
            content: '';
            position: absolute;
            bottom: -40%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(0, 108, 216, 0.25) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #00c6ff;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 6px 18px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 42px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.25;
            margin-bottom: 18px;
        }

        .hero-subtitle {
            font-size: 17px;
            color: rgba(255, 255, 255, 0.88);
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.65;
        }

        .leader-section-title {
            text-align: center;
            margin-bottom: 55px;
        }

        .leader-section-title .sub-heading {
            color: var(--leader-primary);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: block;
            margin-bottom: 10px;
        }

        .leader-section-title .main-heading {
            font-size: 34px;
            font-weight: 700;
            color: var(--leader-dark);
            position: relative;
            display: inline-block;
        }

        .leader-section-title .main-heading::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--leader-primary), var(--leader-accent));
            margin: 14px auto 0;
            border-radius: 4px;
        }

        /* Founder Cards Styling */
        .founder-card {
            background: var(--leader-card-bg);
            border-radius: var(--leader-radius);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(0, 108, 216, 0.12);
            overflow: hidden;
            transition: var(--leader-transition);
            margin-bottom: 50px;
            position: relative;
        }

        .founder-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 55px rgba(0, 108, 216, 0.15);
            border-color: rgba(0, 108, 216, 0.35);
        }

        .founder-card-inner {
            padding: 40px;
        }

        .founder-image-box {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: linear-gradient(180deg, #f0f7ff 0%, #e2effe 100%);
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 108, 216, 0.08);
            padding: 0;
            width: 100%;
            max-width: 440px;
            margin: 0 auto;
            aspect-ratio: 533 / 667;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .founder-image-box img {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            object-position: top center;
            border-radius: 16px;
            transition: var(--leader-transition);
        }

        .founder-card:hover .founder-image-box img {
            transform: scale(1.03);
        }

        .founder-tag-pill {
            position: absolute;
            bottom: 15px;
            right: 15px;
            z-index: 10;
            background: rgba(7, 30, 61, 0.92);
            backdrop-filter: blur(8px);
            color: #00c6ff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            padding: 6px 14px;
            border-radius: 6px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            text-transform: uppercase;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            pointer-events: none;
        }

        .founder-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .founder-name {
            font-size: 28px;
            font-weight: 700;
            color: var(--leader-dark);
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .verified-badge {
            color: #006cd8;
            font-size: 20px;
        }

        .founder-role {
            font-size: 16px;
            font-weight: 600;
            color: var(--leader-primary);
            margin-bottom: 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .founder-bio {
            font-size: 15px;
            line-height: 1.75;
            color: var(--leader-text-muted);
            margin-bottom: 22px;
            text-align: justify;
        }

        /* Stats Counter Grid inside Founder Card */
        .founder-stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            background: #f4f8fd;
            padding: 16px;
            border-radius: 12px;
            border: 1px solid #e2edf8;
            margin-bottom: 22px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 22px;
            font-weight: 700;
            color: var(--leader-dark);
            line-height: 1;
            margin-bottom: 4px;
        }

        .stat-number span {
            color: var(--leader-primary);
        }

        .stat-label {
            font-size: 11px;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Quote Box */
        .founder-quote {
            background: #ffffff;
            border-left: 4px solid var(--leader-primary);
            padding: 14px 18px;
            border-radius: 0 10px 10px 0;
            margin-bottom: 22px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            position: relative;
        }

        .founder-quote p {
            font-size: 14px;
            font-style: italic;
            color: #334155;
            margin: 0;
            line-height: 1.6;
        }

        /* Skill Pills */
        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 25px;
        }

        .skill-pill {
            background: #eef5fc;
            color: #0056b3;
            font-size: 12px;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 6px;
            border: 1px solid #d0e3f7;
            transition: var(--leader-transition);
        }

        .skill-pill:hover {
            background: var(--leader-primary);
            color: #ffffff;
            border-color: var(--leader-primary);
        }

        /* Action Buttons */
        .founder-actions {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-leader-primary {
            background: linear-gradient(135deg, #006cd8 0%, #00458e 100%);
            color: #ffffff !important;
            font-size: 13.5px;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none !important;
            box-shadow: 0 4px 12px rgba(0, 108, 216, 0.25);
            transition: var(--leader-transition);
        }

        .btn-leader-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 108, 216, 0.35);
            background: linear-gradient(135deg, #0052a5 0%, #003268 100%);
        }

        .btn-leader-whatsapp {
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
            color: #ffffff !important;
            font-size: 13.5px;
            font-weight: 600;
            padding: 10px 22px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none !important;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
            transition: var(--leader-transition);
        }

        .btn-leader-whatsapp:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(37, 211, 102, 0.45);
            background: linear-gradient(135deg, #20bd5a 0%, #0e7065 100%);
        }

        .btn-leader-outline {
            background: transparent;
            color: var(--leader-dark) !important;
            border: 1px solid #cbd5e1;
            font-size: 13.5px;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none !important;
            transition: var(--leader-transition);
        }

        .btn-leader-outline:hover {
            border-color: var(--leader-primary);
            color: var(--leader-primary) !important;
            background: #f8fafc;
        }

        /* Value Pillars Section */
        .leadership-pillars {
            background: var(--leader-bg-light);
            padding: 80px 0;
        }

        .pillar-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 32px 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            border: 1px solid #e2e8f0;
            transition: var(--leader-transition);
            height: 100%;
        }

        .pillar-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(0, 108, 216, 0.12);
            border-color: rgba(0, 108, 216, 0.3);
        }

        .pillar-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(135deg, #eef5fc 0%, #dbeafe 100%);
            color: var(--leader-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 22px;
        }

        .pillar-title {
            font-size: 19px;
            font-weight: 700;
            color: var(--leader-dark);
            margin-bottom: 12px;
        }

        .pillar-desc {
            font-size: 14px;
            color: var(--leader-text-muted);
            line-height: 1.65;
            margin: 0;
        }

        /* Overall Company Stats Bar */
        .leadership-stats-bar {
            background: linear-gradient(135deg, #071e3d 0%, #00458e 100%);
            color: #ffffff;
            padding: 45px 0;
            border-radius: 16px;
            margin: 40px 0 70px;
            box-shadow: 0 15px 35px rgba(7, 30, 61, 0.2);
        }

        .main-stat-box {
            text-align: center;
            padding: 10px 15px;
        }

        .main-stat-val {
            font-size: 38px;
            font-weight: 700;
            color: #00c6ff;
            line-height: 1;
            margin-bottom: 6px;
        }

        .main-stat-lbl {
            font-size: 13px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.85);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Leadership CTA */
        .leadership-cta {
            background: linear-gradient(135deg, #04152e 0%, #00458e 100%);
            border-radius: 20px;
            padding: 50px 40px;
            color: #ffffff;
            box-shadow: 0 20px 45px rgba(7, 30, 61, 0.25);
            position: relative;
            overflow: hidden;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        .leadership-cta::after {
            content: '';
            position: absolute;
            right: -80px;
            bottom: -80px;
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(0, 198, 255, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .cta-title {
            font-size: 30px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .cta-desc {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.85);
            max-width: 650px;
            margin: 0 0 25px;
            line-height: 1.6;
        }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 32px;
            }

            .founder-card-inner {
                padding: 28px;
            }

            .founder-name {
                font-size: 24px;
            }

            .founder-stats-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 8px;
                padding: 12px;
            }

            .stat-number {
                font-size: 18px;
            }

            .stat-label {
                font-size: 10px;
            }

            .founder-image-box {
                max-width: 380px;
                margin-bottom: 25px;
            }

            .main-stat-val {
                font-size: 30px;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 26px;
            }

            .hero-subtitle {
                font-size: 14px;
            }

            .founder-stats-grid {
                grid-template-columns: repeat(1, 1fr);
                gap: 10px;
                text-align: center;
            }

            .stat-item {
                padding: 6px 0;
                border-bottom: 1px dashed #cbd5e1;
            }

            .stat-item:last-child {
                border-bottom: none;
            }

            .founder-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-leader-primary, .btn-leader-whatsapp, .btn-leader-outline {
                justify-content: center;
                width: 100%;
            }

            .leadership-cta {
                padding: 30px 20px;
                text-align: center;
            }

            .cta-title {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <?php include('include/header.php') ?>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Meet Our Co-Founders</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active">Meet Our Co-Founders</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!-- =========== Founders Showcase Start ============= -->
        <div class="section-space--pt_90 section-space--pb_30">
            <div class="container">
                
               

                <!-- Co-Founder 1: Er. Gopal Singh -->
                <div class="founder-card wow move-up">
                    <div class="founder-card-inner">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="founder-image-box">
                                    <img src="<?= base_url('public/assets/images/team/gopal-singh-co-founder.png') ?>" 
                                         alt="Er. Gopal Singh - Co-Founder DigiCoders" 
                                         title="Er. Gopal Singh - Training & Development Head" 
                                         class="img-fluid"
                                         onerror="this.src='<?= base_url('public/assets/images/Er.-Gopal-Singh-digicoders.jpeg') ?>';" />
                                    <span class="founder-tag-pill">Co-Founder & Director</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="founder-info pl-lg-4">
                                    <h3 class="founder-name">
                                        Er. Gopal Singh 
                                        <i class="fas fa-check-circle verified-badge" title="Verified Founder"></i>
                                    </h3>
                                    <div class="founder-role">
                                        <i class="fas fa-laptop-code"></i> Head of Training & Development | Co-Founder
                                    </div>

                                    <p class="founder-bio">
                                        Er. Gopal Singh brings over 10+ years of robust software development and educational leadership to DigiCoders. 
                                        Having personally architected and delivered more than 500+ high-complexity IT projects, he oversees DigiCoders’ 
                                        technical training programs, empowering over 21,000+ students and professionals into industry-ready software engineers. 
                                        He is a renowned tech mentor, strategist, and full-stack visionary.
                                    </p>

                                    <!-- Quick Stats Grid -->
                                    <div class="founder-stats-grid">
                                        <div class="stat-item">
                                            <div class="stat-number">10<span>+</span></div>
                                            <div class="stat-label">Years Exp.</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-number">500<span>+</span></div>
                                            <div class="stat-label">Projects Built</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-number">21,000<span>+</span></div>
                                            <div class="stat-label">Mentees Trained</div>
                                        </div>
                                    </div>

                                    <!-- Quote Box -->
                                    <div class="founder-quote">
                                        <p>"Technology is not just about writing code; it’s about solving real-world challenges and nurturing the next generation of digital innovators."</p>
                                    </div>

                                    <!-- Skill Tags -->
                                    <div class="skill-tags">
                                        <span class="skill-pill">Full-Stack Architecture</span>
                                        <span class="skill-pill">Corporate Training</span>
                                        <span class="skill-pill">Tech Mentorship</span>
                                        <span class="skill-pill">Enterprise Solutions</span>
                                    </div>

                                    <!-- Direct Action Links -->
                                    <div class="founder-actions">
                                        <a href="tel:6394296293" class="btn-leader-primary">
                                            <i class="fas fa-phone-alt"></i> Call Er. Gopal (6394296293)
                                        </a>
                                        <a href="https://wa.me/916394296293?text=Hello%20Er.%20Gopal%20Singh,%20I%20want%20to%20discuss%20a%20project" target="_blank" class="btn-leader-whatsapp">
                                            <i class="fab fa-whatsapp"></i> WhatsApp Chat
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Co-Founder 2: Er. Himanshu Kashyap -->
                <div class="founder-card wow move-up">
                    <div class="founder-card-inner">
                        <div class="row align-items-center">
                            <div class="col-lg-5 order-lg-2">
                                <div class="founder-image-box">
                                    <img src="<?= base_url('public/assets/images/team/himanshu-kashyap-co-founder.png') ?>" 
                                         alt="Er. Himanshu Kashyap - Co-Founder DigiCoders" 
                                         title="Er. Himanshu Kashyap - Sr. Project Manager" 
                                         class="img-fluid"
                                         onerror="this.src='<?= base_url('public/assets/images/Er.-Himanshu-Kashyap-digicoders.jpeg') ?>';" />
                                    <span class="founder-tag-pill">Co-Founder & Director</span>
                                </div>
                            </div>
                            <div class="col-lg-7 order-lg-1">
                                <div class="founder-info pr-lg-4">
                                    <h3 class="founder-name">
                                        Er. Himanshu Kashyap 
                                        <i class="fas fa-check-circle verified-badge" title="Verified Founder"></i>
                                    </h3>
                                    <div class="founder-role">
                                        <i class="fas fa-tasks"></i> Head of Projects & Operations | Co-Founder
                                    </div>

                                    <p class="founder-bio">
                                        Er. Himanshu Kashyap spearheads DigiCoders' project development wing and commercial operations with over 10+ years 
                                        of industry experience. With a proven track record of managing and successfully deploying 700+ web, mobile, and enterprise 
                                        software applications, he ensures seamless execution, agile delivery, and maximum client satisfaction for clients across India and abroad.
                                    </p>

                                    <!-- Quick Stats Grid -->
                                    <div class="founder-stats-grid">
                                        <div class="stat-item">
                                            <div class="stat-number">10<span>+</span></div>
                                            <div class="stat-label">Years Exp.</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-number">700<span>+</span></div>
                                            <div class="stat-label">Projects Delivered</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-number">21,000<span>+</span></div>
                                            <div class="stat-label">Students Guided</div>
                                        </div>
                                    </div>

                                    <!-- Quote Box -->
                                    <div class="founder-quote">
                                        <p>"Our commitment is simple — execute robust digital products that scale businesses while upholding speed, precision, and absolute integrity."</p>
                                    </div>

                                    <!-- Skill Tags -->
                                    <div class="skill-tags">
                                        <span class="skill-pill">Agile Project Management</span>
                                        <span class="skill-pill">Web & App Engineering</span>
                                        <span class="skill-pill">Operations & Strategy</span>
                                        <span class="skill-pill">Client Success</span>
                                    </div>

                                    <!-- Direct Action Links -->
                                    <div class="founder-actions">
                                        <a href="tel:9198483820" class="btn-leader-primary">
                                            <i class="fas fa-phone-alt"></i> Call Er. Himanshu (9198483820)
                                        </a>
                                        <a href="https://wa.me/919198483820?text=Hello%20Er.%20Himanshu%20Kashyap,%20I%20want%20to%20discuss%20a%20project" target="_blank" class="btn-leader-whatsapp">
                                            <i class="fab fa-whatsapp"></i> WhatsApp Chat
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Combined Cumulative Milestones Bar -->
                <div class="leadership-stats-bar">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="main-stat-box">
                                <div class="main-stat-val">2019</div>
                                <div class="main-stat-lbl">Established Year</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="main-stat-box">
                                <div class="main-stat-val">1,000+</div>
                                <div class="main-stat-lbl">Commercial Projects</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="main-stat-box">
                                <div class="main-stat-val">21,000+</div>
                                <div class="main-stat-lbl">Mentees Impacted</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="main-stat-box">
                                <div class="main-stat-val">850+</div>
                                <div class="main-stat-lbl">Happy Clients</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- =========== Founders Showcase End ============= -->

        <!-- =========== Leadership Pillars Start ============= -->
        <div class="leadership-pillars">
            <div class="container">
                <div class="leader-section-title">
                    <span class="sub-heading">Our Core Philosophy</span>
                    <h2 class="main-heading">Pillars of Our Leadership</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pillar-card">
                            <div class="pillar-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h4 class="pillar-title">Technical Mastery</h4>
                            <p class="pillar-desc">
                                Rooted in deep 10+ years full-stack engineering expertise, our leadership ensures cutting-edge architecture in every project.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pillar-card">
                            <div class="pillar-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h4 class="pillar-title">Empowering Youth</h4>
                            <p class="pillar-desc">
                                Mentoring over 21,000+ aspiring software engineers through live commercial project building and practical skills.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pillar-card">
                            <div class="pillar-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h4 class="pillar-title">Agile Execution</h4>
                            <p class="pillar-desc">
                                Fast-paced, transparent project management ensuring on-time delivery without compromising security or code quality.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="pillar-card">
                            <div class="pillar-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h4 class="pillar-title">Client Satisfaction</h4>
                            <p class="pillar-desc">
                                Building long-term strategic relationships with 850+ clients through dedicated support and business-first solutions.
                            </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- =========== Leadership Pillars End ============= -->
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>

