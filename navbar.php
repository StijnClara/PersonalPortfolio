<!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Stijn Clara's Portfolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo ($currentPage == 'index') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item <?php echo ($currentPage == 'portfolio') ? 'active' : ''; ?>">
                <a class="nav-link" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item <?php echo ($currentPage == 'blog') ? 'active' : ''; ?>">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<?php include('footer.php');?>