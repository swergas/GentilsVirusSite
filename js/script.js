$(function() {
	
	$( ".accordion" ).accordion( { collapsible: true, active: false, heightStyle: "content" } );

	$(".quick_explanation_video_form").on('submit', function(e)
	{
		var video_url = $('.quick_explanation_video_form .quick_explanation_video_time_value').val();
		window.open(video_url);
		return false;
	});
});
