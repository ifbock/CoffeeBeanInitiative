=== Pique ===

Contributors: automattic
Requires at least: 4.0
Tested up to: 4.6.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Want to give your business a little pep? Pique is the theme for you! Designed to help you quickly build a one-page scrolling website, Pique is perfect for small businesses like cafes, bakeries, hair salons, and independent shops.

For more in-depth support, please visit http://wordpress.com/themes/pique

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

Pique includes support for Infinite Scroll, Site Logo, and Testimonials in Jetpack (jetpack.com).

= How do I set up my front page? =

When you first activate Pique, your homepage will display posts in a traditional blog format. To set up your one-page template as the homepage, follow these steps:

* Create a page.
* Go to Settings → Reading and set "Front page displays" to "A static page."
* Select the page created in Step One as “Front page,” and choose another page as “Posts page” to display your blog posts.

Good news! This theme doesn't need a front-page template—just set a static page as your front page, and you're good to go. On its own, it displays a single panel with a full-screen featured image, your site logo and navigation, and your page content.

To get your one-page site set up, you'll want to add some more panels.

= How do I add more panels to the front page? =

Each "panel" is a page. To add additional panels to your Front Page, follow these steps:

* Create or edit a page.
* Navigate to Customize → Theme Options. From the drop-down, select the page you'd like to appear in the panel.

= How do I set the background image of my panels? =

To set the background image of a panel, assign a Featured Image to the page. You can also adjust the background color and the opacity of your featured image on top of it, allowing you fine-grained control over the appearance of your page.

The footer widget uses your Custom Header Image as its background.

= Does this theme come with page templates? =

Pique comes with three page templates, designed to give you flexibility in the way you arrange your content. To use a page template, edit your page and select the template you'd like under Page Attributes.

* Grid Template
* Full-Width Template
* Testimonials Template

You can also show a panel of the four most recent blog posts by adding the page you selected as your “Posts page” as a panel in the Customizer.

= How do I use icons? =

Pique comes packaged with the Font Awesome icon library so that you have easy access to hundreds of icons. To use an icon, find the icon you're looking for on Font Awesome's website (http://fortawesome.github.io/Font-Awesome/icons/) and copy the code provided.

= How do I use call-to-action buttons? =

You can add call-to-action buttons to your site by using the following code:
<a href="#" class="button">Learn more</a>
<a href="#" class="minimal button">Try it out</a>

= How do I add an overlay? =

Sometimes, you may want to show a smaller area of content with a solid background. This is especially useful if you'd like to show a map in the background, with your content information overlaid on top. This works particularly nicely when combined with a Full-Width Template.

<div class="overlay alignright">This overlay will be aligned to the right-hand side of its panel. You can add any content you'd like here.</div>

= How do I add my logo? =

Site logo functionality requires the Jetpack plugin.
To add your logo, go to Customize → Site Title. Your logo will appear above the site navigation on every page.

= Where can I add menus? =

Pique allows you to have two meus: one in the theme’s header and one in the footer. To set up your menus, go to Appearance → Menus.

* Primary Menu *
The primary menu will display at the top of your page. To add links to panels of your Front Page, just add the page to your menu. The theme will handle the rest and make sure it links to the right spot!

* Dynamic Menu *
If you'd like your front page to automatically show a menu of your panels, you can do this by navigating to Customizer → Theme Options → General Settings and checking "Use a dynamically-generated menu on the front page." Pique will then automatically create a menu for the front page only that will link to each panel.

* Secondary Menu *
The secondary menu has been designed to provide quick links for your visitors. It only supports top-level links—if you have a child menu item, it won’t be displayed. This secondary menu will be displayed in the footer of your site. It's a good place to put Terms &amp; Conditions and a Privacy Policy, or quick links to important pages on your site. Alternatively, you could use this area to add your social media links.

= How do I display customer testimonials? =
Testimonial functionality requires the Jetpack plugin active on your site.

There are two ways Pique can show testimonials:

* The dedicated testimonial archive page displays all testimonials in reverse chronological order, with the newest displayed first. Your testimonial archive page can be found at http://mygroovysite.wordpress.com/testimonial/
* The Testimonials page template displays two testimonials at random. This allows you to display testimonials as a panel on your Front Page.

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)

