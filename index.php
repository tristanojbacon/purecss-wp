<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
      <div class="container">

            <!-- A wrapper for all blog posts -->
            <div class="posts">

                <!-- A single blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section class="post">
                    <header class="post-header pure-g">
                          <?php if ( has_post_thumbnail() ) { ?>
                            <div class="post-image pure-u-1 pure-u-sm-1 pure-u-md-1-2">
                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo pwp_featured_image($post->ID, 'url'); ?>" class="pure-img" alt="<?php echo pwp_featured_image($post->ID, 'alt'); ?>"/></a>
                            </div>
                            <div class="post-info pure-u-1 pure-u-sm-1 pure-u-md-1-2">
                              <div class="container">
                                <p class="post-meta"><?php echo the_time('jS F Y');?></p>
                                <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                <p class="post-meta">By <a href="#" class="post-author"><?php the_author(); ?> </a> in <?php the_category(', '); ?></p>
                                <?php the_excerpt(); ?>
                              </div>
                            </div>
                          <?php } else { ?>
                            <div class="post-info pure-u-1">
                              <div class="container">
                                <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                <p class="post-meta">By <a href="#" class="post-author"><?php the_author(); ?> </a> in <?php the_category(', '); ?></p>
                                <?php the_excerpt(); ?>
                              </div>
                            </div>
                          <?php } ?> <!-- End of has_post_thumbail() check -->
                    </header>
                </section>
                <?php endwhile; endif; ?>

            </div> <!-- /.posts -->

        </div> <!-- /.container -->
    </div> <!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
