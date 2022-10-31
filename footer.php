<!-- footer-->
<footer>
        <div class="footer-container">
            <div class="footer">
                <div class="footer-heading footer-1">
                    <a href="https://www.google.com/maps/dir//6450+S%C3%B6lden,+%C3%96sterrike/@46.9607766,11.0015382,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x479d325b54281ac7:0x4d28dbae2ec3df3f!2m2!1d11.0076232!2d46.9654937">Besök oss</a>
                    <address>
                    </address>
                </div>
                <div class="footer-heading footer-2">
                    <!--menu array-->
                    <?php wp_nav_menu(array ('theme_location' => 'footer-om')); ?>
                </div>
                <div class="footer-heading footer-3">
                    <!--menu array-->
                <?php wp_nav_menu(array ('theme_location' => 'footer-kontakt')); ?>
                </div>
                <div class="footer-heading footer-4">
                    <h3>Social</h3>
                    <p><a href="https://www.instagram.com/"><i class="fab fa-instagram"
                                style="font-size:27px"></i></a><a href="https://www.facebook.com/"><i
                                class="fab fa-facebook ml-1"
                                style="font-size:27px"></i></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--my javascript file-->
    <script type="module" src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>