== Licensing ==

Pique WordPress theme, Copyright 2016 Automattic
Distributed under the GNU GPL

Pique WordPress theme bundles the following third-party resources:

Waypoints library, Copyright 2011-2016 Caleb Troughton
Licensed under the MIT license
Source: https://github.com/imakewebthings/waypoints/blob/master/licenses.txt

ScrollTo library, Copyright 2007-2016 Ariel Flesler
Licensed under the MIT license
Source: https://github.com/flesler/jquery.scrollTo/blob/master/LICENSE

Font Awesome, Copyright Dave Gandy
Fonts licensed under the SIL OFL 1.1 license
Code licensed under the MIT license
Source: http://fortawesome.github.io/Font-Awesome/license/

Genericons icon font, Copyright 2016 Automattic
Licensed under the terms of the GNU GPL, Version 2 (or later)
Source: http://www.genericons.com


== Changelog ==

= 1 November 2016 =
* Cleanup stylesheet

= 20 October 2016 =
* Fix typo in tags

= 19 October 2016 =
* Use CSS selector for Content Options

= 4 October 2016 =
* Add the new `fixed-menu` feature tag to the stylesheet.

= 19 August 2016 =
* Add support for Blog Display back with the Mixed option

= 8 August 2016 =
* Update Headstart URL to a smaller size image.

= 29 July 2016 =
* Add multiple-menus tag to style.css;

= 28 July 2016 =
* Remove support for Content Options's blog display since theme has 2 different way of showing content depending on post format

= 26 July 2016 =
* Add check to navigation to make sure it doesn't close on scroll on iOS devices, which fire an event jQuery understands as 'resize' whenever you scroll. #

= 22 July 2016 =
* Add support for Content Options

= 11 July 2016 =
* adds one-page to style.css

= 14 June 2016 =
* Make edit links on panels slightly larger and more opaque so they're easier to find.

= 27 May 2016 =
* Give header a slightly lower z-index to avoid DM icons appearing underneath it.
* Forgot to add a class for larger screens -- was breaking behaviour.
* Attempt to fix panel's background images on small screens.

= 12 May 2016 =
* Add new classic-menu tag.

= 9 May 2016 =
* Use the correct (non-prefixed) handles for third-party scripts.

= 7 May 2016 =
* Remove unused functions.
* Resolve issues identified in .org theme review.

= 5 May 2016 =
* Move annotations into the `inc` directory.

= 4 May 2016 =
* Move existing annotations into their respective theme directories.

= 22 April 2016 =
* Add testimonials tag to style.css and readme.txt.

= 18 April 2016 =
* Take into consideration the adminbar when clicking on the menu items. Props @mendezcode.

= 10 March 2016 =
* Avoid non-printable characters. Also bump up the version for .org submission.

= 9 March 2016 =
* Make sure the function name is unique so that it actually does what it intends.

= 3 March 2016 =
* Adjust the panel background image position, so it vertically aligns to top rather than center. This prevents shorter images from repeating near the top of the panel.

= 25 February 2016 =
* Add blog-excerpts tag.

= 24 February 2016 =
* Using a new method to retrieve a truly random set of testimonials to bypass heavy caching on WP.com

= 20 January 2016 =
* Trigger a body resize in the customizer to make sure header looks good when customized.
* Add missing sidebar from Testimonial and Grid Page Templates.

= 19 January 2016 =
* Use :before with an opacity background instead of brightness filter -- performance issue when scrolling.

= 8 January 2016 =
* Restrict width of PollDaddy polls on smaller screens to prevent overflow;

