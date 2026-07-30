<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $blog_title = !empty($blog->title) ? $blog->title : 'Blog Details';
        $img_file = !empty($blog->img) ? $blog->img : $blog->image;
        $img_url = !empty($img_file) ? base_url('public/uploads/Blog/' . $img_file) : base_url('public/assets/images/blog-default.jpg');
        $blog_slug = !empty($blog->url) ? $blog->url : $blog->id;
        $canonical_url = base_url('blog/' . $blog_slug);
        $blog_meta = !empty($blog->meta_description) ? $blog->meta_description : (!empty($blog->short_discription) ? $blog->short_discription : strip_tags($blog->content ?? $blog->full_discription ?? ''));
        $blog_meta_clean = htmlspecialchars(mb_strimwidth(strip_tags($blog_meta), 0, 160, '...'), ENT_QUOTES, 'UTF-8');
        $blog_keywords = !empty($blog->keywords) ? $blog->keywords : 'DigiCoders, web development, app development, tech blog';
        $pub_date = !empty($blog->date) ? date('Y-m-d', strtotime($blog->date)) : (!empty($blog->Blog_date) ? date('Y-m-d', strtotime($blog->Blog_date)) : date('Y-m-d'));
        $display_date = !empty($blog->date) ? date('F d, Y', strtotime($blog->date)) : (!empty($blog->Blog_date) ? date('F d, Y', strtotime($blog->Blog_date)) : date('F d, Y'));

        // Process FAQs
        $faqs_data = array();
        if (!empty($blog->faqs)) {
            $faqs_data = json_decode($blog->faqs, true);
        }
    ?>

    <title><?= htmlspecialchars($blog_title, ENT_QUOTES, 'UTF-8') ?> - DigiCoders Technologies</title>
    <meta name="description" content="<?= $blog_meta_clean ?>">
    <meta name="keywords" content="<?= htmlspecialchars($blog_keywords, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="canonical" href="<?= $canonical_url ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= htmlspecialchars($blog_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= $blog_meta_clean ?>">
    <meta property="og:image" content="<?= $img_url ?>">
    <meta property="og:url" content="<?= $canonical_url ?>">
    <meta property="og:site_name" content="DigiCoders Technologies">
    <meta property="article:published_time" content="<?= $pub_date ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($blog_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= $blog_meta_clean ?>">
    <meta name="twitter:image" content="<?= $img_url ?>">

    <!-- JSON-LD Article Schema for Google SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= $canonical_url ?>"
      },
      "headline": "<?= addslashes($blog_title) ?>",
      "image": [
        "<?= $img_url ?>"
      ],
      "datePublished": "<?= $pub_date ?>",
      "dateModified": "<?= $pub_date ?>",
      "author": {
        "@type": "Organization",
        "name": "DigiCoders Technologies",
        "url": "<?= base_url() ?>"
      },
      "publisher": {
        "@type": "Organization",
        "name": "DigiCoders Technologies",
        "logo": {
          "@type": "ImageObject",
          "url": "<?= base_url('public/assets/images/logo.png') ?>"
        }
      },
      "description": "<?= addslashes($blog_meta_clean) ?>"
    }
    </script>

    <?php if (!empty($faqs_data)): ?>
    <!-- JSON-LD FAQPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php 
        $faq_json_arr = array();
        foreach ($faqs_data as $faq_item) {
            $q = addslashes($faq_item['question'] ?? '');
            $a = addslashes($faq_item['answer'] ?? '');
            if (!empty($q) && !empty($a)) {
                $faq_json_arr[] = '{
                  "@type": "Question",
                  "name": "'.$q.'",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "'.$a.'"
                  }
                }';
            }
        }
        echo implode(',', $faq_json_arr);
        ?>
      ]
    }
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
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            margin-bottom: 35px;
            background: #f1f5f9;
        }
        .blog-featured-img-container img {
            width: 100%;
            max-height: 480px;
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
        .article-content h1, 
        .article-content h2, 
        .article-content h3, 
        .article-content h4 {
            color: #0f172a;
            font-weight: 700;
            margin-top: 35px;
            margin-bottom: 16px;
            scroll-margin-top: 100px;
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

        /* Sticky Sidebar & Widgets */
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
        }
        #toc-list li {
            margin-bottom: 10px;
        }
        #toc-list a {
            color: #475569;
            text-decoration: none;
            font-size: 0.925rem;
            font-weight: 500;
            display: block;
            padding: 6px 12px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }
        #toc-list a:hover, #toc-list a.active {
            color: #2563eb;
            background: #eff6ff;
            padding-left: 16px;
        }
        #toc-list li.toc-h3 {
            padding-left: 15px;
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
            width: 70px;
            height: 60px;
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
            border-radius: 6px;
            padding: 28px 24px;
            text-center;
        }

        /* FAQ Accordion Styling */
        .faq-accordion .accordion-item {
            border: 1px solid #e2e8f0;
            border-radius: 6px !important;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .faq-accordion .accordion-button {
            font-weight: 600;
            color: #0f172a;
            background-color: #ffffff;
            padding: 18px 20px;
            box-shadow: none !important;
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            color: #2563eb;
            background-color: #f8fafc;
        }
        .faq-accordion .accordion-body {
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.7;
            padding: 18px 20px;
            background-color: #ffffff;
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
        
        /* Share Buttons */
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
            transition: transform 0.2s ease;
        }
        .share-btn:hover {
            transform: translateY(-3px);
        }
        .btn-facebook { background: #1877f2; }
        .btn-twitter { background: #1da1f2; }
        .btn-linkedin { background: #0a66c2; }
        .btn-whatsapp { background: #25d366; }
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
                    <!-- Featured Image -->
                    <div class="blog-featured-img-container">
                        <img src="<?= $img_url ?>" alt="<?= htmlspecialchars($blog_title, ENT_QUOTES, 'UTF-8') ?>" class="img-fluid">
                    </div>

                    <!-- Article Body Content -->
                    <article class="article-content bg-white p-4 p-md-5 rounded-4 border" id="article-body">
                        <?php 
                            $content_html = !empty($blog->content) ? $blog->content : $blog->full_discription;
                            echo $content_html;
                        ?>
                    </article>

                    <!-- Dynamic FAQs Section (if present) -->
                    <?php if (!empty($faqs_data)): ?>
                        <section class="mt-5 pt-3">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <i class="fa fa-question-circle text-primary fs-3"></i>
                                <h3 class="fw-bold mb-0 text-slate-800" style="color: #0f172a;">Frequently Asked Questions</h3>
                            </div>
                            <div class="accordion faq-accordion" id="blogFaqAccordion">
                                <?php foreach ($faqs_data as $index => $faq): 
                                    $q_id = "faq_collapse_" . $index;
                                    $h_id = "faq_heading_" . $index;
                                ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="<?= $h_id ?>">
                                            <button class="accordion-button <?= ($index !== 0) ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $q_id ?>" aria-expanded="<?= ($index === 0) ? 'true' : 'false' ?>" aria-controls="<?= $q_id ?>">
                                                <?= htmlspecialchars($faq['question'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                                            </button>
                                        </h2>
                                        <div id="<?= $q_id ?>" class="accordion-collapse collapse <?= ($index === 0) ? 'show' : '' ?>" aria-labelledby="<?= $h_id ?>" data-bs-parent="#blogFaqAccordion">
                                            <div class="accordion-body">
                                                <?= nl2br(htmlspecialchars($faq['answer'] ?? '', ENT_QUOTES, 'UTF-8')) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <!-- Author Box & Social Share Footer -->
                    <div class="author-box">
                        <div class="author-avatar">D</div>
                        <div>
                            <h5 class="fw-bold mb-1" style="color: #0f172a;">DigiCoders Tech Team</h5>
                            <p class="text-muted small mb-2">We build scalable web applications, mobile apps, and enterprise software solutions to empower businesses worldwide.</p>
                            
                            <div class="d-flex align-items-center gap-2 mt-2">
                                <span class="small fw-bold text-slate-600 me-2">Share Article:</span>
                                <a href="https://api.whatsapp.com/send?text=<?= urlencode($blog_title . ' ' . $canonical_url) ?>" target="_blank" class="share-btn btn-whatsapp" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonical_url) ?>" target="_blank" class="share-btn btn-facebook" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?text=<?= urlencode($blog_title) ?>&url=<?= urlencode($canonical_url) ?>" target="_blank" class="share-btn btn-twitter" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode($canonical_url) ?>&title=<?= urlencode($blog_title) ?>" target="_blank" class="share-btn btn-linkedin" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
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

                        <!-- Recent Blog Posts Widget -->
                        <?php if (!empty($recent_blogs)): ?>
                            <div class="sidebar-widget">
                                <h4 class="widget-title"><i class="fas fa-fire me-2 text-primary"></i> Recent Articles</h4>
                                <?php foreach ($recent_blogs as $rb): 
                                    $rb_img = !empty($rb->img) ? $rb->img : $rb->image;
                                    $rb_thumb = !empty($rb_img) ? base_url('public/uploads/Blog/' . $rb_img) : base_url('public/assets/images/blog-default.jpg');
                                    $rb_slug = !empty($rb->url) ? $rb->url : $rb->id;
                                    $rb_link = base_url('blog/' . $rb_slug);
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

                        <!-- Keywords / Tags Cloud Widget -->
                        <?php if (!empty($blog_keywords)): 
                            $tags_arr = array_filter(array_map('trim', explode(',', $blog_keywords)));
                        ?>
                            <?php if (!empty($tags_arr)): ?>
                                <div class="sidebar-widget">
                                    <h4 class="widget-title"><i class="fas fa-tags me-2 text-primary"></i> Related Tags</h4>
                                    <div class="tag-cloud">
                                        <?php foreach ($tags_arr as $tag_item): ?>
                                            <span class="tag-pill">#<?= htmlspecialchars($tag_item, ENT_QUOTES, 'UTF-8') ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                        <!-- CTA Promo Banner -->
                        <div class="cta-widget shadow-sm">
                            <h4 class="fw-bold mb-2 text-white">Build Your Dream Software</h4>
                            <p class="small text-slate-300 mb-3" style="color: #cbd5e1;">Need custom Web Development, Android/iOS App Development, or Industrial Training?</p>
                            <a href="<?= base_url('Home/Contact') ?>" class="btn btn-primary btn-sm w-100 py-2 fw-semibold" style="border-radius: 6px;">Get Free Quotation <i class="fas fa-arrow-right ms-1"></i></a>
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
        document.addEventListener('DOMContentLoaded', function() {
            const articleBody = document.getElementById('article-body');
            const tocList = document.getElementById('toc-list');
            
            if (!articleBody || !tocList) return;

            const headings = articleBody.querySelectorAll('h2, h3');
            
            if (headings.length === 0) {
                tocList.innerHTML = '<li class="text-muted small">No sections in this article.</li>';
                return;
            }

            tocList.innerHTML = '';
            
            headings.forEach((heading, index) => {
                // Assign an ID if not present
                if (!heading.id) {
                    heading.id = 'section-' + (index + 1);
                }

                const li = document.createElement('li');
                if (heading.tagName.toLowerCase() === 'h3') {
                    li.classList.add('toc-h3');
                }

                const a = document.createElement('a');
                a.href = '#' + heading.id;
                a.textContent = heading.innerText;
                
                a.addEventListener('click', function(e) {
                    e.preventDefault();
                    heading.scrollIntoView({ behavior: 'smooth' });
                });

                li.appendChild(a);
                tocList.appendChild(li);
            });
        });
    </script>
</body>

</html>
