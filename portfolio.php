<?php
$currentPage = 'portfolio';
$title = 'Portfolio - Stijn Clara';
include('header.php');
include('navbar.php');
?>

<!-- Portfolio Header -->
<section class="header">
    <div class="container">
        <h1>My Portfolio</h1>
        <p>Explore my skills and potential project ideas</p>
    </div>
</section>

<!-- Skills and Interests Section -->
<section class="py-5">
    <div class="container">
        <h2>My Skills</h2>
        <p>I am proficient in the following technologies and continuously expanding my expertise:</p>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>PHP</li>
        </ul>
        <h2>Project Interests</h2>
        <p>I am interested in working on various types of projects, including but not limited to:</p>
        <ul>
            <li>Responsive Website Design</li>
            <li>Single Page Applications (SPA)</li>
            <li>Interactive Web Elements</li>
            <li>Back-end Development</li>
            <li>Personal Blogs</li>
            <li>E-commerce Platforms</li>
        </ul>
    </div>
</section>

    <!-- Project Ideas Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2>Potential Project Ideas</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Personal Blog</h5>
                            <p class="card-text">A blog site to share my journey and experiences in web development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Portfolio Website</h5>
                            <p class="card-text">An elegant site to showcase my skills and future projects.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Interactive Resume</h5>
                            <p class="card-text">A dynamic resume highlighting my skills and experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Simple E-commerce Site</h5>
                            <p class="card-text">A basic e-commerce platform to practice back-end development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('footer.php') ?>