= 30 December 2015 =
* Ensure background images are properly centered.
* Ensure masthead never shows a background on front page, even if annotations are active.
* Calculate header height more intelligently if no header image is set.
* Display background colour in masthead so title is legible even if header image isn't present.
* Set a default header height via CSS, so page loads are
* Use automated tools to generate a cleaner, automagically prefixed CSS file.
* Only load main stylesheet for screen devices.

= 24 December 2015 =
* Make sure we're referring to variable correctly so we don't get JS errors, duh.
* Improve Waypoints behaviour on front page.
* Make sure our hero has the pique-panel class as well, duh.

= 23 December 2015 =
* In certain contexts, users could mess up the post class filter
* Use consistent menu pattern (priority+) for magic/anchor menu as for main menu.
* Use inline-block instead of block for links within our dot-leader elements

= 22 December 2015 =
* Don't let webkit do buttons the way it wants to button, because
* Ensure new rows in grid pages clear correctly.

= 18 December 2015 =
* Use slightly more verbose PHP in pique_post_classes()
* Improve handling of line-breaks on smaller screens.
* Rearrange header items on mobile devices.

= 17 December 2015 =
* Ensure only featured images are rounded into circles when using grid template.
* Ensure we don't use underlines on hover for image-based post formats.
* One last try with that ensure-the-border-doesn't-get-cut-off-already
* Revert customizer changes because SVN confuses my poor dumb head.
* Make sure social links don't get their borders all snipped off on hover.
* Make sure our social media link borders don't get all snippy
* I swear at some point Jetpack was overwriting these border colour declarations, but maybe I've gone mad.
* Remove !important flag from social media icons;
* Move seperator dots to inside of <a> elements in footer nav.
* Adjust Facebook like box widget style a bit, and make sure it doesn't affect share links.
* Fire JS events on window load, rather than on document ready.
* Ensure widgets use consistent line height throughout.
* Don't show social icon for *.wordpress.com URLs, since this will

= 16 December 2015 =
* Nevermind, let's not show the sidebar after all.
* Contextually figure out if footer links contains social nav;
* Show our sidebar if we don't have any posts and we're loading index.php.

= 15 December 2015 =
* Lean back a titch on the super-aggressive hyphenation.
* Give us a slightly nicer-to-look-at empty state for new user happyfaces.
* Correct z-index conflicts in footer stuff.
* Ensure tertiary widgets are selectable.

= 14 December 2015 =
* Don't use a background color on preformatted text.
* Ensure that 'edit page' links don't overlap sticky menu.
* Minor RTL tweaks—mostly just catching bits I missed & making sure we don't get super scrolly on mobiles.
* Ensure post navigation inherits margins correctly.
* Update tags and metadata in stylesheet.
* Style .org style normal-pagination-non-IS navigation consistently with other site elements.
* Add a bit of padding to the top of search field in widgets.
* Remove some mess-making extends and clean up comment reply links.

= 12 December 2015 =
* Add margin to search submit button on mobile, so 404 page looks better.
* Ensure we don't underline images in galleries on hover.

= 11 December 2015 =
* Make sure post meta is corrently aligned in RTL languages.
* Allow post nav items to span full width on mobile.
* Give sidebar a bit of breathing room on mobile.
* Make sure Genericons are properly enqueued, and also
* Stack footer nav and credit line on tablet-sized devices.
* Whoops, no span-styling no more. (See last commit.)
* Style em elements, rather than spans, all special-like for testimonials.

= 10 December 2015 =
* Re-add bracket styles to headers because git/svn synching is a pain
* Update readme.txt for .org and remove unneded readme files.

= 9 December 2015 =
* Use a "bracket" style for headers, so they look less button-y.
* Brute-force spacing of post footer elements because wpcom styles are jerks.
* Spacing
* Improve spacing and arrangement of post footers.
* Add more spacing and hierarchy to post pagination.
* Remove styles for menu toggle, since there's no toggly menu here.
* Slow scroll speed between panels in the Customizer;
* Increase font-size of post meta to aid readability.
* Add extra spacing to site branding, particularly if there's no logo present.
* Give hero panel a min-height of 100% if there aren't any panels active.

