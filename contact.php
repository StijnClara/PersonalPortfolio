<?php
$currentPage = 'contact';
$title = 'Contact - Stijn Clara';
include('header.php');
include('navbar.php');
?>
<!-- Contact Header -->
<section class="header">
    <div class="container">
        <h1>Contact Me</h1>
        <p>I'd love to hear from you! Please fill out the form below to get in touch.</p>
    </div>
</section>

<!-- Contact Form -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
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
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php');