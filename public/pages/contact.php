<?php
// Setting the title of the page

$title = "Kontakta Oss"; ?>
<!-- Include the header file -->

<?php include '../../app/includes/header.php' ?>


<main class="white-font back-support">
    <!-- Contact us container -->

    <div class="container">
        <!-- Contact us container item-->

        <div class="contactlayout">
            <div class="part">
                <h1 class="blue-title">Kontakta Oss</h1>
            </div>
            <p> Vi på SweMash PakSpice vill gärna höra från dig! Oavsett om du har frågor, vill boka bord eller diskutera samarbeten, är vi här för att hjälpa till. Vår restaurang är inte bara en plats för att njuta av mat – vi ser det som en mötesplats för människor att dela sina erfarenheter och skapa nya minnen.
                <br>
                För att boka ett bord eller boka ett möte med vårt team, vänligen använd knapparna nedan.
            </p>
        </div>
        <!-- Contact us container item-->

        <div class="back-support">
            <h1 class="yellow-title">Boka Ett Möte</h1>
            <p>Är du intresserad av att diskutera samarbeten eller andra affärsmöjligheter? Vi erbjuder även möten för att prata om framtida möjligheter.</p>

            <a href="./meeting.php" class="btn-g">Bok mötet
            </a>
        </div>
        <!-- Contact us container item-->

        <div class="back-support">
            <h1 class="green-title">Boka Bord</h1>
            <p>Planerar du att äta hos oss? Se till att boka bord i förväg för att säkerställa att du får bästa platsen i restaurangen! Fyll bara i formuläret nedan med dina uppgifter, så bekräftar vi din bokning så snart som möjligt.</p>
            <a href="./meeting.php" class="btn-y">Bok ett bord
            </a>
            <p>Vill du komma och njuta av våra fantastiska rätter? Boka ett bord och upplev en unik matupplevelse med oss.</p>
        </div>

    </div>

</main>
<?php
// Include the footer file
include '../../app/includes/footer.php'; ?>