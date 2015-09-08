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

  riot.parsers.css.less = function (tagName, css){

    console.log('CSS', css);
    // <style type="text/less" scoped>

    var output  = '';
    var options = {sync: true, compress: true, paths: ['.']};

    require('less').render (css, options, function (err, result){
      // console.log('result', result);
      // console.log('err', err);
      output = result.css;
    });

    console.log('OUTPUT', output);

    return output;
  };

  var config = {
    basePath: '/',
  };

  try {
    config = grunt.file.readJSON( "config.json");
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
              './js/coffee/riotcontrol.coffee',
              './js/coffee/store.coffee',
              './js/coffee/main.coffee',
            ]
        }
      },
    },
    // supercomponents from this project
    riot: {
        options: {
          concat: true
        },
        task: {
          src: [
            './js/tags/*.tag',
            // xstrap components
              './xstrap/icomoon/tags/*.tag',  //xstrap-icomoon
              './xstrap/button/tags/*.tag',   //xstrap-button
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
              // './xstrap/dropdowns/js/dropdown.js',    // dropdown
              // './xstrap/scrollspy/js/scrollspy.js',   // scrollspy
              // './xstrap/affix/js/affix.js',           // affix
              // './xstrap/tooltips/js/tooltip.js',      // tooltip
              // './xstrap/popovers/js/popover.js',      // popover
              // './xstrap/forms/js/forms.js',           // forms
              // './xstrap/datepicker/js/datepicker.js', // datepicker
              // './xstrap/typeahead/js/typeahead.js',   // typeahead
            // tags
            '.tmp/tags.js',
            // all coffee files compiled
            '.tmp/all_coffee.js',
          ],
          dest: 'build/app.js',
        }
      },
      uglify: {
        default: {
          files: {
            'build/app.js': ['build/app.min.js'],
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

  grunt.registerTask('compile', ['coffee', 'riot', 'concat']);    //por defecto
  grunt.registerTask('dist',    ['compile', 'uglify', 'cssmin']); // grunt dist
  grunt.registerTask('default', ['compile']);
};