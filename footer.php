                        </div>
                </main>

                <footer class="footer" role="contentinfo">

                        <div id="inner-footer" class="wrap clearfix">

                                <nav role="navigation" class="twocol">
                                    <?php bones_footer_links(); ?>
                                </nav>

                                <div class="footer-middle sixcol clearfix">
                                    <?php if ( dynamic_sidebar('footer_middle') ) : else : endif; ?>
                                </div>

                                <div class="threecol">
                                    <?php
                                    $defaults = array(
                                            'theme_location'  => 'social_buttons_header',
                                            'container'       => 'div',
                                            'menu_class'      => 'social-menu',
                                            'echo'            => true,
                                            'fallback_cb'     => '',
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth'           => 1,
                                            'walker'          => ''
                                    );

                                    wp_nav_menu( $defaults );
                                    ?>

                                    <div>
                                        <h2>Francesco Tonini</h2>
                                        <p>Statistician specialized in GIS</p>
                                        <a href="tel: 3053018338">(305) 301-8338</a>
                                    </div>
                               </div>

                                <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>


                        </div> <!-- end #inner-footer -->

                </footer> <!-- end footer -->


		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->