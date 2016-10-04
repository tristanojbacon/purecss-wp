<?php get_header(); ?>

    <div id="main" class="pure-u-1 pure-u-md-3-4">
        <div class="container">

            <!-- A wrapper for all blog posts -->
            <div class="single-page 404-page">
                <!-- The actual blog post -->
                <section class="page">
                  <header class="page-header">
                      <h1 class="page-title">Uh oh, 404 error!</h1>
                  </header>

                    <div class="page-content">
                        <p>It looks like you hit a dead end! Click <a href="<?php echo site_url(); ?>" alt="<?php bloginfo('title'); ?>">here</a> to go back to the homepage.
                    </div>
                </section>

            </div> <!-- /.page -->

        </div> <!-- /.container -->
    </div> <!-- /#main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
