var yeoman = require('yeoman-generator');
var path = require('path');

/**
 * Taiga Boilerplate scaffolder.
 *
 * ```
 * $ yo taiga APP_NAME
 * ```
 *
 * Creates directory APP_NAME with all taiga boilerplate files in it.
 */
module.exports = yeoman.generators.NamedBase.extend({
	constructor: function () {
		yeoman.generators.NamedBase.apply(this, arguments);
	},

	setup: function() {
		/**
		 * Set the destination root, where the files will be copied to, to the name argument from the command.
		 */
		this.destinationRoot(this.name);

		/**
		 * Sets the source root, where the files are copied from, to the root directory of the project.
		 */
		this.sourceRoot(path.join(this.sourceRoot(), '..', '..', '..'));
	},

	scaffoldFolders: function() {
		this.mkdir('fonts');
		this.mkdir('images');
		this.mkdir('media');
		this.mkdir('scripts');
	},

	scaffoldStylesheets: function() {
		this.directory('stylesheets', 'stylesheets');
	},

	scaffoldFiles: function() {
		this.copy('.gitignore', '.gitignore');
		this.copy('apple-icon.png', 'apple-icon.png');
		this.copy('favicon.ico', 'favicon.ico');
		this.copy('index.html', 'index.html');
		this.copy('robots.txt', 'robots.txt');
		this.copy('windows-icon.png', 'windows-icon.png');
	}
});
