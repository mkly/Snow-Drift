module.exports = function(grunt) {

  grunt.initConfig({
    bower: {
      install: {
        options: {
          verbose: true,
          copy: false,
          bowerOptions: {
            production: true,
          },
          cleanTargetDir: true
        }
      }
    },

    copy: {
      bower: {
        expand: true,
        cwd: 'bower_components/bootstrap/',
        src: ['less/**'],
        dest: 'dist/snow_drift/themes/snow_drift/css/build/bootstrap/'
      }
    }
  });

  grunt.loadNpmTasks('grunt-bower-task');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('install:bootstrap', ['bower:install', 'copy:bower']);

};
