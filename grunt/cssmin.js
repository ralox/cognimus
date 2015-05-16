module.exports = { 
	//minify the master.css file
	options: {
		shorthandCompacting: false,
		roundingPrecision: -1
	},
	target: {
		files: [{
			src: ['css/local/build/master.css'],
			dest: 'css/local/build/master.min.css'
		}]
	}
};
