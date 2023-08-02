<section class="get-touch-main-sec">
		<div class="container">
			<div class="get-touch-inner">
				<div class="row">
					<div class="col-md-6">
						<div class="get-touch-left-area">
							<div class="get-touch-content">
								<h3><?php the_field('get_in_touch_section_title'); ?></h3>
								<div class="get-touch-con">
									<?php the_field('get_in_touch_section_content'); ?>
								</div>
								<div class="get-touch-map-area">
									<?php the_field('map_iframe'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="get-touch-right-area">
							<div class="get-touch-form-area">
								<?php echo do_shortcode(get_field('contact_form')); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>