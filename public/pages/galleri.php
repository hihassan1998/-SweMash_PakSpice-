<?php

$title = "Galleri"
?>
<?php include '../../app/includes/header.php' ?>

<main>

    <h2 class="w-title special-heading">Galleri</h2>
    <h2 class="white-font">Utforska en värld av smaker med våra autentiska och smakrika rätter.</h2>
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
    </div>








</main>

<?php include '../../app/includes/footer.php' ?>