
window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');
	require('sass-semantic-ui');
} catch (e) {}
