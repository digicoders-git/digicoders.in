<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $blog_title = !empty($blog->title) ? $blog->title : 'Blog Details';
        $meta_title = !empty($blog->meta_title) ? $blog->meta_title : $blog_title;
        $img_file = !empty($blog->img) ? $blog->img : $blog->image;
        $img_url = !empty($img_file) ? base_url('public/uploads/Blog/' . $img_file) : base_url('public/assets/images/blog-default.jpg');
        $img_alt = !empty($blog->img_alt) ? $blog->img_alt : $blog_title;
        $blog_slug = !empty($blog->url) ? $blog->url : $blog->id;
        $canonical_url = !empty($blog->canonical_url) ? $blog->canonical_url : base_url('blogs/' . $blog_slug);
        $blog_meta = !empty($blog->meta_description) ? $blog->meta_description : (!empty($blog->short_discription) ? $blog->short_discription : strip_tags($blog->content ?? $blog->full_discription ?? ''));
        $blog_meta_clean = htmlspecialchars(mb_strimwidth(strip_tags($blog_meta), 0, 160, '...'), ENT_QUOTES, 'UTF-8');
        $blog_keywords = !empty($blog->keywords) ? $blog->keywords : 'DigiCoders, web development, app development, tech blog';
        $pub_date = !empty($blog->Blog_date) ? date('Y-m-d', strtotime($blog->Blog_date)) : (!empty($blog->date) ? date('Y-m-d', strtotime($blog->date)) : date('Y-m-d'));
        $display_date = !empty($blog->Blog_date) ? date('F d, Y', strtotime($blog->Blog_date)) : (!empty($blog->date) ? date('F d, Y', strtotime($blog->date)) : date('F d, Y'));
        $author_name = !empty($blog->author_name) ? $blog->author_name : '';
        $author_designation = !empty($blog->author_designation) ? $blog->author_designation : '';
        $has_custom_seo = true;

        // Process FAQs
        $faqs_data = array();
        if (!empty($blog->faqs)) {
            $faqs_data = json_decode($blog->faqs, true);
        }
    ?>

    <title><?= htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= $blog_meta_clean ?>">
    <meta name="keywords" content="<?= htmlspecialchars($blog_keywords, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= $blog_meta_clean ?>">
    <meta property="og:image" content="<?= $img_url ?>">
    <meta property="og:image:alt" content="<?= htmlspecialchars($img_alt, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:site_name" content="DigiCoders Technologies">
    <meta property="article:published_time" content="<?= $pub_date ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($meta_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= $blog_meta_clean ?>">
    <meta name="twitter:image" content="<?= $img_url ?>">

    <?php
        // Build valid Article Schema array
        $author_schema = !empty($author_name) ? array(
            "@type" => "Person",
            "name" => $author_name,
            "jobTitle" => !empty($author_designation) ? $author_designation : "Author"
        ) : array(
            "@type" => "Organization",
            "name" => "DigiCoders Technologies",
            "url" => base_url()
        );

        $article_schema = array(
            "@context" => "https://schema.org",
            "@type" => "BlogPosting",
            "mainEntityOfPage" => array(
                "@type" => "WebPage",
                "@id" => $canonical_url
            ),
            "headline" => strip_tags($meta_title),
            "image" => array($img_url),
            "datePublished" => $pub_date,
            "dateModified" => $pub_date,
            "author" => $author_schema,
            "publisher" => array(
                "@type" => "Organization",
                "name" => "DigiCoders Technologies",
                "logo" => array(
                    "@type" => "ImageObject",
                    "url" => base_url('public/assets/images/logo.png')
                )
            ),
            "description" => $blog_meta_clean
        );

        // Build valid FAQ Schema array if FAQs exist
        $faq_schema = null;
        if (!empty($faqs_data)) {
            $mainEntity = array();
            foreach ($faqs_data as $faq_item) {
                $q = trim(strip_tags($faq_item['question'] ?? ''));
                $a = trim(strip_tags($faq_item['answer'] ?? ''));
                if (!empty($q) && !empty($a)) {
                    $mainEntity[] = array(
                        "@type" => "Question",
                        "name" => $q,
                        "acceptedAnswer" => array(
                            "@type" => "Answer",
                            "text" => $a
                        )
                    );
                }
            }
            if (!empty($mainEntity)) {
                $faq_schema = array(
                    "@context" => "https://schema.org",
                    "@type" => "FAQPage",
                    "mainEntity" => $mainEntity
                );
            }
        }
    ?>

    <!-- JSON-LD Article Schema for Google SEO -->
    <script type="application/ld+json">
    <?= json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>

    <?php if (!empty($faq_schema)): ?>
    <!-- JSON-LD FAQPage Schema -->
    <script type="application/ld+json">
    <?= json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
    <?php endif; ?>

    <?php include('include/headerlinks.php') ?>

    <style>
        .blog-details-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 60px 0 50px;
            color: #ffffff;
        }
        .blog-category-badge {
            background: #2563eb;
            color: #ffffff;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 5px 14px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
            margin-bottom: 16px;
        }
        .blog-details-title {
            font-size: 2.3rem;
            font-weight: 800;
            line-height: 1.35;
            color: #ffffff;
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .blog-details-title {
                font-size: 1.7rem;
            }
        }
        .blog-meta-author {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            color: #94a3b8;
            font-size: 0.9rem;
        }
        .blog-meta-author i {
            color: #3b82f6;
        }
        .blog-featured-img-container {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            padding-top: 56.25%; /* 16:9 Aspect Ratio Fallback */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
            margin-bottom: 35px;
            background: #f1f5f9;
        }
        @supports (aspect-ratio: 16 / 9) {
            .blog-featured-img-container {
                padding-top: 0;
            }
        }
        .blog-featured-img-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 6px;
        }
        
        /* Article Typography Styling */
        .article-content {
            font-size: 1.05rem;
            line-height: 1.85;
            color: #334155;
            font-family: inherit;
            border-radius: 6px !important;
        }
        .article-content a {
            color: #2563eb !important;
            text-decoration: underline !important;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        .article-content a:hover {
            color: #1d4ed8 !important;
            text-decoration: underline !important;
        }
        .article-content h1, 
        .article-content h2, 
        .article-content h3, 
        .article-content h4,
        .article-content h5,
        .article-content h6,
        [id^="toc-heading-"] {
            color: #0f172a;
            font-weight: 700;
            margin-top: 35px;
            margin-bottom: 16px;
            scroll-margin-top: 130px !important;
        }
        .article-content h2 {
            font-size: 1.65rem;
            border-left: 4px solid #2563eb;
            padding-left: 14px;
        }
        .article-content h3 {
            font-size: 1.35rem;
        }
        .article-content p {
            margin-bottom: 22px;
        }
        .article-content ul, .article-content ol {
            margin-bottom: 24px;
            padding-left: 24px;
        }
        .article-content li {
            margin-bottom: 8px;
        }
        .article-content blockquote {
            background: #f8fafc;
            border-left: 4px solid #3b82f6;
            padding: 20px 24px;
            margin: 25px 0;
            border-radius: 0 6px 6px 0;
            font-style: italic;
            color: #475569;
        }
        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin: 20px 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }
        .article-content table {
            width: 100%;
            margin: 25px 0;
            border-collapse: collapse;
        }
        .article-content table th, 
        .article-content table td {
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
        }
        .article-content table th {
            background-color: #f1f5f9;
            font-weight: 600;
        }
        .sticky-sidebar {
            position: sticky;
            top: 100px;
            z-index: 10;
        }
        .sidebar-widget {
            background: #ffffff;
            border-radius: 6px;
            padding: 24px;
            border: 1px solid #e2e8f0;
            margin-bottom: 28px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        }
        .widget-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f5f9;
            position: relative;
        }
        .widget-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 50px;
            height: 2px;
            background: #2563eb;
        }

        /* Table of Contents Styling */
        #toc-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
            max-height: 320px;
            overflow-y: auto;
            padding-right: 6px;
            scroll-behavior: smooth;
        }
        #toc-list::-webkit-scrollbar {
            width: 5px;
        }
        #toc-list::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }
        #toc-list::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        #toc-list::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        #toc-list li {
            margin-bottom: 6px;
        }
        #toc-list a {
            color: #475569;
            text-decoration: none;
            font-size: 0.925rem;
            font-weight: 500;
            display: flex;
            align-items: flex-start;
            padding: 6px 10px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }
        #toc-list a::before {
            content: "•";
            color: #2563eb;
            font-size: 1.25rem;
            line-height: 1;
            margin-right: 8px;
            display: inline-block;
            flex-shrink: 0;
            transition: transform 0.2s ease, color 0.2s ease;
        }
        #toc-list a:hover::before, #toc-list a.active::before {
            color: #2563eb;
            transform: scale(1.3);
        }
        #toc-list a:hover, #toc-list a.active {
            color: #2563eb;
            background: #eff6ff;
            font-weight: 600;
        }
        #toc-list li.toc-h3 {
            padding-left: 14px;
        }
        #toc-list li.toc-h3 a::before {
            content: "◦";
            font-size: 1.1rem;
            color: #64748b;
        }

        /* Recent Blog Item */
        .recent-blog-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px dashed #e2e8f0;
        }
        .recent-blog-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        .recent-blog-thumb {
            width: 80px;
            height: auto;
            aspect-ratio: 16 / 9;
            border-radius: 6px;
            object-fit: cover;
            flex-shrink: 0;
            background: #e2e8f0;
        }
        .recent-blog-title {
            font-size: 0.9rem;
            font-weight: 600;
            color: #0f172a;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .recent-blog-title:hover {
            color: #2563eb;
        }
        .recent-blog-date {
            font-size: 0.775rem;
            color: #94a3b8;
            margin-top: 4px;
        }

        /* Tag Cloud */
        .tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .tag-pill {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.825rem;
            font-weight: 500;
            padding: 5px 12px;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .tag-pill:hover {
            background: #2563eb;
            color: #ffffff;
        }

        /* CTA Banner Widget */
        .cta-widget {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #ffffff;
            border-radius: 8px;
            padding: 28px 24px;
            text-align: center !important;
        }

        /* Dynamic Blog FAQ Section Styling */
        .blog-faq-section {
            margin-top: 45px;
            margin-bottom: 35px;
            padding-top: 30px;
            border-top: 1px dashed #e2e8f0;
        }
        .blog-faq-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
        }
        .blog-faq-icon-badge {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.1);
        }
        .blog-faq-title-wrap h3 {
            font-size: 1.45rem !important;
            font-weight: 700 !important;
            color: #0f172a !important;
            margin: 0 !important;
            line-height: 1.3 !important;
            border: none !important;
            padding: 0 !important;
        }
        .blog-faq-title-wrap p {
            font-size: 0.875rem !important;
            color: #64748b !important;
            margin: 3px 0 0 0 !important;
        }
        .blog-faq-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .blog-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0 !important;
            border-radius: 12px !important;
            overflow: hidden;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 6px rgba(15, 23, 42, 0.03);
        }
        .blog-faq-item:hover {
            border-color: #cbd5e1 !important;
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.06);
        }
        .blog-faq-item.is-open {
            border-color: #bfdbfe !important;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.08);
        }
        .blog-faq-btn {
            width: 100% !important;
            background: #ffffff !important;
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            padding: 18px 22px !important;
            margin: 0 !important;
            font-size: 1.05rem !important;
            font-weight: 600 !important;
            color: #1e293b !important;
            text-align: left !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 16px !important;
            cursor: pointer !important;
            transition: background-color 0.2s ease, color 0.2s ease !important;
            border-radius: 12px !important;
            line-height: 1.5 !important;
        }
        .blog-faq-btn:hover {
            background-color: #f8fafc !important;
            color: #2563eb !important;
        }
        .blog-faq-btn:focus {
            outline: none !important;
            box-shadow: none !important;
        }
        .blog-faq-btn:not(.collapsed), 
        .blog-faq-btn[aria-expanded="true"] {
            background-color: #f0f7ff !important;
            color: #2563eb !important;
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }
        .blog-faq-btn-text {
            flex-grow: 1;
        }
        .blog-faq-arrow {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #f1f5f9;
            color: #64748b;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            flex-shrink: 0;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), background-color 0.25s ease, color 0.25s ease;
        }
        .blog-faq-btn:hover .blog-faq-arrow {
            background: #e2e8f0;
            color: #1e293b;
        }
        .blog-faq-btn:not(.collapsed) .blog-faq-arrow,
        .blog-faq-btn[aria-expanded="true"] .blog-faq-arrow {
            transform: rotate(180deg);
            background: #2563eb;
            color: #ffffff;
        }
        .blog-faq-content {
            background: #ffffff;
            border-top: 1px solid #edf2f7;
            padding: 20px 22px 24px;
            color: #475569;
            font-size: 0.975rem;
            line-height: 1.75;
        }
        .blog-faq-content p:last-child {
            margin-bottom: 0;
        }

        /* Author Box */
        .author-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 40px;
        }
        .author-avatar {
            width: 70px;
            height: 70px;
            border-radius: 6px;
            background: #2563eb;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            flex-shrink: 0;
        }
        
        /* Share Buttons & Card Styling */
        .share-article-card {
            margin-top: 35px;
            margin-bottom: 35px;
        }
        .share-btn {
            width: 38px;
            height: 38px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff !important;
            text-decoration: none;
            font-size: 0.9rem;
            margin-right: 8px;
            transition: transform 0.2s ease;
        }
        .share-btn:last-child {
            margin-right: 0;
        }
        .share-btn:hover {
            transform: translateY(-3px);
        }
        .btn-facebook { background: #1877f2; }
        .btn-twitter { background: #1da1f2; }
        .btn-linkedin { background: #0a66c2; }
        .btn-whatsapp { background: #25d366; }

        /* Read More / Read Less Collapsible Article Content */
        .article-content-wrapper {
            position: relative;
        }
        .blog-content-collapsed {
            max-height: 700px;
            overflow: hidden;
            position: relative;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .blog-content-expanded {
            max-height: 25000px !important;
            transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .blog-content-fade {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 200px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.85) 55%, rgba(255, 255, 255, 1) 100%);
            pointer-events: none;
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
            transition: opacity 0.3s ease;
            z-index: 5;
        }
        #blog-read-more-wrapper {
            position: absolute;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            margin: 0;
            width: auto;
            text-align: center;
        }
        #blog-read-more-wrapper.expanded-wrapper {
            position: relative !important;
            bottom: auto !important;
            left: auto !important;
            transform: none !important;
            margin-top: 25px !important;
            margin-bottom: 25px !important;
        }
        #btn-toggle-blog-content {
            background: linear-gradient(135deg, #086AD8 0%, #0056b3 100%) !important;
            color: #ffffff !important;
            border: none !important;
            height: 46px;
            padding: 0 30px !important;
            font-size: 0.95rem !important;
            font-weight: 700 !important;
            letter-spacing: 0.3px;
            border-radius: 50px !important;
            box-shadow: 0 6px 20px rgba(8, 106, 216, 0.35) !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            line-height: 1 !important;
            cursor: pointer;
            transition: all 0.3s ease !important;
        }
        #btn-toggle-blog-content:hover {
            background: linear-gradient(135deg, #0056b3 0%, #086AD8 100%) !important;
            color: #ffffff !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(8, 106, 216, 0.5) !important;
        }
        #btn-toggle-blog-content span, #btn-toggle-blog-content i {
            color: #ffffff !important;
            line-height: 1 !important;
            display: inline-block;
        }
    </style>
</head>

<body style="background-color: #f8fafc;">
    <?php include('include/header.php') ?>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h1 class="breadcrumb-title text-color-dark" style="font-size: 2rem; max-width: 900px; margin: 0 auto 15px;"><?= htmlspecialchars($blog_title, ENT_QUOTES, 'UTF-8') ?></h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home/Index') ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('blogs') ?>">Blogs</a></li>
                            <li class="breadcrumb-item active">Details</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Main Content & Sticky Sidebar Layout -->
    <main class="py-5">
        <div class="container my-3">
            <div class="row g-4">
                
                <!-- Left Column: Article Content & FAQs -->
                <div class="col-lg-8">
                    
                    <!-- Top Article Meta Bar (Above Featured Image) -->
                    <div class="blog-top-meta-bar mb-4 p-3 px-4 bg-white rounded-3 border shadow-sm d-flex align-items-center justify-content-between flex-wrap" style="gap: 15px;">
                        <div class="d-flex align-items-center flex-wrap" style="gap: 12px;">
                            <div class="author-avatar-circle text-white bg-primary rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 42px; height: 42px; min-width: 42px; font-size: 1.15rem; flex-shrink: 0;">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <span class="fw-bold text-dark" style="font-size: 0.95rem; line-height: 1.3;">
                                    By: <?= htmlspecialchars(!empty($author_name) ? $author_name : 'DigiCoders Team', ENT_QUOTES, 'UTF-8') ?>
                                    <?php if (!empty($author_designation)): ?>
                                        <span class="text-muted fw-normal" style="font-size: 0.85rem;">(<?= htmlspecialchars($author_designation, ENT_QUOTES, 'UTF-8') ?>)</span>
                                    <?php endif; ?>
                                </span>
                                <div class="text-muted small mt-1 d-flex align-items-center flex-wrap" style="font-size: 0.825rem; line-height: 1.2; gap: 10px;">
                                    <span><i class="fas fa-calendar-alt me-1 text-primary"></i> <?= $display_date ?></span>
                                    <span class="text-muted opacity-50 mx-1">•</span>
                                    <span><i class="fas fa-eye me-1 text-primary"></i> <?= number_format($blog->views ?? 0) ?> Views</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center flex-wrap" style="gap: 12px;">
                            <!-- Google Preferences Source Follow Button -->
                            <a href="https://www.google.com/preferences/source?q=digicoders.in" target="_blank" rel="noopener noreferrer" class="btn btn-sm d-inline-flex align-items-center" style="background-color: #ffffff !important; border: 1px solid #4285F4 !important; color: #4285F4 !important; font-size: 0.8rem; font-weight: 600; padding: 6px 14px; border-radius: 20px; text-decoration: none; transition: all 0.2s; box-shadow: 0 2px 5px rgba(66,133,244,0.12);" title="Follow DigiCoders on Google Preferences" onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right: 6px; flex-shrink: 0;"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/></svg>
                                Follow Source
                            </a>

                            <!-- Share Buttons with Label -->
                            <div class="d-inline-flex align-items-center" style="gap: 6px;">
                                <span class="fw-bold text-dark me-1" style="font-size: 0.85rem;"><i class="fas fa-share-alt text-primary me-1"></i> Share:</span>
                                <a href="https://api.whatsapp.com/send?text=<?= urlencode($blog_title . ' ' . $canonical_url) ?>" target="_blank" class="share-btn btn-whatsapp" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonical_url) ?>" target="_blank" class="share-btn btn-facebook" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?text=<?= urlencode($blog_title) ?>&url=<?= urlencode($canonical_url) ?>" target="_blank" class="share-btn btn-twitter" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonical_url) ?>&title=<?= urlencode($blog_title) ?>" target="_blank" class="share-btn btn-linkedin" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Short Excerpt / Description Banner (Above Featured Image) -->
                    <?php if (!empty($blog_meta)): ?>
                        <div class="blog-excerpt-banner p-3 p-md-4 mb-4 bg-white rounded-3 shadow-sm" style="border-left: 4px solid #f97316;">
                            <p class="mb-0 text-slate-700 font-weight-medium" style="font-size: 1.05rem; line-height: 1.7; color: #334155;">
                                <?= htmlspecialchars($blog_meta, ENT_QUOTES, 'UTF-8') ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <!-- Featured Image -->
                    <div class="blog-featured-img-container mb-4">
                        <img src="<?= $img_url ?>" alt="<?= htmlspecialchars($img_alt, ENT_QUOTES, 'UTF-8') ?>" class="img-fluid">
                    </div>

                    

                    <!-- Article Body Content Container with Read More -->
                    <div class="article-content-wrapper position-relative">
                        <article class="article-content bg-white p-4 p-md-5 rounded-4 border blog-content-collapsed" id="article-body">
                            <?php 
                                $content_html = !empty($blog->content) ? $blog->content : $blog->full_discription;
                                echo fix_blog_content_images($content_html);
                            ?>
                        </article>
                        
                        <!-- Gradient Overlay for Collapsed State -->
                        <div id="blog-content-fade" class="blog-content-fade"></div>

                        <!-- Read More / Read Less Action Button -->
                        <div id="blog-read-more-wrapper" class="text-center mt-3 mb-4" style="display: none;">
                            <button type="button" id="btn-toggle-blog-content" class="btn btn-outline-primary fw-bold rounded-pill shadow-sm">
                                <span>Read More</span> <i class="fas fa-chevron-down ms-1"></i>
                            </button>
                        </div>
                    </div>

                <!-- Social Share Card -->
                    <div class="share-article-card p-4 bg-white rounded-4 border shadow-sm mt-4 mt-md-5 mb-4">
                        <div class="d-flex align-items-center flex-wrap justify-content-between" style="gap: 16px;">
                            <div class="d-flex align-items-center" style="gap: 10px;">
                                <div class="share-icon-badge d-flex align-items-center justify-content-center text-white rounded-circle shadow-sm" style="width: 46px; height: 46px; font-size: 1.15rem; flex-shrink: 0; background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); margin-right: 14px;">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0 text-slate-800" style="color: #0f172a; font-size: 1.1rem;">Share Article</h5>
                                    <span class="text-muted small">Share tech insights with your network</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-wrap" style="gap: 8px;">
                                <a href="https://api.whatsapp.com/send?text=<?= urlencode($blog_title . ' ' . $canonical_url) ?>" target="_blank" class="btn btn-whatsapp text-white fw-semibold px-3 py-2 btn-sm" style="background-color: #25D366; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i class="fab fa-whatsapp fs-6"></i> WhatsApp</a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonical_url) ?>" target="_blank" class="btn btn-facebook text-white fw-semibold px-3 py-2 btn-sm" style="background-color: #1877F2; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i class="fab fa-facebook-f fs-6"></i> Facebook</a>
                                <a href="https://twitter.com/intent/tweet?text=<?= urlencode($blog_title) ?>&url=<?= urlencode($canonical_url) ?>" target="_blank" class="btn btn-twitter text-white fw-semibold px-3 py-2 btn-sm" style="background-color: #1DA1F2; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i class="fab fa-twitter fs-6"></i> Twitter</a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonical_url) ?>&title=<?= urlencode($blog_title) ?>" target="_blank" class="btn btn-linkedin text-white fw-semibold px-3 py-2 btn-sm" style="background-color: #0A66C2; border-radius: 8px; display: inline-flex; align-items: center; gap: 6px;"><i class="fab fa-linkedin-in fs-6"></i> LinkedIn</a>
                            </div>
                        </div>
                    </div>
                    <!-- Dynamic FAQs Section (if present) -->
                    <?php if (!empty($faqs_data)): ?>
                        <section class="blog-faq-section mb-4 mb-md-5">
                            <div class="blog-faq-header">
                                <div class="blog-faq-icon-badge">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <div class="blog-faq-title-wrap">
                                    <h3>Frequently Asked Questions</h3>
                                    <p>Find quick answers to common questions related to this article</p>
                                </div>
                            </div>

                            <div class="blog-faq-container" id="blogFaqAccordion">
                                <?php foreach ($faqs_data as $index => $faq): 
                                    $q_id = "faq_collapse_" . $index;
                                    $h_id = "faq_heading_" . $index;
                                    $is_first = ($index === 0);
                                ?>
                                    <div class="blog-faq-item <?= $is_first ? 'is-open' : '' ?>">
                                        <div id="<?= $h_id ?>">
                                            <button class="blog-faq-btn <?= !$is_first ? 'collapsed' : '' ?>" 
                                                    type="button" 
                                                    data-toggle="collapse" 
                                                    data-target="#<?= $q_id ?>" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#<?= $q_id ?>" 
                                                    aria-expanded="<?= $is_first ? 'true' : 'false' ?>" 
                                                    aria-controls="<?= $q_id ?>">
                                                <span class="blog-faq-btn-text"><?= htmlspecialchars($faq['question'] ?? '', ENT_QUOTES, 'UTF-8') ?></span>
                                                <span class="blog-faq-arrow"><i class="fas fa-chevron-down"></i></span>
                                            </button>
                                        </div>
                                        <div id="<?= $q_id ?>" 
                                             class="collapse <?= $is_first ? 'show' : '' ?>" 
                                             aria-labelledby="<?= $h_id ?>" 
                                             data-parent="#blogFaqAccordion"
                                             data-bs-parent="#blogFaqAccordion">
                                            <div class="blog-faq-content">
                                                <?= nl2br(htmlspecialchars($faq['answer'] ?? '', ENT_QUOTES, 'UTF-8')) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <?php endif; ?>

              
                </div>

                <!-- Right Column: Sticky Sidebar -->
                <div class="col-lg-4">
                    <aside class="sticky-sidebar">
                        
                        <!-- Table of Contents Widget -->
                        <div class="sidebar-widget">
                            <h4 class="widget-title"><i class="fas fa-list-ul me-2 text-primary"></i> Table of Contents</h4>
                            <ul id="toc-list">
                                <li class="text-muted small">Generating headings...</li>
                            </ul>
                        </div>

                        <!-- Blog Quick Enquiry Widget -->
                        <div class="sidebar-widget bg-white p-3 px-4 rounded-3 border shadow-sm">
                            <h4 class="widget-title mb-3" style="margin-top: 0;"><i class="fas fa-envelope-open-text me-2 text-primary"></i> Blog Enquiry</h4>
                            <form action="<?= base_url('Home/SubmitForm/blogEnquiry') ?>" method="POST" class="form" id="blog-enquiry-form">
                                <?php $csrf = array('name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()); ?>
                                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                <input type="hidden" name="BlogTitle" value="<?= htmlspecialchars($blog_title, ENT_QUOTES, 'UTF-8') ?>" />
                                <input type="hidden" name="BlogUrl" value="<?= base_url('blogs/' . (!empty($blog->url) ? $blog->url : $blog->id)) ?>" />
                                
                                <div class="mb-3">
                                    <input type="text" name="Name" class="form-control" placeholder="Your Name *" required style="border-radius: 6px; font-size: 0.9rem;" />
                                </div>
                                <div class="mb-3">
                                    <input type="tel" name="Mobile" class="form-control" placeholder="10-Digit Mobile *" maxlength="10" pattern="[6-9][0-9]{9}" oninput="this.value = this.value.replace(/[^0-9]/g, ''); if(this.value.length > 0 && !['6','7','8','9'].includes(this.value[0])) this.value='';" title="Mobile number must start with 9, 8, 7, or 6 and be exactly 10 digits" required style="border-radius: 6px; font-size: 0.9rem;" />
                                </div>
                                <div class="mb-3">
                                    <textarea name="Message" class="form-control" rows="3" placeholder="Write your query or message (Optional)..." style="border-radius: 6px; font-size: 0.9rem;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 fw-bold shadow-sm" style="border-radius: 6px; height: 44px; display: flex; align-items: center; justify-content: center; line-height: 1; padding-bottom: 2px; font-size: 0.95rem;" id="submitBtn"><i class="fa fa-spinner fa-spin me-1" style="display:none;" id="submitSpin"></i> Submit Enquiry</button>
                            </form>
                        </div>

                        <!-- Recent Blog Posts Widget -->
                        <?php if (!empty($recent_blogs)): ?>
                            <div class="sidebar-widget">
                                <h4 class="widget-title"><i class="fas fa-fire me-2 text-primary"></i> Recent Articles</h4>
                                <?php foreach ($recent_blogs as $rb): 
                                    $rb_img = !empty($rb->img) ? $rb->img : $rb->image;
                                    $rb_thumb = !empty($rb_img) ? base_url('public/uploads/Blog/' . $rb_img) : base_url('public/assets/images/blog-default.jpg');
                                    $rb_slug = !empty($rb->url) ? $rb->url : $rb->id;
                                    $rb_link = base_url('blogs/' . $rb_slug);
                                ?>
                                    <div class="recent-blog-item">
                                        <a href="<?= $rb_link ?>">
                                            <img src="<?= $rb_thumb ?>" alt="<?= htmlspecialchars($rb->title ?? '', ENT_QUOTES, 'UTF-8') ?>" class="recent-blog-thumb">
                                        </a>
                                        <div>
                                            <a href="<?= $rb_link ?>" class="recent-blog-title"><?= htmlspecialchars($rb->title ?? '', ENT_QUOTES, 'UTF-8') ?></a>
                                            <div class="recent-blog-date"><i class="fas fa-calendar-alt me-1"></i> <?= !empty($rb->date) ? date('M d, Y', strtotime($rb->date)) : date('M d, Y') ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <!-- CTA Promo Banner -->
                        <div class="cta-widget shadow-sm text-center p-4">
                            <h4 class="fw-bold mb-2 text-white text-center">Build Your Dream Software</h4>
                            <p class="small text-slate-300 mb-3 text-center" style="color: #cbd5e1;">Need custom Web Development, Android/iOS App Development, or Industrial Training?</p>
                            <div class="d-flex flex-column align-items-center" style="gap: 10px;">
                                <a href="tel:+919198483820" class="btn btn-success btn-md px-4 py-2 fw-bold w-100 shadow-sm" style="border-radius: 8px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border: none; display: inline-flex; align-items: center; justify-content: center; gap: 8px; font-size: 0.95rem;">
                                    <i class="fas fa-phone-alt"></i> Call Now: +91 9198483820
                                </a>
                                <a href="<?= base_url('Home/ContactUs') ?>" class="btn btn-primary btn-sm px-4 py-2 fw-semibold w-100" style="border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; gap: 6px;">
                                    Get Free Quotation <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </main>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>

    <!-- Dynamic Table of Contents (TOC) Script -->
    <script>
        (function() {
            function initTOC() {
                const articleBody = document.getElementById('article-body');
                const tocList = document.getElementById('toc-list');
                
                if (!articleBody || !tocList) return;

                // 1. Collect all headings (h1, h2, h3, h4, h5, h6)
                let headings = Array.from(articleBody.querySelectorAll('h1, h2, h3, h4, h5, h6'));

                // 2. Fallback to bold/strong title lines if no standard heading tags exist
                if (headings.length === 0) {
                    const addedEls = new Set();
                    const bolds = articleBody.querySelectorAll('strong, b');
                    bolds.forEach((el) => {
                        const text = (el.innerText || el.textContent || '').trim();
                        // Find topmost paragraph or div parent
                        const parentEl = el.closest('p, div, li') || el;
                        const parentText = (parentEl.innerText || parentEl.textContent || '').trim();
                        
                        if (text.length >= 3 && text.length <= 150 && Math.abs(parentText.length - text.length) <= 20) {
                            if (!addedEls.has(parentEl)) {
                                addedEls.add(parentEl);
                                headings.push(el);
                            }
                        }
                    });
                }

                if (headings.length === 0) {
                    tocList.innerHTML = '<li class="text-muted small">No sections in this article.</li>';
                    return;
                }

                tocList.innerHTML = '';
                
                headings.forEach((heading, index) => {
                    const text = (heading.innerText || heading.textContent || '').trim();
                    if (!text) return;

                    // Assign a unique ID if not present
                    if (!heading.id) {
                        heading.id = 'toc-heading-' + (index + 1);
                    }

                    // Set explicit inline scrollMarginTop on target heading
                    heading.style.scrollMarginTop = '130px';
                    if (heading.parentElement && (heading.tagName.toLowerCase() === 'strong' || heading.tagName.toLowerCase() === 'b')) {
                        heading.parentElement.style.scrollMarginTop = '130px';
                    }

                    const li = document.createElement('li');
                    const tag = heading.tagName.toLowerCase();
                    if (tag === 'h3' || tag === 'h4' || tag === 'h5' || tag === 'h6' || tag === 'strong' || tag === 'b') {
                        li.classList.add('toc-h3');
                    }

                    const a = document.createElement('a');
                    a.href = '#' + heading.id;
                    a.textContent = text;
                    
                    a.addEventListener('click', function(e) {
                        e.preventDefault();

                        // Auto-expand blog content if collapsed when clicking TOC link
                        if (articleBody.classList.contains('blog-content-collapsed')) {
                            articleBody.classList.remove('blog-content-collapsed');
                            articleBody.classList.add('blog-content-expanded');
                            const fadeEl = document.getElementById('blog-content-fade');
                            const btnEl = document.getElementById('btn-toggle-blog-content');
                            if (fadeEl) fadeEl.style.display = 'none';
                            if (btnEl) btnEl.innerHTML = '<span>Show Less</span> <i class="fas fa-chevron-up ms-1"></i>';
                        }
                        
                        // Highlight active TOC link
                        tocList.querySelectorAll('a').forEach(link => link.classList.remove('active'));
                        a.classList.add('active');

                        // Scroll active TOC link into view inside scrollable #toc-list container
                        const containerTop = tocList.scrollTop;
                        const containerHeight = tocList.clientHeight;
                        const linkTop = a.offsetTop;
                        const linkHeight = a.offsetHeight;
                        if (linkTop < containerTop || (linkTop + linkHeight) > (containerTop + containerHeight)) {
                            tocList.scrollTo({
                                top: linkTop - (containerHeight / 2) + (linkHeight / 2),
                                behavior: 'smooth'
                            });
                        }

                        // Target element for scroll
                        const targetEl = (tag === 'strong' || tag === 'b') && heading.parentElement ? heading.parentElement : heading;

                        // Primary: Use native scrollIntoView with scroll-margin-top
                        let scrolled = false;
                        if (typeof targetEl.scrollIntoView === 'function') {
                            try {
                                targetEl.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                                scrolled = true;
                            } catch (err) {
                                scrolled = false;
                            }
                        }

                        // Fallback: If scrollIntoView not available or failed
                        if (!scrolled) {
                            const headerEl = document.querySelector('.modern-header-area, .header-sticky, header, .header-area');
                            const headerOffset = headerEl ? (headerEl.offsetHeight + 20) : 120;
                            
                            let targetTop = 0;
                            if (typeof $ !== 'undefined' && $.fn && $.fn.offset) {
                                targetTop = $(targetEl).offset().top - headerOffset;
                            } else {
                                const rect = targetEl.getBoundingClientRect();
                                const scrollTop = window.pageYOffset || window.scrollY || document.documentElement.scrollTop || 0;
                                targetTop = rect.top + scrollTop - headerOffset;
                            }

                            if (typeof $ !== 'undefined') {
                                $('html, body').stop().animate({ scrollTop: Math.max(0, Math.round(targetTop)) }, 400);
                            } else {
                                window.scrollTo({ top: Math.max(0, Math.round(targetTop)), behavior: 'smooth' });
                            }
                        }

                        if (window.history && window.history.pushState) {
                            window.history.pushState(null, null, '#' + heading.id);
                        }
                    });

                    li.appendChild(a);
                    tocList.appendChild(li);
                });
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initTOC);
            } else {
                initTOC();
            }
        })();

        // Dynamic Blog FAQ Accordion Interactions
        document.addEventListener('DOMContentLoaded', function() {
            const faqButtons = document.querySelectorAll('.blog-faq-btn');
            
            faqButtons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('data-target') || this.getAttribute('data-bs-target');
                    const targetEl = targetId ? document.querySelector(targetId) : null;
                    const parentItem = this.closest('.blog-faq-item');
                    
                    // Toggle manually if jQuery Bootstrap collapse is not active
                    if (targetEl && typeof $ === 'undefined') {
                        const isShowing = targetEl.classList.contains('show');
                        document.querySelectorAll('.blog-faq-container .collapse').forEach(c => c.classList.remove('show'));
                        document.querySelectorAll('.blog-faq-btn').forEach(b => {
                            b.classList.add('collapsed');
                            b.setAttribute('aria-expanded', 'false');
                        });
                        document.querySelectorAll('.blog-faq-item').forEach(i => i.classList.remove('is-open'));

                        if (!isShowing) {
                            targetEl.classList.add('show');
                            this.classList.remove('collapsed');
                            this.setAttribute('aria-expanded', 'true');
                            if (parentItem) parentItem.classList.add('is-open');
                        }
                        return;
                    }

                    // Update UI active state on click / Bootstrap collapse events
                    setTimeout(() => {
                        document.querySelectorAll('.blog-faq-item').forEach(item => {
                            const button = item.querySelector('.blog-faq-btn');
                            const collapse = item.querySelector('.collapse');
                            const isOpen = collapse && collapse.classList.contains('show');
                            
                            if (isOpen) {
                                item.classList.add('is-open');
                                if (button) {
                                    button.classList.remove('collapsed');
                                    button.setAttribute('aria-expanded', 'true');
                                }
                            } else {
                                item.classList.remove('is-open');
                                if (button) {
                                    button.classList.add('collapsed');
                                    button.setAttribute('aria-expanded', 'false');
                                }
                            }
                        });
                    }, 150);
                });
            });
        });

        // Blog Content Collapsible (Read More / View Less) Script
        (function initBlogReadMore() {
            function setupReadMore() {
                const article = document.getElementById('article-body');
                const fade = document.getElementById('blog-content-fade');
                const btnWrapper = document.getElementById('blog-read-more-wrapper');
                const btn = document.getElementById('btn-toggle-blog-content');

                if (!article || !fade || !btnWrapper || !btn) return;

                // Threshold in pixels (700px)
                const threshold = 700;
                const scrollH = article.scrollHeight;

                if (scrollH > threshold + 100) {
                    btnWrapper.style.display = 'block';
                    fade.style.display = 'block';
                    article.classList.add('blog-content-collapsed');
                    btnWrapper.classList.remove('expanded-wrapper');

                    btn.addEventListener('click', function() {
                        const isCollapsed = article.classList.contains('blog-content-collapsed');
                        if (isCollapsed) {
                            article.classList.remove('blog-content-collapsed');
                            article.classList.add('blog-content-expanded');
                            btnWrapper.classList.add('expanded-wrapper');
                            fade.style.display = 'none';
                            btn.innerHTML = '<span>View Less</span> <i class="fas fa-chevron-up ms-1"></i>';
                        } else {
                            article.classList.remove('blog-content-expanded');
                            article.classList.add('blog-content-collapsed');
                            btnWrapper.classList.remove('expanded-wrapper');
                            fade.style.display = 'block';
                            btn.innerHTML = '<span>Read More</span> <i class="fas fa-chevron-down ms-1"></i>';

                            // Smooth scroll back to top of article
                            const rect = article.getBoundingClientRect();
                            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                            window.scrollTo({ top: rect.top + scrollTop - 120, behavior: 'smooth' });
                        }
                    });
                } else {
                    article.classList.remove('blog-content-collapsed');
                    fade.style.display = 'none';
                    btnWrapper.style.display = 'none';
                }
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', setupReadMore);
            } else {
                setupReadMore();
            }
        })();

        // Fail-safe AJAX Handler for Blog Enquiry Form
        (function initBlogEnquiry() {
            if (typeof jQuery === 'undefined') {
                setTimeout(initBlogEnquiry, 50);
                return;
            }
            jQuery(document).ready(function($) {
                $(document).off('submit', '#blog-enquiry-form').on('submit', '#blog-enquiry-form', function(e) {
                    e.preventDefault();
                    var form = $(this);
                    var btn = form.find('#submitBtn');
                    var spin = form.find('#submitSpin');
                    
                    btn.prop('disabled', true);
                    if (spin.length) spin.show();

                    $.ajax({
                        url: form.attr('action'),
                        type: 'POST',
                        data: form.serialize(),
                        success: function(response) {
                            btn.prop('disabled', false);
                            if (spin.length) spin.hide();

                            var res = null;
                            if (typeof response === 'object') {
                                res = response;
                            } else if (typeof response === 'string') {
                                try {
                                    res = JSON.parse(response.trim());
                                } catch(e) {
                                    var match = response.match(/\{.*"status".*\}/s);
                                    if (match) {
                                        try { res = JSON.parse(match[0]); } catch(e2) {}
                                    }
                                }
                            }

                            if (res && res.status === 'error') {
                                if (typeof iziToast !== 'undefined') {
                                    iziToast.error({
                                        title: res.title || 'Validation Error!',
                                        message: res.msg || 'Please enter valid details.',
                                        position: 'topRight'
                                    });
                                } else {
                                    alert(res.msg || 'Please enter valid details.');
                                }
                            } else {
                                if (typeof iziToast !== 'undefined') {
                                    iziToast.success({
                                        title: (res && res.title) || 'Enquiry Submitted Successfully!',
                                        message: (res && res.msg) || 'Thank you for your enquiry! Our team will contact you shortly.',
                                        position: 'topRight'
                                    });
                                } else {
                                    alert('Enquiry Submitted Successfully!');
                                }
                                form[0].reset();
                            }
                        },
                        error: function() {
                            btn.prop('disabled', false);
                            if (spin.length) spin.hide();

                            if (typeof iziToast !== 'undefined') {
                                iziToast.success({
                                    title: 'Enquiry Submitted Successfully!',
                                    message: 'Thank you for your enquiry! Our team will contact you shortly.',
                                    position: 'topRight'
                                });
                            } else {
                                alert('Thank you for your enquiry! Our team will contact you shortly.');
                            }
                            form[0].reset();
                        }
                    });
                    return false;
                });
            });
        })();
    </script>
</body>

</html>
