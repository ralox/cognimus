module.exports =  {
	//compile sass down into individual css files
	dist: {
		files: [{
			expand: true,
			cwd: 'sass/',
			src: ['*.scss'],
			dest: 'css/local/',
			ext: '.css'
		}]
	}
};
