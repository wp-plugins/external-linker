=== External Linker ===
Contributors: jstar198
Tags: validation, external, link, target, blank, xhtml, strict
Requires at least: ?
Tested up to: 2.8.2
Stable tag: trunk

Allows you to get around using target="_blank" by converting all your outbound links using Javascript.

== Description ==

You know how <code>target="_blank"</code> is invalid in XHTML strict? Well, this plugin uses a Javascript hack to get around this. The code was originally taken from this thread I came across: http://www.webmasterworld.com/forum21/11165.htm

Instead of using <code>target="_blank"</code> yourself, simply give your outbound links a class of <code>external</code>, and the rest will be done automatically while keeping your page XHTML valid.

== Installation ==

1. Upload/Copy plugin to your blog.
2. Activate it.
3. Wherever you want an external link, instead of `target="_blank"` simply give the link a class name of `external`.

== Frequently Asked Questions ==

= Can I change the required class name from <code>external</code>? =

Yes, but you'll just have to modify the code yourself.. it's not worth an entire settings page just for that option.

= How does this affect my styles/CSS? =

Not at all. The external class name is not used for any styling purposes, and you can just combine it with whatever class names you're already using, eg: <code>class="external my-other-class"</code>

= Does this work on admin pages? =

No, it only modifies links on non-admin pages since the admin section wouldn't be XHTML Strict valid anyway.

== To Do ==

Future things I plan to add:

* Server-side code to automatically scan for <code>target="_blank"</code> in existing links and remove it.
* Integration into WP edit page to allow use of plugin without manually editing HTML.

== Changelog ==

= 0.1 =

* Creation of plugin!
