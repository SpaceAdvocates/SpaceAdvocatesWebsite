// GET https://www.googleapis.com/youtube/v3/videos

$(function(){
	//window.addEventListener('resize', resizeTablet, false);
});

function resizeTablet(event) {
	if( $(window).width() >= 768 && $(window).width() <= 800 ) {
        $('#featured .columns').removeClass( 'small-1' ).addClass( 'small-2' );
    } else {
        $('section#main').removeClass( 'eleven' ).addClass( 'eight' );
        $('section#sidebar').removeClass( 'hide' ).addClass( 'hide-for-small' );
    }
}