# Require any additional compass plugins here.
# https://github.com/zurb/foundation
require 'zurb-foundation'

# Sass Globbing
# https://github.com/chriseppstein/sass-globbing
require 'sass-globbing'

# Compass Placeholder
# https://github.com/tinganho/compass-placeholder
require 'compass-placeholder'

# Spens Compass/Sass Library
# https://github.com/josephspens/spens
require 'spens'

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "/"
sass_dir = "assets/scss"
images_dir = "assets/images"
javascripts_dir = "assets/js"
fonts_dir = "assets/fonts"

output_style = :compressed

relative_assets = true

line_comments = false
color_output = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass assets/scss scss && rm -rf sass && mv scss sass
preferred_syntax = :scss
