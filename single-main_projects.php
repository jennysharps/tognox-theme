<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfixx" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header>

							<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>

						</header> <!-- end article header -->

						<section class="post_content clearfix" itemprop="articleBody">
                                                        <?php the_post_thumbnail( 'three-col' ); ?>
							<?php the_content(); ?>

							<?php
							if (class_exists('MultiPostThumbnails')) {
							    if (MultiPostThumbnails::has_post_thumbnail('main_projects', 'projects_slider_image')) {
							        MultiPostThumbnails::the_post_thumbnail('main_projects', 'projects_slider_image');
							  	}
							 }
							?>
						</section> <!-- end article section -->

						<footer>

							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

						<article id="post-not-found">
						    <header>
						    	<h1>Not Found</h1>
						    </header>
						    <section class="post_content">
						    	<p>Sorry, but the requested resource was not found on this site.</p>
						    </section>
						    <footer>
						    </footer>
						</article>

						<?php endif; ?>

					</div> <!-- end #main -->

					<?php get_sidebar(); // sidebar 1 ?>

    			</div> <!-- #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>