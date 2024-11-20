<?php
$title = "Kontakta Oss"; ?>
<?php include '../../app/includes/header.php' ?>


<main>

    <h1>Contact Us</h1>
    <form action="/contact-form-handler.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send</button>
    </form>
</main>
<?php include '../../app/includes/footer.php'; ?>