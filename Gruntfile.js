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
              // ficheros coffee en el orden que queramos
              './js/coffee/riotcontrol.coffee',
              './js/coffee/store.coffee',
              './js/coffee/search.coffee',
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
            './js/lib/riot.min.js',
            '.tmp/tags.js', // los tags
            '.tmp/all_coffee.js', // todos los ficheros coffee
             ],
          dest: 'build/dyn-search.js',
        }
      },
      uglify: {
        default: {
          files: {
            'build/dyn-search.js': ['build/dyn-search.min.js'],
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

  grunt.registerTask('compile', ['coffee',  "riot" ,  "concat" ]); //por defecto
  grunt.registerTask('dist', [ "compile",  "uglify", "cssmin" ]); // grunt dist
  grunt.registerTask('default', ['compile']);
};