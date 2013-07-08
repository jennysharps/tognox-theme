                        </div>
                </main>

                <footer class="footer" role="contentinfo">

                        <div id="inner-footer" class="wrap clearfix">

                                <nav role="navigation" class="twocol">
                                    <?php bones_footer_links(); ?>
                                </nav>

                                <div class="footer-middle sixcol clearfix">
                                    <?php if( is_front_page() ) { if ( dynamic_sidebar('footer_middle') ) : else : endif; } ?>
                                </div>

                                <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

                                <?php // the_widget( 'Custom_Twitter_Feed_Widget', 'Title of Twit Widget' ); ?>

                        </div> <!-- end #inner-footer -->

                </footer> <!-- end footer -->


		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->