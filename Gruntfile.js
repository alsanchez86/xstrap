module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-concat-css');
  // grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-string-replace');

  var config = {
    basePath: '/',
  };

  try {
    config = grunt.file.readJSON("config.json");
  }catch (err){

  }

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    coffee: {
      compile: {
        options: {
          bare: true,
        },
        files: {
          '.tmp/all_coffee.js': [
              // Coffee files
              './js/coffee/main.coffee',
            ]
        }
      },
    },
    // concatenar los ficheros js
    concat: {
        options: {
          separator: ';',
        },
        // unimos los ficheros compilados
        dist: {
          src: [
            // lib
            './lib/js/jquery.js', // [v < 2]
            // xstrap components
              './xstrap/dropdowns/js/dropdown.js',    // dropdown
              './xstrap/scrollspy/js/scrollspy.js',   // scrollspy
              './xstrap/affix/js/affix.js',           // affix
              './xstrap/tooltips/js/tooltip.js',      // tooltip
              './xstrap/popovers/js/popover.js',      // popover
              './xstrap/forms/js/forms.js',           // forms
              './xstrap/datepicker/js/datepicker.js', // datepicker
              './xstrap/typeahead/js/typeahead.js',   // typeahead

              // './xstrap/lazy-sizes/js/lazysizes.min.js',   // lazy sizes
            // all coffee files compiled
            '.tmp/all_coffee.js',
          ],
          dest: './build/js/app.js',
        }
      },

      /*less: {
        xstrap: {
          options: {
            paths: [ ],
            plugins: [
              new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]})
            ],
            modifyVars: {
              imgPath: '',
              bgColor: ''
            }
          },
          files: {
            "./build/css/main.css": "./css/less/main.less"
          }
        }
      },*/

      cssmin: {
        target: {
          files: [{
            expand: true,
            cwd: './build/css',
            src: ['*.css', '!*.min.css'],
            dest: './build/css',
            ext: '.min.css'
          }]
        }
      },

      uglify: {
        options: {
          mangle: true
        },
        my_target: {
          files: {
            './build/js/app.min.js': ['./build/js/app.js']
          }
        }
      },

      // ficheros a observar que lanzarán la función default (varias)
      watch: {
        scripts: {
          files: [
            // './css/less/*.less', // main.less
            './js/coffee/*.coffee' // main.coffee
          ],
          tasks: ['default'],
          options: {
            interrupt: false ,
          }
        }
      }
  });

  grunt.registerTask('dev',     ["coffee", /*"less",*/ "concat"]);
  grunt.registerTask('prod',    ["dev", "uglify", "cssmin"]);
  grunt.registerTask('default', ["prod"]);
};