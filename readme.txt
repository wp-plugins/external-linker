=== External Linker ===
Contributors: jstar198
Tags: validation, external, link, target, blank, xhtml, strict
Requires at least: ?
Tested up to: 2.8.3
Stable tag: trunk

Allows you to get around using target="_blank" by converting all your outbound links using Javascript.

== Description ==

You know how `target="_blank"` is invalid in XHTML strict? Well, this plugin uses a Javascript hack to get around this. The code was originally taken from this thread I came across: http://www.webmasterworld.com/forum21/11165.htm

For posts/pages, the plugin will automatically captures any `target="_blank"`'s inserted by the WP editor and modifies them to keep the page XHTML Strict valid. Then some small Javascript is inserted into each page which re-inserts `target="_blank"` so that the functionality is restored <em>after</em> your page has been validated!

For non-post/page content (eg templates/widgets), simply give your outbound links a class name of `external`, and the rest will be done automatically while keeping your page XHTML valid.

== Installation ==

1. Upload/Copy plugin to your blog.
2. Activate it.

3. In posts & pages, links containing `target="_blank"` will be handled automatically. (This can be turned off by setting `EXTERNAL_LINKER_USE_FILTER` to `false` in the plugin file.)
4. For templates & widgets, instead of using `target="_blank"` simply give your links a class name of `external`. (This name can be changed by editing `EXTERNAL_LINKER_CLASS_NAME` in the plugin file.)

== Frequently Asked Questions ==

= How does this affect my styles/CSS? =

Not at all. The external class name is not used for any styling purposes, and you can just combine it with whatever class names you're already using, eg: <code>class="external my-other-class"</code>

= Does this work on admin pages? =

No, it only modifies links on non-admin pages (this is by design).

= Can I change the required class name from `external`? =

Yes, simply open `external-linker.php` and change the `EXTERNAL_LINKER_CLASS_NAME` constant.

= Can I turn off the automatic post filter? =

Yes, simply open `external-linker.php` and change the `EXTERNAL_LINKER_USE_FILTER` constant to `false`.

== To Do ==

Future things I plan to add:

* Integration into WP edit page to allow use of plugin without manually editing HTML.

== Changelog ==

= 0.2 =

* Added automatic post filter.

= 0.1 =

* Creation of plugin!
