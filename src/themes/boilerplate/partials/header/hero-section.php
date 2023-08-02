<section class="hero-banner-main-sec">
		<div class="hero-banner-inner">
			<div class="row mx-0">
				<div class="col-md-6">
					<div class="hero-banner-content-area h-100 d-flex flex-column justify-content-center">
						<div class="hero-banner-title">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="hero-banner-con">
							<?php the_content(); ?>
						</div>
                        <?php if(get_field('hero_button_title') &&  get_field('hero_button_link')): ?>
						<div class="hero-banner-btn">
							<a href="<?php the_field('hero_button_link'); ?>"><?php the_field('hero_button_title') ?></a>
						</div>
                        <?php endif; ?>
					</div>
				</div>
				<div class="col-md-6 px-0">
					<div class="hero-banner-img">
                        <?php $banner_image = get_bloginfo('template_url').'/images/heroeimage-1.png'; ?>
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            <?php 
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
                                $banner_image = $image[0];
                            ?>
                        <?php endif; ?>
						<img src="<?php echo $banner_image; ?>" alt="<?php the_title(); ?>" class="img-fluid w-100 h-100">
					</div>
				</div>
			</div>
		</div>
	</section>