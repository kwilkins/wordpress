var API_STREAMS = 'https://api.twitch.tv/kraken/streams/',
	CLIENT_ID = 'd5sdza2z6noa17hkgvgmr0kjqdy84fb',
	STREAM_INFO = ['game', 'channel.status'];
(function($) {	
	$(document).ready(function($) {
		init();
		callStreamAPI();
	});
	
	var init = function() {
		$('.twitch-status').children().hide();
	};
	
	var callStreamAPI = function() {
		var twitchStatus = $('.twitch-status');
		var channelName = twitchStatus.attr('id');
	
		$.ajax({
			dataType: 'jsonp',
			data: '?client_id='+CLIENT_ID,
			url: API_STREAMS+channelName,
			success: function(data) {
				if (data.stream) {
					addStreamInfo(twitchStatus, data.stream);
					twitchStatus.find('.twitch-live').show();
				} else {
					twitchStatus.find('.twitch-offline').show();
				}
			}
		});
	};
	
	var addStreamInfo = function(twitchStatus, streamJSON) {
		$.each(STREAM_INFO, function(index, element) {
			if (twitchStatus.find('.twitch-live').text().indexOf('{'+element+'}') > -1) {
				twitchStatus.find('.twitch-live').html(function(index, text) {
					var result = text.replace('{'+element+'}', streamJSON[element]);
					if (true) {
						result = $('<a href="http://twitch.tv/'+twitchStatus.attr('id')+'" target="_blank">').text(result);
					}
					return result;
				});
			}
		});
	};
})(jQuery);