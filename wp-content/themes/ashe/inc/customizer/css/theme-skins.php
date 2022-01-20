<?php // Theme Skins

function ashe_theme_skins() {

	$skin = '<style id="ashe_theme_styles">';

	if ( ashe_options( 'skins_select' ) == 'dark' ) {
		$skin .= 'body,.mc4wp-form-fields,.widget_wysija_cont{background-color:#222 !important}#top-bar{background-color:#111}#top-bar a{color:#fff}#top-menu .sub-menu,#top-menu .sub-menu a{background-color:#111;border-color:rgba(255,255,255,0.05)}#main-nav{background-color:#111;box-shadow:0 1px 5px rgba(255,255,255,0.1)}#featured-links h6{background-color:rgba(34,34,34,0.85);color:#c4c4c4}#main-nav a,#main-nav i,#main-nav #s{color:#fff}.main-nav-sidebar span,.sidebar-alt-close-btn span{background-color:#fff}#main-menu .sub-menu,#main-menu .sub-menu a{background-color:#111;border-color:rgba(255,255,255,0.05)}#main-nav #s{background-color:#111}#main-nav #s::-webkit-input-placeholder{color:rgba(255,255,255,0.7)}#main-nav #s::-moz-placeholder{color:rgba(255,255,255,0.7)}#main-nav #s:-ms-input-placeholder{color:rgba(255,255,255,0.7)}#main-nav #s:-moz-placeholder{color:rgba(255,255,255,0.7)}.sidebar-alt,#featured-links,.main-content,.featured-slider-area,.page-content select,.page-content input,.page-content textarea{background-color:#222}.page-content,.page-content select,.page-content input,.page-content textarea,.page-content .post-author a,.page-content .ashe-widget a,.page-content .comment-author{color:#c4c4c4}.page-content h1,.page-content h2,.page-content h3,.page-content h4,.page-content h5,.page-content h6,.page-content .post-title a,.page-content .author-description h4 a,.page-content .related-posts h4 a,.page-content .blog-pagination .previous-page a,.page-content .blog-pagination .next-page a,blockquote,.page-content .post-share a{color:#fff}.page-content .post-title a:hover{color:rgba(255,255,255,0.75)}.page-content .post-date,.page-content .post-comments,.page-content .post-author,.page-content [data-layout*="list"] .post-author a,.page-content .related-post-date,.page-content .comment-meta a,.page-content .author-share a,.page-content .post-tags a,.page-content .tagcloud a,.widget_categories li,.widget_archive li,.ahse-subscribe-box p,.rpwwt-post-author,.rpwwt-post-categories,.rpwwt-post-date,.rpwwt-post-comments-number{color:#9e9e9e}.page-content input::-webkit-input-placeholder{color:#9e9e9e}.page-content input::-moz-placeholder{color:#9e9e9e}.page-content input:-ms-input-placeholder{color:#9e9e9e}.page-content input:-moz-placeholder{color:#9e9e9e}.page-content .post-footer,[data-layout*="list"] .blog-grid > li,.page-content .author-description,.page-content .related-posts,.page-content .entry-comments,.page-content .ashe-widget li,.page-content #wp-calendar,.page-content #wp-calendar caption,.page-content #wp-calendar tbody td,.page-content .widget_nav_menu li a,.page-content .tagcloud a,.page-content select,.page-content input,.page-content textarea,.widget-title h2:before,.widget-title h2:after,.post-tags a,.gallery-caption,.wp-caption-text,table tr,table th,table td,pre,.category-description{border-color:#383838}hr{background-color:#383838}.widget_search i,.widget_search #searchsubmit,.single-navigation i,.page-content .submit,.page-content .blog-pagination.numeric a,.page-content .blog-pagination.load-more a,.page-content .ashe-subscribe-box input[type="submit"],.page-content .widget_wysija input[type="submit"],.page-content .post-password-form input[type="submit"],.page-content .wpcf7 [type="submit"]{color:#c4c4c4;background-color:#333}.image-overlay,#infscr-loading,.page-content h4.image-overlay{background-color:rgba(0,0,0,0.3)}#page-footer,#page-footer select,#page-footer input,#page-footer textarea,.select2-container--default .select2-selection--single{background-color:#222}#page-footer,#page-footer a,#page-footer select,#page-footer input,#page-footer textarea{color:#c4c4c4}#page-footer #s::-webkit-input-placeholder{color:#c4c4c4}#page-footer #s::-moz-placeholder{color:#c4c4c4}#page-footer #s:-ms-input-placeholder{color:#c4c4c4}#page-footer #s:-moz-placeholder{color:#c4c4c4}#page-footer h1,#page-footer h2,#page-footer h3,#page-footer h4,#page-footer h5,#page-footer h6{color:#fff}#page-footer a,#page-footer .ashe-widget li,#page-footer #wp-calendar,#page-footer #wp-calendar caption,#page-footer #wp-calendar tbody td,#page-footer .widget_nav_menu li a,#page-footer select,#page-footer input,#page-footer textarea,#page-footer .widget-title h2:before,#page-footer .widget-title h2:after,.footer-widgets{border-color:#383838}#page-footer hr{background-color:#383838}.ashe-preloader-wrap{background-color:#333}.woocommerce div.product .stock,.woocommerce div.product p.price,.woocommerce div.product span.price,.woocommerce ul.products li.product .price,.woocommerce-Reviews .woocommerce-review__author,.woocommerce form .form-row .required,.woocommerce form .form-row.woocommerce-invalid label,.woocommerce .page-content div.product .woocommerce-tabs ul.tabs li a{color:#c4c4c4}.woocommerce a.remove:hover{color:#c4c4c4!important}.woocommerce a.remove,.woocommerce .product_meta,.page-content .woocommerce-breadcrumb,.page-content .woocommerce-review-link,.page-content .woocommerce-breadcrumb a,.page-content .woocommerce-MyAccount-navigation-link a,.woocommerce .woocommerce-info:before,.woocommerce .page-content .woocommerce-result-count,.woocommerce-page .page-content .woocommerce-result-count,.woocommerce-Reviews .woocommerce-review__published-date,.woocommerce .product_list_widget .quantity,.woocommerce .widget_products .amount,.woocommerce .widget_price_filter .price_slider_amount,.woocommerce .widget_recently_viewed_products .amount,.woocommerce .widget_top_rated_products .amount,.woocommerce .widget_recent_reviews .reviewer{color:#9e9e9e}.woocommerce a.remove{color:#9e9e9e!important}.woocommerce form.login,.woocommerce form.register,.woocommerce-account fieldset,.woocommerce form.checkout_coupon,.woocommerce .woocommerce-info,.woocommerce .woocommerce-error,.woocommerce .woocommerce-message,.woocommerce .widget_shopping_cart .total,.woocommerce.widget_shopping_cart .total,.woocommerce-Reviews .comment_container,.woocommerce-cart #payment ul.payment_methods,#add_payment_method #payment ul.payment_methods,.woocommerce-checkout #payment ul.payment_methods,.woocommerce div.product .woocommerce-tabs ul.tabs::before,.woocommerce div.product .woocommerce-tabs ul.tabs::after,.woocommerce div.product .woocommerce-tabs ul.tabs li,.woocommerce .woocommerce-MyAccount-navigation-link,.select2-container--default .select2-selection--single{border-color:#383838}.woocommerce-cart #payment,#add_payment_method #payment,.woocommerce-checkout #payment,.woocommerce .woocommerce-info,.woocommerce .woocommerce-error,.woocommerce .woocommerce-message,.woocommerce div.product .woocommerce-tabs ul.tabs li{background-color:rgba(56,56,56,0.3) !important}.woocommerce-cart #payment div.payment_box::before,#add_payment_method #payment div.payment_box::before,.woocommerce-checkout #payment div.payment_box::before{border-color:rgba(56,56,56,0.5)}.woocommerce-cart #payment div.payment_box,#add_payment_method #payment div.payment_box,.woocommerce-checkout #payment div.payment_box{background-color:rgba(56,56,56,0.5)}.page-content .woocommerce input.button,.page-content .woocommerce a.button,.page-content .woocommerce a.button.alt,.page-content .woocommerce button.button.alt,.page-content .woocommerce input.button.alt,.page-content .woocommerce #respond input#submit.alt,.woocommerce .page-content .widget_product_search input[type="submit"],.woocommerce .page-content .woocommerce-message .button,.woocommerce .page-content a.button.alt,.woocommerce .page-content button.button.alt,.woocommerce .page-content #respond input#submit,.woocommerce .page-content .widget_price_filter .button,.woocommerce .page-content .woocommerce-message .button,.woocommerce-page .page-content .woocommerce-message .button,.woocommerce .page-content nav.woocommerce-pagination ul li a,.woocommerce .page-content nav.woocommerce-pagination ul li span{color:#c4c4c4;background-color:#333}.woocommerce .page-content nav.woocommerce-pagination ul li a.prev,.woocommerce .page-content nav.woocommerce-pagination ul li a.next{color:#333}.woocommerce .page-content nav.woocommerce-pagination ul li a.prev:after,.woocommerce .page-content nav.woocommerce-pagination ul li a.next:after{color:#fff}.woocommerce .page-content nav.woocommerce-pagination ul li a.prev:hover:after,.woocommerce .page-content nav.woocommerce-pagination ul li a.next:hover:after{color:#fff}.ashe-dropcaps .post-content > p:first-of-type:first-letter{color:#fff !important}.page-content a:hover{color: '. esc_html(ashe_hex2rgba( ashe_options( 'colors_content_accent' ), 0.8 )) .'}.sticky {background: #2f2f2f;}';
	} else if ( ashe_options( 'skins_select' ) == 'box' ) {
		$skin .= '.featured-slider-area #featured-slider,#featured-links{background:#fff;padding:30px;box-shadow:1px 1px 3px rgba(0,0,0,0.1);border-radius:3px}#featured-links{margin-top:30px}#featured-links,.featured-slider-area{margin-left:40px;margin-right:40px}#featured-links.boxed-wrapper,.featured-slider-area.boxed-wrapper{margin-left:auto;margin-right:auto}.featured-slider-area{padding-top:40px}.featured-slider-area #featured-slider .prev-arrow{left:35px}.featured-slider-area #featured-slider .next-arrow{right:35px}.featured-slider-area #featured-slider .slider-dots{bottom:35px}.main-content,.featured-slider-area{background:transparent!important}.category-description{background:#fff;padding:30px;border-bottom:0;box-shadow:1px 1px 3px rgba(0,0,0,0.1);border-radius:3px}.blog-grid .related-posts{border-bottom:0;padding-bottom:0;border-top:1px solid #e8e8e8;margin-top:30px;padding-top:40px}.post-footer{border-bottom:0;padding-bottom:0}.author-description,.comments-area,article.post,article.blog-post,.single .related-posts,.page-content article.page{background:#fff;padding:30px;box-shadow:1px 1px 3px rgba(0,0,0,0.1);margin:3px;border-radius:3px}article.blog-post.sticky{background:#efefef}.author-description{margin-top:30px}.single .related-posts{margin-top:30px}.comments-area{margin-top:30px}.sidebar-left .ashe-widget,.sidebar-right .ashe-widget{background:#fff;padding:20px;box-shadow:1px 1px 3px rgba(0,0,0,0.1);border-radius:3px}.wp-calendar-table td{padding:7px}#page-footer{background:#fff;box-shadow:1px 1px 3px rgba(0,0,0,0.1)}.featured-slider-area.boxed-wrapper,.main-content.boxed-wrapper{padding-left:0!important;padding-right:0!important}.blog-grid li:last-child{margin-bottom:0!important}[data-layout*="list"] .blog-grid>li{padding-bottom:0!important;border-bottom:0}.blog-pagination{background:#fff;margin:30px 3px 3px;padding:30px;box-shadow:1px 1px 3px rgba(0,0,0,0.1)}.blog-pagination.numeric .numeric-next-page,.blog-pagination.numeric .numeric-prev-page{top:30px}.blog-pagination.numeric .numeric-next-page{right:30px}.blog-pagination.numeric .numeric-prev-page{left:30px}main#main{background:#fff;padding:30px;margin:3px;box-shadow:1px 1px 3px rgba(0,0,0,0.1);border-radius:3px}main#main .woocommerce-pagination{margin-bottom:0}@media screen and ( max-width: 1170px){#featured-links,.featured-slider-area{margin-left:auto;margin-right:auto}.main-content{padding-left:0;padding-right:0}.page-content,#page-footer{padding:0 20px}}@media screen and ( max-width: 979px){.featured-slider-area.boxed-wrapper #featured-slider{margin-top:30px!important}.sidebar-right-wrap .sidebar-right,.sidebar-right-wrap .sidebar-left{margin-top:30px}.sidebar-right .ashe-widget:last-child{margin-bottom:0}}@media screen and (max-width: 640px){.blog-pagination.numeric .numeric-next-page,.blog-pagination.numeric .numeric-prev-page{top:20px}.featured-slider-area #featured-slider,#featured-links,.author-description,.comments-area,article.post,article.blog-post,.single .related-posts,.page-content article.page,.blog-pagination,main#main{padding:20px}.main-content{padding-top:30px;padding-bottom:30px}.ashe-widget{margin-bottom:30px}}@media screen and (max-width: 480px){.main-content{padding-left:0!important;padding-right:0!important}}';
	
		// Add Boxed Body Class
		add_filter( 'body_class', function( $classes ) {
		    return array_merge( $classes, array( 'ashe-boxed-style' ) );
		} );
	}

	echo $skin . '</style>';
}


add_action( 'wp_head', 'ashe_theme_skins' );