module.exports = {
	//combine all javascript into one "master" file
	js: {
		src: ['js/*.js'],
		dest: 'js/build/master.js'
	},
	//combine all css into one "master" file
	css: {
		src: ['css/local/*.css'],
		dest: 'css/local/build/master.css'
	}
};
