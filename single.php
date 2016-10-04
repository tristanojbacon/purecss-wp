<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
        <div class="container">

            <!-- A wrapper for all blog posts -->
            <div class="single-post">

                <!-- The actual blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section class="post">
                  <header class="post-header">

                      <?php if ( has_post_thumbnail() ) { ?>
                      <p class="featured-image"><img src="<?php echo pwp_featured_image($post->ID, 'url'); ?>" class="pure-img" alt="<?php echo pwp_featured_image($post->ID, 'alt'); ?>"/></p>
                      <?php } ?>

                      <h1 class="post-title"><?php the_title(); ?></h1>

                      <p class="post-meta">
                          By <a href="#" class="post-author"><?php the_author(); ?> </a> in <?php the_category( ', ' ); ?> on <?php echo the_time('l, F jS, Y');?>
                      </p>

                  </header>

                    <div class="post-description">
                            <?php the_content(); ?>
                    </div>
                </section>
                <hr>
                <?php comments_template(); ?>
                <?php endwhile; endif; ?>

            </div> <!-- /.posts -->

        </div> <!-- /.container -->
    </div> <!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
