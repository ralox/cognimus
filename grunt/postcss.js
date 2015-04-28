module.exports = {
	options: {
      		processors: [
        		require('autoprefixer-core')({browsers: 'last 2 version'}).postcss,
        		require('csswring').postcss
      		]
    	},
    	dist: {
      		src: 'css/build/master.css'
    	}
};
