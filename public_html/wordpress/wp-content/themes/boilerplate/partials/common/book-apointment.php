<section class="book-appointment-main-sec" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php the_field('book_an_appointment_banner'); ?>) no-repeat center center">
    <div class="container">
        <div class="book-appointment-inner">
            <div class="book-appointment-content">
                <h4><?php the_field('book_an_appointment'); ?></h4>
                <div class="book-appointment-btn">
                    <a href="<?php the_field('book_an_appointment__url'); ?>"><?php the_field('book_an_appointment_button_title'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>