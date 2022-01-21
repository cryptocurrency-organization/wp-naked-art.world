<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-W0TZ41B0ZX"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-W0TZ41B0ZX');
	</script>

	<script>
		window.addEventListener('load', (event) => {
			const all = document.querySelectorAll("iframe");
			const elemToKeep = all[0];
			elemToKeep.removeAttribute("border");
			document.querySelector(".pb-footer").prepend(elemToKeep);
			all.forEach(elem => {
				if (elem != elemToKeep) {
					elem.remove();
				}
			});
		});
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	} else {
		do_action('wp_body_open');
	}
	?>

	<!-- Preloader -->
	<?php get_template_part('templates/header/preloader'); ?>

	<!-- Page Wrapper -->
	<div id="page-wrap">

		<!-- Boxed Wrapper -->
		<div id="page-header" <?php echo esc_attr(ashe_options('general_header_width')) === 'boxed' ? 'class="boxed-wrapper"' : ''; ?>>

			<?php

			// Top Bar
			get_template_part('templates/header/top', 'bar');

			// Page Header
			get_template_part('templates/header/page', 'header');

			// Main Navigation
			get_template_part('templates/header/main', 'navigation');

			?>

		</div><!-- .boxed-wrapper -->

		<!-- Page Content -->
		<div class="page-content">

			<?php // Featured Slider and Links
			$post_meta = get_post_meta(get_the_ID());

			if (is_front_page() && (isset($post_meta['_wp_page_template']) && 'elementor_header_footer' === $post_meta['_wp_page_template'][0])) {

				// Featured Slider, Carousel
				if (ashe_options('featured_slider_label') === true && ashe_options('featured_slider_location') !== 'blog') {
					if (ashe_options('featured_slider_source') === 'posts') {
						get_template_part('templates/header/featured', 'slider');
					} else {
						get_template_part('templates/header/featured', 'slider-custom');
					}
				}

				// Featured Links, Banners
				if (ashe_options('featured_links_label') === true && ashe_options('featured_links_location') !== 'blog') {
					get_template_part('templates/header/featured', 'links');
				}
			}

			?>

			<?php get_template_part('templates/sidebars/sidebar', 'alt'); // Sidebar Alt 
			?>