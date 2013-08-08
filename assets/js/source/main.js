// GET https://www.googleapis.com/youtube/v3/videos
// GET https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=UUHWBRuQtDWvYqPdaGzkGjLA&key={YOUR_API_KEY}

$(function(){

	if($('body').hasClass('page-home')) {
		$('.card + .drawer h1').dotdotdot({
			watch: 'window'
		});
	}

	//console.log(Search.getName());
});