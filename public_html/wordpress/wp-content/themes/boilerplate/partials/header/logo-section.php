<?php 
$logo =  get_bloginfo('template_url').'/images/logo-main.svg';
if(get_field('header_logo', 'option')){
    $logo = get_field('header_logo', 'option');
}
?>

<header class="header-main-sec">
    <div class="container">
        <div class="header-inner-area">
            <div class="row">
                <div class="header-logo-area">
                    <a href="<?php echo site_url(); ?>" title="<?php echo get_bloginfo('title'); ?>" class="d-flex">
                        <img src="<?php echo $logo; ?>" alt="logo-main" class="img-fluid w-100 h-100">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header> 