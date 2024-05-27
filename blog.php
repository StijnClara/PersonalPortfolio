<?php
$currentPage = 'blog';
$title = 'Blog - Stijn Clara';
include('header.php');
include('navbar.php');
?>

    <!-- Blog Header -->
    <section class="header">
        <div class="container">
            <h1>Stijn Clara's Blog</h1>
            <p>Documenting the journey of building my personal website</p>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-5">
        <div class="container">
            <h2>Recent Posts</h2>

            <!-- Blog Post Excerpt -->
            <div class="post-excerpt">
                <h3>Planning the Website</h3>
                <p>Before jumping into development, it's crucial to plan out the structure and content of the website. In this post, we'll discuss the steps involved in planning...</p>
                <a href="post1.php" class="btn btn-primary">Read More</a>
            </div>

            <!-- Blog Post Excerpt -->
            <div class="post-excerpt">
                <h3>Designing a Minimalistic Layout</h3>
                <p>A clean, minimalistic design ensures a great user experience. This post covers the principles of minimalistic design and how we applied them to this website...</p>
                <a href="post2.php" class="btn btn-primary">Read More</a>
            </div>

            <!-- Blog Post Excerpt -->
            <div class="post-excerpt">
                <h3>Developing with Bootstrap</h3>
                <p>Bootstrap provides a powerful framework for responsive design. Learn how we used Bootstrap to build the structure and layout of the website...</p>
                <a href="post3.php" class="btn btn-primary">Read More</a>
            </div>

            <!-- Placeholder for more blog posts -->
            <div class="post-excerpt">
                <h3>More Posts Coming Soon!</h3>
                <p>Stay tuned for more articles as we continue to document the development and launch of this website.</p>
            </div>
        </div>
    </section>
<?php include('footer.php');?>