module.exports = function(grunt) {
	require('time-grunt')(grunt);
	require('load-grunt-config')(grunt);
};

/*
		//All configuration goes here 
		grunt.initConfig({
			pkg: grunt.file.readJSON('package.json'),

				concat: {
			//combine all javascript into one "master" file
			js: {
				src: ['js/*.js'],
				dest: 'js/build/master.js'
			},
			//combine all css into one "master" file
			css: {
				src: ['css/*.css'],
				dest: 'css/build/master.css'
			}
				},

		uglify: {
			//minify the master.js file
			build: {
				src: ['js/build/master.js'],
				dest: 'js/build/master.min.js'
			}
		},
		
		imagemin: {
			//smoosh those mofo images
			dynamic: {
				files: [{
					expand: true,
					cwd: 'img/',
					src: ['*.{png,jpg,gif}'],
					dest: 'img/optimized/'
				}]
			}
		},

		sass: {
			//compile sass down into individual css files
			dist: {
				files: [{
					expand: true,
					cwd: 'sass/',
					src: ['*.scss'],
					dest: '../css/',
					ext: '.css'
				}]
			}
		},

		cssmin: {
			//minify the master.css file
			options: {
				shorthandCompacting: false,
				roundingPrecision: -1
			},
			target: {
				files: [{
					src: ['css/build/master.css'],
					dest: 'css/build/master.min.css'
				}]
			}
		},

		watch: {
			//update changes on-the-fly
			options: {
				livereload: true,
			},
			scripts: {
				files: ['js/*.js'],
				tasks: ['concat:js','uglify'],
				options: {
					spawn: false,
				},
			},
			styles: {

				files: ['sass/*.scss'],
				tasks: ['sass','concat:css','cssmin'],
				options: {
					spawn: false,
				}
			}
		}
		
	
	});


	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['concat:js','concat:css','uglify','imagemin','sass','cssmin']);
};
*/
