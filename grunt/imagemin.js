module.exports = {
	//smoosh those mofo images
	dynamic: {
		files: [{
			expand: true,
			cwd: 'img/',
			src: ['*.{png,jpg,gif}'],
			dest: 'img/optimized/'
		}]
	}
};
