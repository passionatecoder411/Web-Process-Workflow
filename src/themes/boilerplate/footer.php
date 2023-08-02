<footer class="footer-main-sec">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="footer-left-area">
                    <div class="footer-copyright-area">
                       <?php the_field('copyright_text', 'option'); ?>
                    </div>
                </div>
                <div class="footer-right-area">
                    <div class="footer-call-today-area">
                        <?php the_field('call_us', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>