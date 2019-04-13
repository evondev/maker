<?php
// Insert php code later
$about_header_icon = get_field('about_header_icon');
$about_header_title = get_field('about_header_title');
$about_header_content = get_field('about_header_content');
?>
<section class="about-header">
    <div class="container">
        <div class="about-header__content">
            <div class="icon about-header__icon">
                <img src="<?php echo $about_header_icon['url'] ;?>" alt="">
            </div>
            <h2 class="heading__big about-header__title"><?php echo $about_header_title;?></h2>
            <p class="desc about-header__desc"><?php echo $about_header_content ;?></p>
        </div>
    </div>
</section>
