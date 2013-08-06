/* jshint globalstrict: true, camelcase: false */
/* global module, require */
'use strict';

module.exports = function(grunt) {

    // load all grunt tasks
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        // settings information
        settings: grunt.file.readJSON('grunt-settings.json'),

        // watch for changes and trigger compass, jshint, uglify and livereload
        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: ['assets/scss/**/*.{scss,sass}'],
                tasks: ['compass', 'growl:css']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify', 'growl:js']
            },
            livereload: {
                options: { livereload: true },
                files: ['style.css', 'assets/js/*.js', '*.html', '*.php', 'assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
            }
        },

        // compass and scss
        compass: {
            dist: {
                options: {
                    config: 'config.rb',
                    force: true
                }
            }
        },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: [
                'Gruntfile.js',
                'assets/js/source/**/*.js'
            ]
        },

        // uglify to concat, minify, and make source maps
        uglify: {
            plugins: {
                options: {
                    sourceMap: 'assets/js/map/source-map-plugins.js.map'
                },
                files: {
                    'assets/js/plugins.min.js': [
                        '!assets/js/vendor/modernizr*.js',
                        '!assets/js/vendor/jquery*.js',
                        'assets/js/source/plugins.js',
                        'assets/js/vendor/**/*.js'
                    ]
                }
            },
            main: {
                options: {
                    sourceMap: 'assets/js/map/source-map-main.js.map'
                },
                files: {
                    'assets/js/main.min.js': [
                        'assets/js/source/**/*.js',
                        'assets/js/source/main.js'
                    ]
                }
            }
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images/',
                    src: '**/*',
                    dest: 'assets/images/'
                }]
            }
        },

        // deploy via rsync
        deploy: {
            staging: {
                src: './',
                dest: '~/www/dev1/wp-content/themes/spaceadvocates',
                host: '<%- settings.host %>',
                recursive: true,
                syncDest: true,
                exclude: [
                    '.git*',
                    'node_modules',
                    '.sass-cache',
                    'Gruntfile.js',
                    'package.json',
                    '.DS_Store',
                    'README.md',
                    'config.rb',
                    '.jshintrc',
                    'grunt-settings.json'
                ]
            },
            production: {
                src: './',
                dest: '~/path/to/theme',
                host: '<%= rsync.staging.host %>',
                recursive: true,
                syncDest: true,
                exclude: '<%= rsync.staging.exclude %>'
            }
        },

        // fire desktop notifications when grunt events have fired
        growl: {
            css: {
                title: 'CSS Complete',
                message: 'Compass has finished running.',
                image: 'Safari'
            },
            js: {
                title: 'JS Complete',
                message: 'JSHint and Uglify have finished running.',
                image: './assets/images/icon-grunt.png'
            }
        }

    });

    // rename tasks
    grunt.renameTask('rsync', 'deploy');

    // register task
    grunt.registerTask('default', ['watch']);

};
