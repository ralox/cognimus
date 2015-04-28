module.exports = { 
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
};
