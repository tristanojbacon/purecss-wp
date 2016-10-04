<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
        <div class="container">

            <!-- A wrapper for all blog posts -->
            <div class="single-page">
                <!-- The actual blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section class="page">
                  <header class="page-header">
                      <?php if ( has_post_thumbnail() ) { ?>
                      <p class="featured-image"><img src="<?php echo pwp_featured_image($post->ID, 'url'); ?>" class="pure-img" alt="<?php echo pwp_featured_image($post->ID, 'alt'); ?>"/></p>
                      <?php } ?>
                      <h1 class="page-title"><?php the_title(); ?></h1>
                  </header>

                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                </section>
                <?php endwhile; endif; ?>

            </div> <!-- /.page -->

        </div> <!-- /.container -->
    </div> <!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
