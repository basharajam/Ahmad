<?php
/**
 * The template for displaying all pages.
 * Template Name: CustomPageT1
 *
 * @package flatsome
 */


if(flatsome_option('pages_template') != 'default') {
	
	// Get default template from theme options.
	get_template_part('page', flatsome_option('pages_template'));
	return;

} else {

get_header();
do_action( 'flatsome_before_page' ); ?>
<div id="content" class="content-area page-wrapper" role="main">
	<div class="row row-main">
		<div class="large-12 col">
			<div class="col-inner">
                <!DOCTYPE html><html lang=""><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="icon" href="/favicon.ico"><title>learnboot</title><link href="/css/about.b473c869.css" rel="prefetch"><link href="/js/about.06df9415.js" rel="prefetch"><link href="/css/app.3b8bf873.css" rel="preload" as="style"><link href="/css/chunk-vendors.52eaf30c.css" rel="preload" as="style"><link href="/js/app.7fce050c.js" rel="preload" as="script"><link href="/js/chunk-vendors.8c0140f9.js" rel="preload" as="script"><link href="/css/chunk-vendors.52eaf30c.css" rel="stylesheet"><link href="/css/app.3b8bf873.css" rel="stylesheet"></head><body><noscript><strong>We're sorry but learnboot doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id="app"></div><script src="/js/chunk-vendors.8c0140f9.js"></script><script src="/js/app.7fce050c.js"></script></body></html>
				
				<?php if(get_theme_mod('default_title', 0)){ ?>
				<header class="entry-header">
					<h1 class="entry-title mb uppercase"><?php the_title(); ?></h1>
				</header>
				<?php } ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php do_action( 'flatsome_before_page_content' ); ?>
					
						<?php the_content(); ?>

						<?php if ( comments_open() || '0' != get_comments_number() ){
							comments_template(); } ?>

					<?php do_action( 'flatsome_after_page_content' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div>

<?php
do_action( 'flatsome_after_page' );
get_footer();

}

?>


