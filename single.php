<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
        <div class="container">

            <!-- A wrapper for all blog posts -->
            <div class="posts">
                <h1 class="content-subhead">on <?php echo the_time('l, F jS, Y');?></h1>

                <!-- The actual blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section class="post">
                  <header class="post-header">

                      <p class="featured-image"><img src="<?php echo pwp_featured_image($post->ID, 'url'); ?>" class="pure-img" alt="<?php echo pwp_featured_image($post->ID, 'alt'); ?>"/></p>

                      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                      <p class="post-meta">
                          By <a href="#" class="post-author"><?php the_author(); ?> </a> in <?php the_category( ', ' ); ?>
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
