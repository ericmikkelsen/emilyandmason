module.exports = {
  plugins: [
		require('postcss-import')(),
		require("postcss-css-variables")({
			preserve: true
		}),
		require('cssnano')({
			preset: 'default'
		}),
		require('postcss-hash')({
				algorithm: 'sha256',
				trim: 20,
				manifest: '../../css/manifest.css.json'
		}),
  ]
}
