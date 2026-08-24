<!DOCTYPE html>
<html lang="en">

<head>
    <?php $has_custom_seo = true; ?>
    <title>Latest Tech Blogs & News - DigiCoders</title>
    <meta name="description" content="Explore insightful articles, web development trends, software tutorials, and tech news from DigiCoders Technologies.">
    <meta name="keywords" content="DigiCoders blog, software development blog, web development tutorials, tech news Lucknow">
    <link rel="canonical" href="<?= base_url('blogs') ?>" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Latest Tech Blogs & News - DigiCoders">
    <meta property="og:description" content="Explore insightful articles, web development trends, software tutorials, and tech news from DigiCoders Technologies.">
    <meta property="og:url" content="<?= base_url('blogs') ?>">

    <?php include('include/headerlinks.php') ?>

    <style>
        .blog-hero-banner {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 70px 0 60px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }
        .blog-hero-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
        }
        .blog-card {
            background: #ffffff;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
            margin-bottom: 24px;
        }
        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -10px rgba(15, 23, 42, 0.12);
            border-color: #cbd5e1;
        }
        .blog-card-img-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            padding-top: 56.25%; /* 16:9 Fallback */
            overflow: hidden;
            background-color: #f1f5f9;
            display: block;
        }
        @supports (aspect-ratio: 16 / 9) {
            .blog-card-img-wrapper {
                padding-top: 0;
            }
        }
        .blog-card-img-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .blog-card:hover .blog-card-img-wrapper img {
            transform: scale(1.06);
        }
        .blog-card-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(4px);
            color: #ffffff;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .blog-card-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .blog-card-meta {
            font-size: 0.825rem;
            color: #64748b;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .blog-card-meta i {
            color: #3b82f6;
        }
        .blog-card-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.45;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.2s ease;
        }
        .blog-card:hover .blog-card-title {
            color: #2563eb;
        }
        .blog-card-excerpt {
            font-size: 0.925rem;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }
        .blog-card-footer {
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .btn-read-more {
            color: #2563eb;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: gap 0.2s ease;
        }
        .btn-read-more:hover {
            color: #1d4ed8;
            gap: 10px;
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
                        <h2 class="breadcrumb-title text-color-dark">Blogs</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home/Index') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Blogs</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Main Blogs Grid Section -->
    <section class="py-5">
        <div class="container my-4">
            <?php if (!empty($blogdata)): ?>
                <div class="row g-4">
                    <?php foreach ($blogdata as $data): 
                        $img_file = !empty($data->img) ? $data->img : $data->image;
                        $img_url = !empty($img_file) ? base_url('public/uploads/Blog/' . $img_file) : base_url('public/assets/images/blog-default.jpg');
                        $blog_slug = !empty($data->url) ? $data->url : $data->id;
                        $detail_url = base_url('blogs/' . $blog_slug);
                        $excerpt = !empty($data->meta_description) ? $data->meta_description : strip_tags($data->content ?? $data->full_discription ?? '');
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <article class="blog-card">
                                <a href="<?= $detail_url ?>" class="blog-card-img-wrapper">
                                    <img src="<?= $img_url ?>" alt="<?= htmlspecialchars($data->title ?? 'DigiCoders Blog', ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                                   
                                </a>
                                <div class="blog-card-body">
                                    <div class="blog-card-meta">
                                        <span><i class="fa fa-calendar-alt me-1"></i> <?= !empty($data->date) ? date('M d, Y', strtotime($data->date)) : (!empty($data->Blog_date) ? date('M d, Y', strtotime($data->Blog_date)) : 'Recent') ?></span>
                                        <span><i class="fa fa-clock me-1"></i> 3 min read</span>
                                    </div>
                                    <h2 class="blog-card-title">
                                        <a href="<?= $detail_url ?>" class="text-decoration-none text-reset"><?= htmlspecialchars($data->title ?? '', ENT_QUOTES, 'UTF-8') ?></a>
                                    </h2>
                                    <p class="blog-card-excerpt">
                                        <?= htmlspecialchars(mb_strimwidth($excerpt, 0, 140, '...'), ENT_QUOTES, 'UTF-8') ?>
                                    </p>
                                    <div class="blog-card-footer">
                                        <a href="<?= $detail_url ?>" class="btn-read-more">
                                            Read Full Article <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <div class="mb-3"><i class="fa fa-newspaper fa-3x text-muted"></i></div>
                    <h4 class="text-secondary">No blog posts published yet.</h4>
                    <p class="text-muted">Check back soon for exciting tech insights and tutorials!</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>
