<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lead Management Software | Sales Lead Tracking System in Lucknow</title>
    <meta name="description" content="Complete lead management software for capturing, tracking, nurturing, and converting leads. Automate your sales pipeline and boost conversions in Lucknow, India.">
    <?php include('include/headerlinks.php') ?>
    <style>
        .feature-icon-box {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            text-align: center;
        }
        .feature-icon-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: #4a6ee0;
        }
        .feature-icon-box i {
            font-size: 40px;
            color: #4a6ee0;
            margin-bottom: 20px;
        }
        .module-badge {
            background: #4a6ee0;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            margin: 5px;
        }
        .pricing-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            background: white;
        }
        .pricing-card:hover {
            border-color: #4a6ee0;
            box-shadow: 0 10px 30px rgba(74, 110, 224, 0.1);
        }
        .pricing-card.featured {
            border: 2px solid #4a6ee0;
            position: relative;
            overflow: hidden;
        }
        .featured-badge {
            position: absolute;
            top: 15px;
            right: -30px;
            background: #4a6ee0;
            color: white;
            padding: 5px 40px;
            transform: rotate(45deg);
            font-size: 12px;
            font-weight: 600;
        }
        .contact-info-box {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
        }
        .contact-info-box h5 {
            color: #4a6ee0;
            margin-bottom: 15px;
        }
        .benefit-card {
            display: flex;
            align-items: flex-start;
            padding: 20px;
            background: #f8f9ff;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .benefit-card:hover {
            background: white;
            box-shadow: 0 5px 15px rgba(74, 110, 224, 0.1);
            transform: translateX(5px);
        }
        .benefit-icon {
            background: #4a6ee0;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }
        .stats-counter {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .counter-number {
            font-size: 40px;
            font-weight: 700;
            color: #4a6ee0;
            margin-bottom: 10px;
        }
        .counter-label {
            color: #666;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .pipeline-stage {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            text-align: center;
            position: relative;
            margin-bottom: 30px;
            border: 2px solid #f0f3ff;
        }
        .pipeline-stage.active {
            border-color: #4a6ee0;
            background: #f0f3ff;
        }
        .pipeline-stage:not(:last-child):after {
            content: '➤';
            position: absolute;
            right: -25px;
            top: 50%;
            transform: translateY(-50%);
            color: #4a6ee0;
            font-size: 20px;
            font-weight: bold;
        }
        .stage-icon {
            width: 50px;
            height: 50px;
            background: #f0f3ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: #4a6ee0;
            font-size: 20px;
            border: 2px solid #4a6ee0;
        }
        .lead-source-badge {
            display: inline-block;
            background: #f0f3ff;
            color: #4a6ee0;
            padding: 8px 20px;
            border-radius: 20px;
            margin: 5px;
            font-size: 14px;
            border: 1px solid #e0e7ff;
        }
        .conversion-chart {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        .chart-bar {
            height: 30px;
            background: #e0e7ff;
            border-radius: 15px;
            margin-bottom: 15px;
            position: relative;
            overflow: hidden;
        }
        .chart-fill {
            height: 100%;
            background: #4a6ee0;
            border-radius: 15px;
            transition: width 1s ease;
        }
        .chart-label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-weight: 600;
            z-index: 1;
        }
        .chart-percentage {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #4a6ee0;
            font-weight: bold;
        }
        .lead-score-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 10px;
        }
        .score-hot { background: #4a6ee0; color: white; }
        .score-warm { background: #6a5af9; color: white; }
        .score-cold { background: #e0e7ff; color: #4a6ee0; }
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
                        <h2 class="breadcrumb-title">Lead Management Software</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Lead Tracking System</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--=========== Lead Management Overview Start =============-->
        <div class="service-projects-wrapper section-space--pt_100 mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 order-2 order-lg-1">
                        <div class="service-project-slide-info">
                            <h4 class="heading font-weight--reguler">Complete Lead Management & Tracking System</h4>
                            <div class="text text-justify">
                                Our Lead Management Software is designed to help businesses capture, track, nurture, and convert leads efficiently. From the first touchpoint to final conversion, our platform provides complete visibility into your sales pipeline. With automated lead scoring, intelligent routing, multi-channel capture, and nurturing workflows, you'll never miss a potential customer. Our solution integrates with your website, social media, and email to capture leads from every source and convert them into paying customers.
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check text-success mr-2"></i> Multi-Channel Lead Capture</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Intelligent Lead Scoring</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Automated Lead Routing</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Email & SMS Nurturing</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check text-success mr-2"></i> Pipeline Management</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Conversion Analytics</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Team Collaboration</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Mobile App Access</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 order-1 order-lg-2" style="margin-top:40px">
                        <img src="<?= base_url('public/assets/images/projects/lead-dashboard.jpg') ?>" style="height:280px; width:520px; box-shadow:-10px 10px #f2f2f2;" class="img-fluid leader-img" loading="lazy" title="Lead Management Dashboard" alt="Lead Tracking System" />
                    </div>
                </div>
                <br/><br/><br/>
                
                <!-- Stats Section -->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-5">
                        <h3 class="heading">Impact of Effective <span class="text-color-primary">Lead Management</span></h3>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stats-counter">
                            <div class="counter-number">45%</div>
                            <div class="counter-label">Higher Conversion</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stats-counter">
                            <div class="counter-number">60%</div>
                            <div class="counter-label">Faster Response Time</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stats-counter">
                            <div class="counter-number">35%</div>
                            <div class="counter-label">Cost Reduction</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stats-counter">
                            <div class="counter-number">300%</div>
                            <div class="counter-label">More Qualified Leads</div>
                        </div>
                    </div>
                </div>
                
                <!-------------- Lead Sources ---------------->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-4">
                        <h3 class="heading">Capture Leads from <span class="text-color-primary">Multiple Sources</span></h3>
                        <p class="text">Automatically capture leads from every channel</p>
                    </div>
                    <div class="col-12 text-center">
                        <span class="lead-source-badge">Website Forms</span>
                        <span class="lead-source-badge">Landing Pages</span>
                        <span class="lead-source-badge">Social Media</span>
                        <span class="lead-source-badge">Email Campaigns</span>
                        <span class="lead-source-badge">Phone Calls</span>
                        <span class="lead-source-badge">Live Chat</span>
                        <span class="lead-source-badge">WhatsApp</span>
                        <span class="lead-source-badge">API Integration</span>
                    </div>
                </div>
                
                <!-------------- Core Features ---------------->
                <div class="site-wrapper-reveal">
                    <div class="feature-large-images-wrapper ">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center mb-5">
                                    <h3 class="heading">Core <span class="text-color-primary">Features</span></h3>
                                    <p class="text">Everything you need to manage leads effectively</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- Feature Box Start -->
                                    <div class="feature-icon-box">
                                        <div class="box-icon">
                                            <i class="fa fa-bullseye"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Lead Capture & Import</h5>
                                            <div class="text">
                                                Capture leads from multiple channels automatically
                                            </div>
                                            <div class="mt-3">
                                                <span class="module-badge">Web Forms</span>
                                                <span class="module-badge">Landing Pages</span>
                                                <span class="module-badge">CSV Import</span>
                                                <span class="module-badge">API Integration</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- Feature Box Start -->
                                    <div class="feature-icon-box">
                                        <div class="box-icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Intelligent Lead Scoring</h5>
                                            <div class="text">
                                                Automatically score leads based on behavior
                                            </div>
                                            <div class="mt-3">
                                                <span class="module-badge">Behavior Scoring</span>
                                                <span class="module-badge">Demographic Scoring</span>
                                                <span class="module-badge">Custom Rules</span>
                                                <span class="module-badge">Priority Ranking</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- Feature Box Start -->
                                    <div class="feature-icon-box">
                                        <div class="box-icon">
                                            <i class="fa fa-random"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Automated Lead Routing</h5>
                                            <div class="text">
                                                Distribute leads to right sales reps automatically
                                            </div>
                                            <div class="mt-3">
                                                <span class="module-badge">Round Robin</span>
                                                <span class="module-badge">Territory Based</span>
                                                <span class="module-badge">Skill Based</span>
                                                <span class="module-badge">Load Balancing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up mt-4">
                                    <!-- Feature Box Start -->
                                    <div class="feature-icon-box">
                                        <div class="box-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Lead Nurturing</h5>
                                            <div class="text">
                                                Automated email & SMS campaigns for leads
                                            </div>
                                            <div class="mt-3">
                                                <span class="module-badge">Drip Campaigns</span>
                                                <span class="module-badge">Email Templates</span>
                                                <span class="module-badge">SMS Automation</span>
                                                <span class="module-badge">Personalization</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up mt-4">
                                    <!-- Feature Box Start -->
                                    <div class="feature-icon-box">
                                        <div class="box-icon">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Pipeline Management</h5>
                                            <div class="text">
                                                Visual pipeline with stage tracking
                                            </div>
                                            <div class="mt-3">
                                                <span class="module-badge">Custom Stages</span>
                                                <span class="module-badge">Deal Tracking</span>
                                                <span class="module-badge">Activity Tracking</span>
                                                <span class="module-badge">Forecasting</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up mt-4">
                                    <!-- Feature Box Start -->
                                    <div class="feature-icon-box">
                                        <div class="box-icon">
                                            <i class="fa fa-bar-chart"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Analytics & Reporting</h5>
                                            <div class="text">
                                                Detailed lead conversion analytics
                                            </div>
                                            <div class="mt-3">
                                                <span class="module-badge">Conversion Rates</span>
                                                <span class="module-badge">Source Analytics</span>
                                                <span class="module-badge">ROI Tracking</span>
                                                <span class="module-badge">Team Performance</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/><br/><br/>
                
                <!-- Lead Pipeline Stages -->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-5">
                        <h3 class="heading">Lead <span class="text-color-primary">Pipeline Stages</span></h3>
                        <p class="text">Track leads through every stage of the sales process</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="pipeline-stage active">
                                    <div class="stage-icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <h6>New Lead</h6>
                                    <p class="small mb-0">Lead captured from source</p>
                                    <div class="mt-2">
                                        <span class="lead-score-badge score-cold">Cold</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="pipeline-stage">
                                    <div class="stage-icon">
                                        <i class="fa fa-filter"></i>
                                    </div>
                                    <h6>Qualified</h6>
                                    <p class="small mb-0">Initial contact made</p>
                                    <div class="mt-2">
                                        <span class="lead-score-badge score-warm">Warm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="pipeline-stage">
                                    <div class="stage-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <h6>Contacted</h6>
                                    <p class="small mb-0">Detailed discussion</p>
                                    <div class="mt-2">
                                        <span class="lead-score-badge score-warm">Warm</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="pipeline-stage">
                                    <div class="stage-icon">
                                        <i class="fa fa-file-text"></i>
                                    </div>
                                    <h6>Proposal Sent</h6>
                                    <p class="small mb-0">Quote/proposal shared</p>
                                    <div class="mt-2">
                                        <span class="lead-score-badge score-hot">Hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="pipeline-stage">
                                    <div class="stage-icon">
                                        <i class="fa fa-handshake-o"></i>
                                    </div>
                                    <h6>Negotiation</h6>
                                    <p class="small mb-0">Terms being discussed</p>
                                    <div class="mt-2">
                                        <span class="lead-score-badge score-hot">Hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="pipeline-stage">
                                    <div class="stage-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <h6>Converted</h6>
                                    <p class="small mb-0">Lead became customer</p>
                                    <div class="mt-2">
                                        <span class="lead-score-badge" style="background:#2c6e49; color:white;">Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Conversion Chart -->
                <div class="row mb-5">
                    <div class="col-lg-6 mb-4">
                        <div class="conversion-chart">
                            <h5 class="mb-4">Lead Conversion Funnel</h5>
                            <div class="chart-bar">
                                <div class="chart-fill" style="width: 100%"></div>
                                <span class="chart-label">Leads Captured</span>
                                <span class="chart-percentage">100% (1000)</span>
                            </div>
                            <div class="chart-bar">
                                <div class="chart-fill" style="width: 70%"></div>
                                <span class="chart-label">Qualified Leads</span>
                                <span class="chart-percentage">70% (700)</span>
                            </div>
                            <div class="chart-bar">
                                <div class="chart-fill" style="width: 45%"></div>
                                <span class="chart-label">Contacted</span>
                                <span class="chart-percentage">45% (450)</span>
                            </div>
                            <div class="chart-bar">
                                <div class="chart-fill" style="width: 30%"></div>
                                <span class="chart-label">Proposals Sent</span>
                                <span class="chart-percentage">30% (300)</span>
                            </div>
                            <div class="chart-bar">
                                <div class="chart-fill" style="width: 20%"></div>
                                <span class="chart-label">Converted to Customers</span>
                                <span class="chart-percentage">20% (200)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="service-project-slide-info">
                            <h4 class="heading font-weight--reguler mb-4">Benefits of Lead Management Software</h4>
                            <div class="text text-justify">
                                Our Lead Management Software transforms how you handle potential customers. By automating lead capture, scoring, and nurturing, you can focus on high-value activities while the system handles routine tasks. Improve response times, increase conversion rates, and grow your revenue with intelligent lead management.
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="benefit-card">
                                        <div class="benefit-icon">
                                            <i class="fa fa-bolt"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Instant Response</h6>
                                            <p class="mb-0 small">Auto-respond to leads in seconds</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-card">
                                        <div class="benefit-icon">
                                            <i class="fa fa-filter"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Better Prioritization</h6>
                                            <p class="mb-0 small">Focus on hot leads first</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-card">
                                        <div class="benefit-icon">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Higher Conversion</h6>
                                            <p class="mb-0 small">Convert more leads to customers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-card">
                                        <div class="benefit-icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Team Collaboration</h6>
                                            <p class="mb-0 small">Share leads and notes easily</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-------------- Pricing Section ---------------->
                <!-- <div class="row mt-5 pt-5">
                    <div class="col-12 text-center mb-5">
                        <h3 class="heading">Lead Management <span class="text-color-primary">Pricing Plans</span></h3>
                        <p class="text">Simple pricing based on leads and users</p>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="pricing-card">
                            <h4 class="heading">Startup</h4>
                            <div class="price mt-3">
                                <h2>₹2,999<span class="text-muted small">/month</span></h2>
                            </div>
                            <div class="features mt-4">
                                <p><i class="fa fa-check text-success mr-2"></i> Up to 3 Users</p>
                                <p><i class="fa fa-check text-success mr-2"></i> 500 Leads/Month</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Basic Capture</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Email Integration</p>
                                <p><i class="fa fa-times text-muted mr-2"></i> <del>Lead Scoring</del></p>
                                <p><i class="fa fa-times text-muted mr-2"></i> <del>Automated Nurturing</del></p>
                            </div>
                            <a href="<?= base_url() ?>Home/ContactUs" class="btn btn-outline-primary mt-4">Get Started</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="pricing-card featured">
                            <div class="featured-badge">Popular</div>
                            <h4 class="heading">Professional</h4>
                            <div class="price mt-3">
                                <h2>₹6,999<span class="text-muted small">/month</span></h2>
                            </div>
                            <div class="features mt-4">
                                <p><i class="fa fa-check text-success mr-2"></i> Up to 10 Users</p>
                                <p><i class="fa fa-check text-success mr-2"></i> 2000 Leads/Month</p>
                                <p><i class="fa fa-check text-success mr-2"></i> All Startup Features</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Lead Scoring</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Automated Nurturing</p>
                                <p><i class="fa fa-times text-muted mr-2"></i> <del>Custom Workflows</del></p>
                            </div>
                            <a href="<?= base_url() ?>Home/ContactUs" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="pricing-card">
                            <h4 class="heading">Enterprise</h4>
                            <div class="price mt-3">
                                <h2>₹14,999<span class="text-muted small">/month</span></h2>
                            </div>
                            <div class="features mt-4">
                                <p><i class="fa fa-check text-success mr-2"></i> Unlimited Users</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Unlimited Leads</p>
                                <p><i class="fa fa-check text-success mr-2"></i> All Professional Features</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Custom Workflows</p>
                                <p><i class="fa fa-check text-success mr-2"></i> API Access</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Dedicated Support</p>
                            </div>
                            <a href="<?= base_url() ?>Home/ContactUs" class="btn btn-outline-primary mt-4">Get Started</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--=========== Lead Management Overview End =============-->
    </div>
    
    <!------------------ Contact Info Section --------------------->
    <div class="contact-us-section-wrappaer section-space--ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="conact-us-wrap-one text-center">
                        <h3 class="heading">Lead Management Software <span class="text-color-primary">Company in Lucknow</span></h3>
                        <div class="sub-heading mt-3 mb-5">
                            We provide custom lead management solutions that help you capture more leads, nurture them effectively, and convert them into customers. Whether you're a small business or a large enterprise, our software can be customized to fit your sales process perfectly. Get a free demo and see how our lead management system can boost your sales.
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="contact-info-box">
                                            <i class="fa fa-rocket fa-3x text-primary mb-3"></i>
                                            <h5>Quick Setup</h5>
                                            <p>Get started in 3 days with minimal configuration required</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="contact-info-box">
                                            <i class="fa fa-graduation-cap fa-3x text-primary mb-3"></i>
                                            <h5>Free Training</h5>
                                            <p>Complete training for your sales and marketing teams</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="contact-info-box">
                                            <i class="fa fa-database fa-3x text-primary mb-3"></i>
                                            <h5>Data Import</h5>
                                            <p>Import existing leads from Excel, CRM, or other systems</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="contact-info-box">
                                    <h5 class="text-color-primary">Why Choose Our Lead Management?</h5>
                                    <div class="row mt-3">
                                        <div class="col-md-6 text-left">
                                            <p><i class="fa fa-check-circle text-success mr-2"></i> Multi-channel lead capture</p>
                                            <p><i class="fa fa-check-circle text-success mr-2"></i> Automated lead scoring</p>
                                            <p><i class="fa fa-check-circle text-success mr-2"></i> Email & SMS nurturing</p>
                                        </div>
                                        <div class="col-md-6 text-left">
                                            <p><i class="fa fa-check-circle text-success mr-2"></i> Real-time analytics dashboard</p>
                                            <p><i class="fa fa-check-circle text-success mr-2"></i> Mobile app for sales teams</p>
                                            <p><i class="fa fa-check-circle text-success mr-2"></i> 24/7 customer support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="mt-5">
                            <h4 class="mb-4">Ready to Boost Your Lead Conversion?</h4>
                            <a href="<?= base_url() ?>Home/ContactUs" class="btn btn-primary btn-lg mr-3">Request Free Demo</a>
                            <a href="tel:+919876543210" class="btn btn-outline-primary btn-lg">Call Now: +91 9876543210</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
    
    <script>
        // Lazy loading initialization
        document.addEventListener("DOMContentLoaded", function() {
            var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            
            if ("IntersectionObserver" in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            lazyImage.src = lazyImage.dataset.src;
                            lazyImage.classList.remove("lazy");
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });
                
                lazyImages.forEach(function(lazyImage) {
                    lazyImageObserver.observe(lazyImage);
                });
            }
            
            // Animate conversion chart bars on scroll
            const chartBars = document.querySelectorAll('.chart-fill');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const bar = entry.target;
                        const width = bar.style.width;
                        bar.style.width = '0%';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 300);
                        observer.unobserve(bar);
                    }
                });
            }, { threshold: 0.5 });
            
            chartBars.forEach(bar => observer.observe(bar));
        });
    </script>
</body>

</html>
