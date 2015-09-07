module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-riot');
  grunt.loadNpmTasks('grunt-concat-css');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-string-replace');

  var config = {
    basePath: '/',
  };

  try {

    config = grunt.file.readJSON( "config.json");
  }catch(err){}

  // console.log(config);

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
              './js/coffee/main.coffee'
              // './js/coffee/riotcontrol.coffee',
              // './js/coffee/store.coffee',
              // './js/coffee/search.coffee',
            ]
        }
      },
    },
    // riot
    riot: {
        options: {
          concat: true
        },
        task: {
          src: [
            './js/tags/*.tag',
            ],
          dest: '.tmp/tags.js',
        }
    },
    // concatenar los ficheros js
    concat: {
        options: {
          separator: ';',
        },
        // unimos los ficheros compilados
        dist: {
          src: [
            // libs
            './js/lib/jquery.js', // [v < 2]
            './js/lib/riot.min.js',
            // xstrap components
              './xstrap/dropdowns/js/dropdown.js',    // dropdown
              './xstrap/scrollspy/js/scrollspy.js',   // scrollspy
              './xstrap/affix/js/affix.js',           // affix
              './xstrap/tooltips/js/tooltip.js',      // tooltip
              './xstrap/popovers/js/popover.js',      // popover
              './xstrap/forms/js/forms.js',           // forms
              './xstrap/datepicker/js/datepicker.js', // datepicker
              './xstrap/typeahead/js/typeahead.js',   // typeahead
            // tags
            '.tmp/tags.js',
            // all coffee files compiled
            '.tmp/all_coffee.js',
          ],
          dest: 'build/dist.js',
        }
      },
      uglify: {
        default: {
          files: {
            'build/dist.js': ['build/dist.min.js'],
          }
        }
      },
      // ficheros a observar que lanzarán la función default (varias)
      watch: {
        scripts: {
          files: [
            './js/coffee/*.coffee',
            './js/tags/*.tag',
          ],
          tasks: [ 'compile'],
          options: {
            interrupt: false ,
          }
        }
      }
  });

  grunt.registerTask('compile', ['coffee', "riot" , "concat" ]); //por defecto
  grunt.registerTask('dist',    [ "compile", "uglify", "cssmin" ]); // grunt dist
  grunt.registerTask('default', ['compile']);
};