SA.pageFunctionsMap = {
	'page-home': 'Home',
	'page-join': 'Join',
	'page-donate': 'Donate'
};

$(function(){

	/* Load in the specific javascript page module
	 *
	 * This plugin iterates through the class string on the document body, finds a value
	 * which exists in the pageFunctionsMap property of the current namespace, and initializes
	 * that module.
	 */
	(function () {
		for(var i = 0, classes = document.body.className.split(' '); i < classes.length; i++) {
			if(classes[i] in this.pageFunctionsMap) {
				var functionName = this.pageFunctionsMap[classes[i]];
				(new this[functionName]()).init();
			}
		}
	}).apply(SA);

});