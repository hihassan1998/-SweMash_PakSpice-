<?php
// Setting the title of the page

$title = "Hem";
?>
<!-- Include the header file -->

<?php include '../../app/includes/header.php' ?>




<main>
    <!-- Main home page container -->
    <div class="container">
        <div>
            <!--Home page Welcome message -->
            <div class="contactlayout">
                <div class="part">
                    <div>
                        <img src="../img/bun4.png" alt="">
                    </div>
                </div>
                <div class="part">
                    <h1 class="yellow-title special-heading">Välkommen till SweMash PakSpice!</h1>
                    <h1 class="green-title special-heading">! سوی میش پاک اسپائس</h1>
                    <h1 class="blue-title special-heading">Welcome to SweMash PakSpice!</h1>
                </div>
            </div>
            <!--Home page message -->
            <div class="part">
                <p class="yellow-font back-support">
                    <strong>
                        SweMash PakSpice
                    </strong> är din lokala oas för läckra fusionrätter. Vi för med oss de rika smakerna från Pakistan till Sverige med ett urval av spännande rätter, från traditionella pakistanska favoriter till bekanta snabbmatsrätter som hamburgare för dem som vill prova något nytt men inte alltför exotiskt.
                    Vi grundades som en matbil 2022 och har snabbt blivit en favorit bland matälskare i staden, och nu är vi redo att välkomna dig till vår mysiga restaurang. Följ med oss på en unik matupplevelse där svensk enkelhet möter pakistansk krydda.
                </p>
            </div>
        </div>
        <!--Home page advert -->
        <div class="contactlayout">
            <div class="part back-support">
                <h1 class="yellow-title">Enkel online-bokning och möjlighet att påverka menyn.</h1>
                <p>

                    <a href="./contact.php" class="btn-y2">Bokning </a>
                </p>
            </div>

            <div class="part back-support">
                <h2 class="blue-title">Exotiska smaker med en svensk twist.</h2>
                <p>

                    <a href="./menu.php" class="btn-y2">Meny
                    </a>
                </p>
                <img src="../img/logo/sp-logo-trans.png" alt="">
            </div>
        </div>
        <!--Home page advert -->

        <div class="back-support">
            <div class="contactlayout">
                <div class="part">
                    <img src="../img/nobgfood9.png" alt="">
                </div>
                <div class="part">
                    <p class="blue-title">Månadens maträtt:</p>
                    <p class="green-title">Prova en ny pakistansk rätt varje månad.</p>
                    <p>
                        <a href="./menu.php" class="btn-y2">Meny</a>
                    </p>
                </div>

            </div>
        </div>


    </div>
</main>

<!-- Include the footer file -->
<?php include '../../app/includes/footer.php' ?>