= 8 December 2015 =
* Increase line-height of calendar widget.
* Reduce z-index of footer widgets so sticky menu items aren't overlapped by widgets.
* Add spacing between footer menu separators.
* Ensure menu is properly positioned, even if JS is feeling sad.
* Tweak RTL styles so they're better!

= 7 December 2015 =
* Remove text-shadow from post format icons, because it looks silly.
* Fix up loading of our icon fonts.
* Remove unneeded border-bottom on links.

= 17 November 2015 =
* Remove width attribute from testimonial panel h2s. It was
* Finally add some Customizer magic!

= 16 November 2015 =
* Ensure testimonials on front page don't run into one another on smaller screens.

= 15 November 2015 =
* Ensure menu doesn't expand beyond the page width on larger screens.

= 14 November 2015 =
* Remove unneeded (I think?) pique_admin_header_style() function.
* Code cleanup: remove unused code in navigation.js; simplify sidebar checks; whitespace fix.

= 13 November 2015 =
* Make blog post panel styling match grid styling, for more consistency.
* Show three posts, not four, on blog panel. This just kinda looks better.

= 12 November 2015 =
* Improve wording & messaging in Customizer.
* Update Customizer strings for more user-friendliness.
* Left-align paragraphs after intro on frontpage.
* Better active states for buttons, please!
* Reduce the font-size of blockquotes on the front page a smidge.
* Reorganize menu  SCSS for better maintainability (if a bit more verbose-being).
* Ensure branding is properly centered within header.
* Ensure that sub-menu items which in turn contain sub-menus as well are clickable.
* Improve the behaviour and display of menus on small screens.
* Change focus to a click event for mobile menu to avoid weird clickiness.

= 11 November 2015 =
* Add a bit of top-margin to the post navigation so it doesn't run into categories.
* Pretty up hovers on social icons in footer; they looked awkward before.

= 10 November 2015 =
* Increase z-index on tertiary div to ensure footer widgets are always clickable.
* Remove visited styling from links so Firefox doesn't get confused.
* Rework post_class filter so it's easier to parse & read.
* Ensure that if a user creates a page without a title.
* Ensure that we're actually loading our front-page.js file.
* Use a saner min-height on panels, so panels with minimal content don't feel truncated.
* Adjust masthead on homepage, and sticky nav elsewhere.
* Adjust styling to better accomodate potential
* Remove the down-arrow/link between panels on the homepage.
* Tweak panel colours so the blog looks a bit better out of the box.

= 9 November 2015 =
* Remove double 'read more' link from posts.
* Rework menus a few smidges.

= 4 November 2015 =
* Space out logo and masthead better on front page.

= 3 November 2015 =
* Use JS to set padding for hero content.

= 2 November 2015 =
* Ensure comment box on contact form spans full width.
* Remove Skrollr because it smells.
* Ensure that uber-long lines of text wrap properly and don't get
* Adjust the content_width for full-width page. (This doesn't seem to "take"

= 1 November 2015 =
* Ensure priority plus navigation pattern is correctly applied.
* Fix sticky menu on single pages so that it sticks at the right spot.
* Remove unused 'pique-strip' image size.

= 31 October 2015 =
* This change should have been attached to the last change, but it was something I was working on just before
* Airplane commits! Hold onto your hats, I had coffee:

= 30 October 2015 =
* Code simplifying/restructuring.

= 29 October 2015 =
* Ensure that "magic menu" doesn't throw a PHP error if there aren't currently any panels set.
* Brute-force styling of the related posts/share this headers so they fit better with theme.
* Fix some minor formatting issues with comments.
* Rearrange Customizer setup.
* Create a new GlotPress project.

= 28 October 2015 =
* Move out of dev.
