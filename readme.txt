=== External Linker ===
Contributors: jstar198
Tags: validation, external, link, target, blank, xhtml, strict
Requires at least: ?
Tested up to: 2.8.2
Stable tag: trunk

Allows you to get around using target="_blank" by converting all your outbound links using Javascript.

== Description ==

You know how target=_blank is invalid in XHTML strict? Well, this plugin uses a Javascript hack to get around this. The code was originally taken from this thread I came across: http://www.webmasterworld.com/forum21/11165.htm

Instead of using target=_blank yourself, simply give your outbound links a class of "external", and the rest will be done automatically while keeping your page XHTML valid.

== Installation ==

1. Upload/Copy plugin to your blog.
2. Activate it.
3. Wherever you want an external link, instead of `target="_blank"` simply give the link a class name of `external`.

== Frequently Asked Questions ==

= Can I change the required class name from `external`? =

Yes, but you'll just have to modify the code yourself.. it's not worth an entire settings page just for that option.

= Does this work on admin pages? =

No, it only modifies links on non-admin pages since the admin section wouldn't be XHTML Strict valid anyway.

== Changelog ==

= 0.1 =

* Creation of plugin!
