<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
        <div class="container">

            <!-- A wrapper for all blog posts -->
            <div class="single-post">

                <!-- The actual blog post -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                  <header class="post-header">

                      <?php if ( has_post_thumbnail() ) { ?>
                      <p class="featured-image"><img src="<?php echo pwp_featured_image($post->ID, 'url'); ?>" class="pure-img" alt="<?php echo pwp_featured_image($post->ID, 'alt'); ?>" itemprop="image"/></p>
                      <?php } ?>

                      <h1 class="post-title" itemprop="name headline"><?php the_title(); ?></h1>

                      <p class="post-meta">
                        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                        By <a href="#" class="post-author" itemprop="author" itemprop="url" rel="author"><span itemprop="name"><?php the_author(); ?></span></a>
                        </span>
                        in <?php the_category( ', ' ); ?>
                        on <time itemprop="datePublished" datetime="<?php echo the_time('Y-m-d');?>"><?php echo the_time('l, F jS, Y');?></time>
                      </p>

                  </header>

                    <div class="post-content" itemprop="articleBody">
                            <?php the_content(); ?>
                    </div>
                    <div class="post-tags">
                      <p itemprop="keywords"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></p>
                    </div>
                </article>
                <hr>
                <?php comments_template(); ?>
                <?php endwhile; endif; ?>

            </div> <!-- /.posts -->

        </div> <!-- /.container -->
    </div> <!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
