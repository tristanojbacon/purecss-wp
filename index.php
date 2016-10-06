<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
      <div class="container">

            <!-- A wrapper for all blog posts -->
            <div class="posts">

                <!-- A single blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                    <header class="post-header pure-g">
                          <?php if ( has_post_thumbnail() ) { ?>
                            <div class="post-image pure-u-1 pure-u-sm-1 pure-u-lg-1-2 pure-u-xl-1-3">
                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo pwp_featured_image($post->ID, 'url'); ?>" class="pure-img" alt="<?php echo pwp_featured_image($post->ID, 'alt'); ?>" itemprop="image"/></a>
                            </div>
                            <?php } ?>
                            <div class="post-info pure-u-1 <?php if ( has_post_thumbnail() ) { ?> pure-u-sm-1 pure-u-lg-1-2 pure-u-xl-2-3 <?php } ?>">
                              <div class="container">
                                <p class="post-meta"><time itemprop="datePublished" datetime="<?php echo the_time('Y-m-d');?>"><?php echo the_time('l, F jS, Y');?></time></p>
                                <h2 class="post-title" itemprop="name headline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                <p class="post-meta">
                                  <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                  By <a href="#" class="post-author" itemprop="author" itemprop="url" rel="author"><span itemprop="name"><?php the_author(); ?></span></a>
                                  </span>
                                  in <?php the_category(', '); ?>
                                </p>
                                <?php the_excerpt(); ?>
                              </div>
                            </div>
                    </header>
                </article>
                <?php endwhile; endif; ?>

            </div> <!-- /.posts -->

        </div> <!-- /.container -->
    </div> <!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
