<?php
// Setting the title of the page
$title = "Om oss"

?>
<!-- Include the header.php -->
<?php include '../../app/includes/header.php' ?>

<main>
    <!-- Main heading for the About Us page -->
    <h1 class="white-font">About Us</h1>
    <!-- foto-galleri links to the gallery page -->
    <p class="white-font">Utförska våra smakrikarätter i <a href="./galleri.php">
            foto-galleri</a>
    </p>


    <!-- Image gallery container -->
    <div class="image-container">
        <!-- Each image links to the gallery page -->
        <div>
            <a href="./galleri.php">
                <img src="../img/bun-green.jpg" alt="">
            </a>

        </div>
        <div>
            <a href="./galleri.php">
                <img src="../img/bun-chick-kebab.jpg" alt="">
            </a>
        </div>
        <div>
            <a href="./galleri.php">
                <img src="../img/bun-hallomi.jpg" alt="">
            </a>

        </div>
        <div>
            <a href="./galleri.php">

                <img src="../img/bun-beef-double.jpg" alt="">
            </a>

        </div>
    </div>


    <div class="back-support">
        <!-- Section about the restaurant -->
        <div class="back-support">
            <h1 class="white-title">Vem vi är:</h1>
            <p class="white-font">
                På SweMash PakSpice är vi passionerade över att introducera autentisk pakistansk mat för en bredare publik, med en touch av svensk påverkan. Vår restaurangs resa började som en matbil 2022, där vi serverade den lokala gemenskapen ett urval av smakrika rätter från Pakistan, tillsammans med klassiska hamburgare för de som vill utforska nya smaker utan att ge sig in på det exotiska.
                Vårt team består av kulinariska yrkesverksamma med djup kunskap om både pakistansk och svensk matlagning. Vi strävar efter att blanda det bästa från båda världarna och erbjuda en blandning av traditionella och moderna smaker i varje rätt vi serverar.
            </p>
        </div>
        <div class="image-container-banner">
            <img src="../img/food-truck.jpg" alt="">
        </div>
        <!-- Section about the vision -->
        <div class="back-support">
            <h1 class="white-title">Vår vision</h1>
            <p class="white-font">
                Vår målsättning är att erbjuda en unik matupplevelse som speglar det bästa av både pakistansk och svensk kultur. Vi vill bli en mötesplats för människor från alla bakgrunder där man kan njuta av god mat, utmärkt service och en känsla av gemenskap.
                Varje månad introducerar vi en ny specialrätt, vilket gör att det alltid finns något spännande att se fram emot. Oavsett om du är sugen på en saftig hamburgare eller vill prova en autentisk pakistansk curry, har vi något för varje smak.
            </p>
        </div>
        <div class="image-container-banner">
            <img src="../img/original-butik.jpg" alt="">
        </div>
    </div>



</main>

<?php
// Include the footer file
include '../../app/includes/footer.php'
?>