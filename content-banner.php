<?php
$banner_small_title = get_field('banner_small_title');
$banner_big_title = get_field('banner_big_title');
$banner_desc = get_field('banner_desc');
$banner_app_download_link = get_field('banner_app_download_link');
$banner_app_download = get_field('banner_app_download');
$banner_image = get_field('banner_image');
$banner_background_bottom = get_field('banner_background_bottom');
?>
<section class="banner">
	<div class="container banner__container">
		<div class="banner__content">
			<span class="heading__small"><?php echo $banner_small_title ;?></span>
			<h2 class="heading__big"><?php echo $banner_big_title ;?></h2>
			<p class="desc"><?php echo $banner_desc ;?></p>
			<a href="<?php echo $banner_app_download_link ;?>" class="download__app-store">
				<img src="<?php echo $banner_app_download['url'] ;?>" alt="<?php echo $banner_app_download['alt'] ;?>">
			</a>
		</div>
		<div class="banner__image">
			<img src="<?php echo $banner_image['url'] ;?>" alt="<?php echo $banner_image['alt'] ;?>">
		</div>
	</div>
	<div class="banner__circle banner__circle--small"></div>
	<div class="banner__circle banner__circle--big"></div>
	<div class="banner__waves" style="background-image:url(<?php echo $banner_background_bottom['url'] ;?>);"></div>
</section>