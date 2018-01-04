// styles loaders



require('../style/style.less');
require('highlight.js/styles/idea.css');



// js : 
require("bootstrap-webpack");

require("bootstrap-webpack!../bootstrap.config.js");
require('jquery-parallax.js');

var hljs = require('highlight.js');

$('div.code').each(function (i, block) {
    hljs.highlightBlock(block);
});
