SA.Donate = function () {
	return this;
};

SA.Donate.prototype.init = function () {
	// Force even height on container elements on the Contact page
	$('[data-match-height]').each(function() {
		var parentRow = $(this),
		 childrenCols = parentRow.find('[data-height-watch]'),
		 childHeights = childrenCols.map(function(){ return parentRow.height(); }).get(),
		 tallestChild = Math.max.apply(Math, childHeights);

		childrenCols.css('min-height', tallestChild);
	});
};