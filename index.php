<?php
$currentPage = 'index';
$title = 'Home - Stijn Clara';
include('header.php');
include('navbar.php');
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to Stijn Clara's Portfolio</h1>
            <p>Passionate Web Developer and Designer</p>
        </div>
    </section>

    <!-- About Section -->
    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2>About Stijn Clara</h2>
            <p>
                Hello! I'm Stijn Clara, a passionate and aspiring web developer on a journey to master the art of coding and design. I may be new to the field, but I'm eager to learn and grow with every line of code I write.
            </p>
            <p>
                My journey into web development started with a curiosity to understand how websites are built. Since then, I've been immersing myself in online courses, tutorials, and coding challenges to expand my skills and deepen my understanding of web technologies.
            </p>
            <p>
                My approach to coding is guided by a commitment to craftsmanship and a relentless pursuit of excellence. I believe that every project, no matter how small, is an opportunity to hone my skills and push the boundaries of what I can achieve.
            </p>
            <p>
                I'm currently seeking opportunities to gain practical experience and contribute to real-world projects. Whether it's through internships, freelance work, or collaborative efforts, I'm excited to embark on this journey and make my mark in the world of web development.
            </p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-5 bg-light">
        <div class="container">
            <h2>Stijn Clara's Skills</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>HTML</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%;">90%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>CSS</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;">85%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>JavaScript</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%;">80%</div>
                    </div>
                </div>
            </div>
                <!-- Add more skills here -->
            </div>
        </div>
    </section>

    <!-- Portfolio Section
    <section id="portfolio" class="py-5">
        <div class="container">
            <h2>Portfolio</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="path/to/project1.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Project 1</h5>
                            <p class="card-text">A brief description of Project 1.</p>
                            <a href="portfolio.php#project1" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="path/to/project2.jpg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Project 2</h5>
                            <p class="card-text">A brief description of Project 2.</p>
                            <a href="portfolio.php#project2" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="path/to/project3.jpg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Project 3</h5>
                            <p class="card-text">A brief description of Project 3.</p>
                            <a href="portfolio.php#project3" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    Testimonials Section
    <section id="testimonials" class="py-5 bg-light">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="row">
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <footer class="blockquote-footer">Client Name <cite title="Source Title">Company</cite></footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <footer class="blockquote-footer">Client Name <cite title="Source Title">Company</cite></footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p class="mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                        <footer class="blockquote-footer">Client Name <cite title="Source Title">Company</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2>Contact</h2>
            <form action="contact_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>
<?php include('footer.php') ?>