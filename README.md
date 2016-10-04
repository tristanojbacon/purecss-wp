#PureCSS WP - WordPress Theme

A simple WordPress blog theme built from the ground-up with Yahoo's [PureCSS framework](http://purecss.io) (v0.6.0).

##Notable features

Functions for PureCSS inclusions

* `<li>` and `<a>` tags that are output by `wp_nav_menu()` will use the `pure-menu-item` & `pure-menu-link` PureCSS classes
* `<form>` tag that is output by `get_search_form()` will use the `pure-form` PureCSS class

General

* `<p>` tag that wraps `the_excerpt()` output has been given a `post-excerpt` class for better targeting
* `pwp_featured_image($post_id, $output)` returns either the `src` URL or the `alt` tag for the current post's featured image. Set `$output` to either `'url'` or `'alt'` for the desired output.
E.g., `echo pwp_featured_image($post->ID, 'url');` will output `http://example.com/image.jpg`.
