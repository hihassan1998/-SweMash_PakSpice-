<?php
$title = "Kontakta Oss"; ?>
<?php include '../../app/includes/header.php' ?>


<main id="back-support">
    <div class="container">
        <h1>Contact Us</h1>
        <div class="row">
            <form action="./contact-form-handler.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
        </div>
        <div class="row">
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

        </div>
        <div class="row">

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

        </div>
        <button type="submit">Send</button>
        </form>
    </div>

</main>
<?php include '../../app/includes/footer.php'; ?>