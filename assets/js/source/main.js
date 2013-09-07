SA.pageFunctionsMap = {
	'page-home': 'Home',
	'page-join': 'Join',
	'page-donate': 'Donate',
	'page-contact-us': 'Contact',
	'page-faq': 'FAQ'
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

	// Force even height on container elements on the Contact page
	$('[data-match-height]').each(function() {
		var parentRow = $(this),
		 childrenCols = parentRow.find('[data-height-watch]'),
		 childHeights = childrenCols.map(function(){ return parentRow.height(); }).get(),
		 tallestChild = Math.max.apply(Math, childHeights);

		childrenCols.css('min-height', tallestChild);
	});

	$('#tag_cloud-2').removeClass('small-6');

});