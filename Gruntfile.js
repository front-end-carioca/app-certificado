module.exports = function( grunt ) {
  grunt.initConfig({
   	uglify: {
   		my_target: {
   			files: {
   				// arquivos de origem e destino minificados
   				'assets/js/script.min.js' : ['script/script.js']
          }
   		}
   	},// uglify

   	sass: {
   		dist: {
        options : { style : 'compressed' },
   			files: {
   				// arquivos de origem e destino compilador SASS to CSS
   			    'assets/css/style.min.css' : 'sass/style.sass',
            'assets/css/mpdf.min.css' : 'sass/mpdf.sass',
   			}
   		}
   	}, // sass

   	watch : {
        dist : {
          files : [
            'script/**/*',
            'sass/**/*'
          ],
          
          options: {
        		reload: true
      	},

          tasks : [ 'uglify', 'sass' ]
        }
      } // watch

  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['uglify', 'sass']);
  grunt.registerTask( 'w', [ 'watch' ] );
};