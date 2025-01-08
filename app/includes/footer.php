<!-- inline javascript for navbar for mobiles -->
<script>
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navbarMenu = document.querySelector('.navbar-menu');

    hamburgerMenu.addEventListener('click', () => {
        navbarMenu.classList.toggle('active');
    });
</script>
<!-- Footer element for footer banner of the website -->
<footer>
    <div class="row">
        <div class="col">
            <p class="bold-text">Adress:</p>
            <p>123 Universitetsvägen,</p>
            <p> Lulestad, 45678 Sverige</p>
        </div>
        <div class="col">
            <div class="part-footer">
                <img class="" src="../img/logo/sp-logo-trans.png" style="width:25%;" alt="">
            </div>

        </div>


        <div class="col">
            <p class="bold-text">Kontakta Oss:</p>
            <p>Telefon: +46 123 456 789</p>
            <p>E-post: info@sweMash-pakSpice.se</p>
        </div>

    </div>
    <div class="col">
        <div class="footer-marking">
            <p>Denna sida är upphovsrättsskyddad &copy; SweMash PakSpice 2024</p>

        </div>
    </div>


</footer>
</body>

</html>