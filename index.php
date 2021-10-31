<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '\CQ_BLOG\includes\head_section.php') ?>
<link rel="stylesheet" type="text/css" href="static/css/gunjan.css">
<link rel="stylesheet" href="static/css/public_styling.css">
	<title>LifeBlog | Home </title>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<section id="nav-bar">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#first-page"><img src="static/images/logo.jpg" >Communiqué</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <!--ml-auto for right alignment -->
                        <li class="nav-item active mx-auto">
                            <a class="nav-link" href="index.html#first-page">HOME</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="gallery.html">GALLERY</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="FAQs.html">FAQs</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="alumni.html">ALUMNI</a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a class="nav-link" href="Events.html">EVENTS</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
		<!-- // navbar -->

		<!-- banner -->
		<?php include( ROOT_PATH . '\CQ_BLOG\includes\banner.php') ?>
		<!-- // banner -->

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Latest Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
		</div>
		<!-- // Page content -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- footer -->
		<!-- <?php include( ROOT_PATH . '\CQ_BLOG\includes\footer.php') ?> -->

        <div class="blogc card mb-3" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="static/images/banner2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="blogc card mb-3" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="static/images/banner2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="blogc card mb-3" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="static/images/banner2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
		<!-- // footer -->

        