<?php
// insert php code here
$about_f1_image = get_field('about_f1_image');
$about_f1_background = get_field('about_f1_background');
$about_f1_small_heading = get_field('about_f1_small_heading');
$about_f1_heading = get_field('about_f1_heading');
$about_f1_item_image = get_field('about_f1_item_image');
$about_f1_item_title = get_field('about_f1_item_title');
$about_f1_item_text = get_field('about_f1_item_text');
$about_f1_item2_image = get_field('about_f1_item2_image');
$about_f1_item2_title = get_field('about_f1_item2_title');
$about_f1_item2_text = get_field('about_f1_item2_text');
$about_f1_more_text = get_field('about_f1_more_text');
$about_f1_more_link = get_field('about_f1_more_link');
?>
<section class="about-feature">
    <div class="container about-feature__container">
        <div class="about-feature__image" style="background-image:url(<?php echo $about_f1_background['url'] ?>)">
            <img src="<?php echo $about_f1_image['url']?>" alt="">
        </div>
        <div class="about-feature__info">
            <h4 class="heading__small"><?php echo $about_f1_small_heading?></h4>
            <h2 class="heading__big"><?php echo $about_f1_heading?></h2>
            <div class="about-feature__items">
                <div class="about-feature__item">
                    <img src="<?php echo $about_f1_item_image['url']?>" alt="">
                    <div class="about-feature__item-content">
                        <h5><?php echo $about_f1_item_title?></h5>
                        <p class="desc"><?php echo $about_f1_item_text?></p>
                    </div>
                </div>
                <div class="about-feature__item">
                    <img src="<?php echo $about_f1_item2_image['url']?>" alt="">
                    <div class="about-feature__item-content">
                        <h5><?php echo $about_f1_item2_title?></h5>
                        <p class="desc"><?php echo $about_f1_item2_text?></p>
                    </div>
                </div>
            </div>
            <a href="<?php echo $about_f1_more_link?>" class="about-feature__more"><strong><?php echo $about_f1_more_text?></strong></a>
        </div>
    </div>
</section>