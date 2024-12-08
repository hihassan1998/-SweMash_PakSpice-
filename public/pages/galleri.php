<?php

$title = "Galleri"
?>
<?php include '../../app/includes/header.php' ?>

<main>

    <h1 class="w-title">Galleri</h1>
    <h2 class="white-font">Explore our delicious dishes.</h2>
    <p class="white-title">Discover the best dishes we have to offer!</p>
    <div class="image-container">
        <?php
        $folder = "../img/"; // Path to your image folder
        $images = glob($folder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        foreach ($images as $image) {
            echo '<div>';
            echo "<img src='$image' alt='Gallery Image'>";
            echo '</div>';
        }
        ?>
        <!-- <div>
            <img src="../img/bun-green.jpg" alt="">
        </div>
        <div>
            <img src="../img/bun-chick-kebab.jpg" alt="">
        </div>
        <div>
            <img src="../img/bun-hallomi.jpg" alt="">
        </div>
        <div>
            <img src="../img/bun-beef-double.jpg" alt="">
        </div>
        <div>

            <img src="../img/food-truck.jpg" alt="">
        </div> -->
    </div>








</main>

<?php include '../../app/includes/footer.php' ?>