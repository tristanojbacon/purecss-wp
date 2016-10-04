<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
        <div class="container">
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">on <?php echo the_time('l, F jS, Y');?></h1>

                <!-- A single blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section class="post">
                  <header class="post-header">
                         <?php
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                        ?>
                        <p class="featured-image "><img src="<?php echo $thumbnail_url[0]; ?>" class="pure-img" alt="<?php echo $thumbnail_meta; ?>"></p>


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
            </div>


          </div>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
