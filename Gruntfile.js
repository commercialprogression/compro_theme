
module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      images: {
        files: ['images/source/*.{png,jpg,gif}'],
        tasks: ['newer:imagemin']
      },

      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass']
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

    browserSync: {
      dev: {
        bsFiles: {
          src: ['css/*.css']
        },
        options: {
          watchTask: true,
          injectChanges: false
        }
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');

  grunt.registerTask('default', ['browserSync', 'watch']);

};
