Copyright 2013 Kevin Wilkinson
This plugin is distributed under the terms of the GNUv3 General Public License

=== Content Collection Display ===
Contributors: kwilkins
Tags: widget, content, set, choose, pick, bag, random, display
Requires at least: 2.8
Tested up to: 3.3.2
Stable tag: 0.5

Content Collection Display lets you display content randomly from a numbered set of html pages located from a base url

== Description ==
This plugin displays a specified amount of the html files from a base url.  Other than each file to be numbered incrementally(starting at 1), it expects the files to match the configured url.

The plugin will not display duplicate content(it will not display pageX.html twice).

If the configured number of pages to display is greater than the total number of pages, it will display all possible pages.

== Installation ==

1. Upload `content-chooser.php` to the `/wp-content/plugins/` directory or upload the zip file via the Wordpress plugin menu
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it. Now you can add and configure the widget in the usual widget admin interface.

= Configuration =

After adding the widget to a page you can configure its four options;
Title:  A title to appear above the displayed content.  If you do not want a title, simply leave this field blank.
Base URL:  The base url to use for randomly picking which content to display.  Do not include the .html extension.
Total Number of Pages: The upper bound of numbered page you want the displayed pages to be chosen from.  The plugin will be picking the numbered content within a range of 1 and this number inclusively.
Number of Pages to Display: The targeted number of different content to display.  Will stop if no more different numbers can be chosen.

= Sample Configuration =
Title: Doodles
Base URL: http://kwilkins.com/doodles/doodle
Total Number of Pages: 13
Number of Pages to Display: 4

== Frequently Asked Questions ==

= Why isn't it working? =

Are all your desired html files numbered incrementally and matching the specified base url?
Is your total number of pages set to your highest numbered file?
Is number of pages greater than 0?

= How do I choose different types of content to appear? =

Group your different types of content with different naming schemes, or even different urls.  Then configure multiple instances of this widget to reference them.

= Why does one content page appear more/less than others? =

I don't know, they are chosen randomly

== TODO ==
1. The 'Widget logic' field at work in standard widgets.
2. The `widget_content` filter, `wp_reset_query` option and 'load logic point' options are at the foot of the widget admin page. You can also export and import your site's WL options for safe-keeping.

== Changelog ==

= 0.2 =
Initial registration to WordPress plugin library
