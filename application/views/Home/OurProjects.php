<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Projects | Best IT Company in Lucknow - DigiCoders</title>
    <meta name="description" content="We provide a wide range of app and web development services in Lucknow, India. Browse our all projects and see our development work.">
    <?php include('include/headerlinks.php') ?>
    <style>
        /* ================= PREMIUM PROJECT CARD SYSTEM ================= */
        .project-filter-section {
            margin-bottom: 35px;
        }

        .project-filter-pill-container {
            background: #f1f5f9;
            padding: 6px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .project-filter-btn {
            background: transparent;
            color: #475569;
            font-size: 13.5px;
            font-weight: 600;
            padding: 9px 20px;
            border-radius: 8px; /* Max 5% style radius */
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            outline: none;
        }

        .project-filter-btn:hover {
            color: #0d6efd;
        }

        .project-filter-btn.active {
            background: #ffffff;
            color: #0d6efd;
            font-weight: 700;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        .project-card-item {
            background: #ffffff;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .project-card-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 35px rgba(13, 110, 253, 0.12);
            border-color: rgba(13, 110, 253, 0.3);
        }

        .project-card-thumb {
            height: 210px;
            position: relative;
            overflow: hidden;
            background: #f1f5f9;
        }

        .project-card-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 0.5s ease;
        }

        .project-card-item:hover .project-card-thumb img {
            transform: scale(1.06);
        }

        .project-top-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(4px);
            color: #ffffff;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 6px;
            letter-spacing: 0.3px;
        }

        .project-card-body {
            padding: 18px 16px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .project-card-title {
            font-size: 17px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.35;
            margin-bottom: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .project-card-meta {
            font-size: 12.5px;
            font-weight: 600;
            color: #64748b;
        }

        .project-card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
            margin-top: 12px;
        }

        .badge-type-pill {
            background: #eff6ff;
            color: #0d6efd;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 6px;
            border: 1px solid #dbeafe;
            white-space: nowrap;
        }

        .btn-card-visit {
            background: #10b981;
            color: #ffffff !important;
            font-size: 12.5px;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 6px;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            transition: all 0.25s ease;
            border: none;
            white-space: nowrap;
        }

        .btn-card-visit:hover {
            background: #059669;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .btn-card-enquiry {
            background: #0d6efd;
            color: #ffffff !important;
            font-size: 12.5px;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
            white-space: nowrap;
        }

        .btn-card-enquiry:hover {
            background: #0b5ed7;
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
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
                        <h2 class="breadcrumb-title">Our Projects</h2>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active">Our Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <div class="feature-images-wrapper bg-gray section-space--ptb_100">
            <div class="container">
                <!-- Filter Tabs -->
                <div class="project-filter-section text-center">
                    <div class="project-filter-pill-container d-inline-flex flex-wrap justify-content-center">
                        <button type="button" class="project-filter-btn active" data-filter="all">
                            <i class="fas fa-th-large mr-1"></i> All Projects
                        </button>
                        <button type="button" class="project-filter-btn" data-filter="website">
                            <i class="fas fa-globe mr-1"></i> Website
                        </button>
                        <button type="button" class="project-filter-btn" data-filter="mobile">
                            <i class="fas fa-mobile-alt mr-1"></i> Mobile App
                        </button>
                        <button type="button" class="project-filter-btn" data-filter="software">
                            <i class="fas fa-laptop-code mr-1"></i> Software
                        </button>
                    </div>
                </div>

                <div class="row" id="projects-grid">
                    <?php if (!empty($userdata)): ?>
                        <?php foreach ($userdata as $projects): 
                            $is_link_active = (!isset($projects->link_status) || $projects->link_status == 'true' || $projects->link_status == '1');
                            $proj_type = !empty($projects->type) ? $projects->type : 'Website';
                        ?>
                            <div class="col-lg-4 col-md-6 mb-4 project-filter-item" data-category="<?= strtolower(htmlspecialchars($proj_type)) ?>">
                                <div class="project-card-item">
                                    <div class="project-card-thumb">
                                        <img class="lazy" src="<?= base_url('public') ?>/assets/images/loader2.jpg" data-src="<?= base_url('public/uploads/projects/') . $projects->image; ?>" alt="<?= htmlspecialchars($projects->title); ?>" loading="lazy">
                                        <!-- <span class="project-top-badge"><?= htmlspecialchars($proj_type); ?></span> -->
                                    </div>
                                    <div class="project-card-body">
                                        <h5 class="project-card-title" title="<?= htmlspecialchars($projects->title); ?>">
                                            <?= htmlspecialchars($projects->title); ?>
                                        </h5>
                                        <div class="project-card-meta mb-2">
                                            <i class="far fa-calendar-alt mr-1"></i> <?php $date = strtotime($projects->add_date); echo date('M Y', $date); ?>
                                        </div>
                                        <div class="project-card-footer">
                                            <span class="badge-type-pill"><?= htmlspecialchars($proj_type); ?></span>
                                            <div class="d-flex align-items-center" style="gap: 6px;">
                                                <?php if ($is_link_active && !empty($projects->url)): ?>
                                                    <a href="<?= $projects->url; ?>" target="_blank" class="btn-card-visit">
                                                        <i class="fas fa-external-link-alt mr-1"></i> Visit
                                                    </a>
                                                <?php endif; ?>
                                                <button type="button" onclick="openProjectEnquiryModal('<?= $projects->id ?>', '<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>')" class="btn-card-enquiry">
                                                    Enquiry
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/project_enquiry_modal.php') ?>
    <?php include('include/footer.php') ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const filterBtns = document.querySelectorAll(".project-filter-btn");
            const projectItems = document.querySelectorAll(".project-filter-item");

            filterBtns.forEach(btn => {
                btn.addEventListener("click", function () {
                    filterBtns.forEach(b => b.classList.remove("active"));
                    this.classList.add("active");

                    const filter = this.getAttribute("data-filter").toLowerCase();

                    projectItems.forEach(item => {
                        const cat = (item.getAttribute("data-category") || "").toLowerCase();
                        if (filter === "all") {
                            item.style.display = "block";
                        } else if (filter === "website" && cat.includes("website")) {
                            item.style.display = "block";
                        } else if (filter === "mobile" && (cat.includes("mobile") || cat.includes("app") || cat.includes("android") || cat.includes("ios"))) {
                            item.style.display = "block";
                        } else if (filter === "software" && cat.includes("software")) {
                            item.style.display = "block";
                        } else {
                            item.style.display = "none";
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
