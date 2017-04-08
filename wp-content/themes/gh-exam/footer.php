
</div>
</div>

</div><!-- #content -->
<section class="our-clients">
	<div class="clients-block">
		<div class="under-header">

			<h3>Featured Clients</h3>
			<ul class="clients-row">

				<li>

					<img src="<?php echo wp_get_attachment_url(get_theme_mod('add_attach_img1')); ?>" alt="">
				</li>
				<li>
					<img src="<?php echo wp_get_attachment_url(get_theme_mod('add_attach_img2')); ?>" alt="">
				</li>
				<li>
					<img src="<?php echo wp_get_attachment_url(get_theme_mod('add_attach_img3')); ?>" alt="">
				</li>
				<li>
					<img src="<?php echo wp_get_attachment_url(get_theme_mod('add_attach_img4')); ?>" alt="">
				</li>
			</ul>
		</div>
</section>
<section class="box-contact">
	<div class="container flex justify-between">
		<div class="block-contact-us">
			<h3 class="heading"><?php echo get_theme_mod('box_contact_heading');?></h3>
			<p class="discription"><?php echo get_theme_mod('box_contact_discription');?></p>
			<span class="phone"><?php echo get_theme_mod('box_contact_phone');?></span>
			<span class="address"><?php echo get_theme_mod('box_contact_address');?></span>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.9823433814854!2d30.520118915731697!3d50.46005347947668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce46a355fd4f%3A0x9bb1b5375abbc47!2zR29vZ2xlINCj0LrRgNCw0ZfQvdCw!5e0!3m2!1sru!2sua!4v1491657177087" width="100%" height="384" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="block-form">
			<form action="#" method="post">

			</form>
		</div>
	</div>
</section>
<footer class="site-footer">
	<a href="<?php echo home_url(); ?>" class="logo flex">
		<?php echo get_theme_mod('logo_text');?>
		<span class="color"><?php echo get_theme_mod('logo_text_color');?></span>
	</a>
	<p class="bottom">&copy; 2015  All Rights Reserved.</p>
</footer>