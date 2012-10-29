#Twentyeleveni
##About
Twentyeleveni (Twenty Eleven Improved) is a starter theme that extends the Twenty Eleven theme. It provides a basic starting point for clients such as small businesses. See my perfecting Twentyeleveni section for functionality that extends wordpress and is better handled by specialist plugins.

Basic features of Twentyeleveni include:

1. Navigation Menu(s)
1. Optional homepage slideshow gallery
1. Consistent two column layout
1. Featured image (post thumbnail) support
1. Minimal layout markup
1. Improved on native thickbox with reveal (dialogs) and slimbox2 (lightbox) scripts
1. Orbit script included for slideshows
1. No images! Placeholder images are remotely pulled from flickr, and icons are font based


###Why Twentyeleveni?

Twentyeleveni came about because the default Wordpress theme, Twenty Eleven, has some blog-centric features not relevant to the client's sites I was building. It also has fairly obtrusive, convoluted markup and allows client's to break their site with theme design choices. These are explanded on below:

1. Singular post lack of a sidebar
1. Complex HTML and style rules (2710 lines of style rules)
1. Complex template files with extraneous PHP code (Consider the wp_title() code yikes!)
1. Theme customisations that enable clients to break their site with design decisions they shouldn't be making     (Twentyeleveni by default does not include the theme customisations: Theme Options, Header and Background)

##Perfecting Twentyeleveni

I would recommend using the following plugins to perfect your Twentyeleveni install:

1. [Yoast SEO](http://wordpress.org/extend/plugins/wordpress-seo/) for managing SEO related data
1. [Contact Form 7](http://wordpress.org/extend/plugins/contact-form-7/) for placing a contact form
2. [WP-PageNavi](http://wordpress.org/extend/plugins/wp-pagenavi/) for pagination

###Common customisations

I have tried to keep Twentyeleveni as minimal in implementation as possible, but at the same time provide enough of a boilerplate in an attractive format. These are some common actions you may need to take to customise Twentyeleveni: 

* Remove or replace slideshow (Nivo slideshow?)
* Remove comment form
* Remove Open Sans google font
* Remove top menu


##Other notes

###Browser compatability

Twentyeleveni was designed to degrade nicely in older browsers. As I did not want to add extraneous image files, rounded corners and icons are performed with css and font icons. These may not appear in incompetent browsers such as Internet Explorer.
