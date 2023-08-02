<section class="product-slider-main-sec">
    <div class="container">
        <div class="product-slider-inner">
            <div class="product-slider owl-carousel owl-theme" id="product-slider">
                <?php while(has_sub_field('products')):  ?>
                    <div class="item product-slide">
                        <div class="product-slide-inner">
                            <div class="product-slide-img">
                                <img src="<?php the_sub_field('product_image'); ?>" alt="<?php the_sub_field('product_title'); ?> class="img-fluid">
                            </div>
                            <div class="product-slide-title">
                                <h3><?php the_sub_field('product_title'); ?></h3>
                            </div>
                            <div class="product-slide-con">
                                <p><?php the_sub_field('product_description'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
              </div>
        </div>
    </div>
</section>