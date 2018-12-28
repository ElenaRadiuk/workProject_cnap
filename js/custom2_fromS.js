( function( $ ) {

	$( document ).ready(function( $ ) {

		// Implement go to top.
		var $scroll_obj = $( '#btn-scrollup' );
		if ( $scroll_obj.length > 0 ) {

			$( window ).scroll( function() {
				if ( $( this ).scrollTop() > 100 ) {
					$scroll_obj.fadeIn();
				} else {
					$scroll_obj.fadeOut();
				}
			});

			$scroll_obj.click( function() {
				$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
				return false;
			});
		}




        $('ul.tabs__caption').each(function() {
            $(this).find('li').each(function(i) {
                $(this).click(function(){
                    $(this).addClass('active').siblings().removeClass('active')
                        .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(i).addClass('active');
                });
            });
        });


        $('.toggle').click(function(e) {
            e.preventDefault();

            var $this = $(this);

            if ($this.next().hasClass('show')) {
                $this.next().removeClass('show');
                $this.next().slideUp(350);
            } else {
                $this.parent().parent().find('li .inner').removeClass('show');
                $this.parent().parent().find('li .inner').slideUp(350);
                $this.next().toggleClass('show');
                $this.next().slideToggle(350);
            }
        });

	});

} )( jQuery );


( function( $ ) {

    var target = window.location.hash,
        target = target.replace('#', '');

    // delete hash so the page won't scroll to it
    window.location.hash = "";

    // now whenever you are ready do whatever you want
    // (in this case I use jQuery to scroll to the tag after the page has loaded)
    $(window).on('load', function() {
        if (target) {
            $('html, body').animate({
                scrollTop: $("#" + target).offset().top
            }, 700, 'swing', function () {});
        }
    });
} )( jQuery );
