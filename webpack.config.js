/**
 * Webpack configuration.
 */

const path                 = require( "path" );
const MiniCssExtractPlugin = require( "mini-css-extract-plugin" );
const CssMinimizerPlugin   = require( "css-minimizer-webpack-plugin" );
const { CleanWebpackPlugin }            = require( "clean-webpack-plugin" );
const TerserJsPlugin                    = require( "terser-webpack-plugin" );
const CopyPlugin                        = require( "copy-webpack-plugin" );
const DependencyExtractionWebpackPlugin = require( "@wordpress/dependency-extraction-webpack-plugin" );

const JS_DIR  = path.resolve( __dirname, "assets/src/js" );
const IMG_DIR = path.resolve( __dirname, "assets/src/img" );
// const LIB_DIR = path.resolve(__dirname, "src/lib");
const BUILD_DIR = path.resolve( __dirname, "assets/build" );

const entry = {
	main: JS_DIR + "/main.js",
	menu: JS_DIR + "/menu.js",
};

const output = {
	path: BUILD_DIR,
	filename: "js/[name].js",
};

const plugins = (argv) => [
new CleanWebpackPlugin(
	{
		cleanStaleWebpackAssets: "production" === argv.mode,
	}
),

new MiniCssExtractPlugin(
	{
		filename: "css/[name].css",
	}
),

  /*new CopyPlugin({
	patterns: [{ from: LIB_DIR, to: BUILD_DIR + "/library" }],
  }), */

new DependencyExtractionWebpackPlugin(
	{
		injectPolyfill: true,
		combineAssets: true,
	}
),
];

const rules = [
  {
		test: /\.js$/,
		include: [JS_DIR],
		exclude: /node_modules/,
		use: "babel-loader",
	},
	{
		test: /\.scss$/,
		exclude: /node_modules/,
		use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
	},
	{
		test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
		use: {
			loader: "file-loader",
			options: {
				name: "[path][name].[ext]",
				publicPath: "production" === process.env.NODE_ENV ? "../" : "../../",
			},
		},
	},
	{
		test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
		exclude: [IMG_DIR, /node_modules/],
		use: {
			loader: "file-loader",
			options: {
				name: "[path][name].[ext]",
				publicPath: "production" === process.env.NODE_ENV ? "../" : "../../",
			},
		},
	},
	];

	module.exports = (env, argv) => ({
		entry: entry,
		output: output,
		devtool: "source-map",

		module: {
			rules: rules,
		},

		optimization: {
			minimizer: [new CssMinimizerPlugin(), new TerserJsPlugin()],
			minimize: true,
		},

		plugins: plugins( argv ),

		externals: {
			jquery: "jQuery",
		},
	});
