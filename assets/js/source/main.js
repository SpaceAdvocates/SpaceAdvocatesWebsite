// GET https://www.googleapis.com/youtube/v3/videos
// GET https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=UUHWBRuQtDWvYqPdaGzkGjLA&key={YOUR_API_KEY}

$(function(){

	if($('body').hasClass('page-home')) {
		$('.card + .drawer h1').dotdotdot({
			watch: 'window'
		});
	}

	$('[data-match-height]').each(function() {
		var parentRow = $(this),
		 childrenCols = parentRow.find('[data-height-watch]'),
		 childHeights = childrenCols.map(function(){ return parentRow.height(); }).get(),
		 tallestChild = Math.max.apply(Math, childHeights);

		childrenCols.css('min-height', tallestChild);
	});
});