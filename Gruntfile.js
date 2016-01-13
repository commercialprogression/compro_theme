
module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      images: {
        files: ['images/source/*.{png,jpg,gif}'],
        tasks: ['newer:imagemin']
      },

      sprites: {
        files: ['images/sprites//*.{svg,png}'],
        tasks: ['svg_sprite', 'sprite']
      },
      
      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass']
      },

      templates: {
        files: 'templates/**/*.tpl.php',
        tasks: ['drush:cc_theme_registry']
      }
    },

    imagemin: {
      dist: {
        files: [{
          expand: true,
          cwd: 'images/source/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/optimized/'
        }]
      }
    },

    sass: {
      dist: {
        files: [{
          expand: true,
          cwd: 'sass/',
          src: ['**/*.scss'],
          dest: 'css/',
          ext: '.css'
        }]
      }
    },
    
    sprite: {
      dist: {
        src: 'images/sprites/*.png',
        dest: 'css/png/sprites.png',
        destCss: 'css/sprite-png.css',
        algorithm: 'top-down'
      }
    },
    
    svg_sprite: {
      dist: {
        expand: true,
        src: 'images/sprites/*.svg',
        dest: '',
        options: {
          mode: {
            css: {
              render: {
                css: {
                  dest: 'sprite-svg.css'
                }
              }
            }
          }
        }
      }
    },

    browserSync: {
      dist: {
        bsFiles: {
          src: ['css/*.css']
        },
        options: {
          watchTask: true,
          injectChanges: false
        }
      }
    },

    drush: {
      cc_theme_registry: {
        args: ['cc', 'theme-registry']
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-spritesmith');
  grunt.loadNpmTasks('grunt-svg-sprite');
  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-drush');

  grunt.registerTask('default', ['browserSync', 'watch']);

};
