<?php
// Setting the title of the page

$title = "Kontakta Oss"; ?>
<!-- Include the header file -->
<?php include '../../app/includes/header.php' ?>


<main class="back-support ">
    <!-- Form container -->
    <div class="container font">
        <h1 class="yellow-font">Contact Us</h1>
        <!-- Form for meetings-->
        <form action="./contact-form-handler.php" method="POST">
            <div class="row-form yellow-font">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="row-form yellow-font">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

            </div>
            <div class="col yellow-font">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="col">
                <button class="btn-y" type="submit">Send</button>
            </div>
        </form>
    </div>

</main>
<?php
// Include the footer file
include '../../app/includes/footer.php'; ?>