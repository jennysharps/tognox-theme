<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<?php
$carousel_items = get_field('carousel_items');

if ($carousel_items):
    ?>
    <section class="flexslider wrap">
        <ul class="slides">
            <?php foreach ($carousel_items as $post): // variable must be called $post (IMPORTANT) ?>
                <?php
                setup_postdata($post);
                $thumb_id = get_post_thumbnail_id( get_the_ID() );
            
                if ($thumb_id) {
                    $image_attributes = wp_get_attachment_image_src( $thumb_id, 'homepage-carousel' );
                    ?>
                    <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <img src="<?php echo $image_attributes[0]; ?>"/>
                    </li>
                    <?php
                }
            endforeach;
            ?>
        </ul>
    </section>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>


<?php /* <div id="content">
  <div class="projects-slider">

  <?php

  $attachments = retrieve_project_slider_images();

  echo "<ul>";
  foreach ($attachments as $attachment) {
  echo '
  <li>
  <a href="' . $attachment['link'] . '">
  <img src="' . $attachment['img_url'] . '"/>
  </a>
  <a href="' . $attachment['link'] . '">' . $attachment['title'] . '</a>
  </li>';
  }
  echo "</ul>";
  ?>

  </div>

  <div id="inner-content" class="wrap clearfix">

  <div id="main" class="col620 left first clearfix" role="main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

  <header>

  <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

  <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>

  </header> <!-- end article header -->

  <section class="post_content clearfix">
  <?php the_content(_e('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>', "bonestheme")); ?>

  </section> <!-- end article section -->

  <footer>

  <p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

  </footer> <!-- end article footer -->

  </article> <!-- end article -->

  <?php comments_template(); ?>

  <?php endwhile; ?>

  <?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

  <?php page_navi(); // use the page navi function ?>

  <?php } else { // if it is disabled, display regular wp prev & next links ?>
  <nav class="wp-prev-next">
  <ul class="clearfix">
  <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
  <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
  </ul>
  </nav>
  <?php } ?>

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

  </div> <!-- end #inner-content -->

  </div> <!-- end #content --> */ ?>

<?php get_footer(); ?>


<!-- 
<div id="foo2" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 8973px; height: 459px; z-index: auto; opacity: 1;">
    <div class="slide" style="width: 997px; height: 458.62px;">
        <img src="/examples/images/large/carousel_1.jpg" alt="carousel 1" width="870" height="400">
        <div style="display: block;">
            <h4>Infinity</h4>
            <p>A concept that in many fields refers to a quantity without bound or end.</p>
        </div>
    </div><div class="slide" style="width: 997px; height: 458.62px;">
        <img src="/examples/images/large/carousel_2.jpg" alt="carousel 2" width="870" height="400">
        <div style="display: block;">
            <h4>Circular journey</h4>
            <p>An excursion in which the final destination is the same as the starting point.</p>
        </div>
    </div><div class="slide" style="width: 997px; height: 458.62px;">
        <img src="/examples/images/large/carousel_3.jpg" alt="carousel 3" width="870" height="400">
        <div style="display: block;">
            <h4>jQuery</h4>
            <p>jQuery is a JavaScript library designed to simplify the client-side scripting.</p>
        </div>
    </div><div class="slide" style="width: 997px; height: 458.62px;">
        <img src="/examples/images/large/carousel_4.jpg" alt="carousel 4" width="870" height="400">
        <div style="display: block;">
            <h4>Carousel</h4>
            <p>A carousel is an amusement ride consisting of a rotating circular platform with seats.</p>
        </div>
    </div>
</div>

-->
