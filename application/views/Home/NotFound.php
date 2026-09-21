<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 Page Not Found | DigiCoders Technologies</title>
    <meta name="description" content="The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Return to DigiCoders homepage.">
    <meta name="robots" content="noindex, follow">
    <?php include('include/headerlinks.php') ?>
    <style>
        .error-area {
            padding: 80px 0;
            background: #f8fafc;
            text-align: center;
        }
        .error-img {
            max-width: 420px;
            margin: 0 auto 25px;
        }
        .error-img img {
            max-width: 100%;
            height: auto;
        }
        .error-code {
            font-size: 110px;
            font-weight: 900;
            color: #086AD8;
            line-height: 1;
            margin-bottom: 20px;
            text-shadow: 2px 4px 10px rgba(8, 106, 216, 0.15);
        }
        .error-title {
            font-size: 32px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }
        .error-text {
            font-size: 16px;
            color: #64748b;
            max-width: 550px;
            margin: 0 auto 35px;
            line-height: 1.6;
        }
        .error-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        .btn-primary-custom {
            background-color: #086AD8;
            color: #ffffff !important;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-primary-custom:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(8, 106, 216, 0.25);
        }
        .btn-secondary-custom {
            background-color: #ffffff;
            color: #086AD8 !important;
            border: 2px solid #086AD8;
            padding: 10px 28px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-secondary-custom:hover {
            background-color: #f0f7ff;
            transform: translateY(-2px);
        }
        .quick-links-box {
            margin-top: 50px;
            padding: 30px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        .quick-links-title {
            font-size: 18px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 20px;
        }
        .quick-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 12px;
        }
        .quick-link-item {
            padding: 10px 15px;
            background: #f1f5f9;
            border-radius: 6px;
            color: #334155;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.2s ease;
        }
        .quick-link-item:hover {
            background: #086AD8;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <?php include('include/header.php') ?>

    <!-- Breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">404 - Page Not Found</h2>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active">404 Not Found</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area end -->

    <!-- Error Area Start -->
    <div class="error-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-img mb-4">
                        <img src="<?= base_url('public/assets/images/404.png') ?>" alt="404 Page Not Found" class="img-fluid">
                    </div>
                    <div class="error-code">404</div>
                    <h1 class="error-title">Oops! Page Not Found</h1>
                    <p class="error-text">
                        The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Don't worry, you can easily navigate back to safety.
                    </p>
                    
                    <div class="error-actions">
                        <a href="<?= base_url() ?>" class="btn-primary-custom">
                            <i class="fas fa-home"></i> Back to Homepage
                        </a>
                        <a href="<?= base_url('Home/ContactUs') ?>" class="btn-secondary-custom">
                            <i class="fas fa-envelope"></i> Contact Support
                        </a>
                    </div>

                    <div class="quick-links-box">
                        <div class="quick-links-title">Explore Useful Pages</div>
                        <div class="quick-links-grid">
                            <a href="<?= base_url() ?>" class="quick-link-item">Home</a>
                            <a href="<?= base_url('Home/ITServices') ?>" class="quick-link-item">IT Services</a>
                            <a href="<?= base_url('Home/Products') ?>" class="quick-link-item">Products</a>
                            <a href="<?= base_url('Home/AboutDigiCoders') ?>" class="quick-link-item">About Us</a>
                            <a href="<?= base_url('Home/career') ?>" class="quick-link-item">Careers</a>
                            <a href="<?= base_url('Home/ContactUs') ?>" class="quick-link-item">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Area End -->

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>
