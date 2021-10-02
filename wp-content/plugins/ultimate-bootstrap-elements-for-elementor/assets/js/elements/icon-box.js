(function ($) {
	'use strict';
	var UbeIconBoxHandler = function( $scope, $ ) {
		var $elements = $scope.find('[data-vivus]');
		if ($elements.length === 0) {
			return;
		}
		$elements.each(function ($index, element) {
			var $element = $(element);
			elementorFrontend.waypoint( $element, function() {
				var settings = $element.data( 'vivus' );
				var $icon = $element.find( '.elementor-icon' );
				if ( settings) {
					if ($icon.length > 0) {
						var $svg = $icon.children('svg').not('.svg-defs-gradient');
						if ($svg.length === 0) {
							return;
						}

						var options = {
							type: settings.type,
							duration: settings.duration,
							animTimingFunction: Vivus.EASE_OUT
						};
						if (vivus) {
							vivus.destroy();
						}

						var vivus = new Vivus($svg[0], options);

						if ('yes' === settings.play_on_hover) {
							var $wrap = $element.closest('.ube-icon-box-wrapper');
							$wrap.hover(function () {
								vivus.stop()
									.reset()
									.play(2);
							}, function () {
								//vivus.finish();
							});
						}
					}
				}
			} );
		});


	};
	$( window ).on( 'elementor/frontend/init', function() {
		elementorFrontend.hooks.addAction( 'frontend/element_ready/ube-icon-box.default', UbeIconBoxHandler );
		elementorFrontend.hooks.addAction( 'frontend/element_ready/ube-advanced-icon-box.default', UbeIconBoxHandler );
	} );
})(jQuery);