<?php
/*
Template Name: Home - One
*/
?>

<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
      <div class="container">

          <!-- A wrapper for all blog posts -->
          <div class="posts">
              <h1 class="content-subhead">Latest Posts</h1>

              <!-- The actual blog post -->
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <section class="post">
                  <header class="post-header pure-g">
                         <?php
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="post-image pure-u-1 pure-u-md-1-2">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" class="pure-img" alt="<?php echo $thumbnail_meta; ?>"></a>
                        </div>
                        <div class="post-info pure-u-1 pure-u-md-1-2">
                          <div class="container">
                            <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <p class="post-meta">By <a href="#" class="post-author"><?php the_author(); ?> </a> in <?php the_category(', '); ?></p>
                            <?php the_excerpt(); ?>
                          </div>
                        </div>
                  </header>
              </section>
              <?php endwhile; endif; ?>

          </div> <!-- /.posts -->

      </div> <!-- /.container -->
    </div> <!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
