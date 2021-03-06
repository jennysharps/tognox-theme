<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e("Sorry, this page doesn't exist!", "bonestheme"); ?></h1>

							</header> <!-- end article header -->

							<section class="entry-content">

								<p><?php _e("The page you were looking for wasn't found, but you can search to find what you're looking for.", "bonestheme"); ?></p>

							</section> <!-- end article section -->

							<section class="search">

							    <p><?php get_search_form(); ?></p>

							</section> <!-- end search section -->


						</article> <!-- end article -->

					</div> <!-- end #main -->

                                        <?php get_sidebar(); ?>
				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->
<?php get_footer(); ?>
