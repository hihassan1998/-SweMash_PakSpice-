<?php
$title = "Reservation"; ?>
<?php include '../../app/includes/header.php' ?>


<main id="back-support">
    <h1>Boka Bord</h1>
    <p>Planerar du att äta hos oss? Se till att boka bord i förväg för att säkerställa att du får bästa platsen i restaurangen! Fyll bara i formuläret nedan med dina uppgifter, så bekräftar vi din bokning så snart som möjligt.</p>
    <div class="container">
        <form action="./contact-form-handler.php" method="POST">
            <div class="row">
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