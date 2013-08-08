# Space Advocates

Version: 1.0

## Contributors:

* [Joe Spens](https://github.com/josephspens), Senior Web Developer
* [Rhett Forbes](https://github.com/Rhettajf), CEO and Founder
* [John Zeller](https://github.com/JohnLZeller), Senior Graphics Designer

## Summary

WordPress Theme for use on the main Space Advocates website. Uses Compass/SCSS, HTML5 Boilerplate 4 with Modernizr and Normalize.css, and Grunt for all tasks. Tested with WordPress 3.5.1.

## Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile Compass/SCSS, lint, concatenate and minify JavaScript (with source maps), optimize images, desktop notifications with [Bower](https://github.com/yatskevich/grunt-bower-task), and [LiveReload](http://livereload.com/) the browser (with extension), with flexibility to add any additional tasks via the Gruntfile.

### Dependencies

You need to download and install [Ruby](http://www.ruby-lang.org/en/downloads/), [Node](http://nodejs.org/), and [Git](https://help.github.com/articles/set-up-git). If you're on a Mac, Ruby should already be installed.

### Installation

1. Download, install, and update the latest version of [Wordpress](http://wordpress.org/download/).
2. Clone this repository into `/wp-content/themes/` and activate the SpaceAdvocatesWebsite theme in the WordPress Dashboard.
3. Open the theme directory in terminal and run `npm install` to pull in all Grunt dependencies.
4. Run `grunt` to execute tasks.
5. Code as you will.

If you have the LiveReload browser extension, it will reload after any SCSS or JS changes. If you have Mac OS 10.8 (Mountain Lion) then you will receive desktop notifications when Grunt tasks run.

To optimize images, run `grunt imagemin`.

These tasks:
- Compile `assets/scss/style.scss` to `style.css` (all paths defined in config.rb for Compass)
- Concatenate and minify all plugins in `assets/js/vender` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Concatenate and minify all scripts in `assets/js/source` and `assets/js/source/main.js` to `assets/js/main.min.js`

### Deployment

The theme includes deployments via [grunt-rsync](https://github.com/jedrichards/grunt-rsync). The Gruntfile includes setups for staging and production - run `grunt rsync:staging` or `grunt rsync:production` to deploy your files via rsync.

### Structure

> **SpaceAdvocatesWebsite**
> 	**assets**
> 		**fonts**
> 		**images**
>  		**js**
> 			**source** - *Custom written project scripts*
> 			**vendor** - *3rd party plugins and librires*
>			**map** - *Contains source maps for minified asset files*
>			main.min.js - *Compiled source scripts*
>			plugins.min.js - *Compiled plugins*
> 		**scss**
> 			**layouts** - *Files for layouts and page specific styles*
> 			**libraries** - *Vendor libraries*
> 			**modules** - *Partial Sass files for page elements*
> 			_buttons.scss - *Button styles*
> 			_config.scss - *Sass configuration file for project variables*
> 			_fonts.scss - *Includes all font-face styles*
> 			_misc.scss - *Project styles*
> 			_mixins.scss - *Project mixins*
> 			_normalize.scss - *Normalize.css for font reset*
> 			style.scss - *Main file which includes all other partials. It's the only one that is compiled*
> 	**dumps** - *Sample WordPress database dumps used for development environments only. Not includeed in Production*
> 	**lib**
> 		[ WordPress Theme Library Files ]
> 	**templates**
> 		[ *WordPress Theme Content Template Files ]
> 	config.rb - *Compass configuration for Grunt tools*
> 	Gruntfile.js
> 	grunt-settings.json - *Used by Gruntfile.js to access user information*
> 	package.json
> 	README.md
> 	[ WordPress Theme Files ]

### Features

1. Normalized stylesheet for cross-browser compatibility using Normalize.css version 2 (IE8+ only)
2. Easy to customize
3. Flexible grid from [Chris Coyier](https://twitter.com/chriscoyier)
4. Media Queries for mobile and tablets ready to populate
5. Removed comments from pages
6. Compass & SCSS with plenty of mixins ready to go
7. Much much more

### Suggested Plugins

* [Fancier Author Box](http://wordpress.org/plugins/fancier-author-box/)
* [Wordpress Importer](http://wordpress.org/plugins/wordpress-importer/)

### Credits

* [Wordpress Starter Theme](https://github.com/mattbanks/WordPress-Starter-Theme)
* [HTML5 Boilerplate](http://html5boilerplate.com)
* [Normalize.css](http://necolas.github.com/normalize.css)
* [SASS / SCSS](http://sass-lang.com/)
* [Compass](http://compass-style.org)
* [Grunt](http://gruntjs.com/)
