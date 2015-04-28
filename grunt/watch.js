module.exports = {
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
};
