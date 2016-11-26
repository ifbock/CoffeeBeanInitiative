;(function($, window, document, undefined) {

	$(document).ready(function(){

		var $body = $('body'),
			prefix = 'plugin-updater';

		if ( $('div.' + prefix + '-overlay').length == 0 ) {
			$body.append( '<div class="' + prefix + '-overlay" />' );
		}
		if ( $('div.' + prefix + '-alert').length == 0 ) {
			$body.append( '<div class="' + prefix + '-alert" />' );
		}
		if ( $('div.' + prefix + '').length == 0 ) {
			$body.append( '<div class="' + prefix + '-dialog" />' );
		}
		
		var $pluginAlert = $('.' + prefix + '-alert'),
			$pluginOverlay = $('.' + prefix + '-overlay'),
			$pluginDialog = $('.' + prefix + '-dialog');

		/**
		 * Hide Overlay
		 */
		$body.on('click', '.' + prefix + '-overlay', function(){
			$('.' + prefix + '-overlay, .' + prefix + '-dialog').fadeOut(500, function(){
				var $iframe = $pluginDialog.find('iframe');
				if ( $iframe.length > 0 ) {
					$iframe.remove();
				}
				$pluginOverlay.removeClass('show-changelog');
			});
		});

		/**
		 * Update
		 */
		$('.themify-upgrade-plugin').on('click', function(e){
			e.preventDefault();
			var $self = $(this),
				url = $self.attr('href');

			e.preventDefault();

			if ( reply = confirm( themify_plugin_updater.confirmUpdate ) ) {
				window.location = url + '&login=false';
			}
		});

		/**
		 * Changelogs
		 */
		$('.themify-changelogs').on('click', function(e){
			e.preventDefault();
			var $self = $(this),
				url = $self.data('changelog'),
				$iframe = $('<iframe src="'+url+'" />');

			$pluginAlert.addClass('busy').fadeIn(300);
			$pluginOverlay.fadeIn(300);
			$pluginDialog.fadeIn(300);
			
			$iframe.on('load', function(){
				$pluginAlert.removeClass('busy').fadeOut(300);
			}).prependTo( $pluginDialog );

			$pluginDialog.addClass('show-changelog');
		});
	});

}(jQuery, window, document));