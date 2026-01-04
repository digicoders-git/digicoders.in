<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fee Management Software | School & College Fee Collection System in Lucknow</title>
    <meta name="description" content="Complete fee management software for educational institutions. Automate fee collection, receipts, due reminders, and accounting in Lucknow, India.">
    <?php include('include/headerlinks.php') ?>
    <style>
        .fee-feature-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100%;
            transition: all 0.3s ease;
            border-left: 4px solid #2d7d9a;
            border-top: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            text-align: center;
        }
        .fee-feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(45, 125, 154, 0.1);
            border-color: #2d7d9a;
        }
        .fee-feature-card i {
            font-size: 40px;
            color: #2d7d9a;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #2d7d9a, #34a0c7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .fee-module-badge {
            background: linear-gradient(135deg, #2d7d9a, #34a0c7);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            margin: 3px;
        }
        .fee-pricing-card {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            background: white;
            position: relative;
        }
        .fee-pricing-card:hover {
            border-color: #2d7d9a;
            box-shadow: 0 10px 30px rgba(45, 125, 154, 0.1);
        }
        .fee-pricing-card.featured {
            border: 3px solid #2d7d9a;
            transform: scale(1.05);
        }
        .fee-featured-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #2d7d9a, #34a0c7);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .fee-benefit-card {
            display: flex;
            align-items: center;
            padding: 20px;
            background: #f0f8fb;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .fee-benefit-card:hover {
            background: white;
            box-shadow: 0 5px 15px rgba(45, 125, 154, 0.1);
            transform: translateX(5px);
        }
        .fee-benefit-icon {
            background: linear-gradient(135deg, #2d7d9a, #34a0c7);
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
        .fee-stat-box {
            text-align: center;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-top: 4px solid #2d7d9a;
        }
        .fee-stat-number {
            font-size: 36px;
            font-weight: 700;
            background: linear-gradient(135deg, #2d7d9a, #34a0c7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }
        .fee-process-step {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            text-align: center;
            position: relative;
            margin-bottom: 30px;
            border: 2px solid #f0f8fb;
        }
        .fee-process-step:not(:last-child):after {
            content: '⇢';
            position: absolute;
            right: -25px;
            top: 50%;
            transform: translateY(-50%);
            color: #2d7d9a;
            font-size: 24px;
            font-weight: bold;
        }
        .process-icon {
            width: 60px;
            height: 60px;
            background: #f0f8fb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: #2d7d9a;
            font-size: 24px;
            border: 2px solid #2d7d9a;
        }
        .payment-method-badge {
            display: inline-block;
            background: #f0f8fb;
            color: #2d7d9a;
            padding: 10px 20px;
            border-radius: 10px;
            margin: 5px;
            font-size: 14px;
            border: 1px solid #d0e7f0;
            min-width: 120px;
            text-align: center;
        }
        .fee-report-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
        }
        .fee-report-card:hover {
            border-color: #2d7d9a;
            transform: translateY(-3px);
        }
        .report-icon {
            font-size: 30px;
            color: #2d7d9a;
            margin-bottom: 15px;
        }
        .fee-type-badge {
            display: inline-block;
            background: #e8f4f8;
            color: #2d7d9a;
            padding: 5px 15px;
            border-radius: 15px;
            margin: 3px;
            font-size: 12px;
            font-weight: 600;
        }
        .fee-status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }
        .status-paid { background: #d4edda; color: #155724; }
        .status-pending { background: #fff3cd; color: #856404; }
        .status-overdue { background: #f8d7da; color: #721c24; }
        .status-partial { background: #cce5ff; color: #004085; }
        
        .invoice-preview {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px dashed #2d7d9a;
            margin: 20px 0;
        }
        .invoice-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f8fb;
            margin-bottom: 20px;
        }
        .invoice-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #f0f8fb;
        }
        .invoice-total {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-top: 2px solid #2d7d9a;
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
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
                        <h2 class="breadcrumb-title">Fee Management Software</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Fee Collection System</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--=========== Fee Management Overview Start =============-->
        <div class="service-projects-wrapper section-space--pt_100 mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 order-2 order-lg-1">
                        <div class="service-project-slide-info">
                            <h4 class="heading font-weight--reguler">Complete Fee Collection & Management System</h4>
                            <div class="text text-justify">
                                Our Fee Management Software is designed specifically for educational institutions to automate the entire fee collection process. From fee structure creation to receipt generation, due reminders, and accounting integration, our platform simplifies fee management for schools, colleges, and coaching institutes. With support for multiple payment methods, installment plans, concession management, and real-time reporting, you can eliminate manual errors, reduce administrative workload, and improve fee collection efficiency.
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check text-success mr-2"></i> Online Fee Payment</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Multiple Payment Methods</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Automated Receipts</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Due Date Reminders</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check text-success mr-2"></i> Installment Management</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Concession & Discounts</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Real-time Reports</li>
                                        <li><i class="fa fa-check text-success mr-2"></i> Parent Mobile App</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 order-1 order-lg-2" style="margin-top:40px">
                        <img data-src="<?= base_url('public') ?>/assets/images/projects/fee-dashboard.jpg" src="<?= base_url('public') ?>/assets/images/loader1.jpg" style="height:280px; width:520px; box-shadow:-10px 10px #f2f2f2;" class="lazy img-fluid leader-img" title="Fee Management Dashboard" alt="Fee Collection System" />
                    </div>
                </div>
                <br/><br/><br/>
                
                <!-- Stats Section -->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-5">
                        <h3 class="heading">Fee Management <span class="text-color-primary">Benefits</span></h3>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="fee-stat-box">
                            <div class="fee-stat-number">90%</div>
                            <div class="counter-label">Collection Efficiency</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="fee-stat-box">
                            <div class="fee-stat-number">70%</div>
                            <div class="counter-label">Time Saved</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="fee-stat-box">
                            <div class="fee-stat-number">100%</div>
                            <div class="counter-label">Error Free</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="fee-stat-box">
                            <div class="fee-stat-number">24/7</div>
                            <div class="counter-label">Payment Access</div>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Methods -->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-4">
                        <h3 class="heading">Multiple <span class="text-color-primary">Payment Methods</span></h3>
                        <p class="text">Accept fee payments through various channels</p>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-credit-card mr-2"></i> Credit Card
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-bank mr-2"></i> Net Banking
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-mobile mr-2"></i> UPI
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-wallet mr-2"></i> Wallet
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-money mr-2"></i> Cash
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-university mr-2"></i> Bank Transfer
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-qrcode mr-2"></i> QR Code
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                                <div class="payment-method-badge">
                                    <i class="fa fa-cc-paypal mr-2"></i> Cheque/DD
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-------------- Core Features ---------------->
                <div class="site-wrapper-reveal">
                    <div class="feature-large-images-wrapper ">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center mb-5">
                                    <h3 class="heading">Core <span class="text-color-primary">Features</span></h3>
                                    <p class="text">Complete fee management solution for educational institutions</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- Feature Box Start -->
                                    <div class="fee-feature-card">
                                        <div class="box-icon">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Fee Structure Setup</h5>
                                            <div class="text">
                                                Create flexible fee structures for different classes
                                            </div>
                                            <div class="mt-3">
                                                <span class="fee-module-badge">Class-wise</span>
                                                <span class="fee-module-badge">Category-wise</span>
                                                <span class="fee-module-badge">Installments</span>
                                                <span class="fee-module-badge">Fine Rules</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- Feature Box Start -->
                                    <div class="fee-feature-card">
                                        <div class="box-icon">
                                            <i class="fa fa-credit-card"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Online Payment</h5>
                                            <div class="text">
                                                Secure online payment gateway integration
                                            </div>
                                            <div class="mt-3">
                                                <span class="fee-module-badge">UPI</span>
                                                <span class="fee-module-badge">Net Banking</span>
                                                <span class="fee-module-badge">Cards</span>
                                                <span class="fee-module-badge">Wallets</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- Feature Box Start -->
                                    <div class="fee-feature-card">
                                        <div class="box-icon">
                                            <i class="fa fa-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Receipt Generation</h5>
                                            <div class="text">
                                                Automatic receipt generation with custom templates
                                            </div>
                                            <div class="mt-3">
                                                <span class="fee-module-badge">Auto Numbering</span>
                                                <span class="fee-module-badge">Custom Design</span>
                                                <span class="fee-module-badge">Email/SMS</span>
                                                <span class="fee-module-badge">Print/Download</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up mt-4">
                                    <!-- Feature Box Start -->
                                    <div class="fee-feature-card">
                                        <div class="box-icon">
                                            <i class="fa fa-bell"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Due Reminders</h5>
                                            <div class="text">
                                                Automated reminders for pending fees
                                            </div>
                                            <div class="mt-3">
                                                <span class="fee-module-badge">SMS Alerts</span>
                                                <span class="fee-module-badge">Email Notifications</span>
                                                <span class="fee-module-badge">WhatsApp</span>
                                                <span class="fee-module-badge">Mobile Push</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up mt-4">
                                    <!-- Feature Box Start -->
                                    <div class="fee-feature-card">
                                        <div class="box-icon">
                                            <i class="fa fa-percent"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Concession Management</h5>
                                            <div class="text">
                                                Manage scholarships and fee concessions
                                            </div>
                                            <div class="mt-3">
                                                <span class="fee-module-badge">Sibling Discount</span>
                                                <span class="fee-module-badge">Early Bird</span>
                                                <span class="fee-module-badge">Scholarship</span>
                                                <span class="fee-module-badge">Staff Concession</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Feature Box End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up mt-4">
                                    <!-- Feature Box Start -->
                                    <div class="fee-feature-card">
                                        <div class="box-icon">
                                            <i class="fa fa-bar-chart"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Reports & Analytics</h5>
                                            <div class="text">
                                                Comprehensive fee collection reports
                                            </div>
                                            <div class="mt-3">
                                                <span class="fee-module-badge">Collection Reports</span>
                                                <span class="fee-module-badge">Due Reports</span>
                                                <span class="fee-module-badge">Payment History</span>
                                                <span class="fee-module-badge">Income Statement</span>
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
                
                <!-- Fee Collection Process -->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-5">
                        <h3 class="heading">Fee Collection <span class="text-color-primary">Process</span></h3>
                        <p class="text">Streamlined process from fee setup to collection</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="fee-process-step">
                                    <div class="process-icon">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <h6>Fee Setup</h6>
                                    <p class="small mb-0">Define fee structure for classes</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="fee-process-step">
                                    <div class="process-icon">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <h6>Student Allocation</h6>
                                    <p class="small mb-0">Assign fee structure to students</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="fee-process-step">
                                    <div class="process-icon">
                                        <i class="fa fa-bell"></i>
                                    </div>
                                    <h6>Fee Notification</h6>
                                    <p class="small mb-0">Send fee due notifications</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="fee-process-step">
                                    <div class="process-icon">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <h6>Payment Collection</h6>
                                    <p class="small mb-0">Collect fee online/offline</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="fee-process-step">
                                    <div class="process-icon">
                                        <i class="fa fa-file-text"></i>
                                    </div>
                                    <h6>Receipt Generation</h6>
                                    <p class="small mb-0">Generate payment receipt</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                                <div class="fee-process-step">
                                    <div class="process-icon">
                                        <i class="fa fa-database"></i>
                                    </div>
                                    <h6>Accounting Update</h6>
                                    <p class="small mb-0">Update accounts automatically</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Invoice Preview & Reports -->
                <div class="row mb-5">
                    <div class="col-lg-6 mb-4">
                        <div class="invoice-preview">
                            <div class="invoice-header">
                                <h5 class="text-primary">FEE PAYMENT RECEIPT</h5>
                                <p class="small mb-0">Receipt #: INV-2024-00123</p>
                                <p class="small mb-0">Date: 15 Jan 2024</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>Student:</strong> Rohan Sharma<br>
                                        <small>Class: 10th A | Roll No: 25</small>
                                    </div>
                                    <div>
                                        <span class="fee-status-badge status-paid">PAID</span>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-item">
                                <div>Tuition Fee</div>
                                <div>₹8,500.00</div>
                            </div>
                            <div class="invoice-item">
                                <div>Transport Fee</div>
                                <div>₹2,000.00</div>
                            </div>
                            <div class="invoice-item">
                                <div>Library Fee</div>
                                <div>₹500.00</div>
                            </div>
                            <div class="invoice-item">
                                <div>Sports Fee</div>
                                <div>₹300.00</div>
                            </div>
                            <div class="invoice-item">
                                <div>Late Fee Fine</div>
                                <div>₹200.00</div>
                            </div>
                            <div class="invoice-total">
                                <div>Total Paid</div>
                                <div>₹11,500.00</div>
                            </div>
                            <div class="mt-3 text-center">
                                <small class="text-muted">Payment Mode: Online (UPI) | Transaction ID: TXN123456</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="service-project-slide-info">
                            <h4 class="heading font-weight--reguler mb-4">Fee Types & Reports</h4>
                            <div class="text text-justify mb-4">
                                Our Fee Management Software supports various fee types and generates comprehensive reports for better financial management. Track collections, pending dues, concessions, and generate income statements automatically.
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="mb-3">Supported Fee Types:</h6>
                                <div>
                                    <span class="fee-type-badge">Tuition Fee</span>
                                    <span class="fee-type-badge">Examination Fee</span>
                                    <span class="fee-type-badge">Library Fee</span>
                                    <span class="fee-type-badge">Sports Fee</span>
                                    <span class="fee-type-badge">Transport Fee</span>
                                    <span class="fee-type-badge">Hostel Fee</span>
                                    <span class="fee-type-badge">Lab Fee</span>
                                    <span class="fee-type-badge">Activity Fee</span>
                                    <span class="fee-type-badge">Development Fee</span>
                                    <span class="fee-type-badge">Security Deposit</span>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="fee-report-card">
                                        <div class="report-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <h6>Collection Report</h6>
                                        <p class="small mb-0">Daily, monthly fee collection</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="fee-report-card">
                                        <div class="report-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <h6>Pending Dues</h6>
                                        <p class="small mb-0">Student-wise pending fees</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fee-report-card">
                                        <div class="report-icon">
                                            <i class="fa fa-percent"></i>
                                        </div>
                                        <h6>Concession Report</h6>
                                        <p class="small mb-0">Discounts & scholarships</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fee-report-card">
                                        <div class="report-icon">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <h6>Income Statement</h6>
                                        <p class="small mb-0">Fee income analytics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-7 col-md-7 order-2 order-lg-2">
                        <div class="service-project-slide-info">
                            <h4 class="heading font-weight--reguler mb-10">Benefits for Educational Institutions</h4>
                            <div class="text text-justify">
                                Our Fee Management Software transforms how educational institutions handle fee collection. By automating the entire process, institutions can reduce administrative workload, eliminate manual errors, improve collection efficiency, and enhance parent satisfaction. With real-time reporting and mobile access, stay updated on fee collection status anytime, anywhere.
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="fee-benefit-card">
                                        <div class="fee-benefit-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Time Saving</h6>
                                            <p class="mb-0 small">Reduce fee collection time by 70%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fee-benefit-card">
                                        <div class="fee-benefit-icon">
                                            <i class="fa fa-shield"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Error Free</h6>
                                            <p class="mb-0 small">Eliminate calculation errors</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fee-benefit-card">
                                        <div class="fee-benefit-icon">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Better Cash Flow</h6>
                                            <p class="mb-0 small">Improve fee collection rate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fee-benefit-card">
                                        <div class="fee-benefit-icon">
                                            <i class="fa fa-mobile"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Parent Convenience</h6>
                                            <p class="mb-0 small">24/7 online payment access</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 order-1 order-lg-1" style="margin-top:40px">
                        <img data-src="<?= base_url('public') ?>/assets/images/projects/fee-reports.jpg" src="<?= base_url('public') ?>/assets/images/loader1.jpg" style="height:280px; width:520px; box-shadow:10px 10px #cacaca;" class="lazy img-fluid leader-img" title="Fee Reports Dashboard" alt="Fee Management Reports" />
                    </div>
                </div>
                
                <!-------------- Pricing Section ---------------->
                <div class="row mt-5 pt-5">
                    <div class="col-12 text-center mb-5">
                        <h3 class="heading">Fee Management <span class="text-color-primary">Pricing Plans</span></h3>
                        <p class="text">Affordable plans for institutions of all sizes</p>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="fee-pricing-card">
                            <h4 class="heading">Basic</h4>
                            <div class="price mt-3">
                                <h2>₹9,999<span class="text-muted small">/year</span></h2>
                            </div>
                            <div class="features mt-4">
                                <p><i class="fa fa-check text-success mr-2"></i> Up to 500 Students</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Basic Fee Structure</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Manual Receipts</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Basic Reports</p>
                                <p><i class="fa fa-times text-muted mr-2"></i> <del>Online Payment</del></p>
                                <p><i class="fa fa-times text-muted mr-2"></i> <del>Mobile App</del></p>
                            </div>
                            <a href="<?= base_url() ?>Home/ContactUs" class="btn btn-outline-primary mt-4">Get Started</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="fee-pricing-card featured">
                            <div class="fee-featured-badge">Most Popular</div>
                            <h4 class="heading">Professional</h4>
                            <div class="price mt-3">
                                <h2>₹24,999<span class="text-muted small">/year</span></h2>
                            </div>
                            <div class="features mt-4">
                                <p><i class="fa fa-check text-success mr-2"></i> Up to 2000 Students</p>
                                <p><i class="fa fa-check text-success mr-2"></i> All Basic Features</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Online Payment Gateway</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Automated Receipts</p>
                                <p><i class="fa fa-check text-success mr-2"></i> SMS/Email Alerts</p>
                                <p><i class="fa fa-times text-muted mr-2"></i> <del>Parent Mobile App</del></p>
                            </div>
                            <a href="<?= base_url() ?>Home/ContactUs" class="btn btn-primary mt-4">Get Started</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="fee-pricing-card">
                            <h4 class="heading">Enterprise</h4>
                            <div class="price mt-3">
                                <h2>₹49,999<span class="text-muted small">/year</span></h2>
                            </div>
                            <div class="features mt-4">
                                <p><i class="fa fa-check text-success mr-2"></i> Unlimited Students</p>
                                <p><i class="fa fa-check text-success mr-2"></i> All Professional Features</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Parent Mobile App</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Advanced Analytics</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Accounting Integration</p>
                                <p><i class="fa fa-check text-success mr-2"></i> Dedicated Support</p>
                            </div>
                            <a href="<?= base_url() ?>Home/ContactUs" class="btn btn-outline-primary mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== Fee Management Overview End =============-->
    </div>
    
    <!------------------ Contact Form --------------------->
    <div class="contact-us-section-wrappaer section-space--ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading">Fee Management Software <span class="text-color-primary">Company in Lucknow</span></h3>
                        <div class="sub-heading">
                            We provide specialized fee management solutions for schools, colleges, coaching institutes, and educational organizations. Our software is designed to handle all aspects of fee collection, from online payments to receipt generation and accounting. Get a free demo customized for your institution's needs.
                        </div>
                        <div class="mt-4">
                            <div class="fee-benefit-card">
                                <div class="fee-benefit-icon">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Quick Implementation</h6>
                                    <p class="mb-0">Get started in 7-15 days</p>
                                </div>
                            </div>
                            <div class="fee-benefit-card">
                                <div class="fee-benefit-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Staff Training</h6>
                                    <p class="mb-0">Complete training for office staff</p>
                                </div>
                            </div>
                            <div class="fee-benefit-card">
                                <div class="fee-benefit-icon">
                                    <i class="fa fa-shield"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Data Migration</h6>
                                    <p class="mb-0">Import existing student fee data</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-lg-6 col-lg-6">
                    <div class="contact-form-wrap">
                        <form id="contact" action="<?= base_url() ?>Home/SubmitForm/contactForm" method="post">
                            <?php
                            $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                            );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="contact-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="Name" type="text" placeholder="Your Name *" required="required">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="Email" type="email" placeholder="Email Address *" required="required">
                                    </div>
                                </div>
                                <div class="contact-inner">
                                    <input name="Mobile" type="text" placeholder="Mobile Number *" required="required" maxlength="10" min="10">
                                </div>
                                <div class="contact-inner">
                                    <select name="InstitutionType" class="form-control" required>
                                        <option value="">Institution Type *</option>
                                        <option value="School">School</option>
                                        <option value="College">College</option>
                                        <option value="Coaching">Coaching Institute</option>
                                        <option value="University">University</option>
                                        <option value="Other">Other Educational</option>
                                    </select>
                                </div>
                                <div class="contact-inner">
                                    <select name="StudentCount" class="form-control" required>
                                        <option value="">Number of Students *</option>
                                        <option value="<500">Less than 500</option>
                                        <option value="500-1000">500 - 1000</option>
                                        <option value="1000-2000">1000 - 2000</option>
                                        <option value="2000-5000">2000 - 5000</option>
                                        <option value="5000+">5000+ Students</option>
                                    </select>
                                </div>
                                <div class="contact-inner">
                                    <select name="CurrentSystem" class="form-control">
                                        <option value="">Current Fee System</option>
                                        <option value="Manual">Manual/Excel</option>
                                        <option value="Tally">Tally</option>
                                        <option value="OtherSoftware">Other Software</option>
                                        <option value="None">None</option>
                                    </select>
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="Message" placeholder="Describe your current fee collection process and specific requirements..." maxlength="500"></textarea>
                                </div>
                                <div class="submit-btn mt-20">
                                    <button class="ht-btn ht-btn-md" type="submit">Get Free Demo & Pricing</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php') ?>
    <?php include('include/jslinks.php') ?>
    
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
            
            // Add animation to payment method badges
            const paymentBadges = document.querySelectorAll('.payment-method-badge');
            paymentBadges.forEach((badge, index) => {
                badge.style.opacity = '0';
                badge.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    badge.style.transition = 'all 0.5s ease';
                    badge.style.opacity = '1';
                    badge.style.transform = 'translateY(0)';
                }, index * 100);
            });
            
            // Status badge color coding
            const statusBadges = document.querySelectorAll('.fee-status-badge');
            statusBadges.forEach(badge => {
                if (badge.classList.contains('status-paid')) {
                    badge.innerHTML = '<i class="fa fa-check mr-1"></i> ' + badge.textContent;
                } else if (badge.classList.contains('status-pending')) {
                    badge.innerHTML = '<i class="fa fa-clock-o mr-1"></i> ' + badge.textContent;
                } else if (badge.classList.contains('status-overdue')) {
                    badge.innerHTML = '<i class="fa fa-exclamation mr-1"></i> ' + badge.textContent;
                } else if (badge.classList.contains('status-partial')) {
                    badge.innerHTML = '<i class="fa fa-adjust mr-1"></i> ' + badge.textContent;
                }
            });
        });
    </script>
</body>

</html>