#PureCSS WP - WordPress Theme

A simple WordPress blog theme built from the ground-up with Yahoo's [PureCSS framework](http://purecss.io) (v0.6.0).

Here's [a screenshot](screenshot.png) of the theme in action, as of 04/10/16

##Notable features

PureCSS-focussed functions

* `<li>` and `<a>` tags that generated by `wp_nav_menu()` use the `pure-menu-item` & `pure-menu-link` classes
* `<form>` tag generated by `get_search_form()` and `comments_template()` use the `pure-form pure-form-stacked` classes
* Buttons generated by `get_search_form()` and `comments_template()` use the `pure-button` class

General functions

* `<p>` tag that wraps `the_excerpt()` output has been given a `post-excerpt` class for better targeting
* `pwp_featured_image($post_id, $output)` returns either the `src` URL or the `alt` tag for the current post's featured image. Set `$output` to either `'url'` or `'alt'` for the desired output.
E.g., `echo pwp_featured_image($post->ID, 'url');` will output `http://example.com/image.jpg`.

##To Do

* Fix padding and margins in `single.php`
* Style the footer
* Include an auto-generated copyright notice in the footer
* Apply category widget styles to tag widget
* Create `archive.php`
* Create `author.php`
* Style post comments list
* Add Schema.org markup
* Add OpenGraph tags
* Add child themes(!)
